<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Resume Builder</title>
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

a {
	text-decoration: none;
}

li {
	list-style: none;
}

:root {
	--poppins: 'Poppins', sans-serif;
	--lato: 'Lato', sans-serif;

	--light: #F9F9F9;
	--blue: #3C91E6;
/*	--light-blue: #CFE8FF;*/
	--grey: #eee;
	--dark-grey: #AAAAAA;
	--dark: #342E37;
	--red: #DB504A;
	--yellow: #FFCE26;
	--light-yellow: #FFF2C6;
	--orange: #FD7238;
	--light-orange: #FFE0D3;
}

html {
	overflow-x: hidden;
}

body.dark {
	--light: #0C0C1E;
	--grey: #060714;
	--dark: #FBFBFB;
}

body {
	background: var(--grey);
	overflow-x: hidden;
}





/* SIDEBAR */
#sidebar {
	position: fixed;
	top: 0;
	left: 0;
	width: 280px;
	height: 100%;
	background: var(--light);
	z-index: 2000;
	font-family: var(--lato);
	transition: .3s ease;
	overflow-x: hidden;
	scrollbar-width: none;
	
}
#sidebar::--webkit-scrollbar {
	display: none;
}
#sidebar.hide {
	width: 60px;
}
#sidebar .brand {
	font-size: 24px;
	font-weight: 700;
	height: 56px;
	display: flex;
	align-items: center;
	color: var(--blue);
	position: sticky;
	top: 0;
	left: 0;
	/* background: var(--light); */
	
	z-index: 500;
	padding-bottom: 20px;
	box-sizing: content-box;
}
#sidebar .brand .bx {
	min-width: 60px;
	display: flex;
	justify-content: center;
}
#sidebar .side-menu {
	width: 100%;
	margin-top: 48px;
}
#sidebar .side-menu li {
	height: 48px;
	/* background: transparent; */
	margin-left: 6px;
	/* border-radius: 48px 0 0 48px; */
	padding: 4px;
}
/* #sidebar .side-menu li.active {
	background: var(--grey);
	position: relative;
} */
/* #sidebar .side-menu li.active::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	top: -40px;
	right: 0;
 box-shadow: 20px 20px 0 var(--grey);
z-index: -1;
} */
/* #sidebar .side-menu li.active::after {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	bottom: -40px;
	right: 0;
	box-shadow: 20px -20px 0 var(--grey);
	z-index: -1;
} */
#sidebar .side-menu li a {
	width: 100%;
	height: 100%;
	background: var(--light);
	display: flex;
	align-items: center;
	border-radius: 48px;
	font-size: 16px;
	color: var(--dark);
	white-space: nowrap;
	overflow-x: hidden;
}
#sidebar .side-menu.top li.active a {
	color: var(--blue);
}
#sidebar.hide .side-menu li a {
	width: calc(48px - (4px * 2));
	transition: width .3s ease;
}
#sidebar .side-menu li a.logout {
	color: var(--red);
}
#sidebar .side-menu.top li a:hover {
	color: var(--blue);
}
#sidebar .side-menu li a .bx {
	min-width: calc(60px  - ((4px + 6px) * 2));
	display: flex;
	justify-content: center;
	
}
/* SIDEBAR */





/* CONTENT */
#content {
	position: relative;
	width: calc(100% - 280px);
	left: 280px;
	transition: .3s ease;
}
#sidebar.hide ~ #content {
	width: calc(100% - 60px);
	left: 60px;
}




