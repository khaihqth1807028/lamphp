
<div id="content-block">

    <div class="content-center fixed-header-margin">
        <!-- HEADER -->
        <div class="header-wrapper style-14">
            <header class="type-4">
                <div class="header-top">
                    <div class="header-top-entry">
                        <div class="title"><img src="img/flag-lang-1.png" alt="" />English<i class="fa fa-caret-down"></i></div>
                        <div class="list">
                            <a href="#" class="list-entry"><img src="img/flag-lang-2.png" alt="" />French</a>
                            <a href="#" class="list-entry"><img src="img/flag-lang-3.png" alt="" />Ukrainian</a>
                        </div>
                    </div>
                    <div class="header-top-entry">
                        <div class="title"><b>Currency:</b> $ USD<i class="fa fa-caret-down"></i></div>
                        <div class="list">
                            <a href="#" class="list-entry">$ CAD</a>
                            <a href="#" class="list-entry">&#8364; EUR</a>
                        </div>
                    </div>
                    <div class="header-top-entry hidden-xs">
                        <div class="title"><i class="fa fa-phone"></i>Any question? Call Us <a href="tel:+987123654"><b>+987 123 654</b></a></div>
                    </div>

                    <div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
                    <div class="clear"></div>
                </div>

                <div class="header-middle">
                    <div class="logo-wrapper">
                        <a id="logo" href="#"><img src="img/logo-12.png" alt="" /></a>
                    </div>

                    <div class="right-entries">
                        <a class="header-functionality-entry open-search-popup" href="#"><i class="fa fa-search"></i><span>Search</span></a>
                        <a class="header-functionality-entry" href="#"><i class="fa fa-copy"></i><span>Compare</span></a>
                        <?php
                        if (isset($_SESSION['account'])==false){?>
                        <a class="header-functionality-entry" href="index.php?controller=Account&action=RegisterForm"><i class="fa fa-heart-o"></i><span>Đăng kí</span></a>
                        <?php } elseif(isset($_SESSION['account'])==true){ ?>
                            <a class="header-functionality-entry" href="index.php?controller=Account&action=Profile"><i class="fa fa-heart-o"></i><span>Profile</span></a>

                  <?php     } ?>

                        <a class="header-functionality-entry open-cart-popup" href="#"><i class="fa fa-shopping-cart"></i><span>My Cart</span> <b>$255,99</b></a>
                    </div>

                </div>

                <div class="close-header-layer"></div>
                <div class="navigation">
                    <div class="navigation-header responsive-menu-toggle-class">
                        <div class="title">Navigation</div>
                        <div class="close-menu"></div>
                    </div>
                    <div class="header-simple-search hidden-xs hidden-sm hidden-md">
                        <div class="row">
                            <div class="col-md-3 col-md-push-9">

                                <script type="text/javascript">
                                    function search() {
                                        key = document.getElementById("key").value;
                                        location.href = "index.php?controller=Products&action=Search&key=" + key;
                                        return false;
                                    }
                                    function searchForm(event) {
                                        //neu keypress la enter
                                        if (event.keyCode == 13) {
                                            key = document.getElementById("key").value;
                                            alert(key);
                                             location.href = "index.php?controller=Products&action=Search&key=" + key;
                                        }
                                        return false;
                                    }

                                </script>
                                <!--<form method="post" id="frm" action="">-->
                                <style type="text/css">
                                    #box-search{
                                        position: relative;
                                    }
                                    #box-search ul{ margin-left:0px; margin-top: 8px; width: 96%;padding:0px;list-style: none; position: absolute; z-index: 10; display: none;}
                                    #box-search img{width: 70px;}
                                    #box-search ul li{border-bottom: 1px solid #dddddd;
                                        background: black;margin-left: -13px;width: 100%}
                                </style>
                                <div id="box-search" class="simple-search-form">
