<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out


			

			 */
		// 1
		$number1 = 10;
		$number2 = 20;

		// 2
		echo  $number1 + $number2 . '<br>';

		// 3
		$companyStaff = ["Maria", "John", "Mike"];
		print_r($companyStaff);

		$companyStaffAssoc = ["HR" => "Maria", "IT" => "John", "development" => "Mike"];
		print_r($companyStaffAssoc);

		echo "<br>" . $companyStaffAssoc["IT"];

		// 4
		$constant = "PHP";
		echo "<br>" . $constant;

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>