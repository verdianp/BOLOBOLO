<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/galery.css">
    <link rel="stylesheet" type="text/css" href="assets/css/toto.css">
</head>

 <body>

    <?php
      include 'header.php';
                    if(isset($_GET['halaman']))
                    {
                        if ($_GET['halaman']=='galery')
                        {
                            include 'galery.php';
                        }
                        elseif ($_GET['halaman']=='home')
                        {
                            include 'home.php';
                        }
                        elseif ($_GET['halaman']=='perpus')
                        {
                            include 'perpus.php';
                        }
                           elseif ($_GET['halaman']=='publikasi')
                        {
                            include 'publikasii.php';
                        }


                    }
                    else
                    {
                        include 'home.php';
                    }
                include 'footer/footer.php';
                 ?>


</body>
</html>