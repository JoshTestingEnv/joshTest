<! DOCTYPE html>
<html>


<head>
	<link rel='stylesheet' type='text/css' href='Css/mycss.css'>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Debug me please</h1>

<button class="btn btn-success get_num_btn" data-num-id="567">Get Number</button>

<button class="btn btn-success get_name_btn">Get Name</button>

<button class="btn btn-success get_job_btn">Get Job</button>
	

<script type="text/javascript">
	$('.get_num_btn').data('some_id', 789);
	// Button click for get number
	$(document).delegate('.get_num_btn', 'click', function(event) {
		var numid = $(this).data('num-id');
		// console.log(numid);
		var numid2 = $(event.target).data('some_id');
		// console.log(numid2);
		get_num(true);
	});

	// On click for get name 
	$(document).delegate('.get_name_btn', 'click', function(event) {
		var name;
		var names = ['josh','Steve','David','chris'];
		get_name(names);
	});

	// On click for get job, dont change any of the vars
	$(document).delegate('.get_job_btn', 'click', function(event) {
		var num1 = 100/4-12;
		var num2 = 100/5+2;
		var num3 = 2*2*6/4;
		var num4 = num1+num3;
		var num5 = num2-num3-4;
		get_job(num5);
	});

	// This function should alert the number 3 based on it's index in the nums array
	function get_num(isnum) {
		var num_array = [];
		var nums = [1,2,3,4,5,6,7,8,9];
		if(isnum == true) {
			$.each(nums, function(key,value) {
				if(key == 2) {
					num_array.push(value);
				}
			});
			alert(num_array);
		}
		else {
			alert('Sorry, try again');
		}
	}

	// This function should alert 'Yep, thats my name, dont wear it out'
	function get_name(names) {
		names.forEach(function(name) {
			// console.log(name);
			if(name == 'josh') {
				alert('Yep, thats my name, dont wear it out');
			}
		});
	}

	// This function should have only one alert, and it should say the job title you're hoping to get
	// Dont change any of the case numbers
	function get_job(number) {
		switch(number) {
			case 9:  // don't change me
			case 10: // or me
			case 11: // or me
				alert('You want to be a septic tank pumper?');
				break;
			case 12: // or me
				alert('You want to be a Jr Software Developer!');
			default: 
				alert('I dont need no stinking job!');
				break;
		}
	}
	
</script>

</body>









</html>