<head>
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">

</head>
<style>
	.owl-carausel {
		position: relative;
	}
</style>
<body class="kertas">
	<div class="container">
		<div class="bodo">
			<p class="pintar">Laporan Diskusi</p>
		</div>
<div class="owl-carousel">
  <div class="item" data-merge="3"><img src="http://via.placeholder.com/1000x500"></div>
     <div class="item" data-merge="1"><img src="http://via.placeholder.com/1000X500"><img src="http://via.placeholder.com/1000X500"><img src="http://via.placeholder.com/1000X500"></div>
    
	</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script>
	
	$(document).ready(function(){

		$('.owl-carousel').owlCarousel({
			  items:4,
    loop:true,
    margin:0,
    merge:true,
    responsive:{
        678:{
            mergeFit:true
        },
        1000:{
            mergeFit:false
        }
    }

		});
	})
</script>
</body>

 