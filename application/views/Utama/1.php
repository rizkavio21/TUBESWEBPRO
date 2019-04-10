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
            width: 296mm 246.66mm;
            margin-right: auto;
            margin-left: auto;
            padding-right:100px;
        }
        h3{
            color: white;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            background-color: #1aaed0;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            display: block
            margin: 20px 15px;
            text-transform: lowercase;
            line-height:40px;
            
        }
        h4{
            color: white;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            background-color: #1aaed0;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            display: block
            margin: 20px 0;
            text-transform: lowercase;
            line-height:40px;
            line-weight:bold;
            opacity:10px;
        }
        .section-title{
            padding: 0 18px;

        }
        h3 .section-title{
            width:217px 217px;
        }
        #artikel{
            line-height: 0;
            display: table;
            content: "";
            width: 300px;
        }
    </style>
</head>
<body>
    <?php include 'One.php' ?>
    <div class="Banner" >
        <img src="assets/banner.jpg"/>
    </div>
    <div class="container">
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
    <div class="container">
        <h3 class="section-title">karya terbaru</h3>
        <table>
            <td>
                <img href = "#" src="assets/bro 001.jpg"/>
            </td>
            <td>
                <img href = "#" src="assets/bro002.jpg"/>
            </td>
            <td>
                <img href = "#" src="assets/bro03.jpg"/>
            </td>
            <td>
                <img href = "#" src="assets/bro04.jpg"/>
            </td>
        </table>
    </div>
    <div class="container">
        <h4 class="section-title">artikel</h4>
            <div class="row"> 
                <div class="col-sm-4">
                        <img href = "http://www.hellomotion.com/woroworo/e-book-120-tips-untuk-menjadi-desainer-grafis-yang-sukses" src="assets/isi1.jpg" style="display:inline; "title="[E-Book] 120 Tips Untuk Menjadi Desainer Grafis Yang Sukses">
                            <span class="meta">[E-Book] 120 Tips Untuk Menjadi Desainer Grafis Yang Sukses</span>
                </div>
                <div class="col-sm-4">
                    <img href = "#" src="assets/isi2.jpg"/>
                </div>
                <div class="col-sm-4">
                    <img href = "#" src="assets/isi4.jpg"/>
                </div>
                <div class="col-sm-4">
                    <img href = "#" src="assets/isi5.jpg"/>
                </div>
            </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>