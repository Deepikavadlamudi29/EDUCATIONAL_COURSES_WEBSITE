<html>
    <head>
        <title>Registration Page</title>
        <style>
            body{
                
                color:rgb(20, 20, 20);
                display:grid;
                justify-content: center;
                align-items: center;
                background-color:white;
                
            
        }  

            div{
                height: 450px;
                width: 380px;
                border: 1px solid black;
                box-shadow: 2px 2px 30px #ff7200;
                background-color: black;
                color: #ff7200;
            }

            .btn {
                color:rgb(250, 75, 75);
                padding: 2px 10px;
                border: 1.5px solid rgb(250, 74, 74);
                background-color: transparent;
            }

            .btn:hover {
                background-color: rgb(32, 21, 21);
                color:rgb(240, 240, 253);
                border: 1.5px solid rgb(17, 17, 23);
            }
            label{
                color: #ff7200;
            }

        </style>

        <script>
            function validate(){
                var name = document.Myform.name.value;
                var email = document.Myform.email.value;
                var phonenumber = document.Myform.phonenumber.value;
                var password = document.Myform.password.value;
                var password2 = document.Myform.password2.value;
                var graduation = document.Myform.graduation.value;
                var re = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;

                if(name==""){
                    alert("Name cannot be empty");
                }
                else if(!re.test(email)){
                    alert("Invalid Email");
                }

                else if(phonenumber.toString().length<10){
                    alert("Phone number is incorrect");
                }

                else if(password.length < 6){
                    alert("Invalid Password");
                }

                else if(password != password2){
                    alert("Both the password must be the same");
                }
                else if(graduation.toString().length<10){
                    alert("Graduation nu is incorrect");
               }
            }
        </script>
    </head>
    <body>
        <div>
            <h1 align="center">Registration Page</h1>
            <form name="Myform" action="registerbackend.php" method="post">
                <table align="center" cellpadding="10">
                    <tr>
                        <td>
                            <label for="name">Name : </label>
                        </td>
                        <td>
                            <input type="text" id="name" name="name">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="email">Email : </label>
                        </td>
                        <td>
                            <input type="text" id="email" name="email">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label for="mobilenumber"> MobileNumber: </label> : 
                        </td>
                        <td>
                            <input type="number" id="mobilenumber" name="mobilenumber">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password : </label>
                        </td>
                        <td>
                            <input type="password" id="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password2">Confirm Password : </label>
                        </td>
                        <td>
                            <input type="password" id="password2" name="password2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="graduation">Graduation Year:</label>
                        </td>
                        <td>
                            <input type="number" id="graduation" name="graduation">
                        </td>
                    </tr>
                    

                    <tr>
                        <td>
                            <input class="btn" type="submit" id="submit" name="submit" value="Register" onclick="validate()">
                        </td>
                        <td>
                            <button class="btn" formaction="loginpage.php">Already have an account?</button>
                        </td>
                    </tr>  
                </table>
            </form>
        </div>
    </body>
</html>
