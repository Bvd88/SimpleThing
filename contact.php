<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styleContact.css">
    <link rel="stylesheet" href="settingsCss.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
  <div class="container">
     <form>
      <i class="fas fa-paper-plane"></i>
      <div>
        <input type="checkbox" class="checkbox" id="chk" />
        <label class="label" for="chk">
          <i class="fas fa-moon"></i>
          <i class="fas fa-sun"></i>
          <div class="ball"></div>
        </label>
        </div>

      <div class="input-group">
        <label>Full Name</label>
        <input type="text" placeholder="Enter your name" id="contact-name" onkeyup="validateName()">
        <span id="name-error"> </span>
      </div>

      <div class="input-group">
        <label>Phone No.</label>
        <input type="tel" placeholder="079xx xxx xxxx"id="contact-phone" onkeyup="validatePhone()">
        <span id="phone-error"> </span>
      </div>

      <div class="input-group">
        <label>Email Id</label>
        <input type="email" placeholder="Enter Email"id="contact-email" onkeyup="validateEmail()">
        <span id="email-error"> </span>
      </div>   

      <div class="input-group">
        <label>Your Message</label>
        <textarea rows="5" placeholder="Enter your message" id="contact-msg" onkeyup="validateMsg()"></textarea>
        <span id="message-error"> </span>
      </div>

    <button onclick =" return validateForm()">Submit</button>
    <button onclick="location.href='welcome.php'" type="button"> Home</button>
                   
    <span id="submit-error"> </span>
    <div class="registered">

<?php echo "<h1> Contact us  " . $_SESSION['username'] . "</h1>"; ?>

</div>
   
  </form>

  
  </div>
  
</body>

<script src="script.js"></script>
</html>

