$.ajax({
    url: "home.php",    //the page containing php script
    type: "get",
    success: function (data) {
        if (data === "1") {
            window.location = 'login.html';
        }
    }
});

function logout(){
    $.ajax({
        url: "logout.php",    //the page containing php script
        type: "post",
        success: function (data) {
            console.log(data);
            if (data === "1") {
                window.location = 'login.html';
            }
        }
    });
}