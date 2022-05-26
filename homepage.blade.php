<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>SRPP</title>
     <link rel="stylesheet" href="/assets/style.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <!-- ***** Header Area Start ***** -->
     <nav>
        <div class="menu-icon">
           <span class="fas fa-bars"></span>
        </div>
        <div class="logo">
           <a href="index.html">SRPP</a>
        </div>
        <div class="nav-items">
           <li><a href="index.html">Home</a></li>
           <li><a href="about.html" target="_blank">About</a></li>
        </div>
     </nav>
    <!-- header area end -->

  <!-- Home page start -->
  <main>
    <div class="container index_page">
        <div class="container1">
            <div class="row">
              <div class="col-lg-12">
                 <div class="container1">
                    <h1>Organize Your Class</h1>
                    <p>A thoughtful combination of design and<br>
                    function to support your everyday movement.<br>
                    Limited stocks. Shop now.</p>
                    <div class="container main-button">
                        <a href="./signin.html" target="_blank">
                            Sign In
                        </a>
                        <a href={{ route('users.create') }} target="_blank">
                            Sign Up
                        </a>
                    </div>
                 </div>
              </div>
            </div>
        </div>
  </main>

  <div class="clearfix"></div>
      
  <!-- Home page end -->

  <!-- Footer start -->
  <footer class="footer">
    <div class="container">
      <span>&copy;SRPP | Tugas Besar RPL | Kelompok 8 </span>
    </div>
  </footer>
  <!-- Footer end -->

</body>

<script src="assets/script.js"></script>
</html>