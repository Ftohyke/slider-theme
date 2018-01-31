
<div id="page-wrapper">
  <div id="page">

  <div id="header" class="header-menu">
    <div class="section clearfix">
	  <div class="stripe">
        <div class="overbox">
          <div class="overbox-area">
            <a href="<?php print $front_page; ?>" title="<?php print t('Cover Page'); ?>" rel="home" id="logo" style="logotype">
              <img src="<?php print $logo; ?>" alt="<?php print t('SITE NAME'); ?>" />
            </a>
            <div class="main-menu">
              <?php
                print theme (
                  'links',
                  array (
                    'links' => $main_menu,
                    'attributes' => array (
                      'id' => 'main-menu-links',
                      'class' => array ('links', 'clearfix'),
                    ),
                    'heading' => array (
                      'text' => t('Navigation'),
                      'level' => 'h2',
                      'class' => array('element-invisible'),
                    ),
                  )
                );
              ?>
            </div>
          </div>
        </div>
      </div>

    <div class="header-cover-interlayer bg-filled"></div>

    <!-- < ? php print render($page['header']); ? > -->




  </div></div> <!-- /.section, /#header -->
  
  <?php if ($site_name || $site_slogan): ?>
  <div id="sub-header" class="header-cover">
      <div id="bg-and-filling" class="header-cover-aggregator bg-stencil-filled"/>
      <div id="name-and-slogan">
        <div id="slogan-with-buttons" class="bottom-stacked">
          <div id="buttons" class="header-buttons">
            
          </div>
          <?php if ($site_slogan): ?>
            <div id="site-slogan" class="header-slogan <?php if ($hide_site_slogan) { print ' element-invisible'; } ?>">
              <?php print $site_slogan; ?>
            </div>
          <?php endif; ?>
        </div>
      </div> <!-- /#name-and-slogan -->
  </div>
  <?php endif; ?>



  </div></div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
