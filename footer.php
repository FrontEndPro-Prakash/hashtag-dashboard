      <!-- <div class="footer">
            <div>
                  <strong>Copyright</strong> Example Company &copy; 2014-2018
            </div>
      </div> -->
</div>
<!-- Mainly scripts -->
<script src="<?php echo $base_url ?>js/jquery-3.1.1.min.js"></script>
<script src="<?php echo $base_url ?>js/popper.min.js"></script>
<script src="<?php echo $base_url ?>js/bootstrap.js"></script>
<script src="<?php echo $base_url ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo $base_url ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="<?php echo $base_url ?>js/plugins/flot/jquery.flot.js"></script>
<script src="<?php echo $base_url ?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo $base_url ?>js/plugins/flot/jquery.flot.spline.js"></script>
<script src="<?php echo $base_url ?>js/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?php echo $base_url ?>js/plugins/flot/jquery.flot.pie.js"></script>
<script src="<?php echo $base_url ?>js/plugins/flot/jquery.flot.symbol.js"></script>
<script src="<?php echo $base_url ?>js/plugins/flot/jquery.flot.time.js"></script>

<!-- Peity -->
<script src="<?php echo $base_url ?>js/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo $base_url ?>js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo $base_url ?>js/inspinia.js"></script>
<script src="<?php echo $base_url ?>js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="<?php echo $base_url ?>js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Jvectormap -->
<script src="<?php echo $base_url ?>js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?php echo $base_url ?>js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- EayPIE -->
<script src="<?php echo $base_url ?>js/plugins/easypiechart/jquery.easypiechart.js"></script>

<!-- Sparkline -->
<script src="<?php echo $base_url ?>js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo $base_url ?>js/plugins/select2/select2.full.min.js"></script>

<!-- Sparkline demo data  -->
<script src="<?php echo $base_url ?>js/demo/sparkline-demo.js"></script>
<script src="<?php echo $base_url ?>js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
<script src="<?php echo $base_url ?>js/plugins/sweetalert/sweetalert.min.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$('.delete_icon').click(function () {
            swal({
                title: "Are you want to delete?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false },
            function (isConfirm) {
                if (isConfirm) {
                    swal({
                    	title: "Deleted!",
                    	type: "success",
                    	timer: 3000,
                    	showConfirmButton: false
                    });
                } else {
                    swal({
                    	title: "Cancelled!",
                    	type: "error",
                    	timer: 3000
                    });
                }
            });
        });
        $('.block_icon').click(function () {
            swal({
                title: "Are you want to block?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Block",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false },
            function (isConfirm) {
                if (isConfirm) {
                    swal({
                    	title: "Blocked!",
                    	type: "success",
                    	timer: 3000,
                    	showConfirmButton: false
                    });
                } else {
                    swal({
                    	title: "Cancelled!",
                    	type: "error",
                    	timer: 3000
                    });
                }
            });
        });
        $('.block_icon.blocked').click(function () {
            swal({
                title: "Are you want to Unblock?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Unblock",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false },
            function (isConfirm) {
                if (isConfirm) {
                    swal({
                        title: "Unblocked!",
                        type: "success",
                        timer: 3000,
                        showConfirmButton: false
                    });
                } else {
                    swal({
                        title: "Cancelled!",
                        type: "error",
                        timer: 3000
                    });
                }
            });
        });
	});
</script>
<script type="text/javascript">
    $(".select2_demo_1").select2();
</script>

</body>
</html>