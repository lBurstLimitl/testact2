<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pet Registration</title>
    </head>
    <style type="text/css">
        *
        {
            margin: 0;
            padding: 0;    
        }
        .container-fluid
        {
            width: 100%;
            height: 100vh;
            background: linear-gradient(to left, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url(Pets01-22.jpg);
            background-size: cover;
            background-repeat: no-repeat;

        }
        .container
        {
            width: 1200px;
            height: 80px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 25px;

        }
        .container h2
        {
            font-family: arial;
            font-size: 30px;
            color: #fff;
            cursor: pointer;
        }
        .container ul
        {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style-type:none ;  
        }
        .container ul li a
        {
            font-family: arial;
            color: #fff;
            list-style: none;
            margin-right: 50px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.5s;
            text-decoration: none; 

        }
            
        .container ul li:hover a:hover
        {
            color: #3d4b39;
        }
        .container .btn
        {
            width: 200px;
            height: 50px;
            border-radius: 10px;
            font-size: 18px;
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            color: #3d4b39;
            transition: 0.5s;
        }
        .container .btn:hover
        {
            background-color: #3d4b39;
            color: #fff;
        }
        .content
        {
            width: 1200px;
            height: 100vh;
            margin: auto;
        }
        .content h1
        {
            font-family: arial;
            font-weight: bold;
            color: #fff;
            font-size: 50px;
            padding-top: 100px;
        }
        .content p
        {
            font-family: arial;
            font-weight: bold;
            color: lightgrey;
            line-height: 30px;
            padding-top: 30px;
        }
        .content .btn
        {
            width: 200px;
            height: 50px;
            border-radius: 10px;
            font-size: 18px;
            border: 2px solid #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
            color: #fff;
            transition: 0.5s;
            margin-top: 30px;
        }
        .content .btn:hover
        {
            background-color: #fff;
            color: #3d4b39;
        }
    </style>

    <body>
        <div class="container-fluid">
            <div class="container">
                <h2>Pet Care</h2>
                <ul>
                    <li><a href="https://www.facebook.com/beatricejoyce.malonzo">HOME</a></li>
                    <li><a href="https://www.facebook.com/Asukagaki">ABOUT US</a></li>
                    <li><a href="https://www.facebook.com/Jeeeeeyyyypeeeee">SERVICE</a></li>
                    <li><a href="https://www.facebook.com/allennazarhene.pascual">PRIVACY</a></li>
                </ul>
                <button class="btn"><ion-icon name="call-outline"></ion-icon>(323)446-663</button>
            </div>
            <div class="content">
                <h1>Grooming and Pet<br>Care</h1>
                <p>Discover a hassle-free way to ensure the safety and well-being of your furry
                     friends. <br>Our Pet Registration System offers a seamless experience for pet
                      owners, <br>making it easy to register your beloved companions. 
                      

<br><br>Join us in creating a safer, more connected world for pets. Start your registration journey today!
                </p>
                <button onClick="window.location.href='userlogin/userlogin.php'" class="btn">Get Started</button>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
    
</html>