<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="CSS/adminstyle.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.sidebar{
  position: fixed;
  height: 100%;
  width: 240px;
  background: #3498DB;
  transition: all 0.5s ease;
}
.sidebar.active{
  width: 60px;
}
.sidebar .logo_details{
  height: 80px;
  display: flex;
  align-items: center;
}
.sidebar .logo_details i{
  font-size: 28px;
  font-weight: 500;
  color: #fff;
  min-width: 60px;
  text-align: center
}
.sidebar .logo_details .logo_name{
  color: #fff;
  font-size: 24px;
  font-weight: 500;
}
.sidebar .nav-links{
  margin-top: 10px;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  height: 50px;
}
.sidebar .nav-links li a{
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li a.active{
  background: #081D45;
}
.sidebar .nav-links li a:hover{
  background: #081D45;
}
.sidebar .nav-links li i{
  min-width: 60px;
  text-align: center;
  font-size: 18px;
  color: #fff;
}
.sidebar .nav-links li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
}

.sidebar .nav-links .log_out{
  position: absolute;
  bottom: 0;
  width: 100%;
}
.home-section{
  position: relative;
  background: #f5f5f5;
  min-height: 100vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section{
  width: calc(100% - 60px);
  left: 60px;
}
.home-section nav{
  display: flex;
  justify-content: space-between;
  height: 80px;
  background: #fff;
  display: flex;
  align-items: center;
  position: fixed;
  width: calc(100% - 240px);
  left: 240px;
  z-index: 100;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section nav{
  left: 60px;
  width: calc(100% - 60px);
}
.home-section nav .sidebar-button{
  display: flex;
  align-items: center;
  font-size: 24px;
  font-weight: 500;
}
nav .sidebar-button i{
  font-size: 35px;
  margin-right: 10px;
}
.home-section nav .search-box{
  position: relative;
  height: 50px;
  max-width: 550px;
  width: 100%;
  margin: 0 20px;
}
nav .search-box input{
  height: 100%;
  width: 100%;
  outline: none;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  font-size: 18px;
  padding: 0 15px;
}
nav .search-box .bx-search{
  position: absolute;
  height: 40px;
  width: 40px;
  background: #2697FF;
  right: 5px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 4px;
  line-height: 40px;
  text-align: center;
  color: #fff;
  font-size: 22px;
  transition: all 0.4 ease;
}
.home-section nav .profile-details{
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
nav .profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
nav .profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
nav .profile-details i{
  font-size: 25px;
  color: #333;
}
.home-section  h1{
  padding-top: 104px;
}
.home-section .customer-details{
  position: relative;
  padding-top: 104px;
  display: flex;


}
.home-section .customer-details .customer-table{
  width: 100%;
  text-align: center;

}
footer{
  position: absolute;
  bottom: 0%;
  width: 15%;
  height: 5%;
}

.home-section .user_form form .row .user-form{
  padding-top: 80px;
  display: flex;
  width: 70%;
  height: 30%;
  justify-content: space-evenly;
  align-items: center;
}
.home-section .user_form form .row .user-form input{
  width: 50%;
  height: 50%;
  text-align: left;

}

.home-section .user_form form .row .user-form .btn{
  display: block;
  width: 100%;
  padding: 15px 20px;
  text-align: center;
  border: none;
  cursor: pointer;
  transition: .3s;
  border-radius: 30px
}

	</style>
	<div class="sidebar">
		<div class="logo_details">
			<span class="logo_name">QUICK SCAN</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="admindashboard.php" class="active">
					<i class='bx bx-grid-alt' ></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
				<li>
				<a href="generate.html">
					<i class='bx bx-user' ></i>
					<span class="links_name">Generate Qr code</span>
				</a>
			</li>
				<li>
				<a href="items.php">
					<i class='bx bx-box' ></i>
					<span class="links_name">Add Products</span>
				</a>
			</li>
				<li class="log_out">
				<a href="login.php">
					<i class='bx bx-log-out'></i>
					<span class="links_name">Log Out</span>
				</a>
			</li>
		</ul>
	</div>
	<section class="home-section">
		<nav>
			<div class="sidebar-button">
				<i class='bx bx-menu sidebarBtn'></i>
				<span class="dashboard">Dashboard</span>
			</div>
			<div class="search-box">
				<input type="text" placeholder="Search...">
				 <i class='bx bx-search' ></i>
			</div>
			<div class="profile-details">
				<img src="avatar.svg" alt="">
				<span class="admin_name">Admin</span>
				<i class='bx bx-chevron-down' ></i>
			</div>
		</nav>
		<div>
			<h1>Welcome Admin</h1>
			
			</div>

	</section>
</body>
</html>

			


