<?php
include "libs.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="detective.css" />
    <title>JIHC</title>
  </head>
  <body>
    <!--========== HEADER ==========-->
    <header class="header">
      <div class="header__container">
        <div class="user">
          <?php
            if (check()) {
              echo ' <a class="header__user" href="#">'.$_COOKIE['username'].'</a>';
          } else {
          echo ' <a class="header__user" href="login.php">Log in</a>';
          }
          ?>
        </div>
        <a href="index.php" class="header__logo"><span>inno</span>Book</a>
        <div class="header__search">
          <input
            type="search"
            placeholder="Search for books or authors..."
            class="header__input"
          />
          <i class="bx bx-search header__icon"></i>
        </div>
        <div class="header__toggle">
          <i class="bx bx-menu" id="header-toggle"></i>
        </div>
      </div>
    </header>
    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
      <nav class="nav__container">
        <div>
          <a href="index.php" class="nav__link nav__logo">
            <i class="bx bx-book-open nav__icon"></i>
            <span class="nav__logo-name">
              <span class="logo_inno">inno</span>Book
            </span>
          </a>
          <div class="nav__list">
            <div class="nav__items">
              <h3 class="nav__subtitle">Discover</h3>
              <a href="index.php" class="nav__link active">
                <i class="bx bx-home nav__icon"></i>
                <span class="nav__name">Home</span>
              </a>

              <a href="#" class="nav__link">
                <i class="bx bx-search nav__icon"></i>
                <span class="nav__name">Browse</span>
              </a>
              <a href="coffee.html" class="nav__link">
              <i class="fa-solid fa-mug-hot nav__icon" id="coff"></i>
                <span class="nav__name">Coffee</span>
              </a>
            </div>
            <div class="nav__items">
              <h3 class="nav__subtitle">Library</h3>
              <a href="allbooks.php" class="nav__link">
                <i class="bx bx-book-alt nav__icon"></i>
                <span class="nav__name">All books</span>
              </a>
              <a href="newbooks.php" class="nav__link">
                <i class="bx bx-plus-circle nav__icon"></i>
                <span class="nav__name">New books</span>
              </a>
            </div>
          </div>
        </div>

        <a href="#" class="nav__link nav__logout">
          <?php   
          if (check()) {
            echo '<a href="logout.php" class="nav__link nav__logout">
          <i class="bx bx-log-out nav__icon"></i>
          <span class="nav__name">Log Out</span>
        </a>';
          }
         ?>
        </a>
      </nav>
    </div>
 <div class="detective">
      <video src="detective.mp4" type="video/mp4" autoplay muted loop></video>
      <div class="effects"></div>
      <div class="detective__content">
         <h1>Detective</h1>
      </div>
   </div>
    <section class="newbooks">
      <div class="container">
      <div class="newbooks_items">
      <a href="agatha.php" class="newbook_item">
  <img class="big_book" src="./assets/img/??????????????????????????????????????????????????????.jpg" alt="">
  <div class="newbook_item-overlay">
    <h5>???????????????? ?? ???????????????????? ????????????????????</h5>
    <h6>?????????? ????????????</h6>
    <div class="newbook_item-rateing">
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star-half'></i>
    </div>  
    <button>View</button>
  </div>
</a>
<a href="agatha1.php" class="newbook_item">
  <img class="big_book" src="./assets/img/????????????????????????????.jpg" alt="">
  <div class="newbook_item-overlay">
    <h5>???????????? ????????????????</h5>
    <h6>?????????? ????????????</h6>
    <div class="newbook_item-rateing">
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
    </div>  
    <button>View</button>
  </div>
  <a href="snowman.php" class="newbook_item">
  <img class="big_book" src="./assets/img/????????????????.jpg" alt="">
  <div class="newbook_item-overlay">
    <h5>????????????????</h5>
    <h6>?? ??????????</h6>
    <div class="newbook_item-rateing">
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star-half'></i>
    </div>  
    <button>View</button>
  </div>
