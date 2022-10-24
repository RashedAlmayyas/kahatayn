 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-danger"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
           <button style="border: none;background:none" onclick="sidebutton()"> 
            <a href="dashboard" class="nav-item nav-link active" ><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
           </button>
            <a href="/users" class="nav-item nav-link" ><i class="fa fa-user me-2"></i>Users</a>
            <a href="/events" class="nav-item nav-link"><i class="fa fa-calendar me-2"></i>Events</a>
            <a href="/admin" class="nav-item nav-link"><i class="fa fa-cogs me-2"></i>Admin</a>

        </div>
    </nav>
</div>
<script src="{{ asset('main.js') }}"></script>
<!-- Sidebar End -->