/* NAVBAR */
#content nav {
	height: 56px;
	background: var(--light);
	padding: 0 24px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
	font-family: var(--lato);
	position: sticky;
	top: 0;
	left: 0;
	z-index: 1000;
}
#content nav::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	bottom: -40px;
	left: 0;
	border-radius: 50%;
	box-shadow: -20px -20px 0 var(--light);
}
#content nav a {
	color: var(--dark);
}
#content nav .bx.bx-menu {
	cursor: pointer;
	color: var(--dark);
}
#content nav .nav-link {
	font-size: 16px;
	transition: .3s ease;
}
#content nav .nav-link:hover {
	color: var(--blue);
}
#content nav form {
	max-width: 400px;
	width: 100%;
	margin-right: auto;
}
#content nav form .form-input {
	display: flex;
	align-items: center;
	height: 36px;
}
#content nav form .form-input input {
	flex-grow: 1;
	padding: 0 16px;
	height: 100%;
	border: none;
	background: var(--grey);
	border-radius: 36px 0 0 36px;
	outline: none;
	width: 100%;
	color: var(--dark);
}
#content nav form .form-input button {
	width: 36px;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	background: var(--blue);
	color: var(--light);
	font-size: 18px;
	border: none;
	outline: none;
	border-radius: 0 36px 36px 0;
	cursor: pointer;
}
#content nav .notification {
	font-size: 20px;
	position: relative;
}
#content nav .notification .num {
	position: absolute;
	top: -6px;
	right: -6px;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	border: 2px solid var(--light);
	background: var(--red);
	color: var(--light);
	font-weight: 700;
	font-size: 12px;
	display: flex;
	justify-content: center;
	align-items: center;
}
#content nav .profile img {
	width: 36px;
	height: 36px;
	object-fit: cover;
	border-radius: 50%;
}
#content nav .switch-mode {
	display: block;
	min-width: 50px;
	height: 25px;
	border-radius: 25px;
	background: var(--grey);
	cursor: pointer;
	position: relative;
}
#content nav .switch-mode::before {
	content: '';
	position: absolute;
	top: 2px;
	left: 2px;
	bottom: 2px;
	width: calc(25px - 4px);
	background: var(--blue);
	border-radius: 50%;
	transition: all .3s ease;
}
#content nav #switch-mode:checked + .switch-mode::before {
	left: calc(100% - (25px - 4px) - 2px);
}
/* NAVBAR */





/* MAIN */
#content main {
	width: 100%;
	padding: 36px 24px;
	font-family: var(--poppins);
	max-height: calc(100vh - 56px);
	overflow-y: auto;
}
#content main .head-title {
	display: flex;
	align-items: center;
	justify-content: space-between;
	grid-gap: 16px;
	/* flex-wrap: wrap; */
}
#content main .head-title .left h1 {
	font-size: 36px;
	font-weight: 600;
	margin-bottom: 10px;
	color: var(--dark);
}
#content main .head-title .left .breadcrumb {
	display: flex;
	align-items: center;
	grid-gap: 16px;
}
#content main .head-title .left .breadcrumb li {
	color: var(--dark);
}
#content main .head-title .left .breadcrumb li a {
	color: var(--dark-grey);
	pointer-events: none;
}
#content main .head-title .left .breadcrumb li a.active {
	color: var(--blue);
	pointer-events: unset;
}
#content main .head-title .btn-download {
	height: 36px;
	padding: 0 16px;
	/* border-radius: 36px; */
	background: var(--blue);
	color: var(--light);
	display: flex;
	justify-content: center;
	align-items: center;
	grid-gap: 10px;
	font-weight: 500;
}

#content main .box-info {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 24px;
	margin-top: 36px;
}
#content main .box-info li {
	padding: 24px;
	background: var(--light);
	border-radius: 20px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
	width: 350px;

}
#content main .box-info li .bx {
	width: 80px;
	height: 80px;
	border-radius: 10px;
	font-size: 36px;
	display: flex;
	justify-content: center;
	align-items: center;
}
#content main .box-info li:nth-child(1) .bx {
	background: var(--light-blue);
	color: var(--blue);
}
#content main .box-info li:nth-child(2) .bx {
	background: var(--light-yellow);
	color: var(--yellow);
}
#content main .box-info li:nth-child(3) .bx {
	background: var(--light-orange);
	color: var(--orange);
}
#content main .box-info li .text h3 {
	font-size: 24px;
	font-weight: 600;
	color: var(--dark);
}
#content main .box-info li .text p {
	color: var(--dark);	
}

#content main .table-data {
	display: flex;
	flex-wrap: wrap;
	grid-gap: 24px;
	margin-top: 24px;
	width: 100%;
	color: var(--dark);
}
#content main .table-data > div {
	border-radius: 20px;
	background: var(--light);
	padding: 24px;
	overflow-x: auto;
}
#content main .table-data .head {
	display: flex;
	align-items: center;
	grid-gap: 16px;
	margin-bottom: 24px;
}
#content main .table-data .head h3 {
	margin-right: auto;
	font-size: 24px;
	font-weight: 600;
}
#content main .table-data .head .bx {
	cursor: pointer;
}

