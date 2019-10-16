
 <?php   require 'config.php'; ?>

<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New Vision</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">



    <!-- Custom Fonts -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.map-container-section {
  overflow:hidden;
  padding-bottom:56.25%;
  position:relative;
  height:0;
}
.map-container-section iframe {
  left:0;
  top:0;
  height:100%;
  width:100%;
  position:absolute;
} 
.pagination {
  border: 1px solid #ddd; /* Gray */
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}



.post-item {
    border-bottom: 1px #F0F0F0 solid;
    padding: 10px;
}
.post-message {
    font-size: 1em;
    padding-bottom: 8px;
}

.post-date {
    color: #b7b7b7;
    font-size: 0.9em;
    font-style: italic;

}
.success{
color: red;
text-align: center;
font-weight: bold;
font-size: 20px;
}


</style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" >
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <img src ="upload/newvision1.png">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">Home</a>
                    </li>
                    <li>
                        <a href="#news">News</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                     <li>
                        <a href="../backend/login.php">Log In</a>
                    </li>
                     
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 style="color: green;">အျမင္သစ္ စာၾကည့္တိုက္</h1>
                        <h2 style="color: green;">(အင္းစိန္)</h2>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://www.facebook.com/NewVision15/?eid=ARBCgO59kAB9frYZXV4DZBdymtYZxjf_dkGsX9W66P6Cu4ey581uNonEA0frkeNpAUabMKSvkKK2bK3A&fref=tag" class="btn btn-default btn-lg"><i class="fab fa-facebook  fa-fw"></i> <span class="network-name">New Vision Facebook page </span></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100013486601361" class="btn btn-default btn-lg"><i class="fas fa-user"></i> <span class="network-name">U Kyaw Thein </span></a>
                            </li>
                           <!--  <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

  <a  name="news"></a>
    
<!--   <div class="container-fluid">
    <h3 class="bg-primary text-center text-white p-4 m-4">Our Product</h3>
    <div class="row">
      <div class="col-md-4">
        <h4 class="bg-warning p-3">Category</h4>
        <ul class="list-group">
          <li class="list-group-item">
            <a href="">အလ်ဴ႐ွင္မ်ား
</a>
          </li>
          <li class="list-group-item">
            <a href="">စာအုပ္ဖတ္/ငွါးၾကသူမ်ား
</a>
          </li>
          <li class="list-group-item">
            <a href="">သတင္းအခ်က္အလက္မ်ား
</a>
          </li>
        </ul>
      </div>
        <div class="col-md-8 " >
          
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="card">
                <img src="http://placehold.it/280x330" class="card-img-top">
                <div class="card-body">
                  <h5>Product 1</h5>
                  <p>Category : I phone</p>
                  <p>Price :120 USD</p>
                  <p>Description hrer....</p>
                </div>
                <div class="card-footer">
                  <a href="" class="btn btn-outline-info"> View Detail</a>
                 
                </div>
              </div>
              <div class="p-4"></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="card">
                <img src="http://placehold.it/280x330" class="card-img-top">
                <div class="card-body">
                  <h5>Product 1</h5>
                  <p>Category : I phone</p>
                  <p>Price :120 USD</p>
                  <p>Description hrer....</p>
                </div>
                <div class="card-footer">
                  <a href="" class="btn btn-outline-info"> View Detail</a>
                </div>
              </div>
              <div class="p-4"></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="card">
                <img src="http://placehold.it/280x330" class="card-img-top">
                <div class="card-body">
                  <h5>Product 1</h5>
                  <p>Category : I phone</p>
                  <p>Price :120 USD</p>
                  <p>Description hrer....</p>
                </div>
                <div class="card-footer">
                  <a href="" class="btn btn-outline-info"> View Detail</a>
                </div>
              </div>
              <div class="p-4"></div>
            </div>
           
          </div>
        </div>
  </div>
    </div> -->
      <?php 
if (isset($_GET['cat'])) {
  $cat = $_GET['cat'];
  $sql = " SELECT * FROM product WHERE id like $cat ";
 
}else{
  $sql = " SELECT * FROM product ";
}

?>  
<h1 align="center"> Our News</h1>
<br><br>



  <div class="container">
    
       <?php
        $limit = 8;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM product ORDER BY p_name ASC LIMIT $start_from, $limit";  
$res = mysqli_query($conn, $sql);  
?>  
      
     
          
          <?php 




  while ($r = mysqli_fetch_assoc($res)) {
  
  
     ?> 
    
    
      <div class="card">
        
      <div class=" col-md-6"  >
  <img src="../backend/upload/<?php echo $r['img']; ?>"  class="hvr-grow" height="300" width="400">
        
          
        <div class="card-body" >
          <h3> <?php echo $r['p_name']; ?></h3>
        
          <i> Category: <?php echo $r['p_cat']; ?></i>
          <hr>
          <p style="height: 30px;"><?php echo  (substr($r['p_desc'], 0,80)); ?></p>
          
        </div>
        <div class="card-footer">
          <a href="detail.php?id=<?php echo $r['id']; ?>" class="btn btn-info"> View Detail</a>
          <br><br>   <br> 

        </div>

      </div>



    </div>



  
  <?php } ?>
   
<?php  
$sql = "SELECT COUNT(id) FROM product";  
$res = mysqli_query($conn, $sql);  
$r = mysqli_fetch_row($res);  
$total_records = $r[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";
  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='index.php?page=".$i."'>".$i."</a>";  
};  

