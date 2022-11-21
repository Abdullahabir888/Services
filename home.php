<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avail Services</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css">



</head>

<body>

  <!-- header section starts  -->

  <header>

    <a href="#" class="logo">AVAIL</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
      <a style="--i:0;" href="#home">home</a>
      <a style="--i:1;" href="#gadgets">Gadgets</a>
      <a style="--i:2;" href="#services">services</a>
      <a style="--i:3;" href="#Consultancy">Consultancy</a>
      <a style="--i:3;" href="#Delivery">Delivery</a>
      <a style="--i:4;" href="#Our team">Our team</a>
      <a style="--i:6;" href="#contact">contact Us</a>

    </nav>

  </header>

  <!-- header section ends -->

  <!-- home section starts  -->

  <section class="home" id="home">

    <div class="content">
      <h3>get it right.<br>
        first time. <br>
        everytime.
      </h3>
      
      <a href="" class="btn">discover more</a>
    </div>

    <div class="image">
      <img src="images/Avail.png" alt="">
    </div>

  </section>

  <!-- home section ends -->

  <!-- gadgets section starts  -->

  <section class="gadgets" id="gadgets">

    <h1 class="heading"> Gadgets </h1>

    <div class="box-container">

      <div class="box">

        <h3>Household light weight </h3>
        <img src="images/blender.jpg" alt="">
        <p>The light weight electronics services.</p>
        <button id="modal-open" data-micromodal-trigger="modal-1" class="btn">Click here</button>
      </div>

      <div class="box">

        <h3>Household heavy weight</h3>
        <img src="images/ac.jpg" alt="">
        <p>The heavy weight electronics services.</p>
        <a href="#" class="btn">Click here</a>
      </div>

      <div class="box">

        <h3>Mobile</h3>
        <img src="images/cellphone.jpg" alt="">
        <p>Mobile phone serveice here.</p>
        <a href="#" class="btn">Click here</a>
      </div>
      <div class="box">

        <h3>PC</h3>
        <img src="images/laptop.jpg" alt="">
        <p>The laptop and desktop services here.</p>
        <a href="#" class="btn">Click here</a>
      </div>
      <div class="box">

        <h3>Automobiles</h3>
        <img src="images/car.jpg" alt="">
        <p>The automobiles Services here</p>
        <a href="#" class="btn">Click here</a>
      </div>

    </div>

  </section>

  <!-- gadgets section edns -->

  <!-- service section starts  -->

  <section class="services" id="services">

    <h1 class="heading"> our services </h1>

    <div class="box-container">



      <div class="box-container">

        <div class="box">
          <img src="images/p1.png" alt="">
          <h3>Regular</h3>
          <div class="amount"></div>
          <p>Charge will be 10% from cost of the services </p>
          <a href="#" class="btn">select plan</a>
        </div>

        <div class="box">
          <img src="images/p2.png" alt="">
          <h3>Premium</h3>
          <div class="amount"></div>
          <p>Charge will be 10% from cost of the services. Cost of services will be increase.</p>
          <a href="#" class="btn">select plan</a>
        </div>

        <div class="box">
          <img src="images/p3.png" alt="">
          <h3>Emergency</h3>
          <div class="amount"></div>
          <p>Charge will be 12% from cost of the services.The delivery and service time will decrease</p>
          <a href="#" class="btn">select plan</a>
        </div>

      </div>

  </section>

  <!-- service section ends -->

  <!-- Consultancy section starts  -->

  <section class="Consultancy" id="Consultancy">

    <h1 class="heading">Consultancy team</h1>

    <div class="box-container">

        <div class="box">
          <img src="images/4.jpg" alt="">
          <h3>Akber Khan</h3>
          <span>Light Weight Service Provider</span>
          <p>This Man has 5 years of experiences in light weight Services </p>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
  
        <div class="box">
          <img src="images/3.jpg" alt="">
          <h3>Zunaid Hasan</h3>
          <span>Heavy Weight Service Provider</span>
          <p>This Man has 6 years of experiences in Heavy Weight Services</p>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
  
        <div class="box">
          <img src="images/2.jpg" alt="">
          <h3>Shariar Hasan</h3>
          <span>Mobile Service Provider</span>
          <p>This Man has 4 years of experiences in Mobile services</p>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
  
        <div class="box">
          <img src="images/1.jpg" alt="">
          <h3>Md Abdul Karim</h3>
          <span>PC  Service Provider</span>
          <p>This Man has 8 years of experiences in PC  Services</p>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/5.jpg" alt="">
          <h3>Nazim Uddin</h3>
          <span>Automobiles Service Provider</span>
          <p>This Man has 10 years of experiences in Automobiles Services</p>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
  
      </div>
      
  </section>

  <!--Consultancy section ends -->

  <section class="Delivery" id="Delivery">



  </section>

  <!-- team section starts  -->

  <section class="Our team" id="Our team">

    <h1 class="heading">our team</h1>

    <div class="box-container">

      <div class="box">
        <img src="images/tawhida.jpg" alt="">
        <h3>S.M.Tawhida Amin</h3>
        <span>CEO</span>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/lamia.jpg" alt="">
        <h3>Lamia Farhat Islam</h3>
        <span>Marketing Director</span>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/sadi.jpg" alt="">
        <h3>ASheikh Sadi Nurtaj</h3>
        <span>COO</p>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/hasibur.jpg" alt="">
        <h3>MD.Hasibur Rahman</h3>
        <span>CFO</span>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>
      <div class="box">
        <img src="images/rashid.jpg" alt="">
        <h3>Rashid Mobarrat</h3>
        <span>Accounting Manager</span>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

    </div>

  </section>

  <!-- team section ends -->







  </div>

  </section>

  <!-- price section ends -->

  <!-- contact section starts  -->

  <section class="contact" id="contact">

    <h1 class="heading">contact us</h1>

    <div class="row">

      <form action="">

        <div class="inputBox">
          <input type="text" required>
          <label>name</label>
        </div>

        <div class="inputBox">
          <input type="email" required>
          <label>email</label>
        </div>

        <div class="inputBox">
          <input type="number" required>
          <label>number</label>
        </div>

        <div class="inputBox">
          <textarea required name="" id="" cols="30" rows="10"></textarea>
          <label>message</label>
        </div>

        <input type="submit" class="btn" value="send message">

      </form>

      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1914228009387!2d90.35472651489638!3d23.811791192345297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c12015382851%3A0x3ceca92fcf1a72d2!2sBangladesh%20University%20of%20Business%20and%20Technology%20(BUBT)!5e0!3m2!1sen!2sbd!4v1668891808393!5m2!1sen!2sbd"
                                                                                                                              width="600"
                                                                                                                              height="450"
                                                                                                                              style="border:0;"
                                                                                                                              allowfullscreen=""
                                                                                                                              loading="lazy"
                                                                                                                              referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

  </section>

  <!-- contact section ends -->

  <!-- footer section  -->

  <div class="footer">

    <div class="box-container">

      <div class="box">
        <h3>about us</h3>
        <p>This is Avail team. We are starting services two years ago. We are now providing the best services in town. We have a well-educated and Expert consultancy 
          team. The feedback from the customer. Visit our website and try our services.
          </p>
      </div>

      <div class="box">
        <h3>quick links</h3>
        <a href="#">home</a>
        <a href="#">gadgets</a>
        <a href="#">services</a>
        <a href="#">cnsultancy</a>
        <a href="#">Our Team</a>

      </div>



      <div class="box">
        <h3>follow us</h3>
        <a href="#" class="fab fa-facebook-f"> facebook</a>
        <a href="#" class="fab fa-twitter"> twitter</a>
        <a href="#" class="fab fa-instagram"> instagram</a>
        <a href="#" class="fab fa-linkedin"> linkedin</a>
      </div>

    </div>

  </div>

  <!-- Modal -->

  <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <div class="modal__header">
          <h2 class="modal__title" id="modal-1-title">
            Describe Your Issue
          </h2>
          <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        </div>
        <main class="modal__content" id="modal-1-content">
          <form action="" method="post">
            <div class="ID">
              <input name="Full_Name" type="text" placeholder="Full name">
              <i class="far fa-user"></i>
            </div>
            <div class="ID">
              <input name="Email_address" type="email" placeholder="Email address">
              <i class="far fa-envelope"></i>
            </div>
            <textarea name="describe" cols=" 15" rows="5" placeholder="Describe here..."></textarea>
            <button>Send</button>
          </form>
        </main>
      </div>
    </div>
  </div>


  <!-- custom js file link  -->
  <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
  <script src="js/script.js"></script>
  <script>
    let openButtons = document.querySelectorAll('.gadgets .btn');
    openButtons.forEach(button => {
      button.addEventListener('click', () => {
        MicroModal.show('modal-1');
      });
    });
  </script>

</body>

</html>
