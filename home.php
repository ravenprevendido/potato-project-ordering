<?php
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home panel</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>



<?php include 'header.php'; ?>
<body>
  <div class="container">
    <section class="home">
      <h1 class="heading"></h1>
      <div class="box-container">
        <div class="title">"Summer's better with <br /> your favorite food order Now!
        </div>
        <img class="img img-two" src="images/logo-pic-lng.png" alt="">
      </div>
      <div class="button-button">Get started</div>
      <div class="css-quote" style="left: 46px; top: 380px; position: absolute; color: black; font-size: 20px; font-family: Cabin; font-weight: 400; word-wrap: break-word">good quality, serving trusting to customer<br /> who loved to order </div>
  </div>
  </section>
  </div>

  <section class="reviews">
    <h1 class="heading"> Reviews</h1>
    <div class="testimonials">
      <div class="testimonial-inner">

        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonial">
              <img src="https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
              <div class="name">Jose datebayo</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>"I’m really impressed with the quality of the food and how fresh everything tasted. The delivery was fast, and my order was exactly as I requested. I’ll definitely be ordering from here again—great experience overall!"</p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="https://images.pexels.com/photos/3585325/pexels-photo-3585325.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
              <div class="name">Venus dawson</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p>"The food was delicious and exactly what I was hoping for. The delivery was a little delayed, but the customer service was helpful in keeping me updated. I’ll definitely order again—just hope the timing improves next time!"</p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="https://images.pexels.com/photos/2690323/pexels-photo-2690323.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
              <div class="name">John Waddrob</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>"The meal was great—fresh and delicious—but I noticed a little bit of spillage due to the packaging not being completely secure. Other than that, I’m really happy with the service and will definitely order again."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="payment">
    <div id="pwrap">
      <p class="title-p">Delivery and payment</p>
      <p class="description">Enjoy hassle-free payment with the plenitude of payment options available for you. Get live tracking and locate your food on a live map. It's quite a sight to see your food arrive to your door. Plus, you get a 5% discount on every order every time you pay online.</p>

      <div class="paymentcontainer">
        <div class="carditem"><img src="https://cdn0.iconfinder.com/data/icons/credit-8/512/17_credit-256.png"></div>
        <div class="carditem"><img src="https://cdn0.iconfinder.com/data/icons/credit-8/512/4_credit-256.png"></div>
        <div class="carditem"><img src="https://cdn0.iconfinder.com/data/icons/credit-8/512/8_credit-256.png"></div>
        <div class="carditem"><img src="https://cdn0.iconfinder.com/data/icons/credit-8/512/16_credit-256.png"></div>
        <div class="carditem"><img src="images/gcash.png"></div>
      </div>
    </div>
  </section>
  <section class="contact-us">
      <form action="" class="my-form">
        <div class="container-content">
            <h1 class="heading">Get in Touch</h1>
            <ul>
              <li>
              <select name="" id="">
                <option selected disabled>-- Please choose an option</option>
                <option>Request Quote</option>
                <option>Send Resume</option>
                <option>Other</option>
              </select>
              </li>
              <li>
                <div class="grid grid-2">
                  <input type="text" placeholder="Name" required>
                  <input type="text" placeholder="Surname" required>
                </div>
              </li>
              <li>
              <div class="grid grid-2">
                  <input type="email" placeholder="Email" required>
                  <input type="tel" placeholder="Phone" required>
                </div>
              </li>
              <li>
                <textarea placeholder="Message"></textarea>
              </li>

              <li>
                <input type="checkbox" id="terms">
                <label for="terms">I have read and agreed with <a href="">the terms and condition</a></label>
              </li>
            <li>
              <div class="grid grid-3">
                <div class="required-msg"></div>
                <button class="btn-grid" type="submit" disabled>
                  <span class="back">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
                  </span>
                  <span class="front">SUBMIT</span>
                </button>
                <button class="btn-grid" type="submit" disabled>
                  <span class="back">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
                  </span>
                  <span class="front">CANCEL</span>
                </button>
              </div>
            </li>
            </ul>
        </div>
      </form>
  </section>

  <!--FOOTER-->
  <footer>
    <div class="top_header">
      <section>
        <span><i class="fa fa-map-marker"></i></span>
        <span>talon tres, admiral Las pinas city</span>
      </section>
      <section>
        <span><i class="fa fa-phone"></i></span>
        <span>091282828371</span>
      </section>
      <section>
        <span><i class="fa fa-envelope"></i></span>
        <span>potato@gmail.com</span>
      </section>
    </div>
    <span class="border-shape"></span>
    <div class="bottom_content">
      <section>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-telegram"></i></a>
      </section>
      <section>
        <a href="#">Home</a>
        <a href="#">About us</a>
        <a href="#">Order</a>
        <a href="#">Retail</a>
        <a href="#">Member</a>
        <a href="#">Contact Us</a>
      </section>
    </div>
    <div class="copyright">
      2024 potato - All rights reserved
    </div>
  </footer>
  <!-- <section class="follow-us">
        <h1 class="heading">Follow Us</h1>
    </section> -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="js/form..js"></script>
  <script src="js/script.js"></script>
</body>

</html>