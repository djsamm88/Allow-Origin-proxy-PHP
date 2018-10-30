<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$.get("proxy.php?domain=https://https://random.medantechno.com/api/get_recent_posts/",function(event){
	    console.log(event);
	})

})
</script>