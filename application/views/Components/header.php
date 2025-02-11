<!-- Topbar header - style you can find in pages.scss -->
<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="<?php echo base_url()."dashboard"; ?>">
                <!-- Logo icon -->
                <b class="logo-icon p-l-10">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="<?php echo base_url(); ?>assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                 <!-- Logo text -->
                <span class="logo-text">
                     <!-- dark Logo text -->
                     <img src="<?php echo base_url(); ?>assets/images/logo-text.png" alt="homepage" class="light-logo" />   
                </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
            </ul>
            <!-- ======================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ======================================================== -->
            <ul class="navbar-nav float-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" onclick="getPopoverData()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> <span id="empName">-<span></a>
							
                        <!-- <input type="checkbox" class="dropdown-item" checked data-toggle="toggle">						 -->
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../viewFT/account_settings.php"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="" onclick="doLogout()"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                    </div>
                </li>
            </ul>
			<ul class="navbar-nav float-right">
				<li class="nav-item dropdown">
					<input data-onstyle="success" data-offstyle="danger" data-on="Online" data-off="Offline" id="toggle-one" checked type="checkbox">
				</li>
			</ul>
        </div>
    </nav>
</header>
