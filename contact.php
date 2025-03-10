<?php require("script.php"); ?>
<?php 
   if(isset($_POST['submit'])){
      if(empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
         $response = "All fields are required";
      }else{
         $response = sendMail($_POST['email'], $_POST['subject'], $_POST['message']);
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Chu Concert Grounds</title>
</head>
<body>
  <header>
    <div class="logo">
      <span>Chu Concert Grounds</span>
    </div>
    <nav>
      <a href="index.php">Home</a>
      <a href="about.html">About</a>
      <a href="contact.php" class="active">Contact</a>
      <a href="book.html">Booking</a>
    </nav>
  </header>
  <section class="contact-section">
    <div class="contact-content">
      <h2>Contact Us</h2>
      <p>For inquiries or any questions, feel free to reach out to us.</p>
      <form action="" method="post" enctype="multipart/form-data">
        <table>
          <tr>
            <td><label>Enter your email</label></td>
            <td><input type="email" name="email" value=""></td>
          </tr>
          <tr>
            <td><label>Enter a subject</label></td>
            <td><input type="text" name="subject" value=""></td>
          </tr>
          <tr>
            <td><label>Enter your message</label></td>
            <td><textarea name="message"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: right;"><button type="submit" name="submit">Submit</button></td>
          </tr>
        </table>
      </form>
        <?php
      if(@$response == "success"){
         ?>
            <p class="success">Email send successfully</p>
         <?php
      }else{
         ?>
            <p class="error"><?php echo @$response; ?></p>
         <?php
      }
   ?>

    </div>
  </section>
  <footer>
    &copy; 2025 CHU CONCERT GROUNDS | All Rights Reserved
  </footer>
</html>



  <style>
       * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #fff;
      background-color: #0e1621;
      line-height: 1.6;
    
    }
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 40px;
      background-color: rgba(0, 0, 0, 0.85);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      
    }
    .logo span {
      font-size: 1.8rem;
      font-weight: bold;
      color: #f8a45c;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
      
    }
    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 15px;
      font-size: 1rem;
      transition: color 0.3s ease;
    }
    nav a.active, nav a:hover {
      color: #f8a45c;
    }
    .contact-section {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("Images/theater.jpg") no-repeat center center/cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
      position: relative;
    }
    .contact-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      max-width: 500px;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    }
    .contact-section h2 {
      font-size: 2.4rem;
      color: #f8a45c;
      margin-bottom: 15px;
    }
    .contact-section p {
      font-size: 1.1rem;
      color: #e0e0e0;
      line-height: 1.8;
      margin-bottom: 20px;
    }
    .contact-form label {
      display: block;
      text-align: justify;
      width: 100%;
      margin: 10px 0 5px;
      color: #f8a45c;
    }
    .success, .error {
      margin-top: 15px;
      padding: 10px;
      border-radius: 5px;
      text-align: center;
    }
    .success {
      background-color: #4CAF50;
      color: #fff;
    }
    .error {
      background-color: #f44336;
      color: #fff;
    }
    footer {
      text-align: center;
      padding: 15px;
      background-color: rgba(0, 0, 0, 0.85);
      color: #fff;
      margin-top: 40px;
    }

    @media (max-width: 768px) {
      .contact-section {
        height: auto;
        padding: 40px 20px;
      }
      .contact-content {
        width: 90%;
      }
    }
  </style>
</body>
