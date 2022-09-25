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
    <title>Welcome </title>
</head>
<body>

    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="welcome.php">
                    <i class= "fas fa-hello"></i>
                        <div class="title">Welcome</div>
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
                    <input type = "text"name="search" placeholder="<?php echo " Hi " . $_SESSION['username'] . ""; ?>">
                    <label for = "search" class ="fas fa-search"></label>
                </div>
                <i class= "fas fa-door-open"></i>      
                <a href="logout.php">Logout</a>
               
            
            </div>
            <div class="tables">
              <div class="News">
                  <div class="heading">
                      <h2>News</h2> <br><br><br><br><br><br><br><br>
                    

                        <p><i class="far fa-rss-square">&nbsp;&nbsp;&nbsp;</i>	Relationship with natural world explored in poetry book</p>
                        <a href="https://www.hope.ac.uk/news/allnews/relationship-with-natural-world-explored-in-new-poetry-book.html" class="btn">View more</a><br>
                        
                        <br><p><i class="far fa-rss-square">&nbsp;&nbsp;&nbsp;</i>Mature Student: it's never too late just go for it</p>
                        <a href="https://www.hope.ac.uk/news/allnews/mature-student-its-never-too-late---just-go-for-it.html" class="btn">View more</a><br>
                         
                        <br><p><i class="far fa-rss-square">&nbsp;&nbsp;&nbsp;</i>Sausage vending machines booming in Germany</p>
                        <a href="https://cat-bounce.com" class="btn">View more</a><br>
                  </div>
              </div>
              <div class="Room"> <br><br><br><br><br><br>
                <div class="heading">
                    <h2>Playlist</h2>
                    <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/YVlcKniVNTk">
                    </iframe>
                    
                </div>
             

              </div>
          </div> 
          </div> 
        </div>
    </div>
</body>
</html>