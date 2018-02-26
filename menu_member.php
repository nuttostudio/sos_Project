<div class="container-fluid bg-blue1">
  <div class="col-12 text-right">
    <div class="btn-group mt-3 mb-2">
      <a><?php echo $member; ?></a>
      <a class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
        <span class="caret"></span>
      </a>
      <div class="dropdown-menu">
        <img src="img/sort.png" style="position: absolute;margin-top: -20px;margin-left: 133px;">
        <a class="dropdown-item" href="#">แก้ไขโปรไฟล์</a>
        <a class="dropdown-item" href="#">ออกจากระบบ</a>
      </div>
    </div>
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