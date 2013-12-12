<?php include('header.php'); ?>
	<div data-role="content">
		<dl id="mList">
		</dl>
	</div>
	<script type="text/javascript">
		var mlist = $("#mList");
		mlist.hide();
			$.getJSON("mday.json",function(data){
				var json = data.<?php echo $_GET['type']?$_GET[type]:"system" ?>[1];
				$.each(json,function(i){
					mlist.append($("<dt></dt>").text(i));
					mlist.append('<dd><img src="<?php echo imgurl(); ?>' +json[i] + '" /></dd>');
					console.log(json[i])
				});
				mlist.show("slow");
			});
	</script>
<?php include('footer.php'); ?>


