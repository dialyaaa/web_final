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
    <link rel="stylesheet" href="business.css?dqdqdq=qfqf">
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
              <i class="fa-solid fa-mug-hot" id="coff"></i>
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
  <i class="bx bx-log-out nav__icon"></i>
  <span class="nav__name">Log Out</span>
</a>
</nav>
</div>
<div class="dollar">

<!-- <img class="dol" src="3uaU.gif"> -->

</div>

<!--========== CONTENTS ==========-->
<section class="newbooks">
<div class="container">
<div class="top_title">
<div class="titleBusiness">
  <hr style="width:40%;background-color: #339999;border-width: 0px;height: 1px;">

<h3 >Business</h3>
<hr style="width:40%;background-color: #339999;border-width: 0px;height: 1px;">

</div>
</div>
<div class="newbooks_items">
<a href="b1.php" class="newbook_item">
    <img class="big_book" src="https://1757140519.rsc.cdn77.org/blog/wp-content/uploads/sites/2/2020/03/3.jpg" alt="">
    <div class="newbook_item-overlay">
      <h5>?????????? ????????????-????????????</h5>
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
  <a href="#!" class="newbook_item">
    <img class="big_book" src="https://1757140519.rsc.cdn77.org/blog/wp-content/uploads/sites/2/2018/01/11340969.cover_415.jpg" alt="">
    <div class="newbook_item-overlay">
      <h5>???? ???????? ?? ??????????????</h5>
      <h6>?????????? ????????</h6>
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
  <a href="#!" class="newbook_item">
    <img class="big_book" src="https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/h2f/hff/62272412024862/hej-l-stan-scastlivym-za-21-den-samyj-polnyj-kurs-lubvi-k-sebe-26011930-1-Container.jpg" alt="">
    <div class="newbook_item-overlay">
      <h5>?????????? ???????????????????? ???? 21 ????????</h5>
      <h6>?????????? ??????</h6>
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
  <a href="#!" class="newbook_item">
    <img class="big_book" src="https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/h52/h62/50362817937438/ok-an-ly-s-r-k-ni-di-semde-103565569-1.jpg" alt="">
    <div class="newbook_item-overlay">
      <h5>???? ?????????????? ????????????</h5>
      <h6>?????????? ?????????????? </h6>
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
  <a href="#!" class="newbook_item">
    <img class="big_book" src="https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/h1f/h3c/47641427804190/-jlenbej-t-ryp-jren-103102345-1.jpg" alt="">
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
  <a href="#!" class="newbook_item">
    <img class="big_book" src="https://1757140519.rsc.cdn77.org/blog/wp-content/uploads/sites/2/2018/01/fde165abe799a864c2cd449e547cfadc.jpg" alt="">
    <div class="newbook_item-overlay">
      <h5>?????????????? ????????????????????</h5>
      <h6>?????????????? ??.????????????????????</h6>
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
  <a href="#!" class="newbook_item">
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
   
<a href="#!" class="newbook_item">
    <img class="big_book" src="./assets/img/richdad.jpg" alt="">
    <div class="newbook_item-overlay">
      <h5>Rich Dad Poor Dad</h5>
      <h6>Robert T.Kiyosaki</h6>
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
</div>
</div>
</section>

<div class="val">

<div class="currency">
<a class="textForcurrency">
  
  CURRENCY EXCHANGE</a>
  <div style="height: 20px;width: 80px;display: flex;justify-content: center;align-items: center;margin-left: 120px;"><img src="http://www.vexillographia.ru/buttons/kaz_anim.gif"></div>
<div class="part2">
  <div class="block">
    <div class="textForTitle">Purchase</div>
  <div class="part textForC">469.50</div>
  <div class="part textForC">467.50</div>
  <div class="part textForC">63.00</div>
  <div class="part textForC">7.15</div>
  <div class="part textForC">5.65</div>
 
</div>
<div class="valll">
  <!-- <div class="partForMid"><img src="http://www.vexillographia.ru/buttons/kaz_anim.gif"></div> -->
 <div class="partForMid"><img src="https://kurs.zakon.kz/img/country_flags/usd.svg"></div>
  <div class="partForMid"><img src="https://kurs.zakon.kz/img/country_flags/eur.svg"></div>
  <div class="partForMid"><img src="https://kurs.zakon.kz/img/country_flags/cny.svg"></div>
  <div class="partForMid"><img src="https://kurs.zakon.kz/img/country_flags/rub.svg"></div>
  <div class="partForMid"><img src="https://kurs.zakon.kz/img/country_flags/kgs.svg"></div>
</div>
<div class="block ">
  <div class="textForTitle">Sale</div>
 <div class="part textForC ">474.50</div>
  <div class="part textForC">475.50</div>
  <div class="part textForC">71.00</div>
  <div class="part textForC">7.65</div>
  <div class="part textForC">6.25</div>

</div>
</div>
</div>
<div >
<div  style="position:relative;overflow:hidden;"><a href="https://yandex.kz/maps/162/almaty/search/%D0%B2%D0%B0%D0%BB%D1%8E%D1%82%D1%8B/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">???????????? ?? ????????????</a><a href="https://yandex.kz/maps/162/almaty/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">????????????</a>
<iframe class='business-map' src="https://yandex.kz/map-widget/v1/-/CCUn58GF2C" width="900" height="500" frameborder="1" allowfullscreen="true" style="position:relative; border-radius: 10px;margin-left: 70px;"></iframe></div> </div>
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
