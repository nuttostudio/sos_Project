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
		
		<?php
			session_start();
			if (isset($_SESSION['fname'])) {
				require 'db_conn.php';
				$name = $_SESSION['fname'];
				$member_select = "SELECT*FROM member WHERE f_name='$name'";
				$member_query = mysqli_query($conn,$member_select);
				$member_select = mysqli_fetch_array($member_query);
				if ($member_select) {
					?>
					<script src="js/facebook_login.js"></script>
					<?php
					$member = $member_select['f_name'];
				}else{
				?>
					<script src="js/facebook.js"></script>
				<?php
				}
			}else{
				?>
					<script src="js/facebook.js"></script>
				<?php
			}
		?>
		
	</head>
	<body>
		<?php
			if (isset($member)) {
				include 'menu_member.php';
			}else{
				include 'menu.php';
			}
			include 'home.php';
		?>
		<!-- The Modal -->
		 <!--  <div class="modal fade" id="myModal" style="color: #000;">
		    <div class="modal-dialog">
		      <div class="modal-content">
		      
		        
		        <div class="modal-body">
		        	เข้าสู่ระบบก่อนแจ้งเหตุ
		        </div>
		        
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
		  </div> -->
		  <div class="modal fade" id="myModal" style="color: #000;">
		    <div class="modal-dialog">
		      <div class="modal-content">
		      
		        
		        <!-- Modal body -->
		        <div class="modal-body">
		        	<div class="row">
		        		<div class="col-12">
		        			<h1>แจ้งอุบัติเหตุ</h1>
		        			<hr>
		        		</div>
		          		<div class="col-12">
		          			<input type="file" name="text" class="form-control">
		          		</div>
		          	</div>
		        </div>
		        
		      </div>
		    </div>
		  </div>
	</body>
</html>