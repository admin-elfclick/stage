<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId'])){
        header("location: login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
    <div>
        <center>
            <h1>Welcome to ELF-click Admin Panel - <?php echo $_SESSION['AdminLoginId']?></h1>
            <h1 style="background:orange;color:#fff;">Admin Panel is under Development.</h1><br/>
            <form method="POST">
                <button name="Logout">Logout</button>
            </form>
        </center>
    </div>
<?php
if(isset($_POST['Logout'])){
    session_destroy();
    header("location: login");
}
?>
</body>
</html>