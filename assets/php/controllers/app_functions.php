<?php
// easyIT - André Barros

require("config.php");
require("connectDB.php");

function getNotifications() {
    global $connectDB;
    $notifications = $connectDB->query("SELECT notification_Id, notification_Text FROM app_notifications");
    while ($result = $notifications->fetch_assoc()) {
        echo "<li><a id='" . $result['notification_Id'] . "' href='#'>" . utf8_encode($result["notification_Text"]) . "</a></li>";
    }
}

function getNotificationsCount() {
    global $connectDB;
    $notifications       = $connectDB->query("SELECT notification_Id, notification_Text FROM app_notifications");
    $notifications_count = $notifications->num_rows;
    echo $notifications_count;
}

?>