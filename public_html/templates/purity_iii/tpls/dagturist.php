<?php
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */

$responsive = $this->getParam('responsive', 1);
$resClass = "";
if ($responsive==0){
	$resClass = "no-responsive";
}

defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>"
	  class='<jdoc:include type="pageclass" /> <?php echo $resClass ?>'>

<head>
	<jdoc:include type="head" />
	<?php $this->loadBlock('head') ?>
	<?php $this->addCss('layouts/corporate') ?>
	
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Rubik:500" rel="stylesheet">
	<link rel="stylesheet" href="/libraries/ResponsiveSlides/responsiveslides.css" />
	<link rel="stylesheet" href="/libraries/OwlCarousel2/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="/libraries/OwlCarousel2/assets/owl.theme.default.css" />
	<link rel="stylesheet" href="/templates/purity_iii/css/costum.css" />
	
</head>

<body>

<div class="t3-wrapper corporate"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

	<?php $this->loadBlock('header') ?>

  <?php $this->loadBlock('slideshow') ?>

  <?php $this->loadBlock('spotlight-1') ?>

	<?php $this->loadBlock('mainbody') ?>

  <?php $this->loadBlock('spotlight-2') ?>

  <?php $this->loadBlock('spotlight-3') ?>

	<?php $this->loadBlock('footer') ?>

</div>

<script src="/libraries/ResponsiveSlides/responsiveslides.min.js"></script>
<script src="/libraries/OwlCarousel2/owl.carousel.min.js"></script>

<script src="/templates/purity_iii/js/costum_down.js" type="text/javascript"></script>

</body>
</html>