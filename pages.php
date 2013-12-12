<?php include('header.php'); ?>
<div data-role="content">
	<dl id="mList" data-dom-cache="true">

	</dl>
</div>
<script type="text/javascript">
	function load(){
		var mlist = $("#mList");
		mlist.hide();
		$.getJSON("mday.json",function(data){
			mlist.empty();
			var json = data.<?php echo $_GET['type']?$_GET[type]:"system" ?>[1];
			var output="";
			$.each(json,function(i){
				output += '<dt>'+i+'</dt><dd><img src="<?php echo imgurl(); ?>' +json[i] + '" /></dd>';
				console.log(json[i]);
			});
			mlist.append(output);
			mlist.show(300);
		});
	}
	load();
</script>
<?php include('footer.php'); ?>