#content main .table-data .order {
	flex-grow: 1;
	flex-basis: 500px;
}
#content main .table-data .order table {
	width: 100%;
	border-collapse: collapse;
}
#content main .table-data .order table th {
	padding-bottom: 12px;
	font-size: 13px;
	text-align: left;
	border-bottom: 1px solid var(--grey);
}
#content main .table-data .order table td {
	padding: 16px 0;
}
#content main .table-data .order table tr td:first-child {
	display: flex;
	align-items: center;
	grid-gap: 12px;
	padding-left: 6px;
}
#content main .table-data .order table td img {
	width: 36px;
	height: 36px;
	border-radius: 50%;
	object-fit: cover;
}
#content main .table-data .order table tbody tr:hover {
	background: var(--grey);
}
#content main .table-data .order table tr td .status {
	font-size: 10px;
	padding: 6px 16px;
	color: var(--light);
	border-radius: 20px;
	font-weight: 700;
}
#content main .table-data .order table tr td .status.completed {
	background: var(--blue);
}
#content main .table-data .order table tr td .status.process {
	background: var(--yellow);
}
#content main .table-data .order table tr td .status.pending {
	background: var(--orange);
}


#content main .table-data .todo {
	flex-grow: 1;
	flex-basis: 300px;
}
#content main .table-data .todo .todo-list {
	width: 100%;
}
#content main .table-data .todo .todo-list li {
	width: 100%;
	margin-bottom: 16px;
	background: var(--grey);
	border-radius: 10px;
	padding: 14px 20px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
#content main .table-data .todo .todo-list li .bx {
	cursor: pointer;
}
#content main .table-data .todo .todo-list li.completed {
	border-left: 10px solid var(--blue);
}
#content main .table-data .todo .todo-list li.not-completed {
	border-left: 10px solid var(--orange);
}
#content main .table-data .todo .todo-list li:last-child {
	margin-bottom: 0;
}
/* MAIN */
/* CONTENT */









@media screen and (max-width: 768px) {
	#sidebar {
		width: 200px;
	}

	#content {
		width: calc(100% - 60px);
		left: 200px;
	}

	#content nav .nav-link {
		display: none;
	}
}






@media screen and (max-width: 576px) {
	#content nav form .form-input input {
		display: none;
	}

	#content nav form .form-input button {
		width: auto;
		height: auto;
		background: transparent;
		border-radius: none;
		color: var(--dark);
	}

	#content nav form.show .form-input input {
		display: block;
		width: 100%;
	}
	#content nav form.show .form-input button {
		width: 36px;
		height: 100%;
		border-radius: 0 36px 36px 0;
		color: var(--light);
		background: var(--red);
	}

	#content nav form.show ~ .notification,
	#content nav form.show ~ .profile {
		display: none;
	}

	#content main .box-info {
		grid-template-columns: 1fr;
	}

	#content main .table-data .head {
		min-width: 420px;
	}
	#content main .table-data .order table {
		min-width: 420px;
	}
	#content main .table-data .todo .todo-list {
		min-width: 420px;
	}
}



.main{
	width: 100%;
}

.clr{
  clear: both;}
  .wrapper{
    width: 100%;
  }
body {
    margin: 0;
    font-family: Arial, sans-serif;
  }
  
  /* sidebar  */
  .sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: black;
    padding-top: 20px;
  }
  
  .sidebar ul {
    list-style-type: none;
    padding: 0;
  }
  
  .sidebar ul li {
    padding: 10px;
    text-align: center;
  }
  
  .sidebar ul li a {
    color: white;
    text-decoration: none;
   
  }
  .sidebar ul li a:hover{
    color:white;
    text-decoration:underline;
    /* text-decoration: overline; */
   
  }
  .content {
    margin-left: 250px;
    padding: 20px;
  }
  @media (max-width: 768px) {
    .sidebar {
      width: 150px;
    }
    .content {
      margin-left: 150px;
    }
  }
  /* leftbody */
  .leftbody{
    width: 85%;
  height: auto;
/* align-items: center; */
  float: right;
  
  }



  body {
    margin: 0;
    font-family: Arial, sans-serif;
}
/* logo code  */
.logo-container {
  position: relative;
  width:300px; /* Adjust width as needed */
}

