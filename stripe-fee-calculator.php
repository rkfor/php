<?php include("./brand.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<?php include("./head.php"); ?>
	<title>Stripe Fee Calculator</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
</head>
<body style="overflow-x: hidden;">
<?php include("./header.php"); ?>

<div class="container">	
	<div class='row' style='border: 1px solid #CCC; margin: 10px; padding: 10px; box-shadow: 2px 2px 0px 0px #CCC; border-radius: 10px;'>
		<h2 style='text-align: center;'>Stripe Fee Calculator</h2>
		<div class="row" style='text-align: center; border: 1px dashed #CCC; padding: 20px; max-width: 1200px; margin: 20px auto; border-radius: 10px;'>
			<form action="" method="post" enctype="multipart/form-data" class="form-inline">
				<input type="text" name="amt" placeholder="Enter amount in USD" class="form-control" style="max-width: 200px; display: inline; margin: 10px;"/>
				<input class="btn btn-primary" type="submit" value="Calculate Fee" name="submit" style='margin: 10px; display: inline;' />
			</form>
		</div>
		
		<div style='text-align: center; margin: 10px;'>
			<?php
				if(isset($_POST['submit'])) {
					$STRIPE_COMM_PCT = 2.9;
					$STRIPE_FIXED_FEE = 0.30;
					$amount = $_POST['amt'];
					$own_fee = $amount*$STRIPE_COMM_PCT/100 + $STRIPE_FIXED_FEE;
					$sender_fee = ((100 * $amount) + 30) / 97.1 - $amount;
					
					echo "<div>
						<div style='min-width: 400px; border: 1px solid #CCC; border-radius: 5px; display: inline-block; margin: 5px;'>
							<h2 style='padding: 10px;border-bottom: 1px solid #CCC;'>YOU PAY FEES</h2>
							<p>If you ask for <b>$$amount</b>, you will get <br /><span style='font-size: 28px; font-weight: bold;'>$".round($amount-$own_fee, 2)."</span></p>
							<p>Stripe Fee - $".round($own_fee, 2)."</p>
							
						</div>
						
						<div style='min-width: 400px; border: 1px solid #CCC; border-radius: 5px; display: inline-block; margin: 5px;'>
							<h2 style='padding: 10px;border-bottom: 1px solid #CCC;'>SENDER PAY FEES</h2>
							<p>If you want <b>$$amount</b>, you should ask for <br /><span style='font-size: 28px; font-weight: bold;'>$".round($amount + $sender_fee, 2)."</span></p>
							<p>Stripe Fee - $".round($sender_fee, 2)."</p>
							
						</div>
					</div>";
				}
			?>
		</div>
	</div>
	
	<div class="row">
		<p>>>>>>>>>>>>>>Calculator Text Desciption here<<<<<<<<<<<<<<<<<<<<<</p>
	</div>
	
	<!-- ADVERTISEMENT TOOL -->
	<div class='row'>
		<div style='width:728px; height: 90px; margin: 0 auto; background: #F00;'></div>	
	</div>
	<!-- ADVERTISEMENT TOOL -->
	
	<hr />
	
	<div class="row">
		<img src='./img/main_page.png' style="max-width: 750px; margin-bottom: 20px;" class="rounded mx-auto d-block" alt="" />
		<h2 class='display-6'>How to convert JPG to PNG</h2>
		<p>
			<ol>
				<li>Step 1</li>
				<li>Step 2</li>
				<li>Step 3</li>
			</ol>
		</p>
		
		<p>>>>>>>>>>>>>>>>>>>>>>>>>>>Custom Article Content<<<<<<<<<<<<<<<<<<<</p>
	</div>
</div>
	
<?php include("./footer.php"); ?>




</body>
</html>