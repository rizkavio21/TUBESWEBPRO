<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color:#1b1818;
        }
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
        h3{
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-size: 1.17em;
            text-weight:bold;
            padding: 5px 30px 5px 18px;
            margin: 20px 0px 20px 0px;
            border-right: 5px;
            
        }

        .konten{
            width: 296mm 246.66mm;
            margin-right: auto;
            margin-left: auto;
            padding-right:100px;
        }
        .home{
            font-family: 'Montserrat', sans-serif;
            margin: 20px 0;
            text-transform: lowercase;
            line-height:40px;
            min-height: 500px;
            padding-top: 23px;}

        }
        
        #artikel1 .textt{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            z-index: 9999;
            bottom:0;
            cursor:pointer;
            display: block;
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            line-height: 26px;
            height: 50px;
            left:0px;
            right: 0px;
            bottom:0px;
            line-height:16px;
            padding-bottom:25px;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 25px;
            position:absolute;
            text-align: center;
            text-size-adjust: 100%;
            transition-delay: 0s;
            transition-duration: 0.3s;
            transition-property: all;
            transition-timing-function:ease;
            width: 428px 50px;
            transition: all 0.3s ease;
		    -webkit-transition: all 0.3s ease;
		    -moz-transition: all 0.3s ease;
		    padding: 25px 15px;
        }
        .artikel1 .text{
            position: relative;
            height: 100%;
	    }
	
	    .artikel1 .text > a {
		display: block;
	    }
	
        .col-sm-4{
            overflow: hidden;
        }
        .col-sm-4 > img{
            width: 900px;
            z-index: -1;
        }
        .textt >h1{
            display: block;
        }
        .homecontent{
            content: 950px 255px;
            margin: 0 250px 0 250px;
        }
        .Home{
            content: 940px 331px;
        }
        #carouselExampleIndicators{
            margin-top: 35px;
        }
        .sy-pager li a:link, .sy-pager li a:visited {
            opacity: 1.0;
            }
        .sy-pager li.sy-active a {
            background-color: #e24b70;
            display: line-active;
        }
        .sy-pager li a {
            width: 100%;
            height: 100%;
            display: block;
            background-color: #ccc;
            text-indent: -9999px;
            -moz-background-size: 2em;
            -o-background-size: 2em;
            -webkit-background-size: 2em;
            background-size: 2em;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
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
        <ul class="sy-pager">
            <li class="sy-active">
                <a href="#1">1</a>
            </li>
            <li class>
                <a href="#2">2</a>
            </li>
            <li class>
                <a href="#3">3</a>
            </li>
        </ul>
    </div>
    <div class="homecontent">
        <div class="container">
            <div class="konten" style="
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
        <div class="Home">
            <div class="container">
                <h3 class="section-title" style="background-color: #1aaed0;
                color:white; border-left:5px;">karya terbaru</h3>
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
            <div class="container">
                <h3 class="section-title" style="background-color: #1aaed0;
                color:white;
                font-size:24px; margin-top:20px;">artikel</h3>
                <div class="container">
                    <div id="artikel1" style="width: 258px 270px;"> 
                        <img href = "http://www.hellomotion.com/woroworo/e-book-120-tips-untuk-menjadi-desainer-grafis-yang-sukses" src="assets/isi1.jpg"
                        title="[E-Book] 120 Tips Untuk Menjadi Desainer Grafis Yang Sukses">
                            <span class="textt" style="color:white;"> 
                                <a>E-Book] 120 Tips Untuk Menjadi Desainer Grafis Yang Sukses</a>
                            </span>
                            <img href = "#" src="assets/isi2.jpg"/>
                            <img href = "#" src="assets/isi4.jpg"/>
                            <img href = "#" src="assets/isi5.jpg"/>
                        </div>    
                    </div>
            </div>
        </div>
    </div>
</body>
</html>