<script>
$(document).ready(function(){
	$('.hamburger_menu').on("click",function() {
		$(".navbar").toggleClass("show");
		$(".underlay").toggleClass("show");
		return false;
	});
	$('.underlay').on("click",function() {
		$(".navbar").removeClass("show");
		$(".underlay").removeClass("show");
		return false;
	});
});
</script>