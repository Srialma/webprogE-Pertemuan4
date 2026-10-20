<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CSS dan JavaScript</title>

<link rel= "stylesheet" href= "style.css">

    <style>
        .sembunyi{
            display: none;
        }
        .kotak-info{
            background-color: #d5b6da;
            padding: 15px;
            margin: 10px;
            border: 2px solid #7887df;
            border-radius: 6px;
            

        }

    </style>
</head>
<body>

    <h2>Contoh Text H2</h2>
    <div class= "flex-center">
    <div class= "kartu-profile">
    <h2> Srialma Lantira</h2>
    <p>Web Desain</p>
    <button onclick= "info()" class= "btn-detail">Info Lengkap</button>
</div>
</div>

<div class= "kotak-info sembunyi">
    <h1>Informasi Detail</h1>
</diV>
<script>
    function info(){
        alert("Tombol Lengkap di ke clik");
    }
</script>
</body>
</html>