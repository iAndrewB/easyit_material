function showRegisterForm() {
    $('.loginBox').fadeOut('fast', function () {
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast', function () {
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('easyIT - Register');
    });
    $('.error').removeClass('alert alert-danger').html('');

}

function showLoginForm() {
    $('#loginModal .registerBox').fadeOut('fast', function () {
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast', function () {
            $('.login-footer').fadeIn('fast');
        });

        $('.modal-title').html('easyIT - Login');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal() {
    showLoginForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);
}

function openRegisterModal() {
    showRegisterForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}
$('#loginUser').on('click', function () {
    $.ajax({
        //Define server side authentication function
        url: "assets/php/includes/login/userLogin.php",
        type: "POST",
        dataType: "json",
        data: {
            loginUsername: $("#loginUsername").val(),
            loginPassword: $("#loginPassword").val()
        },
        success: function (resposta) {
            if (resposta === "trueAdmin") {
                window.location.href = 'dashboard.php';
            } else if (resposta === "trueUser") {
                window.location.href = 'index.php';
            } else if (resposta === "false") {
                shakeModal();
            }
        },
        error: function (xhr, status, error) {
        }
    });
});
$('#registerUser').on('click', function () {
    $.ajax({
        url: "assets/php/includes/login/createUser.php",
        type: "POST",
        dataType: "json",
        data: {
            registerUsername: $("#registerUsername").val(),
            registerName: $("#registerName").val(),
            registerPassword: $("#registerPassword").val(),
            registerPasswordConfirmation: $("#registerPasswordConfirmation").val(),
        },
        success: function (resposta) {
            if (resposta === "true") {
                openLoginModal();
            }
            else{
                shakeModal2();
            }
        },
        error: function (xhr, status, error) {
            
        }
    });
});

function shakeModal() {
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("Invalid username/password combination");
    $('input[type="password"]').val('');
    setTimeout(function () {
        $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000);
}
function shakeModal2() {
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("Fill all the fields/username already taken");
    $('input[type="password"]').val('');
    setTimeout(function () {
        $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000);
}

