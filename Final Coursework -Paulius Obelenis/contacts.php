<?php
$name=isset($_POST['name']) ? $_POST['name']: '';
$email=isset($_POST['email']) ? $_POST['email']: '';
$feedback=isset($_POST['feedback']) ? $_POST['feedback']: '';
$success = isset($_GET['success']) ? $_GET['success'] : '';
$error = array("name" => "", "email" => "","feedback" => "","database" => "");


if($_POST){
if (strlen($name)==0 ||strlen($name)>50||strlen($email)==0||strlen($email)>50||strpos($email,'@')==0 ||strlen($feedback)==0){
  if(strlen($name) == 0){
				$error['name'] = 'Error in name field';
			}
      if(strlen($name) > 50){
            $error['name'] = 'Error in name field';
          }

			if(strlen($email) == 0){
				$error['email'] = 'Error in email field';
			}
      if(strlen($email) > 50){
        $error['email'] = 'Error in email field';
      }
      if(strpos($email,'@')==0){
        $error['email'] = 'Error in email field';
      }
			if(strlen($feedback) == 0){
				$error['feedback'] = 'Error in question field';
			}

}else{
  $conn = new mysqli( 'localhost', 'root', 'root', 'final');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
        $name = $conn->real_escape_string($name);
  			$email = $conn->real_escape_string($email);
        $feedback = $conn->real_escape_string($feedback);



  $saved= $conn->query("INSERT INTO contact_form (name, email, feedback)
  VALUES('$name','$email','$feedback')");
  if ($saved){
}
else {
  $error['database'] = "Error when saving";
}
}
}

?>

<!doctype html>
<html>
<head>
<title> Barberhaus </title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/regular.css" integrity="sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=IM+Fell+Double+Pica:400i" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel= "stylesheet" type= "text/css" href="modal.css"/>
<link rel= "stylesheet" type= "text/css" href="contacts.css"/>
<link rel= "stylesheet" type= "text/css" href="normalize.css"/>
<link rel= "stylesheet" type= "text/css" href="style.css"/>
</head>
<body>
  <!--nav starst here-->
  <header>
    <div class="inner container">
        <div>
            <a href="index.html"><img src="logos.png" alt="logo"/></a>
        </div>
        <div class="nav">
            <label for="toggle">&#9776;</label>
            <input type="checkbox" id="toggle"/>
            <div class="menu">
              <a href="about.html">About Us</a>
              <a href="#"onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Book us</a>
              <a href="blog.html">Blog</a>
              <a href="contacts.php">Contacts</a>
            </div>
        </div>
    </div>
  </header>
  </div>


  <section class= "contact">
    <h2> Contact us</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
      <p><input type="text" name="name" placeholder="Enter your name" value="<?php echo $name; ?>"//></p>
       <div class=php><?php echo $error['name']; ?></div>
      <p><input type="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>"//></p>
      <div class=php><?php echo $error['email']; ?></div>
      <textarea name="feedback" placeholder="Enter your question" value="<?php echo $feedback; ?>"//></textarea>
      <div class=php><?php echo $error['feedback']; ?></div>
      <p><input type ="submit" name="submit" value= "Submit" autofocus/></p>
    </form>
  </section>
  <section class= "contacts">
    <h2> How to find us</h2>

      <div class="location">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d559.7809907418919!2d25.28377745441174!3d54.69950466367867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd94028429e84f%3A0x5ca7e7e43c71d1f0!2sLombardas+%22Lombas%22!5e0!3m2!1sen!2slt!4v1536226861157" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="address">
      <p>Address:Kalvarijų g. 59A, Vilnius 09317</p>
      <p>Phone:+370000000</p>
      <p>Email:john@barberhaus@com</p>
      <p> Working hours:</p>
      <p>Monday | 9am - 8pm</p>
      <p>Tuesday | 9am - 8pm</p>
      <p>Wednesday | 9am - 8pm</p>
      <p>Thursday | 9am - 8pm</p>
      <p>Friday | 9am - 8pm</p>
      </div>
    </div>
  </section>


  <footer>
    <form method="post" action="http://localhost/subscribe.php" >
      <input type="email" name="subscribe" placeholder="Email">
      <input class="subscribe" type="submit" value="Subscribe">
    </form>
    © 2018 Barberhaus All rights reserved.
    <a href="facebook.com"><i class="fab fa-facebook"></i></a>
    <a href="twitter.com"><i class="fab fa-twitter-square"></i></a>
    <a href="instagram.com"><i class="fab fa-instagram"></i></a>
  </footer>
  <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="/action_page.php">
      <div class="containerz">
        <h1>Book appointment</h1>
        <hr>
        <label for="psw"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="number"><b>Phone number</b></label>
        <input type="text" placeholder="Enter Phone number" name="phone" required>

        <label for="date"><b>Date</b></label>
        <input type="date"  name="date" required>

        <label for="time"><b>Time</b></label>
        <input type="time"  name="time" required>


        <label for="service"><b>Service</b></label>
        <select>
        <option value="Hair">Hair -->$15</option>
        <option value="Beard">Beard -->$16</option>
        <option value="Beard">Beard + Hair -->$20</option>
        </select>



          <button type="submit" class="signupbtn">Book</button>

      </div>
    </form>
  </div>

  <script>

  var modal = document.getElementById('id01');


  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>
  </body>
  </html>
