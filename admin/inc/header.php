<?php 
    session_start();
    require_once("config.php");

    if($_SESSION['key'] != "AdminKey")
    {
        echo "<script> location.assign('logout.php'); </script>";
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpanel - Online Voting System</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        /* Custom styles for responsiveness */
        .header {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        .header img {
            max-width: 100%;
            height: auto;
        }
        .header h3 {
            font-size: calc(1.5rem + 1vw);
            text-align: center;
        }
        .header small {
            font-size: calc(1rem + 0.5vw);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-black text-white header">
            <div class="col-12 col-md-1 text-center my-2 my-md-0">
                <img src="../assets/images/logo.gif" width="80px"/>
            </div>
            <div class="col-12 col-md-11 my-auto text-center text-md-left">
                <h3>ONLINE VOTING SYSTEM - <small>Welcome <?php echo $_SESSION['username']; ?></small></h3>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
