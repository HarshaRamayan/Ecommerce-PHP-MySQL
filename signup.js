$(document).ready(function(){

    $("#signupModal").modal({backdrop: 'static', keyboard: false });

    $("#signupModal").modal('show');
    

    $("#signUpform").submit(function(event){
        event.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val()
        var password = $("#password").val();
        var retypepassword = $("#retypepassword").val();
        var loginData = {Name: name, Email: email, Phone: phone, Password: password, Operation: "signup"};

        if(retypepassword != password){
            $("#para").html("Password doesn't match");    
        }
        else{

            $.post("server.php", loginData, function(data){

            $("#signUpform").trigger("reset");
            $("#para").html(data);  
            });
            }
    
    });
});