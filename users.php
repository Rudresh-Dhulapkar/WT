<?php
    session_start();
    include_once "php/config.php";
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Chat</title>
</head>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                <?php
                    include_once "php/config.php";
                    $sql=mysqli_query($conn, "SELECT * FROM users WHERE unique_id={$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql)>0){
                        $row=mysqli_fetch_assoc($sql);
                    }
                ?>
                <img src="php/images/<?php echo $row['img'] ?>" alt="">
                <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname']?></span>
                        <p><?php echo $row['status']; ?></p>
                </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Search</span>
                <input type="text" placeholder="Enter Name to search">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                
            </div>
        </section>
    </div>
    <script src="javaScript/users.js"></script>
</body>
</html>
