function login() {
    $.ajax({
        url: "login.php",    //the page containing php script
        type: "post",
        data: $('#loginForm').serialize(),
        success: function (data) {
            if(data === "1") {
                window.location = 'home.html';
            }
        }
    });
}