<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--Google Roboto fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Danki - Thema</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="topo">
    <div class="center">
        <header>
            <div class="logo"><img src="./img/logo.png" alt=""></div>
        </header>
        <ul class="menu-desktop">
            <li><a href="">Home</a></li>
            <li><a href="">Service</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <div class="clear"></div>
        <div class="w50 info-side">
            <h2>Melhore a comuniçação com o cliente e time</h2>
            <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
            <a href="www.institutodenisedesanti.com">Ver demonstração</a>
        </div>
        <div class="w50 img-side">
            <img src="./img/ilustracao.png" alt="">
        </div>
        <div class="clear"></div>

    </div>
</section>

<div class="circle"><i class="fas fa-chevron-down"></i></div>

<section class="client-slider">
    <div class="center">
		<div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
			<img src="./img/amazon.png" />
			<img src="./img/costco.png" />
			<img src="./img/dominos.png" />
			<img src="./img/uber.png" />			
			<img src="./img/walmart.png" />
			<img src="./img/amazon.png" />
			<img src="./img/costco.png" />
			<img src="./img/dominos.png" />
			<img src="./img/uber.png" />
			<img src="./img/walmart.png" />
		</div>
    </div>
</section>
<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<script type="text/javascript">
	$('section.client-slider .slider-container').slick({
		dots: false,
		arrows:false,
	    infinite: false,
	    speed:1000,
	    slidesToShow: 4,
	    autoplay: true,
	    centerMode:false,
	    autoplaySpeed: 3000,
	    pauseOnHover:false,
	    responsive: 
	    [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	    ]
	});

	$('section.depoimentos .depoimentos-box').slick({
		dots: true,
		arrows:false,
	    infinite: true,
	    speed:1000,
	    slidesToShow: 1,
	    centerMode:false
	});
</script>
</body>
</html>

