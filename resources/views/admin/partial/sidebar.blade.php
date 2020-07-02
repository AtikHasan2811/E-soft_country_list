  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- sidebar brand -->
                <router-link to="/home"  class="sidebar-brand d-flex align-item-center">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-2"> Atik-Admin <sup>2</sup></div>
                </router-link>
                <!-- ......sidebare.end........ -->
                <!-- section divider -->
                <hr class="sidebar-divider my-0">
                <!-- section divider end -->

                <!-- Nav Item Dashboard -->
                <li class="nav-item active">
                    <router-link to="/home"  class="nav-link">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </router-link>
                </li>
                <!-- Nav Item Dashboard end -->
                <!-- section diveder -->
                <hr class="sidebar-divider my-0">
                <!-- section diveder end -->

                <!-- section heading -->
                <div class="sidebar-heading mt-2">
                    INTERFACE
                </div>
                <!-- section heading end-->
                <!-- nav Item-page Collapse Menu -->
                <!-- nav Item-page Component Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Components</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custome Cumponent</h6>
                            <router-link to="/button"  class="collapse-item">Button</router-link>
                            <a href="#" class="collapse-item">Card</a>
                        </div>
                    </div>
                </li>
                <!-- nav Item-page Component Collapse Menu end-->
                <!-- nav Item-page utilites Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Utilities</span>
                    </a>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo"
                        data-parent="accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custome Utilities</h6>
                            <a href="#" class="collapse-item">Color</a>
                            <a href="#" class="collapse-item">Borders</a>
                            <a href="#" class="collapse-item">Amimations</a>
                            <a href="#" class="collapse-item">Other</a>
                        </div>
                    </div>
                </li>
                <!-- nav Item-page utilites Collapse Menu end -->
                <hr class="sidebar-divider">
                <li class="nav-item">
                    <router-link to="/categoryList" class="nav-link" >
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Category List</span>
                    </router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>table</span>
                    </a>
                </li>
                <hr class="sidebar-divider">
                <!-- sidebar toggler  -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle">
                    </button>
                </div>
                <!-- sidebar toggler  end -->
            </ul>