echo $pagLink . "</div>";  

?>

</div>

    <!-- /.content-section-a -->

   <!--  -->

<!-- <div class="fb-post" data-href="https://www.facebook.com/permalink.php?story_fbid=606503529809195&amp;id=100013486601361" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/permalink.php?story_fbid=606503529809195&amp;id=100013486601361" class="fb-xfbml-parse-ignore"><p>အျမင္သစ္ စာၾကည့္တိုက္(အင္းစိန္)

#လူေတြသမာသမတ္က်ေအာင္
#ဥပေဒျပဌာန္းလို႔မရ_ဆိုေပမဲ့
စာဖတ္တဲ့သူ မ်ားလာရင္ေတာ့
အသိပညာေတြ...</p>Posted by <a href="https://www.facebook.com/people/U-Kyaw-Thein/100013486601361">U Kyaw Thein</a> on&nbsp;<a href="https://www.facebook.com/permalink.php?story_fbid=606503529809195&amp;id=100013486601361">Sunday, January 6, 2019</a></blockquote>

</div> -->
<center>
  <div style="background-color: #f2f7f7 ;">
<div class="fb-page" data-href="https://www.facebook.com/NewVision15/" data-tabs="timeline" data-width="500px" data-height="600px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NewVision15/" class="fb-xfbml-parse-ignore" ><a href="https://www.facebook.com/NewVision15/"></a></blockquote></div>
</div>
</center>

<!-- <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F2485441974805709&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435" scrolling="yes" style="border:none; overflow:hidden; width:600px; height:430px; background: white; float:left; " allowtransparency="true" frameborder="0"></iframe>
 -->
  <a  name="contact"></a>
   <!-- Section: Contact v.1 -->


  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5" >Contact us</h2>
  <!-- Section description -->
 <div class="container">
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-sm-12 mb-lg-0 mb-4 ">

      <!-- Form with header -->
      <div class="card">
        <div class="card-body">
          <?php 
          if (isset($_POST['add'])) {
        $name = strip_tags($_POST['name']);
          $email = strip_tags($_POST["email"]); 

          $sub = strip_tags($_POST['subject']);
          $ico = strip_tags($_POST['icon']);
   if ($name == '') {
    $nameer = " Please Add Your Name ";
  }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
} 

    if ($sub == '') {
    $suber = " Please Add Subject ";
  }

    if ($ico == '') {
    $icoer = " Please Add Icon ";
  }

   if ($name != '' && filter_var($email, FILTER_VALIDATE_EMAIL) && $sub != '' && $ico != '') {

  $sql = " INSERT INTO contact
         (name ,  email , subject ,  icon) VALUES
         ( '$name' ,  '$email' , '$sub', '$ico' )";

         mysqli_query($conn,$sql);


       


         $success="Message sent!";
}
 }
        

           ?>
          <!-- Header -->
          <form method="post" action="" enctype="multipart/form-data">

          <div class="form-header blue accent-1">
            <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
          </div>
          <p class="dark-grey-text">We'll reply soon.</p>
          <!-- Body -->
          <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="name" name="name" class="form-control">
            <label for="form-name">Your name</label>
            <span class="text-danger"><?php if (isset($nameer)) { echo $nameer; } ?></span>
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" id="email" name="email" class="form-control">
            <label for="form-email">Your email</label>
            <span class="text-danger"><?php if (isset($emailErr)) { echo $emailErr; } ?></span>

          </div>
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="subject" name="subject" class="form-control">
            <label for="form-Subject">Subject</label>
            <span class="text-danger"><?php if (isset($suber)) { echo $suber; } ?></span>
          </div>
          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <textarea type="text" id="icon" name="icon" class="form-control md-textarea" rows="3"></textarea>
            <label for="form-text">Icon Prefix</label>
            <span class="text-danger"><?php if (isset($icoer)) { echo $icoer; } ?></span>
          </div>
          <div class="text-center">
            
               <input type="submit" name="add" class="btn main-btn pull-right" value="Send a message">
             
          </div>
          <span class="success"><?php if (isset($success)) { echo $success;
    } ?></span>
        </div>
      </form>
      </div>
      <!-- Form with header -->
</div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-sm-12 ">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
       <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=new%20vision%20library&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webdesign/">website erstellen</a>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>Insein, Nga Sein street</p>
          <p class="mb-md-0">Yangon</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-door-open"></i>
          </a>
          <p></p>
          <p class="mb-md-0">Daily, 7:00PM-9:00PM</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-envelope"></i>
            <p class="mb-md-0">zeyarmyo221@gmail.com</p>
             <p class="mb-md-0">09-425023762</p>

          </a>
          <p></p>
          <p class="mb-0"></p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  
  <!-- Grid row -->

</section>
<!-- Section: Contact v.1 -->
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                       
                       
                        <li>
                            <a href="#news">News</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Grace Myanmar Company. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
 

<!-- <script>
window.fbAsyncInit = function () {
        FB.init({
            appId: 2485441974805709, // except real id
            xfbml: true,
            version: 'v2.4'
        });
    };
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=2485441974805709&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



FB.api(
    "/{100013486601361}/feed",
    function (response) {
      if (response && !response.error) {
        /* handle the result */
      }
    }
);
 


</script>
 -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



</html>
