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
            <br><br> <br><br> 
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23616161&ctz=Europe%2FLondon&showTabs=1&showTitle=1&hl=en_GB&src=MjAyMTEyMzVAaG9wZS5hYy51aw&src=Y181cnE3aGc5a3JoZjY1bDdtcGVvYnE1MmVwMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19yODgzbzlmNGhkYXVkdmNzanAwaWZiaTZxY0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y182b29tMGxhYjBwbGEyYnE3djZjZmNiNnVia0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%23A79B8E&color=%23F4511E&color=%23B39DDB" 
                    style="border:solid 2px #777"
                     width="800" height="800" 
                     frameborder="1" scrolling="no"></iframe>    
                     <br>   
        </div>
        
    </div>
</body>
</html>