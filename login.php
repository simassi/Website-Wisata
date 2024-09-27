<?php
ob_start();
require 'koneksi.php' ;
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $hasil = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

    if (mysqli_num_rows($hasil)===1) {
        $pass = mysqli_fetch_assoc($hasil);
        if ($password === $pass["password"]) {
            header("Location:Wisata-Ngapak/paket.html");
            exit;
        }
    }
    $eror = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tampilanlogin.css">
    <!-- style -->
     <style>
        *{
    margin: 0%;
    padding: 0%;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-size: cover;
    background-position: center;
    background-image: url(Wisata-Ngapak/images/img3.jpg);
    /* background-color: black; */
}

.countainer {
    margin-top: 10%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;

}

h1{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.input{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.input label{
    color: #fff;
}
input:focus ~ label,
input:valid ~ label{
top: -5px;
}
.input input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding:0 35px 0 5px;
    color: #fff;
}
.input ion-icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: 20px;
}
button{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
}

.imag {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
    width: 100%;
    height: fit-content;
    margin-top: 0px;
    object-fit: cover;
  }

  .register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
}
     </style>
</head>
<body>
    <div class="countainer">
        <div class="form-box">
            <div class="form-value">
    <form action="" method="post"> 
        <h1>LOGIN</h1>
        <div class="input">
            <label for="">username</label>
            <input type="name" name="username" id="username" required>
        </div> 
        <div class="input">
            <label for="">password</label>
            <input type="password" name="password" id="password" required>
        </div> 
        <div class="register">
                        <p>Don't have a account <a href="daftar.php">Register</a></p>
                    </div>
        <button type="submit" name="login">login</button>      
    </form>
</div>
</div>
</div>
</body>
</html>

