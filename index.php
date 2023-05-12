<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/logo1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/logo1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/logo1.png">
    <link rel="manifest" href="statics/site.webmanifest">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Welcome to Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #lock{
            display:none;
            position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 20;
    background: rgb(160,82,45) center no-repeat;
    text-align:center;
        }
        
        @media screen and (orientation:portrait) {
            #lock{display:block;}
            #container{display:none;}
        }
    </style>
</head>


<div id="lock"><img src="1.jpeg" alt="" style="width:50%; margin-top:50%;"><br>
<h1 style="color:black; margin-top: 25px;"><b>Please rotate the device. </b><br>We support only landscape mode.</h1>
</div>

<div id="container">

    <?php include 'spin.php'; ?>


    <style>
        .nav-link:hover {
            text-decoration: underline;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: black;
        }

        .mybtn:active {
            background-color: rgb(95,158,160);
            color: white;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="container-fluid">
            <a href="index.php"><img src="1.jpeg" alt=""
                    style="height: 80px; margin-left:25px; margin-top:10px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a class="nav-link active text-nowrap" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; ">
                        <a class="nav-link text-nowrap" href="send_money.php">Transfer Money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="all_cust.php">View All Customers</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>
                   
                </ul>
            </b>
        </div>
    </nav>



    <div class="container-large"
        style="color:white; height:820px; width: 100%; padding:8% 2% 2% 2%; background-image: url('bank.png');"> 
        <div class="row">
            <div class="col" style="margin-left: auto;">
                <br><br>&nbsp;<p class="zoomfont"
                    style="font-size:0px; text-shadow:3px 3px 3px grey; text-align:center;"><b>Welcome to <br> Sparks
                        Bank!</b></p>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        
        $(document).ready(function () {

            $(".zoomin").animate({
                width: '400px'
            }, '5000', 'linear');
            $(".zoomfont").animate({
                fontSize: '71px'
            }, '5000', 'linear');
        });
    </script>

</div>
</body>

</html>
