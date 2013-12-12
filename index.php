<?php include('header.php'); ?>
<div data-role="content">
	<ul id="dList" data-role="listview" data-dom-cache="true">
	</ul>
</div>
<script type="text/javascript">
	function load(){
		var dlist = $("#dList");
		dlist.empty();
		var output = "";
		$.getJSON("mday.json",function(data){
			$.each(data,function(i){
				output += '<li data-theme="<?php echo $theme ?>" data-icon="arrow-r" data-iconpos="right"><a  data-transition="slide" href="pages.php?type='+i+'" >'+data[i][0]+'</a></li>';
			});
			dlist.append(output);
			dlist.listview('refresh');
		});
	}
	load();
</script>
</script>
<?php include('footer.php'); ?>