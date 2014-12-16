<!DOCTYPE html>
<html>
  <head>
    <?php
      function variable_get ($a, $b) {
        return "Pretty code. Smart design.";
      }
    ?>  
    <meta charset="UTF-8">
    <title>winter header</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="scripts.js"></script>
  	<style>
  		.texture-h {
  		  fill: url(#texture90);
  		  opacity: 0.2;
  		}
  		.tree {
  		  fill: url(#tree-texture-);
  		  opacity: 0.5;
  		}
  		.texture-w {
  		  fill: url(#texture180);
  		  opacity: 0.4;
  		}
  		.texture-b {
  		  fill: url(#texture-b);
  		  opacity: 0.5;
  		}
  		.texture-br {
  		  fill: url(#texture-br);
  		  opacity: 0.9;
  		}
  		.texture-45 {
  		  fill: url(#texture45);
  		  opacity: 0.6;
  		}
  		.boat-reflection1 {
  		  fill: url(#boat-reflection1);
  		  opacity: 0.6;
  		}
  		.boat-reflection2 {
  		  fill: url(#boat-reflection2);
  		  opacity: 0.6;
  		}
  		.reflection-pink {
  		  fill: url(#reflection-pink);
  		  opacity: 0.8;
  		}
  		.reflection-yellow {
  		  fill: url(#reflection-yellow);
  		  opacity: 0.8;
  		}
  		.reflection-grey {
  		  fill: url(#reflection-grey);
  		  opacity: 0.9;
  		}
  		.grey-shadow {
  		  fill: url(#grey-shadow);
  		  opacity: 0.9;
  		}
    </style>
  </head>
  <body>
    <div class="region-header">
      <div class="block">
        <!-- start to copy from here -->

        <?php if (variable_get('site_slogan', 'Drupal')): ?>
          <div class="block-container">
            <h1 class="header_site-slogan"><?php print variable_get('site_slogan', 'Drupal');  ?></h1>
          </div>
        <?php endif; ?>

        <?php include("sites/all/themes/bc_pixels/images/header-textures/header.svg"); ?>

        <!-- end copy here -->
      </div>
    </div>
  </body>
</html>