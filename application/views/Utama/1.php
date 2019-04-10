<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .Banner{
            padding: 25px 20px 15px 20px;
            text-align: center;
            height: 100px;
            display: block;

        }
        img{
            height: auto;
            max-width: 100%;
            vertical-align: middle;
            border: 0;
        }
        .konten{
            width: 450px;
         
        }
        
    </style>
</head>
<body>
    <?php include 'One.php' ?>
    <div class="Banner" >
        <img src="assets/banner.jpg"/>
    </div>
    <div class="konten" style="
    margin:50px 20px;">
        <table>
            <td>
                <img class = "k1" href="#" src="assets/iklan1.jpg"/>
            </td>
            <td>
                <img class = "k2" href="#" src="assets/iklan2.jpg"/>
            </td>
        </table>
    </div>
</body>
</html>