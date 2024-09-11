
<?php
session_start();

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    
    $sql = "select email,password from user where email=? and password=?";

    $email = $_POST["email"];
    $password = $_POST["password"];

    $check = $conn -> prepare($sql);
    $check -> bind_param('ss',$email,$password);
    $check -> execute();

    if ($check -> fetch()) {
        echo "found";
        $_SESSION["email"]=$_POST["email"];
        $_SESSION["password"]=$_POST["password"];
        header("Location:index.php");
    }
    else {
        echo " <div class='alert alert-success'
                        role='alert'
                        <strong>incoorect email & password</strong>
                    </div> ";
    }
    
}




?>



<!doctype html>
<html lang="en">
    <head>
        <title>GYMASTER</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
           
            
        </header>
        <main>



        <div
            class="container-fluid login-box"
        >
            <div
                class="row justify-content-center align-items-center g-2"
            >

         
            
            <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="box">
                    <p class="text-center h3 mb-4 form-label">Sign Up</p>
                        <form action="" method="post">
                          
                       

                                <div class="mb-2">
                                    <label for="" class="form-label ">Email :</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        aria-describedby="emailHelpId"
                                        placeholder="abc@mail.com"
                                        Required
                                    />
                                  
                                </div>

                                <div class="mb-2">
                                    <label for="" class="form-label">Password :</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id="pass"
                                        placeholder="Enter Your password"
                                        Required
                                    />
                                </div>
                                
                                

                               <center> <button type="submit"  class="btn button my-2" onclick="return valid()">Sign In</button></center>
                                
                                
                                <hr>

                           <span class="bold">
                           <p class="text-center"> Don't Have An Account &nbsp;? &nbsp;
                                <a href="register.php" class="link-style">Sign Up</a>
                            </p>
                           </span>
                            
                        </form>
                    </div>
                </div>

           

               

                <!-- close div -->
            </div>
            
        </div>
        

                
          
            
        </main>
        <footer>
           
        </footer>



       
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>


        <script src="app.js"></script>
    </body>
</html>
