<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Thiết Kế Web</title>
      <meta property="og:type" content="website" />
      <meta property="og:locale" content="en_US" />
      <meta property="og:title" content="Thiết Kế Web" />
      <meta property="og:image" content="assets/images/logo.png" />
      <link rel="stylesheet" href="assets/css/all.css">
      <link rel="stylesheet" href="assets/css/style.css-id=d60e5fc0922786cb4e22.css"  type="text/css">
      <script async src="assets/js/js-id=UA-120147319-7.js" ></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-120147319-7');
      </script>
      <script async src="assets/js/api.js" ></script>
   </head>
   <body>
      <header class="site-header">
         <div class="c-header__top">
            <ul class="search-main-menu">
               <li>
                  <form id="blog-post-search" class="ajax manga-search-form" action="#" method="get">
                     <input type="text" placeholder="Search..." name="s" value="" class="manga-search-field ui-autocomplete-input" autocomplete="off" required>
                     <a href="javascript:void(0)" class="close-form-search"><i class="fas fa-times"></i></a>
                     <button type="submit"><i class="fas fa-search"></i></button>
                     <div class="loader-inner line-scale">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                     </div>
                     <div class="ui-menu" style="display: none;"></div>
                  </form>
               </li>
            </ul>
            <div class="main-navigation style-1 ">
               <div class="container ">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="main-navigation_wrap">
                           <div class="wrap_branding">
                              <a class="logo" href="../saytruyen"  title="Mô hình thiết kế web">
                                 <h1 class="m-0 h-home"><img width="159" height="30" class="img-responsive" src="assets/images/logo.png" ></h1>
                              </a>
                           </div>
                           <div class="main-menu">
                              <ul class="nav navbar-nav main-navbar">
                                 <li>
                                    <a href="?controller=genre">Thể Loại</a>
                                 </li>
                                 <li>
                                    <a href="?controller=">Hoàn Thành</a>
                                 </li>
                                 <li>
                                    <a href="../saytruyen/history.php" tppabs="https://saytruyen.net/history">Lịch Sử</a>
                                 </li>
                                 <li>
                                    <a href="../saytruyen/history.php" data-toggle="modal" data-target="#form-login">Đang theo dõi</a>
                                 </li>
                                 <li class="up-manga">
                                    <a href="javascript:if(confirm(%27https://saytruyen.net/user-panel  \nBạn có muốn mở%27))window.location=%27https://saytruyen.net/user-panel%27" tppabs="https://saytruyen.net/user-panel" class="menu-link  main-menu-link"> Đăng Truyện </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="custom-control custom-switch toggle-contrast">
                              <input type="checkbox" class="custom-control-input" id="darkSwitch">
                              <label class="custom-control-label"></label>
                           </div>
                           <div class="search-navigation search-sidebar">
                              <ul class="main-menu-search nav-menu">
                                 <li class="menu-search">
                                    <a href="javascript:;" class="open-search-main-menu">
                                       <i class="fas fa-search"></i>
                                    <i class="icon ion-android-close"></i> </a>
                                    <ul class="search-main-menu">
                                       <li>
                                          <form class="manga-search-form search-form ajax" action="https://saytruyen.net/search" method="get">
                                             <input class="manga-search-field ui-autocomplete-input" type="text" placeholder="Search..." name="s" value="" autocomplete="off">
                                             <input type="hidden" name="post_type" value="wp-manga"> <i class="fas fa-search"></i>
                                             <div class="loader-inner ball-clip-rotate-multiple">
                                                <div></div>
                                                <div></div>
                                             </div>
                                             <input type="submit" value="Search">
                                             <ul id="ui-id-2" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul>
                                          </form>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <div class="c-togle__menu">
                              <button type="button" class="menu_icon__open">
                              <span></span> <span></span> <span></span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="mobile-menu off-canvas">
            <div class="close-nav">
               <button class="menu_icon__close">
               <span></span> <span></span>
               </button>
            </div>
            <div class="c-modal_item">
               <span class="c-modal_sign-in">
               <a href="#" data-toggle="modal" data-target="#form-login" class="btn-active-modal">Đăng Nhập</a>
               </span>
               <span class="c-modal_sign-up">
               <a href="javascript:void(0)" data-toggle="modal" data-target="#form-sign-up" class="btn-active-modal">Đăng Kí</a>
               </span>
            </div>
            <nav class="off-menu">
               <ul id="menu-main-menu-1" class="nav navbar-nav main-navbar">
                  <li>
                     <a href="?controller=genre"class="menu-link  main-menu-link"> Thể Loại </a>
                  </li>
                  <li>
                     <a href=""class="menu-link  main-menu-link"> Hoàn Thành </a>
                  </li>
                  <li>
                     <a href=""class="menu-link  main-menu-link"> Lịch Sử </a>
                  </li>
                  <li>
                     <a href="javascript:void(0)" data-toggle="modal" data-target="#form-login">Đang theo dõi</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="sub-header-nav with-border">
            <div class="container">
               <div class="sub-nav_content">
                  <ul class="sub-nav_list list-inline second-menu">
                     <li>
                        <a href="">Manhwa</a>
                     </li>
                     <li>
                        <a href="">Manga</a>
                     </li>
                     <li>
                        <a href="">Manhua</a>
                     </li>
                     <li>
                        <a href="">Romance</a>
                     </li>
                  </ul>
               </div>
               <div class="c-modal_item">
                  <a href="javascript:void(0)" data-toggle="modal" data-target="#form-login" class="btn-active-modal">Đăng Nhập</a>
                  <a href="javascript:void(0)" data-toggle="modal" data-target="#form-sign-up" class="btn-active-modal">Đăng Kí</a>
               </div>
            </div>
         </div>
      </header>