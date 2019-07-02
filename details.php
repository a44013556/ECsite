<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beforethere Store</title>
  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/style.css?0514">
</head>
<body>

    <div id="top"><!-- Top Begin  -->

      <div class="container"><!-- container Begin -->

        <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->

          <a href="#" class="btn btn-success btn-sm">Welcome</a>
          <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>

        </div><!-- col-md-6 offer Finish -->

        <div class="col-md-6"><!-- col-md-6 Begin -->

          <ul class="menu"><!-- menu Begin -->

              <li>
                <a href="customer_register.php">Register</a>
              </li>
              <li>
                <a href="customer/my_account.php">My Account</a>
              </li>
              <li>
                <a href="cart.php">Cart</a>
              </li>
              <li>
              <a href="checkout.php">Login</a>
              </li>

          </ul> <!-- menu Finish -->

        </div><!-- col-md-6 offer Finish -->

      </div><!-- container Finish -->

    </div><!-- Top Finish -->

    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->

          <div class="container"><!-- container Begin -->

            <div class="navbar-header"><!-- navbar-header Begin -->

            <a href ="index.php" class="navbar-brand home"><!--navbar-brand home Begin -->

                <img src="images/ecom-store-logo.png" alt="Beforethere-Store logo" class="hidden-xs">
                <img src="images/ecom-store-logo-mobile.png" alt="Beforethere-Store logo Mobile" class="visible-xs">

            </a><!--navbar-brand home Finish -->

            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

              <span class="sr-only">Toggle Navigation</span>

              <i class="fa fa-align-justify"></i>

            </button>

            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

              <span class="sr-only">Toggle Search</span>

              <i class="fa fa-search"></i>

            </button>

          </div><!-- navbar-header Finish-->

            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin-->

              <div class="padding-nav"><!-- padding-nav Begin -->

                <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->

                  <li>
                    <a href="index.php">Home</a>
                  </li>
                  <li class="active">
                    <a href="shop.php">Shop</a>
                  </li>
                  <li>
                      <a href="customer/my_account.php">My Account</a>
                  </li>
                  <li >
                    <a href="cart.php">Shopping Cart</a>
                  </li>
                  <li>
                    <a href="contact.php">Contact Us</a>
                  </li>

                </ul><!-- nav navbar-nav left Finish -->

          </div><!-- padding-nav Finish -->

          <a href ="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right Begin-->

            <i class="fa fa-shopping-cart"></i>

            <span>4 Items In Your Cart</span>

          </a><!-- btn navbar-btn btn-primary right Finish -->

          <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->

              <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->

                  <span class="sr-only">Toggle Search</span>

                  <i class="fa fa-search"></i>
            </button><!-- btn btn-primary navbar-button Finish -->

          </div><!-- navbar-collapse collapse right Finish -->

        <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->

          <form method="get" action="results.php" class="navbar-form"><!-- navbar-form  Begin -->

              <div class="input-group"><!-- input-group Begin -->

                  <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->

                      <div class="input-group"><!-- input-group Begin -->

                          <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                          <span class="input-group-btn"><!-- input-group-btn Begin -->

                          <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->

                              <i class="fa fa-search"></i>

                          </button><!-- btn btn-primary Finish-->

                          </sapn><!-- input-group-btn Finish -->

                        </div><!-- input-group Finish -->

                      </form><!-- navbar-form Finish -->

                    </div><!-- collapse clearfix Finish -->

                  </div><!-- navbar-collapse collapse Finish-->

                </div><!-- container Finish -->

              </div><!-- navbar navbar-default Finish-->

    <div id="content">
      <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin -->

          <ul class="breadcrumb"><!-- breadcrumb Begin -->
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              Shop
            </li>
          </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

          <div class="col-md-3"><!-- col-md-3 Begin -->

      <?php

                include("includes/sidebar.php");

      ?>

          </div><!-- col-md-3 Finish -->

          <div class="col-md-9"><!-- col-md-9 Begin -->
            <div id="productMain" class="row"><!-- row Begin -->
              <div class="col-md-6"><!-- col-md-6 Begin -->
                <div id="mainImage"><!-- #mainImage Begin -->
                  <div id="myCarousel" class="carousel slide"><!-- carousel slide Begin -->
                    <ol class="carousel-indicators"><!-- carouselindicators Begin -->
                      <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol><!-- carouselindicators Finish -->

                    <div class="carousel-inner">
                      <div class="item active">
                        <center><img src="admin_area/product_images/Product-3a.jpg" alt="Product 3-a"></center>
                      </div>
                      <div class="item">
                        <center><img src="admin_area/product_images/Product-3b.jpg" alt="Product 3-b"></center>
                      </div>
                      <div class="item">
                        <center><img src="admin_area/product_images/Product-3c.jpg" alt="Product 3-c"></center>
                      </div>
                    </div>

                    <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a><!-- left carousel-control Finish -->

                    <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a><!-- right carousel-control Finish -->

                  </div><!-- carousel slide Finish -->
                </div><!-- #mainImage Finish -->
              </div><!-- col-md-6 Finish -->

              <div class="col-sm-6"><!-- col-sm-6 Begin -->
                <div class="box"><!-- box Begin -->
                  <h1 class="text-center">M-Dev Polo Shirt Men</h1>

                  <form class="form-horizontal" action="details.php" method="post"><!-- form-horizontal Begin -->
                    <div class="form-group"><!-- form-group Begin -->
                      <label for="" class="col-md-5 control-label">Product Quantity</label>

                      <div class="col-md-7"><!-- col-md-7 Begin -->

                        <select class="form-control" name="product_qty"><!-- form-control Begin -->

                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                          <option value="">5</option>

                        </select><!-- form-control Finish -->

                      </div><!-- col-md-7 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->
                      <label class="col-md-5 control-label">Product Size</label><!-- col-md-5 control-label Finish -->

                        <div class="col-md-7"><!-- col-md-7 Begin -->

                          <select class="form-control" name="product_size"><!-- form-control Begin -->

                            <option value="">Select a size</option>
                            <option value="">S</option>
                            <option value="">M</option>
                            <option value="">L</option>
                            <option value="">XL</option>

                          </select><!-- form-control Finish -->

                        </div><!-- col-md-7 Finish -->

                    </div><!-- form-group Finish -->

                    <p class="price">$50</p>

                    <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">Add to Cart</button></p>

                  </form><!-- form-horizontal Finish -->

                </div><!-- box Finish -->

                <div class="row" id="thumbs"><!-- row Begin -->

                  <div class="col-xs-4"><!-- col-xs-4 Begin -->
                    <a data-target="#myCarousel" data-slide-to="0" href="" class="thumb"><!-- thumb Begin -->
                      <img src="admin_area/product_images/product-3a.jpg" alt="product 3a" class="img-responsive">
                    </a><!-- thumb Finish -->
                  </div><!-- col-xs-4 Finish -->

                  <div class="col-xs-4"><!-- col-xs-4 Begin -->
                    <a data-target="#myCarousel" data-slide-to="1" href="" class="thumb"><!-- thumb Begin -->
                      <img src="admin_area/product_images/product-3b.jpg" alt="product 3b" class="img-responsive">
                    </a><!-- thumb Finish -->
                  </div><!-- col-xs-4 Finish -->

                  <div class="col-xs-4"><!-- col-xs-4 Begin -->
                    <a data-target="#myCarousel" data-slide-to="2" href="" class="thumb"><!-- thumb Begin -->
                      <img src="admin_area/product_images/product-3c.jpg" alt="product 3c" class="img-responsive">
                    </a><!-- thumb Finish -->
                  </div><!-- col-xs-4 Finish -->

                </div><!-- row Finish -->

              </div><!-- col-sm-6 Finish -->

            </div><!-- row Finish -->

            <div class="box" id="details"><!-- box Begin -->

                <h4>Product Details</h4>

              <p>
                This is a a;lskjpqe m,z./cvka a;sldkfjaw zlkjxcklvjae!
              </p>

              <h4>Size</h4>

              <ul>
                <li>S</li>
                <li>M</li>
                <li>X</li>
                <li>XL</li>
              </ul>

              <hr>

            </div>

            <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
              <div class="col-md-3 col-sm-6"><!-- col-md col-sm-6 Begin -->
                <div class="box same-height headline"><!-- box same-height headeline Begin -->
                  <h3 class="text-center">Product You May Like</h3>
                </div><!-- box same-height headeline Finish -->
              </div><!-- col-md col-sm-6 Finish -->

            <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
              <div class="product same-height"><!-- product same-height Begin -->
                <a href="details.php">
                  <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 6">
                </a>

                <div class="text"><!-- text Begin -->
                  <h3><a href="details.php">M-Dev Tank Top Women</a></h3>

                  <p class="price">$40</p>

                </div><!-- text Finish -->

              </div><!-- product same-height Finish -->
            </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

            <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
              <div class="product same-height"><!-- product same-height Begin -->
                <a href="details.php">
                  <img class="img-responsive" src="admin_area/product_images/Product-5a.jpg" alt="Product5">
                </a>

                <div class="text"><!-- text Begin -->
                  <h3><a href="details.php">M-Dev Street T-Shirt Women</a></h3>

                  <p class="price">$45</p>

                </div><!-- text Finish -->

              </div><!-- product same-height Finish -->
            </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

            <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
              <div class="product same-height"><!-- product same-height Begin -->
                <a href="details.php">
                  <img class="img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 4">
                </a>

                <div class="text"><!-- text Begin -->
                  <h3><a href="details.php">M-Dev Polo Shirt Women</a></h3>

                  <p class="price">$50</p>

                </div><!-- text Finish -->

              </div><!-- product same-height Finish -->
            </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

          </div><!-- #row same-height-row Finish -->
          </div><!-- col-md-9 Finish -->
        </div><!-- container Finish -->
      </div><!-- content Finish -->

    <?php

        include("includes/footer.php");

    ?>



  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>


</body>
</html>
