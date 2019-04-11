<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/page1.css">
    <style>
    </style>
</head>
<body>
    <?php include 'One.php' ?>
    <div class="Banner" >
        <img src="assets/banner.jpg"/>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/1jpg.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section id="isi">
        <div class="iklan">
            <div class="container">
                    <div class="konten " style="
                    margin:50px 20px;">
                        <table>
                            <td>
                                <img style = "margin-right:13px;" class = "k1" href="#" src="assets/iklan1.jpg"/>
                            </td>
                            <td>
                                <img style = "margin:0 13px 0px 13px;" class = "k2" href="#" src="assets/iklan2.jpg"/>
                            </td>
                        </table>
                    </div>
            </div>
        </div>
        <div class="Karya">
            <div class="container">
                <h3 class="section-title" style="border-right: 10px;">karya terbaru</h3>
                <table>
                    <td>
                        <img href = "#" src="assets/bro 001.jpg" style="width:217px; 
                height:217px; margin: 0 12px 24px 0px; "/>
                    </td>
                    <td>
                        <img href = "#" src="assets/bro002.jpg" style="width:217px; 
                height:217px; margin: 0 12px 24px 12px;"/>
                    </td>
                    <td>
                        <img href = "#" src="assets/bro03.jpg"style="width:217px; 
                height:217px; margin: 0 12px 24px 12px;"/>
                    </td>
                    <td>
                        <img href = "#" src="assets/bro04.jpg"style="width:217px; 
                height:217px; margin: 0 0px 24px 12px;"/>
                    </td>
                </table>
            </div>
        </div>
        <div class="container">
                <h3 class="section-title" style="background-color: #1aaed0;
                color:white;
                font-size:24px; margin-top:20px;">artikel</h3>
                <div class="container">
                    <div id="artikel1"> 
                        <table>
                            <tr>
                                <td>
                                    <img class="isinya" href = "#" src="assets/isi1.jpg"
                                        title="[E-Book] 120 Tips Untuk Menjadi Desainer Grafis Yang Sukses">
                                    <a class="link">E-Book] 120 Tips Untuk Menjadi Desainer Grafis Yang Sukses</a>
                                    </span>
                                </td>
                                <td>
                                    <img class="isinya" href = "#" src="assets/isi2.jpg"/>
                                </td>
                            </tr>
                                <td>
                                    <img class= "isinya" href = "#" src="assets/isi4.jpg"/>
                                </td>
                                <td>
                                    <img class= "isinya" href = "#" src="assets/isi5.jpg"/>
                                </td>
                    </div>    
                </div>
        </div>
    </section>

</body>
</html>