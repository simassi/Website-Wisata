<?php
ob_start();
require 'koneksi.php' ;
if (isset($_POST["daftar"])) {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk menyisipkan data ke tabel
    $query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";

    // Eksekusi query dan cek apakah berhasil
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Registrasi berhasil! Silakan login.');
                window.location.href = 'login.php';
              </script>";
    } else {
        echo "<script>
                alert('Registrasi gagal, coba lagi!');
              </script>";
    }
}
?>


<!DOCTYPE html>



<html lang="en">

<head>
<!-- <link rel="stylesheet" href="*/daftar.css"> -->
  <title>Gabung</title>
  <style>
*{

margin: 0;
padding: 0;
}
section{
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
width: 100%;
background-color: black;
/* background: url('img/foto1.png'); */
background-position: center;
background-size: cover;
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
h2{
font-size: 2em;
color: #fff;
text-align: center;
}
.inputbox{
position: relative;
margin: 30px 0;
width: 310px;
border-bottom: 2px solid #fff;
}
.inputbox label{
position: absolute;
top: 50%;
left: 5px;
transform: translateY(-50%);
color: #fff;
font-size: 1em;
transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
top: -5px;
}
.inputbox input {
width: 100%;
height: 50px;
background: transparent;
border: none;
outline: none;
font-size: 1em;
padding:0 35px 0 5px;
color: #fff;
}
.inputbox ion-icon{
position: absolute;
right: 8px;
color: #fff;
font-size: 1.2em;
top: 20px;
}
.forget{
margin: -15px 0 15px ;
font-size: .9em;
color: #fff;
display: flex;
justify-content: center;  
}

.forget label input{
margin-right: 3px;

}
.forget label a{
color: #fff;
text-decoration: none;
font-weight: 600
}
.forget label a:hover{
text-decoration: underline;
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
 
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2>Daftar</h2>
                    <div class="inputbox">
                        <input type="name" name="username" id="username"required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" id="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label><p> <a href="#"></a></label>
                    </div>
                    <button type="submit" name="daftar">Daftar</button>
                    <div class="register">
                        <p>Already have account?  <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>