</a>
<a href="dan.php" class="newbook_item">
  <img class="big_book" src="./assets/img/??????????????????????????.jpg" alt="">
  <div class="newbook_item-overlay">
    <h5>??????????????????????????</h5>
    <h6>?????? ??????????</h6>
    <div class="newbook_item-rateing">
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
    </div>  
    <button>View</button>
  </div>
</a>
<a href="mercedes.php" class="newbook_item">
  <img class="big_book" src="./assets/img/????????????_????????????????.jpg" alt="">
  <div class="newbook_item-overlay">
    <h5>???????????? ????????????????</h5>
    <h6>???????????? ????????</h6>
    <div class="newbook_item-rateing">
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
    </div>  
    <button>View</button>
  </div>
</a>
<a href="patient.php" class="newbook_item">
  <img class="big_book" src="./assets/img/???????????????????? ??????????????.jpg" alt="">
  <div class="newbook_item-overlay">
    <h5>???????????????????? ??????????????</h5>
    <h6>?????????? ????????????????????</h6>
    <div class="newbook_item-rateing">
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
    </div>  
    <button>View</button>
  </div>
</a>
<a href="steven.php" class="newbook_item">
  <img class="big_book" src="./assets/img/??????????.jpg" alt="">
  <div class="newbook_item-overlay">
    <h5>???????? ?????????????? ?????? ?????????? ???? ????????????????</h5>
    <h6>???????????? ????????</h6>
    <div class="newbook_item-rateing">
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
    </div>  
    <button>View</button>
  </div>
</a>
<a href="arthur.php" class="newbook_item">
  <img class="big_book" src="./assets/img/????????.jpg" alt="">
  <div class="newbook_item-overlay">
    <h5>???????? ?? ???????????????? ??????????</h5>
    <h6>?????????? ?????????? ????????</h6>
    <div class="newbook_item-rateing">
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
    </div>  
    <button>View</button>
  </div>
</a>

      </div>
      </div>
    
      <hr style="border: 2px solid #339999;">
</section>
<div class="d_movies">
<h1 class="d">you may also like: </h1>
</div>
<div class="columns">
<div class="column">
  <video src="????????????. ?????????????? ????????????. ???????????????????? ??????????.mp4" type="video/mp4" autoplay muted loop style="border-radius: 30px; width: 400px; height: 300px;"></video>
  <br>
  <a href="https://sherlock-online.ru/" >Sherlock</a>
  <h5 >Sherlock is a British mystery crime drama television series based on Sir Arthur Conan Doyle's Sherlock Holmes detective stories.</h5>
</div>
<div class="column">
  <video src="knives_out.mp4" type="video/mp4" autoplay muted loop style="border-radius: 10px; width: 400px; height: 300px;"></video>
  <br>
  <a href="https://kinobar.vip/18076-nozhi-nagolo-1-v9.html">Knives out</a>
<h5>Knives Out is a 2019 American mystery film written and directed by Rian Johnson and produced by Johnson and Ram Bergman. </h5>
        </div>
        <div class="column">
          <video src="Murder_on_the_Orient_Express.mp4" type="video/mp4" autoplay muted loop style="border-radius: 10px; width: 400px; height: 300px;"></video>
          <br>
          <a href="https://kinobar.vip/12728-ubiystvo-v-vostochnom-ekspresse-v2.html">Murder on the Orient Express</a>
          <h5>Murder on the Orient Express is a 2017 mystery film directed by Kenneth Branagh with a screenplay by Michael Green, based on the 1934 novel of the same name by Agatha Christie.</h5>
        </div>
      </div>

    <section class="page_numbers">  
      <div class="container">
        <div class="page_items">
          <div class="page_back">
            <a href="#!"><i class="fas fa-chevron-left"></i></a>
          </div>
          <div class="page_number">
            <a class="active" href="#!">1</a>
            <a href="#!">2</a>
            <a href="#!">3</a>
            <a href="#!">4</a>
            <a href="#!">...</a>
            <a href="#!">23</a>
          </div>
          <div class="page_forward">
            <a href="#!"><i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </section>
    <div class="footer">
      <div class="container">
        <a href="index.php"><span>inno</span>Book</a>
      </div>
    </div>
    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
  </body>
</html>