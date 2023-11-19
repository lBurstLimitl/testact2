<?php 

session_start();
require_once('config.php');
$user=$_SESSION['login'];
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
                    <h2>My Pets</h2>
                    <a href="#" class="btn">View All</a>
                 </div>

                 <table>
                    <thead>
                        <tr>
                            <td>Pet Name</td>
                            <td>Owner</td>
                            <td>Breed</td>
                            <td>Gender</td>
                            <td>Birthdate</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $sql="SELECT * FROM pets INNER JOIN users ON users.id=pets.ownerid where ownerid = $user";
$stmt = $db ->prepare($sql);

if ($stmt->execute()) {
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
              echo '<tr>';
                            echo '<td>'. $row['petname'].'</td>';
                            echo '<td>'. $row['firstname'].'</td>';
                            echo '<td>'. $row['breed'].'</td>';
                            echo '<td>'. $row['gender'].'</td>';
                            echo '<td>'. $row['birthdate'].'</td>';
                            echo '</tr> ';
                }
          }  


?>
                    </tbody>
                 </table>
            </div>

           
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