<!--                                    <form>-->
                                        <input type="text"  onkeyup="ajaxSearch();" onkeypress="searchForm(event);" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" >
                                        <div class="simple-submit">
                                            <i class="fa fa-search"></i>
                                            <input type="submit"  onclick="return search();">
                                        </div>
                                        <ul id="ajax-search" style="">
                                            <li><a style="color: white;font-size: 12px" href="#"><img src="../Assets/Upload/Products/1595012825NIKEAIR.jpg">Iphone XS LESSSSSSS</a></li>
                                            <li><a style="color: white;font-size: 12px" href="#"><img src="../Assets/Upload/Products/1595012825NIKEAIR.jpg"> Iphone XS Max</a></li>
                                            <li><a style="color: white;font-size: 12px" href="#"><img src="../Assets/Upload/Products/1595012825NIKEAIR.jpg"> Iphone XS Max</a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        function ajaxSearch(){
                            var key = document.getElementById("key").value;
                            if(key != ""){
                                $.ajax({
                                    url: "ajax.php?key="+key,
                                    success: function( result ) {
                                        $("#ajax-search").empty();
                                        $("#ajax-search").append(result);
                                    }
                                });
                                document.getElementById("ajax-search").setAttribute("style","display:block");

                            }else{
                                document.getElementById("ajax-search").setAttribute("style","display:none");

                            }
                        }
                    </script>
                    <div class="nav-overflow">
                        <nav>
                            <ul>
                                <li class="full-width">
                                    <a href="#" class="active">Home</a><i class="fa fa-chevron-down"></i>
                                    <div class="submenu">
                                        <div class="full-width-menu-items-right">
                                            <div class="menu-slider-arrows">
                                                <a class="left"><i class="fa fa-chevron-left"></i></a>
                                                <a class="right"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                            <div class="submenu-list-title"><a href="#">Reccomended Products</a><span class="toggle-list-button"></span></div>
                                            <div class="menu-slider-out">
                                                <div class="menu-slider-in">
                                                    <div class="menu-slider-entry">
                                                        <div class="product-slide-entry">
                                                            <div class="product-image">
                                                                <img src="img/product-minimal-1.jpg" alt="" />
                                                                <div class="bottom-line left-attached">
                                                                    <a class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="title">1.Pullover Batwing Sleeve Zigzag</a>
                                                            <div class="price">
                                                                <div class="prev">$199,99</div>
                                                                <div class="current">$119,99</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-slider-entry">
                                                        <div class="product-slide-entry">
                                                            <div class="product-image">
                                                                <img src="img/product-minimal-2.jpg" alt="" />
                                                                <div class="bottom-line left-attached">
                                                                    <a class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="title">2.Pullover Batwing Sleeve Zigzag</a>
                                                            <div class="price">
                                                                <div class="prev">$199,99</div>
                                                                <div class="current">$119,99</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-slider-entry">
                                                        <div class="product-slide-entry">
                                                            <div class="product-image">
                                                                <img src="img/product-minimal-3.jpg" alt="" />
                                                                <div class="bottom-line left-attached">
                                                                    <a class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="title">3.Pullover Batwing Sleeve Zigzag</a>
                                                            <div class="price">
                                                                <div class="prev">$199,99</div>
                                                                <div class="current">$119,99</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-slider-entry">
                                                        <div class="product-slide-entry">
                                                            <div class="product-image">
                                                                <img src="img/product-minimal-4.jpg" alt="" />
                                                                <div class="bottom-line left-attached">
                                                                    <a class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="title">4.Pullover Batwing Sleeve Zigzag</a>
                                                            <div class="price">
                                                                <div class="prev">$199,99</div>
                                                                <div class="current">$119,99</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-slider-entry">
                                                        <div class="product-slide-entry">
                                                            <div class="product-image">
                                                                <img src="img/product-minimal-5.jpg" alt="" />
                                                                <div class="bottom-line left-attached">
                                                                    <a class="bottom-line-a square"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>
                                                                    <a class="bottom-line-a square"><i class="fa fa-expand"></i></a>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="title">5.Pullover Batwing Sleeve Zigzag</a>
                                                            <div class="price">
                                                                <div class="prev">$199,99</div>
                                                                <div class="current">$119,99</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="full-width-menu-items-left">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="submenu-list-title"><a href="index-wide.html">Homepages <span class="menu-label blue">new</span></a><span class="toggle-list-button"></span></div>
                                                    <ul class="list-type-1 toggle-list-container">
                                                        <li><a href="index-wide.html"><i class="fa fa-angle-right"></i>Mango - Wide Header</a></li>
                                                        <li><a href="index-electronic.html"><i class="fa fa-angle-right"></i>Mango - Electronic</a></li>
                                                        <li><a href="index-everything.html"><i class="fa fa-angle-right"></i>Mango - Everything</a></li>
                                                        <li><a href="index-fullwidthheader.html"><i class="fa fa-angle-right"></i>Mango - Fullwidth Header</a></li>
                                                        <li><a href="index-food.html"><i class="fa fa-angle-right"></i>Mango - Food</a></li>
                                                        <li><a href="index-underwear.html"><i class="fa fa-angle-right"></i>Mango - Underwear</a></li>
                                                        <li><a href="index-bags.html"><i class="fa fa-angle-right"></i>Mango - Bags</a></li>
                                                        <li><a href="index-fullwidth-noslider.html"><i class="fa fa-angle-right"></i>Mango - Fullwidth No Slider</a></li>
                                                        <li><a href="index-lookbook.html"><i class="fa fa-angle-right"></i>Mango - Lookbook</a></li>
                                                        <li><a href="index-wine-left.html"><i class="fa fa-angle-right"></i>Mango - Wine</a></li>
                                                        <li><a href="index-fullwidth.html"><i class="fa fa-angle-right"></i>Mango - Fullwidth</a></li>
                                                        <li><a href="index-fullwidth-left.html"><i class="fa fa-angle-right"></i>Mango - Fullwidth Left Sidebar</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="submenu-list-title"><a href="index-wide.html">Homepages <span class="menu-label blue">new</span></a><span class="toggle-list-button"></span></div>
                                                    <ul class="list-type-1 toggle-list-container">
                                                        <li><a href="index-parallax.html"><i class="fa fa-angle-right"></i>Mango - Parallax</a></li>
                                                        <li><a href="index-grid.html"><i class="fa fa-angle-right"></i>Mango - Grid Light</a></li>
                                                        <li><a href="index-leftsidebar.html"><i class="fa fa-angle-right"></i>Mango - Grid Left Sidebar</a></li>
                                                        <li><a href="index-minimal.html"><i class="fa fa-angle-right"></i>Mango - Minimal</a></li>
                                                        <li><a href="index-toys.html"><i class="fa fa-angle-right"></i>Mango - Toys</a></li>
                                                        <li><a href="index-furniture.html"><i class="fa fa-angle-right"></i>Mango - Furniture</a></li>
                                                        <li><a href="index-jewellery.html"><i class="fa fa-angle-right"></i>Mango - Jewellery</a></li>
                                                        <li><a href="index-mini.html"><i class="fa fa-angle-right"></i>Mango - Mini</a></li>
                                                        <li><a href="index-presentation.html"><i class="fa fa-angle-right"></i>Mango - Presentation</a></li>
                                                        <li><a href="index-parallax-fullwidth.html"><i class="fa fa-angle-right"></i>Mango - Parallax Fullwidth</a></li>
                                                        <li><a href="index-parallax-boxed.html"><i class="fa fa-angle-right"></i>Mango - Parallax Boxed</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submenu-links-line">
                                            <div class="submenu-links-line-container">
                                                <div class="cell-view">
                                                    <div class="line-links"><b>Quicklinks:</b>  <a href="#">Blazers</a>, <a href="#">Jackets</a>, <a href="#">Shoes</a>, <a href="#">Bags</a>, <a href="#">Special offers</a>, <a href="#">Sales and discounts</a></div>
                                                </div>
                                                <div class="cell-view">
                                                    <div class="red-message"><b>-20% sale only this week. Don’t miss buy something!</b></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="full-width-columns">
                                    <a href="#">Pages</a><i class="fa fa-chevron-down"></i>
                                    <div class="submenu">
                                        <div class="product-column-entry">
                                            <div class="image"><img alt="" src="img/product-menu-2.jpg"></div>
                                            <div class="submenu-list-title"><a href="contact.html">Contact Us</a><span class="toggle-list-button"></span></div>
                                            <div class="description toggle-list-container">
                                                <ul class="list-type-1">
                                                    <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact Us 1</a></li>
                                                    <li><a href="contact-2.html"><i class="fa fa-angle-right"></i>Contact Us 2</a></li>
                                                    <li><a href="contact-3.html"><i class="fa fa-angle-right"></i>Contact Us 3</a></li>
                                                    <li><a href="contact-4.html"><i class="fa fa-angle-right"></i>Contact Us 4</a></li>
                                                </ul>
                                            </div>
                                            <div class="hot-mark">hot</div>
                                        </div>
                                        <div class="product-column-entry">
                                            <div class="image"><img alt="" src="img/product-menu-4.jpg"></div>
                                            <div class="submenu-list-title"><a href="about-1.html">About Us</a><span class="toggle-list-button"></span></div>
                                            <div class="description toggle-list-container">
                                                <ul class="list-type-1">
                                                    <li><a href="about-1.html"><i class="fa fa-angle-right"></i>About Us Fullwidth 1</a></li>
                                                    <li><a href="about-2.html"><i class="fa fa-angle-right"></i>About Us Fullwidth 2</a></li>
                                                    <li><a href="about-3.html"><i class="fa fa-angle-right"></i>About Us Fullwidth 3</a></li>
                                                    <li><a href="about-4.html"><i class="fa fa-angle-right"></i>About Us Sidebar 1</a></li>
                                                    <li><a href="about-5.html"><i class="fa fa-angle-right"></i>About Us Sidebar 2</a></li>
                                                </ul>
                                            </div>
                                            <div class="hot-mark yellow">sale</div>
                                        </div>
                                        <div class="product-column-entry">
                                            <div class="image"><img alt="" src="img/product-menu-3.jpg"></div>
                                            <div class="submenu-list-title"><a href="cart.html">Cart</a><span class="toggle-list-button"></span></div>
                                            <div class="description toggle-list-container">
                                                <ul class="list-type-1">
                                                    <li><a href="cart.html"><i class="fa fa-angle-right"></i>Cart</a></li>
                                                    <li><a href="cart-traditional.html"><i class="fa fa-angle-right"></i>Cart Traditional</a></li>
                                                    <li><a href="checkout.html"><i class="fa fa-angle-right"></i>Checkout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-column-entry">
                                            <div class="image"><img alt="" src="img/product-menu-5.jpg"></div>
                                            <div class="submenu-list-title"><a href="teaser-background.html">Coming Soon</a><span class="toggle-list-button"></span></div>
                                            <div class="description toggle-list-container">
                                                <ul class="list-type-1">
                                                    <li><a href="teaser-background.html"><i class="fa fa-angle-right"></i>Coming Soon 1</a></li>
                                                    <li><a href="teaser-background-2.html"><i class="fa fa-angle-right"></i>Coming Soon 2</a></li>
                                                    <li><a href="teaser-simple.html"><i class="fa fa-angle-right"></i>Coming Soon 3</a></li>
                                                </ul>
                                            </div>
                                            <div class="hot-mark">hot</div>
                                        </div>
                                        <div class="product-column-entry">
                                            <div class="image"><img alt="" src="img/product-menu-2.jpg"></div>
                                            <div class="submenu-list-title"><a href="shop.html">Products</a><span class="toggle-list-button"></span></div>
                                            <div class="description toggle-list-container">
                                                <ul class="list-type-1">
                                                    <li><a href="shop.html"><i class="fa fa-angle-right"></i>Shop</a></li>
                                                    <li><a href="product.html"><i class="fa fa-angle-right"></i>Product</a></li>
                                                    <li><a href="product-nosidebar.html"><i class="fa fa-angle-right"></i>No Sidebar</a></li>
                                                    <li><a href="product-tabnosidebar.html"><i class="fa fa-angle-right"></i>Tab No Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="submenu-links-line">
                                            <div class="submenu-links-line-container">
                                                <div class="cell-view">
                                                    <div class="line-links"><b>Quicklinks:</b>  <a href="shop.html">Blazers</a>, <a href="shop.html">Jackets</a>, <a href="shop.html">Shoes</a>, <a href="shop.html">Bags</a>, <a href="shop.html">Special offers</a>, <a href="shop.html">Sales and discounts</a></div>
                                                </div>
                                                <div class="cell-view">
                                                    <div class="red-message"><b>-20% sale only this week. Don’t miss buy something!</b></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <?php
                                    include_once "Controllers/HeaderController.php";
                                    $obj = new HeaderController();
                                    $obj->listCate();
                                    ?>
                                </li>
                                <li class="column-1">
                                    <a href="portfolio-default.html">Portfolio</a><i class="fa fa-chevron-down"></i>
                                    <div class="submenu">
                                        <div class="full-width-menu-items-left">
                                            <img class="submenu-background" src="img/product-menu-7.jpg" alt="" />
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="submenu-list-title"><a href="portfolio-default.html">Our Portfolio</a><span class="toggle-list-button"></span></div>
                                                    <ul class="list-type-1 toggle-list-container">
                                                        <li><a href="portfolio-default.html"><i class="fa fa-angle-right"></i>Portfolio Default</a></li>
                                                        <li><a href="portfolio-simple.html"><i class="fa fa-angle-right"></i>Portfolio Simple</a></li>
                                                        <li><a href="portfolio-custom.html"><i class="fa fa-angle-right"></i>Portfolio Custom</a></li>
                                                        <li><a href="portfolio-customfullwidth.html"><i class="fa fa-angle-right"></i>Fullwidth Custom</a></li>
                                                        <li><a href="portfolio-simplefullwidth.html"><i class="fa fa-angle-right"></i>Fullwidth Simple</a></li>
                                                        <li><a href="project-default.html"><i class="fa fa-angle-right"></i>Project Default</a></li>
                                                        <li><a href="project-fullwidth.html"><i class="fa fa-angle-right"></i>Project Fullwidth</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submenu-links-line">
                                            <div class="submenu-links-line-container">
                                                <div class="cell-view">
                                                    <div class="line-links"><b>Quicklinks:</b>  <a href="shop.html">Blazers</a>, <a href="shop.html">Jackets</a>, <a href="shop.html">Shoes</a>, <a href="shop.html">Bags</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-1">
                                    <a href="blog.html">Blog</a><i class="fa fa-chevron-down"></i>
                                    <div class="submenu">
                                        <div class="full-width-menu-items-left">
                                            <img class="submenu-background" src="img/product-menu-8.jpg" alt="" />
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="submenu-list-title"><a href="blog.html">Blog <span class="menu-label blue">new</span></a><span class="toggle-list-button"></span></div>
                                                    <ul class="list-type-1 toggle-list-container">
                                                        <li><a href="blog.html"><i class="fa fa-angle-right"></i>Blog Default</a></li>
                                                        <li><a href="blog-grid.html"><i class="fa fa-angle-right"></i>Blog Grid</a></li>
                                                        <li><a href="blog-timeline.html"><i class="fa fa-angle-right"></i>Blog Timeline</a></li>
                                                        <li><a href="blog-list.html"><i class="fa fa-angle-right"></i>Blog List</a></li>
                                                        <li><a href="blog-biggrid.html"><i class="fa fa-angle-right"></i>Blog Big Grid</a></li>
                                                        <li><a href="blog-detail.html"><i class="fa fa-angle-right"></i>Blog Detail</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submenu-links-line">
                                            <div class="submenu-links-line-container">
                                                <div class="cell-view">
                                                    <div class="line-links"><b>Quicklinks:</b>  <a href="shop.html">Blazers</a>, <a href="shop.html">Jackets</a>, <a href="shop.html">Shoes</a>, <a href="shop.html">Bags</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="simple-list">
                                    <a>More</a><i class="fa fa-chevron-down"></i>
                                    <div class="submenu">
                                        <ul class="simple-menu-list-column">
                                            <li><a href="login.html"><i class="fa fa-angle-right"></i>Login</a></li>
                                            <li><a href="error.html"><i class="fa fa-angle-right"></i>Error</a></li>
                                            <li><a href="faq.html"><i class="fa fa-angle-right"></i>Faq</a></li>
                                            <li><a href="compare.html"><i class="fa fa-angle-right"></i>Compare</a></li>
                                            <li><a href="wishlist.html"><i class="fa fa-angle-right"></i>Wishlist</a></li>
                                            <li><a href="shortcodes.html"><i class="fa fa-angle-right"></i>Shortcodes</a></li>
                                            <li><a href="elements-headers.html"><i class="fa fa-angle-right"></i>Elements - Headers</a></li>
                                            <li><a href="elements-footers.html"><i class="fa fa-angle-right"></i>Elements - Footers</a></li>
                                            <li><a href="elements-breadcrumbs.html"><i class="fa fa-angle-right"></i>Elements - Breadcrumbs</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">Buy this theme</a></li>
                                <li class="fixed-header-visible">
                                    <a class="fixed-header-square-button open-cart-popup"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="fixed-header-square-button open-search-popup"><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                            <div class="clear"></div>

                            <a class="fixed-header-visible additional-header-logo"><img src="img/logo-12.png" alt=""/></a>
                        </nav>
                        <div class="navigation-footer responsive-menu-toggle-class">
                            <div class="socials-box">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <div class="clear"></div>
                            </div>
                            <div class="navigation-copyright">Created by <a href="#">8theme</a>. All rights reserved</div>
                        </div>
                    </div>

                </div>
            </header>