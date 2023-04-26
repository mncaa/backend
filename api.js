function G(i) { return document.getElementById(i) }
function Q(i) { return document.querySelector(i) }
function Qa(i) { return Array.from(document.querySelectorAll(i)) }
function q(a,i) { return a.querySelector(i) }
function qa(a, i) { return Array.from(a.querySelectorAll(i)) }


function links(){
  return `<li><a href='#'>Home</a></li>
  <li><a href='#'>About</a></li>
  <li><a href="index.php">Register</a></li>
  <li><a href="#">Gallery</a></li>
  <li><a href="#">Contact</a></li>`

      }
      Q('header').innerHTML = `	<div class="container-fluid">
      <div class="row header-bg">
        <div class="col-lg-12 up_1">
          <p class="bus">God</p>
          <p class="bus_1">Life Is Short | New Life New Beginning</p>
        </div>
      </div>
    </div>
    <div class="mid">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand d-lg-none d-xl-none" href="#">Life Is Short</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto menu-bar">
					<li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
					<li class="nav-item active"><a class="nav-link" href="#">About Us</a></li>
					<li class="nav-item active"><a class="nav-link" href="reg.php">Register</a></li>
					<li class="nav-item active"><a class="nav-link" href="#">Search Profile </a></li>
					<li class="nav-item active"><a class="nav-link" href="#">Pay Online </a></li>
					<li class="nav-item active"><a class="nav-link" href="#">Contact Us</a></li>
				</ul>
				
			</div>
	     </div>
	<div class="container bg-white dash">
				<ul class=" admin-area">
					<li><a  href="#">Dashboard</a></li>
					<li ><a href="reg.php">New Profile</a></li>
					<li ><a href="index1.php">Manage Profile</a></li>
					<li ><a href="#">Manage Calls</a></li>
					<li ><a href="#">LogOut</a></li>
				</ul>
   
      </div>`;
      

