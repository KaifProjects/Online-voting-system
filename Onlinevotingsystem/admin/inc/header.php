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
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .header {
            background-color: #333;
            padding: 20px 0;
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header h1 {
            font-size: 36px;
            margin: 0;
        }

        .header img {
            max-width: 100px;
            border-radius: 50%;
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            border: 4px solid transparent;
            transition: border-color 0.3s ease;
        }

        .header img:hover {
            border-color: #ff5733;
        }

        .welcome {
            font-size: 24px;
            color: #ff5733;
            text-transform: uppercase;
            padding: 10px 20px;
            border-radius: 30px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease forwards;
            opacity: 0;
            transform: translateY(-50%);
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="../assets/images/candidate_photos/logo.gif" alt="Logo">
        <h1>Online Voting System</h1>
        <span class="welcome">Welcome <?php echo $_SESSION['username']; ?></span>
    </div>
</body>
</html>
