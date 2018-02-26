<!DOCTYPE html>
<html>
	<head>
		<title>แจ้งเหตุ</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/facebook.js"></script>
	</head>
	<body>
		<?php
			require 'db_conn.php';
			include 'menu.php';
			include 'home.php';
		?>
		<!-- The Modal -->
		  <div class="modal fade" id="myModal" style="color: #000;">
		    <div class="modal-dialog">
		      <div class="modal-content">
		      
		        
		        <!-- Modal body -->
		        <div class="modal-body">
		        	เข้าสู่ระบบก่อนแจ้งเหตุ
		        </div>
		        
		        <!-- Modal footer -->
		        <div class="modal-footer">
		          <table width="100%">
		        		<tr>
		        			<td>
		        				<button type="button" class="btn btn-primary mt-2 mb-2" style="width: 100%;"><b><i class="fa fa-facebook-square" style="color: #fff;"></i> เข้าสู่ระบบด้วย Facebook</b></button>
		        			</td>
		        			<td>
		        				<button type="button" class="btn btn-danger mt-2 mb-2" style="width: 100%;"><b><i class="fa fa-google-plus" style="color: #fff;"></i> เข้าสู่ระบบด้วย Google+</b></button>
		        			</td>
		        		</tr>
		        	</table>
		        </div>
		        
		      </div>
		    </div>
		  </div>
	</body>
</html>