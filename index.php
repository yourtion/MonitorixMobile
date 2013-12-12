<?php include('header.php'); ?>
	<div data-role="content">
	<ul id="dList" data-role="listview">
	</ul>
	</div>
<script type="text/javascript">
		var dlist = $("#dList");
		$.getJSON("mday.json",function(data){
			$.each(data,function(i){
				dlist.append('<li data-theme="<?php echo $theme ?>" data-icon="arrow-r" data-iconpos="right"><a  data-transition="slide" href="pages.php?type='+i+'" >'+i+'</a></li>')
			});
			dlist.listview('refresh');
		});
</script>
</script>
<?php include('footer.php'); ?>

