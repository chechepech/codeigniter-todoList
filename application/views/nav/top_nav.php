    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo anchor('/', $this->lang->line('system_system_name'),'class="navbar-brand"'); ?>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li class=""><?php echo anchor('tasks', $this->lang->line('nav_home')); ?></li>
          </ul>       
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!--<div class="container" role="main"> -->
