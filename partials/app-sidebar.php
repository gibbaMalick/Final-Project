<div class="dashboard_sidebar" id="dashboard_sidebar">
	<h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
	<div class="dashboard_sidebar_users" id="dashboard_sidebar_users">
		<img id="image" src="images/Gboy6.jpg" alt="User Image">
		<span><?= $user['first_name'] . ' ' . $user['last_name'] ?></span>
	</div>
	<div class="dashboard_sidebar_menus">
		<ul class="dashboard_menu_lists">
			<!-- class="activeMenu" -->
			<li>
				<a href="./dashboard.php"><i class="fa fa-dashboard"></i><span class="menuText">Dashboard</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-user-plus"></i><span class="menuText">Product Management</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-user-plus"></i><span class="menuText">Supplier Management</span></a>
			</li>
			<li>
				<a href="./users-add.php"><i class="fa fa-user-plus"></i><span class="menuText">User Management</span></a>
				<ul class="dashboard_menu_lists">
					<li><a href="#"><i class="fa fa-circle-o">View Users</i></a></li>
					<li><a href="#"><i class="fa fa-circle-o">Add User</i></a></li>
				</ul>
			</li>
			
		</ul>
	</div>
</div>