.logo-container img {
  max-width: 100%;
  
  height:150px;
}

/* 
} */
.logo-container {
  width: 200px; /* Adjust width as needed */
  text-align: center;
  left:10%;
}

/* logo effect */
.logo-container {
  width: 200px; /* Adjust width as needed */
  text-align: center;
}

/* .pulsating-logo {
  animation: pulse-animation 1s infinite;
}


} */

/* code for cards */
  .container-card{
    width: 100%;
    
}
  .column {
    float: left;
    width: 23%;
    padding: 0 5px;
   margin-left: 13px;

    
  }
  
  .row {
    margin: 0 -5px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive columns */
  @media screen and (max-width: 600px) {
    .column {
      width:100%;
      display:block;
      margin-bottom: 10px;
    }
  }
  
  /* Style the counter cards */
  .card {
    box-shadow: 0 4px 8px 0 rgba(38, 17, 17, 0.2);
    padding: 16px;
    text-align: center;
    background-color:black;
    color: white;
margin-top: 30px;
height:190px;
border-radius: 30px;
  }
  
  .fa {font-size:25px;
    margin-top: 30px;}

#logoutButton {
  padding: 10px 20px;
  font-size: 16px;
  margin-top: 260px;
  cursor: pointer;
  background-color: orangered;
  color: white;
  border: none;
  border-radius: 5px;
  
}

#logoutButton:hover {
  background-color: red;
}
/* hide shpw */
.hidden {
  display: none;
}

#tableContainer {
  margin-top: 20px;
}

      table {
    border-collapse: collapse;
    width: 92%; 
    margin: 0 auto;
      
}
       

        th,
        td {
            border: 1px solid black;
		background:white;
 padding: 8px; text-align: center;


        }

        th {
			
            background: black;
			border: 1px solid white;
            text-align: center;
            color: white;
			
        }

        .actions {
            text-align: center;
        }

        .view-btn,
        .delete-btn {
            padding: 5px 10px;
            margin: 2px;
            cursor: pointer;
        }

        .view-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
            border: none;
        }
    </style>

	<script>
        function deletecandidate(cadId) {
            if (confirm('Are you sure you want to delete this candidate?')) {
                document.getElementById('delete-id1').value = cadId;
                document.getElementById('delete-form1').submit();
            }
        }
    </script>
