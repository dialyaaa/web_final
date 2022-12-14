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
    <link rel="stylesheet" href="psychology.css?jhkjhk=ghmghgh">
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

    <!--========== CONTENTS ==========-->
    <div class="video-bg">
      <video src="video-bg.mp4" type="video/mp4" autoplay muted loop></video>
      <div class="effects"></div>
      <div class="video-bg__content">
         <h2 class="black">psychology</h2>
      </div>
   </div>
   <hr style="width:80%;background-color: #339999;border-width: 0px;height: 1px;">
    <section class="newbooks">
      <div class="container">
      
      <div class="newbooks_items">
        <a href="ps1.php" class="newbook_item">
          <img class="big_book" src="./assets/img/????????.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>???? ????</h5>
            <h6>???????? ??????????????</h6>
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
        <a href="ps2.php" class="newbook_item">
          <img class="big_book" src="./assets/img/??????????.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>???? ??????</h5>
            <h6>???????? ??????????????</h6>
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
        <a href="ps3.php" class="newbook_item">
          <img class="big_book" src="./assets/img/??????????????????????????????????????.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>?????????? ???? ???????? ????????????????</h5>
            <h6>???????????? ????????????</h6>
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
        <a href="ps4.php" class="newbook_item">
          <img class="big_book" src="./assets/img/????????????????????????????????????????.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>?????????? ?????????????? ?????????????? ?? ????????????????</h5>
            <h6>???????????? ?????????????? ??????????????</h6>
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
        <a href="ps5.php" class="newbook_item">
          <img class="big_book" src="./assets/img/????????????????.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>???????????? ?????????????????? ??????????????????</h5>
            <h6>???????? ????????????</h6>
            <div class="newbook_item-rateing">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>              
              <i class='bx bx-star'></i>
            </div>  
            <button>View</button>
            
          </div>
        </a>
        <a href="ps6.php" class="newbook_item">
          <img class="big_book" src="https://cv9.litres.ru/pub/c/elektronnaya-kniga/cover_415/62780292-olga-primachenko-k-sebe-nezhno-kniga-o-tom-kak-cenit-i-berech-sebya.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>?? ???????? ??????????</h5>
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
        <a href="ps7.php" class="newbook_item">
          <img class="big_book" src="https://cv4.litres.ru/pub/c/audiokniga/cover_415/63995641-tatyana-muzhickaya-roman-s-samim-soboy-kak-uravnovesit-vnutrennie-63995641.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>?????????? ?????????? ??????????</h5>
            <h6>?????????????? ????????????????</h6>
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
        <a href="ps8.php" class="newbook_item">
          <img class="big_book" src="https://cv3.litres.ru/pub/c/audiokniga/cover_415/49652437-tatyana-muzhickaya-mne-vse-lzya-49652437.jpg" alt="">
          <div class="newbook_item-overlay">
            <h5>?????? ?????? ????????</h5>
            <h6>?????????????? ????????????????</h6>
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
    </section>

    <hr style="width:80%;background-color: #339999;border-width: 0px;height: 1px;">
    <div class="course">
      <div class="container">
        <div class="coursetext-items" style="display:flex; justify-content:space-evenly;">
            <div class="courseText">
              <a href="https://psy-practice.com/" target="_blank">Psy-practice</a>
              <br>
              
              A very useful resource where you can not only read articles on psychology and psychotherapy
          </div>
          <div class="hrp"></div>
          <div class="courseText">
              <a href="https://monocler.ru/category/psychology/" target="_blank"> Monocler</a>
              <br>
              Thematic section of a class resource about culture, man and society.
          </div>
          <div class="hrp"></div>
          <div class="courseText">
              <a href="http://psychologytoday.ru/" target="_blank"> Psychology today</a>
              <br>
              An online magazine dedicated to your favorite subject - yourself.
          </div>
        </div>
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
