  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
	function loadpage(url){
		$.get(url, function(data){
			$('#page').html(data);
		});
	}
</script>