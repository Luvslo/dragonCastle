<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <?php
            $xpearned=100;
            $xpneeded=517;
            
            $coins=200;
            $bucks=15;
            $foods=400;
            
            $xp=$xpearned."/".$xpneeded;
        ?>
        
        
        <a class="brand" href="">Dragon Castle</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li class="dropdown">
                <a href="" class="dropdown-toggle js-activated"><i class="icon-user icon-white"></i>Xp <input class="input-mini search-query" disabled=true id="xp" value="<?php echo $xp;?>"></a>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle js-activated"><i class="icon-user icon-white"></i>Coins <input class="input-mini search-query" disabled=true value="    <?php echo $coins;?>"></a>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle js-activated"><i class="icon-user icon-white"></i>Bucks  <input class="input-mini search-query" disabled=true value="    <?php echo $bucks;?>"></a>
            </li>
	    <li class="dropdown">
                <a href="" class="dropdown-toggle js-activated"><i class="icon-user icon-white"></i>Food  <input class="input-mini search-query" disabled=true value="    <?php echo $foods;?>"></a>
            </li>
            
          </ul>
        </div> <!-- .nav-collapse -->
      </div> <!-- .container -->
    </div> <!-- .navbav-inner -->
  </div> <!-- .navbar -->