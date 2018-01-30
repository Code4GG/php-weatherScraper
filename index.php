<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
	<html>
<head>
	<title>Weather</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  	<style>
      body{
		background-image:url("9.jpg");
		background-size:cover;
		background-position:center;
		width:100%;
		height:100%;
	  }
      .center{text-align:center;}
      .white{color:white;
			 padding-bottom:25px;}
      .container{padding-top:100px;}
	</style>
</head>

<body>

	<div class="container">

		<div class="row">

			<div class="col-md-12 center">
	
				<h1 class=" center white">Weather Predictor</h1>

				<p class="center white">Enter your city below to get a forecast of the weather.</p>

				<form>
					<div class="form-group">

						<input type="text" class="form-control" name="city" id="city" placeholder="London, Paris, San Francisco...">

					</div>

					<button id="findMyWeather" class="btn btn-success btn-lg">Find my Weather</button>

				</form>
              	
					<div id="success" class="alert alert-success">Success!</div>
 
                    <div id="fail" class="alert alert-danger">Could not find weather data for that
                    city. Please try again.</div>

                    <div id="noCity" class="alert alert-danger">Please enter a city!</div>

			</div>

		</div>

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">

		$(".alert").hide();
		
		$("#findMyWeather").on('click',function(event){
			
			event.preventDefault();	
          
          	if ($("city").val()!=""){

			$.get("scraper.php?city="+$("#city").val(),function(data){

			console.log(data);

			if (data=="") {
              	
			$("#fail").fadeIn();

			} else {

			$("#success").html(data).fadeIn();

            }

            });

            } else {
			
			$("#noCity").fadeIn();

            }

		});

		

	</script>
	
</body>
</html>