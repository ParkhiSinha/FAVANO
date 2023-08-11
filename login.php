<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <style>
        body {
          background-image: url(assets/images/login_register.jpg);
          background-size: 1300px 600px;
        }
        .login-container {
          margin-top: 60px;
        }
        .was-validated {
          background-color: white;
          padding: 20px;
          border-radius: 4px;
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
          margin-bottom: 20px;
        }
        .form-group label {
          font-weight: bold;
        }
        .form-group input {
          width: 100%;
          padding: 10px;
          border: 1px solid #ced4da;
          border-radius: 4px;
        }
        .Favano{
          margin-top: 60px;
        }
      </style>
</head> 
<body>
    <div class="Favano"><h1 style="text-align: center;"><b>Favano Shop</b></h1></div>
    
    <div class="container">
        <div class="row">
          <div class="col-6 offset-3 login-container">
            <form class="was-validated" action="login_check.php" method="post">
                <h2 style="text-align: center;">Welcome back</h2>
                <p style="text-align: center;">Please Enter your details</p>
                <div class="form-group">
                  <label >Email</label>
                    <input type="email" name="email" placeholder="Enter your Email" required>
                    <div class="valid-feedback">valid</div>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <div class="valid-feedback">valid</div>
                </div>
                <div>
                    <input type="submit" name="submit" value="Login">
                </div>
                <div>
                Do not have an account? <a class="" href="register.php">Sign up</a>
              </div>
              <br> 
            </form>
          </div>
        </div>
      </div>
    
      
</body>
</html>