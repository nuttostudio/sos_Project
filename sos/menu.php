<div class="container-fluid bg-blue1">
  <div class="col-12 text-right">
    <button type="button" onclick="FB.login()" class="btn btn-primary mt-2 mb-2" scope="public_profile,email" onlogin="checkLoginState();"><b><i class="fa fa-facebook-square" style="color: #fff;"></i> LOGIN</b></button>
    <button type="button" class="btn btn-danger mt-2 mb-2"><b><i class="fa fa-google-plus" style="color: #fff;"></i> LOGIN</b></button>
  </div>
</div>
<nav class="navbar navbar-expand-md bg-white sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#">SOS</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">วิธีใช้งาน</a>
      </li>
    </ul>
  </div> 
</nav>
<div id="status">
</div>