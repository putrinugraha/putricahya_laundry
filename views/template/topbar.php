        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../../assets/images/iconlaundry.png" alt=""><?php echo $_SESSION['data']['username'] ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                    <form action="../../routers/r_login.php?aksi=logout" method="POST">
                    <button class="dropdown-item" ><i class="fa fa-sign-out pull-right" name="logout"></i> Log Out</button>
                    </form>
                  </div>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->