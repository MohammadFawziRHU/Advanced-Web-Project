$(document).ready(function(){
    function submitForm() {
        var  username = $('#lInput').val();
        var password = $('#lPassword').val();
        // Perform AJAX request to login.php
        $.ajax({
            type: "POST",
            url: "login.php",
            data: { username: username, password: password },
            success: function(response) {
                // Handle response from login.php
                if(response === 'success'){
                    // If authentication successful, redirect to index.php
                } else {
                    // If authentication fails, display error message
                    $("#errorMessage").html(response);
                    $("#errorMessage").show();
                    $('#lPassword').val("");
                    setTimeout(function(){$("#errorMessage").fadeOut()}, 5000);
                }
            }
        });
    }
    function submitRegister() {
        var  username = $('#rUser').val();
        var password = $('#rPassword').val();
        var  email = $('#rEmail').val();
        var name = $('#rName').val();
        var  lastName = $('#rLName').val();
        // Perform AJAX request to login.php
        $.ajax({
            type: "POST",
            url: "register.php",
            data: { username: username, password: password, fName: name, lName: lastName, email: email },
            success: function(response) {
                // Handle response from login.php
                if(response === 'success'){
                    // If authentication successful, redirect to index.php
                } else {
                    // If authentication fails, display error message
                    $("#rErrorMessage").html(response);
                    $("#rErrorMessage").show();
                    $('#rEmail').val("");
                    $('#rUser').val("");
                    setTimeout(function(){$("#rErrorMessage").fadeOut()}, 5000);
                }
            }
        });
    }






    // Attach event listener to form submission
    $('#loginForm').submit(function(event){
        event.preventDefault(); // Prevent default form submission
        submitForm(); // Call function to handle form submission
    });
      
      
          
      })


      function myMenuFunction() {
        var i = document.getElementById("navMenu");
        if(i.className === "nav-menu") {
            i.className += " responsive";
        } else {
            i.className = "nav-menu";
        }
       }
     
    
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        function login() {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
        }
        function register() {
            x.style.left = "-510px";
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
        }
      
      
      
      
       
      
      




    