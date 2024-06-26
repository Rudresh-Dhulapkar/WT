<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="javaScript/signupFormValidation.js"></script>
    <title>Chat</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat Application</header>
            <form action="#" id="signupform" enctype="multipart/form-data">
                <div class="error-txt" style="display: none;"></div>
                <div class="name-details">
                    <div class="feild input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="Enter first Name" id="fname" name="fname">
                    </div>
                    <div class="feild input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Enter last Name"id="lname" name="lname">
                    </div>
                </div>
                <div class="feild input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter email" id="email" name="email">
                </div>
                <div class="feild input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter Password" id="pass" name="pass">
                    <i class="fas fa-eye" name="pass" id="togglePass"></i>
                </div>
                <div class="feild image">
                    <label>Select Image</label>
                    <input type="file" id="pimg" name="pimg">
                    </div>
                <div class="feild button">
                    <input type="submit" value="signup">
                </div>
            </form>
            <div class="link">
                 <p>Existing User? Login <a href="login.php">here</a></p>
            </div>
        </section>
    </div>
    <script src="javaScript/passShowHide.js"></script>
    <script src="javaScript/signup.js"></script>
</body>
</html>
