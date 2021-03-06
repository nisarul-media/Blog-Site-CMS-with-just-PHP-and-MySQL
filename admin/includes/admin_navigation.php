<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">CMS Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../"><i class="fa fa-globe"></i> Visit Site</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['firstname']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="<?php if($filename == 'index') echo 'active' ?>">
                <a href="./"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="<?php if($filename == 'posts') echo 'active' ?>">
                <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-file"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts_dropdown" class="collapse">
                    <li>
                        <a href="posts.php?posts=view">View Posts</a>
                    </li>
                    <li>
                        <a href="posts.php?posts=add_new">Add a New Post</a>
                    </li>
                </ul>
            </li>
            <li class="<?php if($filename == 'categories') echo 'active' ?>">
                <a href="categories.php" ><i class="fa fa-fw fa-paperclip"></i> Categories</a>
            </li>
            <li>
                <a href="comments.php"><i class="fa fa-fw fa-comments"></i> Comments</a>
            </li>
            <li class="<?php if($filename == 'users') echo 'active' ?>">
                <a href="javascript:;" data-toggle="collapse" data-target="#users_dropdown"><i class="fa fa-fw fa-user"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="users_dropdown" class="collapse">
                    <li>
                        <a href="users.php?source-user=view">View Users</a>
                    </li>
                    <li>
                        <a href="users.php?source-user=add_new">Add a New User</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="<?php if($filename == 'profile') echo 'active' ?>" href="profile.php"><i class="fa fa-fw fa-edit"></i> Profile</a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>