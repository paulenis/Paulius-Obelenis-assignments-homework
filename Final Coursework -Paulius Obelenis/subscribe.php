<?php

$email=isset($_POST['email']) ? $_POST['email']: '';


if($_POST){
if (strlen($email)==0||strlen($email)>50||strpos($email,'@')==0){



    }else{
      $conn = new mysqli( 'localhost', 'root', 'root', 'final');
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      			$email = $conn->real_escape_string($email);
            $saved= $conn->query("INSERT INTO subscribe (email)
            VALUES('$email')");
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
                      <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Book us</a>
                      <a href="blog.html">Blog</a>
                      <a href="contacts.php">Contacts</a>
                    </div>
                </div>
            </div>
          </header>
          </div>
          <!--first section starts here-->
          <section class= "first">
           <h1> Visit our new place in Vilnius
           </h1>
           <div class="buto">
           <button class="book"onclick="document.getElementById('id01').style.display='block'">Book Now!</button>
          </div>
          </section>
          <!--news section starts here-->

          <section class="news">
          <h2> Hot grooming topics</h2>

          <div class="blog-section">

            <div id="blog-1">
              <a href="#">
                <div class="blog-box1">
                  <h3>Beard tips of 2018</h3>

                </div>
              </a>
            </div>

            <div id="blog-2">
              <a href="#">
                <div class="blog-box2">
                  <h3>Hair tips of 2018</h3>

                </div>
              </a>
            </div>

            <div id="blog-3">
              <a href="#">
                <div class="blog-box3">
                  <h3>Stay fresh</h3>

                </div>
              </a>
            </div>

              <div id="blog-4">
                <a href="#">
                  <div class="blog-box4">
                    <h3>Trendy styles</h3>

                  </div>
                </a>
            </div>

          </div>
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
              <input type="email" name="email" placeholder="Email" required>
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
          // Get the modal
          var modal = document.getElementById('id01');

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          }
          </script>
          </body>
          </html>
