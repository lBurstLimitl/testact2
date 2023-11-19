<?php 

session_start();

	if(empty($_SESSION['login'])){
		header("Location: ../index.php");
	}

	if(isset($_GET['#logout'])){
		session_destroy();
		header("Location: ../index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--styles-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<!--navigation menu-->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-octocat"></ion-icon>
                        </span>
                        <span class="title">Pet Care</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="registerpet.php">
                        <span class="icon">
                            <ion-icon name="fish-outline"></ion-icon>
                        </span>
                        <span class="title">Register My Pet</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="mypets.php">
                        <span class="icon">
                            <ion-icon name="paw-outline"></ion-icon>
                        </span>
                        <span class="title">My Pets</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>     
                
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li> 

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li> 
            </ul>
        </div>
    
    <!--main-->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <div class="user">
                <img src="assets/imgs/bea.jpg" alt="">
            </div>
        </div>

        <!-- cards -->
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">3,204</div>
                    <div class="cardName">Daily Views</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">80</div>
                    <div class="cardName">Sales</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">786</div>
                    <div class="cardName">Comments</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">7,908</div>
                    <div class="cardName">Earnings</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </div>
        </div>


        <!--order details list-->
        <div class="details">
              <div class="recentOrders">
                 <div class="cardHeader">
                    <h2>Recent Orders</h2>
                    <a href="#" class="btn">View All</a>
                 </div>

                 <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Kemerut</td>
                            <td>3583</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>

                        <tr>
                            <td>so what</td>
                            <td>876</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>

                        <tr>
                            <td>pake ko</td>
                            <td>355</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        <tr>
                            <td>pangit</td>
                            <td>3580</td>
                            <td>Due</td>
                            <td><span class="status inProgress">In Progress</span></td>
                        </tr>

                        <tr>
                            <td>Kemerut</td>
                            <td>3583</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>

                        <tr>
                            <td>so what</td>
                            <td>876</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>

                        <tr>
                            <td>pake ko</td>
                            <td>355</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        <tr>
                            <td>pangit</td>
                            <td>3580</td>
                            <td>Due</td>
                            <td><span class="status inProgress">In Progress</span></td>
                        </tr>
                    </tbody>
                 </table>
            </div>

            <!--new customers-->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Customers</h2>
                </div>

                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/bea.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Beatrice <br> <span>Tunasan</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/mabel.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Mabel <br> <span>Poblacion</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/bea.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Beatrice <br> <span>Tunasan</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/mabel.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Mabel <br> <span>Poblacion</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/mabel.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Mabel <br> <span>Poblacion</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/bea.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Beatrice <br> <span>Tunasan</span></h4>
                        </td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
 </div>
    <!-- scripts -->
    <script src="assets/js/main.js"></script>

<!-- ionicons --> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>