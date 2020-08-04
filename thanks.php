<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour Plan - Hotel Booking</title>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=2dfa9b75-96cd-44a3-8c50-de51562f5566&lang=ru_RU"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Muli:wght@300;400;600;700&family=Nunito:wght@400;600;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <header class="navbar navbar--mobile--fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="index.html" class="logo">
            <img
              src="img/horizontal-logo.svg"
              alt="Logo: Best Tour Plan"
              class="logo__image"
            />
          </a>

          <form
            action="#"
            class="search navbar__search navbar__search--mobile--hidden"
          >
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="Icon: search" />
            </button>
          </form>

          <a href="#" class="user navbar__user navbar__user--mobile--hidden">
            <img
              src="img/user-avatar.jpg"
              alt="Avatar: Nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->
      <div class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <a
                href="#"
                class="user navbar__user navbar__user--mobile--visible"
              >
                <img
                  src="img/user-avatar.jpg"
                  alt="Avatar: Nathan"
                  class="user__avatar"
                />
                <span class="user__name user__name--light">Nathan</span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <form
                action="#"
                class="search navbar__search navbar__search--mobile--visible"
              >
                <input
                  type="text"
                  class="search__input search__input--mobile"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img src="img/search.svg" alt="Icon: search" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
          <!-- /.navbar-menu -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.navbar-bottom -->
    </header>
    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">
            Grand Hilton Hotel
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.breadcrumb -->
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <h1 class="hotel-name hotel-info__hotel-name">
                <?php  
                  $type = $_GET['request']; 
                  if ($type == "subscribe") {
                    echo "Подписка оформлена!";
                    $text = "Мы будем информировать вас о наших новостях";
                  }
                  if ($type == "send") {
                    echo "Сообщение отправлено!";
                    $text = "Наш менеджер позвонит вам через 10 минут";
                  }
                ?>
              </h1>
            </div>
            <p class="hotel-info__description">
            <?php 
              echo $text;              
            ?>
            </p>
            
          </div>
          <!-- /.hotel-info__text -->
        </div>
        <!-- /.hotel-info -->

      </div>
      <!-- /.container -->
    </section>
    <!-- /.hotel -->


    <footer class="footer">
      <div class="container">
        <div class="footer-wrapper">
          <img
            src="img/vertical-logo.svg"
            alt="Logo: Best Tour Plan"
            class="logo footer__logo"
          />
          <div class="footer__list footer__categories">
            <h3 class="footer__title">ALL CATEGORIES</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">All Deals</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotels</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Activities</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Spa Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotel Day Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Restaurants</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Fitness</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Rodrigues</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__list footer__additional">
            <h3 class="footer__title">ADDITIONAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">About Us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Contact Us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">How does it work?</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Frequently Asked Questions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Deals.mu loyalty program</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link"
                  >Promote your Business on BTP</a
                >
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__social-network">
            <h3 class="footer__title footer__title--inline">Social Network</h3>
            <div class="footer__social-links">
              <a href="https://www.facebook.com/" class="footer__link"
                ><img src="img/facebook.svg" alt="Icon: facebook"
              /></a>
              <a href="https://www.youtube.com/" class="footer__link"
                ><img src="img/youtube.svg" alt="Icon: youtube"
              /></a>
              <a href="https://www.instagram.com/" class="footer__link"
                ><img src="img/instagram.svg" alt="Icon: instagram"
              /></a>
            </div>
            <!-- /.footer__social-links -->
          </div>
          <!-- /.footer__social-network -->
          <div class="footer__list footer__legal">
            <h3 class="footer__title">LEGAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">Terms & Conditions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Disclaimer</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Cancellation policy</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Privacy</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__contact-details">
            <h3 class="footer__title footer__title--mb-3">Contact Details</h3>
            <p class="footer__text">
              Feel free to contact us by phone, email or by our contact form
            </p>
            <ul class="footer__ul">
              <li class="footer__item footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img
                    class="footer__icon"
                    src="img/map-marker.svg"
                    alt="icon: map"
                  />
                </div>
                9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United
                States
              </li>
              <li class="footer__item footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img
                    class="footer__icon"
                    src="img/contact-phone-call.svg"
                    alt="icon: phone-call"
                  />
                </div>
                Tel (business hours) : 269 1500 <br />
                Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00
                pm) <br />
                Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm)
              </li>
              <li class="footer__item footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img
                    class="footer__icon"
                    src="img/email.svg"
                    alt="icon: email"
                  />
                </div>
                cherly.lawson@example.com
              </li>
            </ul>
          </div>
          <!-- /.footer__contact-details -->
          <div class="footer__contact-form">
            <h3 class="footer__title footer__title--mb-3">Send us a message</h3>
            <form action="send.php" method="POST" class="form footer__form">
              <div class="footer__input-group">
                <input
                  type="text"
                  class="input footer__input"
                  placeholder="Your Full Name*"
                  name="name"
                  required
                />
              </div>
              <!-- /.footer__input-group -->
              <div class="footer__input-group">
                <input
                  type="tel"
                  class="input footer__input"
                  placeholder="Phone Number*"
                  name="phone"
                  data-mask="+7 (000) 000-00-00"
                  required
                />
              </div>
              <!-- /.footer__input-group -->
              <textarea
                class="message footer__message"
                placeholder="Message"
                name="message"
              ></textarea>
              <button
                class="button footer__button"
                type="submit"
                name="form"
                value="send"
              >
                Send
              </button>
              <span class="footer__info">* Required Fields</span>
            </form>
          </div>
          <!-- /.footer__contact-form -->
        </div>
        <!-- /.footer-wrapper -->
        <div class="footer__bottom bottom">
          <ul class="bottom__list">
            <li class="bottom__item">
              <a href="#" class="bottom__link">Disclaimer</a>
            </li>
            <li class="bottom__item">
              <a href="#" class="bottom__link">Conditions of use</a>
            </li>
            <li class="bottom__item">
              <a href="#" class="bottom__link">Cancellation policy</a>
            </li>
          </ul>
          <img
            src="img/bottom-icons.png"
            alt="bottom icons"
            class="bottom__icons"
          />
        </div>
        <!-- /.footer__bottom -->
      </div>
      <!-- /.container -->
    </footer>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
  </body>
</html>
