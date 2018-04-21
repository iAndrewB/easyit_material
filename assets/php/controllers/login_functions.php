<?php
// easyIT - André Barros - drewvirtual.space

require("config.php");
require("connectDB.php");

function createUser() {
    global $connectDB;
    if (isset($_POST["registerUsername"]) && isset($_POST["registerName"]) && isset($_POST["registerPassword"]) && isset($_POST["registerPasswordConfirmation"])) {
        $username = htmlspecialchars($_POST["registerUsername"]);
        $name     = $_POST["registerName"];
        $pw1      = $_POST["registerPassword"];
        $pw2      = $_POST["registerPasswordConfirmation"];
        if ($pw1 === $pw2) {
            $password = password_hash($pw1, PASSWORD_DEFAULT);
            if ($connectDB->connect_error) {
                die("<p>Serviço indisponível. Por favor tente mais tarde</p>");
            }
            $inst = $connectDB->prepare("INSERT INTO app_users(user_Username, user_Name, user_Hash) VALUES(?, ?, ?)");
            $inst->bind_param("sss", $username, $name, $password);
            if ($inst->execute()) {
                echo json_encode("true");
            } else {
                echo json_encode("used");
            }
        } else {
            echo json_encode("errorpw");
        }
    } else {
        echo json_encode("false");
    }
}

function userLogin() {
    session_start();
    global $connectDB;
    if (isset($_POST["loginUsername"]) && isset($_POST["loginPassword"])) {
        if ($connectDB->connect_error) {
            http_response_code(503);
            die(json_encode("false"));
        }
        $username = htmlspecialchars($_POST["loginUsername"]);
        $inst     = $connectDB->prepare("SELECT user_Id, user_Hash, user_Username, user_Previleges FROM app_users WHERE user_Username=?");
        $inst->bind_param("s", $username);
        $inst->execute();
        $res = $inst->get_result();
        if ($res->num_rows === 0) {
            http_response_code(200);
            $connectDB->close();
            die(json_encode("false"));
        }
        $linha = $res->fetch_assoc();
        http_response_code(200);
        $connectDB->close();
        if (password_verify($_POST["loginPassword"], $linha["user_Hash"])) {
            if ($linha["user_Previleges"] === "1") {
                $_SESSION['userAuth'] = "Yes";
                $_SESSION['userID']   = $linha["user_Id"];
                $_SESSION['userType'] = "Admin";
                $_SESSION['userName'] = $linha["user_Username"];
                echo json_encode("trueAdmin");
            } else {
                $_SESSION['userAuth'] = "Yes";
                $_SESSION['userID']   = $linha["user_Id"];
                $_SESSION['userType'] = "User";
                $_SESSION['userName'] = $linha["user_Username"];
                echo json_encode("trueUser");
            }
        } else {
            echo json_encode("false");
        }
    } else {
        echo json_encode("false");
    }
}

function userLogout() {
    session_start();
    session_destroy();
    header("Location: ../../../../index.php");
}

function checkAuth() {
    if (($_SESSION['userType']) != "Admin") {
        header("Location: index.php");
        exit;
    }
}

function loginInfo() {
    echo "<a href='userSettings.php'>Logged as: " . $_SESSION['userName'] . "(" . $_SESSION['userID'] . ") in " . $_SESSION['userType'] . " mode.</a>";
}
?>