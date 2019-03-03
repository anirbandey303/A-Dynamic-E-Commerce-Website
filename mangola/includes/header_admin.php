<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a href="products.php" class="navbar-brand text-white">Mangola</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a class="text-white" href="admin.php"> <?php echo $_SESSION['name'];?> </a></li>
            <li><a class="text-white" href="products.php">Home</a></li>
            <li><a class="text-white" href="show_cart_items.php">Cart</a></li>
            <li><a class="text-white" href="show_wishlist_items.php">Wishlist</a></li>
            <li><a class="text-white" href="show_order_items.php">Orders</a></li>
            <li><a class="text-white" href="logout.php">Logout</a></li>
          </ul>
          
                  </div><!--/.nav-collapse -->
      </div>
    </nav>