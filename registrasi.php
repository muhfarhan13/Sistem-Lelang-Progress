<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background-color: rgb(212, 212, 212);
        }

        .register-form {
            width: 550px;
            margin-left: 30.7em;
            margin-top: 11em;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 40px;
            height: 440px;
        }

        input {
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="register-form bg-white">
        <form method="POST">
            <h2 class="text-dark text-center">Lelang<label class="text-danger">In</label></h2>
            <div class="nama pt-3">
                <label>Name</label>
                <input class="form-control" type="text" id="name" name="name">
            </div>
            <div class="nama pt-3">
                <label>Username</label>
                <input class="form-control" type="text" id="username" name="username">
            </div>
            <div class="pt-3">
                <label>Password</label>
                <input class="form-control" type="password" id="password" name="password">
            </div>
            <div class="btn-login pt-4 d-grid gap-2">
                <button class="btn btn-primary" name="register">Register</button>
            </div>
            <div class="text-center mt-3">
                <small>You have account? <a href="login.php">Login</a></small>
            </div>
        </form>
    </div>
</body>

</html>