</head>
<body>


	<!-- SidEBAR -->
	<section id="sidebar">
		<a href="demo.gif" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Resume Builder</span>
		</a>
		<ul class="side-menu top" style="margin-left: 40px;">
			<li >
				<a href="admin_index.php">
					<i  ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#" id="showCompanyTableButton">
				
					<span class="text" id="">register</span>
				</a>
			</li>
			<li>
				<a href="#" id="showCandidateTableButton">
					<i ></i>
					<span class="text" id="showuserstablebutton">users</span>
				</a>
			</li>
			<li>
				<a href="" id="candidate">
					<i ></i>
					<span class="text">Templates</span>
				</a>
			</li>
			
		</ul>
		<!-- <ul class="side-menu top">
			
			<li>
				<a href=".\\./RB/about.html" class="logout">
					<span class="text" style="margin-left: 40px;">Logout</span>
				</a>
			</li>
		</ul> -->
		<div class="side-menu top">
			<botton><a href="index.html"> loggout</a></botton>
	</div>
	</section>
	<!-- SidEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
		
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
        <li style="background: linear-gradient(to right, #89efff, #6278d0);">
            <i class='bx bxs-user-detail'></i>
            <span class="text">
                <h3 id="partnersCount">0</h3>
                <p>register</p>
            </span>
        </li>
        <li style="background: linear-gradient(to right, #89efff, #6278d0);">
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3 id="projectsCount">0</h3>
                <p>Visitors</p>
            </span>
        </li>
        <li style="background: linear-gradient(to right, #89efff, #6278d0);">
            <i class='bx bxs-user'></i>
            <span class="text">
                <h3 id="jobsCount">0</h3>
                <p>users</p>
            </span>
        </li>
    </ul>
		<div class="clr"></div>

		

		</main>

		<!-- MAIN -->
	</section>
	<div class="wrapper">
            <div class="leftbody" id="candidateTableContainer" class="hidden">

                <table>
                    <h2 style="margin-left:50px">User Details</h2>
                    <tr>

                        <th>User ID</th>
                        <th>User Name</th>                
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "rb_db";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete-id1'])) {
                        $deleteId = $_POST['delete-id1'];
                        $deleteSql = "DELETE FROM users WHERE id = ?";
                        $stmt = $conn->prepare($deleteSql);
                        $stmt->bind_param("i", $deleteId);
                        $stmt->execute();
                        $stmt->close();
                    }

                    $sql = "SELECT id, name,email FROM users";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td class='actions'>";
                            echo "<button class='view-btn' onclick='viewcom(" . $row["id"] . ",\"". addslashes($row["name"]). "\", \"" . addslashes($row['email']). "\" '>View</button>";
                            echo "<button class='delete-btn' onclick='deletecandidate(" . $row["id"] . ")'>Delete</button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>0 results</td></tr>";
                    }

                    $conn->close();
                    ?>
                </table>
                <form id="delete-form1" method="post">
                    <input type="hidden" name="delete-id1" id="delete-id1">
                </form>
            </div>

            <div class="clr"></div>

        </div>
		<!DOCTYPE html>

				<h1>Contact Form</h1>
				<form action="/submit-form" method="post" id="viewmodel1">
					<!-- Text input for Name -->
					<label for="iviewid">id:</label><br>
					<input type="text" id="viewid" name="id"><br><br>
					<label for="viewname">Name:</label><br>
					<input type="text" id="viewname" name="name"><br><br>

					<!-- Email input for Email -->
					<label for="viewemail">Email:</label><br>
					<input type="email" id="viewemail" name="email"><br><br>

				
					<!-- Submit button -->
					<input type="submit" value="Submit">
				</form>

				<script>
					function viewcom(id,name,email){
						document.getElementById('viewid').value=id;
						document.getElementById('viewname').value=name;
						document.getElementById('viewemail').value=email;
						var viewmodel=new (document.getElementById('viewmodel1'));
						viewmodel.show();
					}

					</script>

	<!-- CONTENT -->
	

	<script src="script.js"></script>
	<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Define initial counter values
            let partnersCounter = 5;
            let projectsCounter = 23;
            let jobsCounter = 55;

            // Function to update counter values
            function updateCounters() {
                if (partnersCounter <= 20) { // Example stopping condition for partnersCounter
                    document.getElementById('partnersCount').textContent = partnersCounter++;
                }
                if (projectsCounter <= 70 ) { // Example stopping condition for projectsCounter
                    document.getElementById('projectsCount').textContent = projectsCounter++;
                }
                if (jobsCounter <= 150) { // Example stopping condition for jobsCounter
                    document.getElementById('jobsCount').textContent = jobsCounter++;
                }

                // Check if all counters have reached their stopping conditions
                if (partnersCounter > 20 && projectsCounter > 70 && jobsCounter > 150) {
                    clearInterval(intervalid); // Stop the setInterval loop
                }
            }

            // Update counters every 50ms (for demonstration)
            let intervalid = setInterval(updateCounters, 1000);
        });
    </script>


	<!-- hide show table  -->
	<script>
        document.addEventListener('DOMContentLoaded', function () {
           
            var candidateTableContainer = document.getElementById('candidateTableContainer');
           

            // Ensure both tables are hidden on page load
           
            candidateTableContainer.classList.add('hidden');
           

            document.getElementById('showCandidateTableButton').addEventListener('click', function () {
                candidateTableContainer.classList.remove('hidden');
                companyTableContainer.classList.add('hidden');
                jobTableContainer.classList.add('hidden');
            });

			document.getElementById('showCompanyTableButton').addEventListener('click', function () {
                candidateTableContainer.classList.add('hidden');
            });

			document.getElementById('candidate').addEventListener('click', function () {
                candidateTableContainer.classList.add('hidden');
            });
           
        });

    </script>
<!-- script code for hide show  table  -->
			
</body>
</html>