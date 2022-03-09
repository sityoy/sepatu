	<div class="container" style="margin-top:20px;">
		<footer class="text-left">
		<hr>
			<div class="col-md-12">Collab Kelompok 9 - <a href="https://sityoy.com">sityoy.com</a>
			<br>
			<br>
			</div>
		</footer>
	</div> 
    <script src="<?php echo $url ?>assets/js/jquery.js"></script> 
    <script src="<?php echo $url ?>assets/bootstrap/js/bootstrap.min.js"></script> 
	<script src="<?php echo $url ?>assets/bootstrap/js/moment.js"></script>
	<script src="<?php echo $url ?>assets/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript">
		$(function () {
			$('#datetimepicker').datetimepicker({
				format: 'YYYY-MM-DD',
            });
			$('#datetimepicker2').datetimepicker({
				format: 'YYYY-MM-DD',
			});
		});
	</script>
  </body>
</html>
