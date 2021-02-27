$(document).ready(function(){

    $("#loginModal").modal({backdrop: 'static', keyboard: false });

    $("#loginModal").modal('show'); 


    $("#loginform").submit(function(event){
        event.preventDefault();
        
        var email = $("#email").val();
        var password = $("#password").val();
        var loginData = {Email : email, Password: password, Operation : "login"};

        $.post("server.php", loginData, function(data){

        $("#para").html(data);   

        });
    });
});