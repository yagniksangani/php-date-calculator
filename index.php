<?php
/**
 * Date Calculator.
 *
 * @package datecal
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Date Calculator</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css"/>
	<script src="./assets/js/custom-script.js"></script>
	<link rel="stylesheet" href="./assets/css/custom-style.css">
</head>
<body>
	<div class="date-container">
		<div class="heading-section">
			<h1>Date Calculator</h1>
		</div>
		<div class="content-section">
			
			<div class="calculation-choice">
				<h2>Find difference between two dates</h2>
				<div class="input-field">
					<label><strong>Start Date: </strong></label>
					<input type="text" placeholder="MM/DD/YYYY" name="diff_start_date" id="diff_start_date" readonly>
				</div>
				<div class="input-field">
					<label><strong>End Date: </strong></label>
					<input type="text" placeholder="MM/DD/YYYY" name="diff_end_date" id="diff_end_date" readonly>
				</div>
				<div class="button-field">
					<button class="find_diff_btn" id="find_diff_btn">Find Difference</button>
				</div>
				<div class="result-section">
					<h3>Result : <span class="result_date_diff"></span></h3>
				</div>
			</div>

			<div class="calculation-choice">
				<h2>Calculate time from now until certain date</h2>
				<div class="input-field">
					<label><strong>From now </strong></label>
					<label><strong>to </strong></label>
					<input type="text" data-now="<?php echo date( 'm/d/Y' ); ?>" placeholder="MM/DD/YYYY" name="until_certain_date" id="until_certain_date" readonly>
				</div>
				<div class="button-field">
					<button class="calculate_time" id="calculate_time">Calculate</button>
				</div>
				<div class="result-section">
					<h3>Result : <span class="result_calculate_time"></span></h3>
				</div>
			</div>

			<div class="calculation-choice">
				<h2>Find out what day of the week a certain date is</h2>
				<div class="input-field">
					<label><strong>Select Date: </strong></label>
					<input type="text" placeholder="MM/DD/YYYY" name="day_certain_date" id="day_certain_date" readonly>
				</div>
				<div class="button-field">
					<button class="find_day_of_week" id="find_day_of_week">Find Day</button>
				</div>
				<div class="result-section">
					<h3>Result : <span class="result_day_name"></span></h3>
				</div>
			</div>

			<div class="calculation-choice">
				<h2>Find out what week of certain date is</h2>
				<div class="input-field">
					<label><strong>Select Date: </strong></label>
					<input type="text" placeholder="MM/DD/YYYY" name="week_certain_date" id="week_certain_date" readonly>
				</div>
				<div class="button-field">
					<button class="find_out_week" id="find_out_week">Find Day</button>
				</div>
				<div class="result-section">
					<h3>Result : <span class="result_week_no"></span></h3>
				</div>
			</div>

		</div>
	</div>
</body>
</html>
