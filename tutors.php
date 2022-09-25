<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Welcome</title>
</head>
<body>

    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="welcome.php">
                        <i class= "fas fa-home"></i>
                        <div class="title">Home</div>
                    </a>
                </li>
                <li>
                    <a href="tutors.php">
                        <i class="fad fa-chalkboard-teacher"></i>
                        <div class="title">Tutors</div>
                    </a>
                </li>
                <li>
                    <a href="student.php">
                        <i class="fad fa-user-graduate"></i>
                        <div class="title">Student</div>        
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <i class= "fas fa-question"></i>
                        <div class="title">Contact</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type = "text"name="search" placeholder="Looking For">
                    <label for = "search" class ="fas fa-search"></label>
                </div>
                <i class= "fas fa-door-open"></i>      
                <a href="logout.php">Logout</a>
               
            
            </div>
          <div class="cards">
              <div class="card">
                  <div class="card-content">
                      <div class="names">Dr Neil Buckley</div>
                      <div class="card-name"> WebDev lecturer</div>
                  </div>
                  <div class="icon-box">
                    <i class="fad fa-laptop-code"></i>
                  </div>
              </div>
              <div class="card">
                <div class="card-content">
                    <div class="names">Dr Mark Greenwood</div>
                    <div class="card-name">Networks & Software Engineer lecturer</div>
                </div>
                <div class="icon-box">
                    <i class="far fa-network-wired"></i>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="names">Dr Kapil Dev</div>
                    <div class="card-name">OOSD lecturer</div>
                </div>
                <div class="icon-box">
                    <i class="fad fa-laptop"></i>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="names">Dr Ogbonnaya Anicho</div>
                    <div class="card-name">Tutor</div>
                </div>
                <div class="icon-box">
                <i class="fas fa-laptop-code"></i>
                    
                </div>
            </div>
          </div> 
          
        </div>
    </div>
</body>
</html>