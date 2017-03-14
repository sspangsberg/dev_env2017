<!doctype html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='<?php echo $this->getThemePath() ?>/style.css'/>
    <?php echo Loader::element('header_required'); ?>
  </head>
  <body>
    <div class="<?php echo $c->getPageWrapperClass() ?>">
    <div class="main">
      <div class="container">
        <h1>MOVE</h1>
        <p>Form healthy habits to take your fitness to the next level
        </p>
        <a class="btn" href="">START NOW</a>
      </div>
    </div>

    <div class="supporting">
      <div class="container">
        <div class="col">
          <?php 
          
            $a = new Area('Title');
            $a->display($c);
          
           ?>
           <!--
          <h2>Move</h2>
          <p>Become more active by tracking your runs, rides, and walks.</p>
          -->
        </div>
        <div class="col">
          <h2>Sync</h2>
          <p>Access your activity on your phone, tablet, or computer.</p>
        </div>
        <div class="col">
          <h2>Compete</h2>
          <p>Set personal challenges and see how you rank against your friends.</p>
        </div>


        <div class="clearfix"></div>
      </div>
    </div>


    <div class="feature">
      <div class="container">
        <p><h2>Move. Rest. Recover. Move</h2></p>
      </div>
    </div>

    </div>
      <?php echo Loader::element('footer_required'); ?>
 
  </body>
</html>
