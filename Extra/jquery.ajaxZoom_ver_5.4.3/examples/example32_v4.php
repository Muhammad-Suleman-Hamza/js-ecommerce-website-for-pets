<!doctype html>
<html>
<head>
<title>32_v4</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="imagetoolbar" content="no">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<!-- jQuery core, needed if not already present! -->
<script type="text/javascript" src="../axZm/plugins/jquery-1.8.3.min.js"></script>

<!-- AJAX-ZOOM core, needed! -->
<link href="../axZm/axZm.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../axZm/jquery.axZm.js"></script>

<!-- Include mousewheel script, optional -->
<script type="text/javascript" src="../axZm/extensions/axZmThumbSlider/lib/jquery.mousewheel.min.js"></script>

<!-- Include thumbSlider JS & CSS, optional -->
<link href="../axZm/extensions/axZmThumbSlider/skins/default/jquery.axZm.thumbSlider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../axZm/extensions/axZmThumbSlider/lib/jquery.axZm.thumbSlider.js"></script>

<!-- Preloading spinner, optional -->
<script type="text/javascript" src="../axZm/plugins/spin/spin.min.js"></script>

<!-- Scripts for 360 crop gallery! Only needed if you use 360 "Product Tour" -->
<script type="text/javascript" src="../axZm/extensions/jquery.axZm.imageCropLoad.js"></script>
<link rel="stylesheet" href="../axZm/extensions/jquery.axZm.expButton.css" type="text/css" />
<script type="text/javascript" src="../axZm/extensions/jquery.axZm.expButton.js"></script>

<!-- AJAX-ZOOM mouse over zoom extension, needed! -->
<link href="../axZm/extensions/axZmMouseOverZoom/jquery.axZm.mouseOverZoom.4.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../axZm/extensions/axZmMouseOverZoom/jquery.axZm.mouseOverZoom.4.js"></script>
<script type="text/javascript" src="../axZm/extensions/axZmMouseOverZoom/jquery.axZm.mouseOverZoomInit.4.js"></script>

<!--  Fancybox lightbox javascript, please note: it has been slightly modified for AJAX-ZOOM, only needed if ajaxZoomOpenMode below is set to "fancyboxFullscreen" or "fancybox", optional-->
<link href="../axZm/plugins/demo/jquery.fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../axZm/plugins/demo/jquery.fancybox/jquery.fancybox-1.3.4.js"></script>

<!--  AJAX-ZOOM extension to load AJAX-ZOOM into maximized fancybox, 
requires jquery.fancybox-1.3.4.css and jquery.fancybox-1.3.4.js, optional -->
<script type="text/javascript" src="../axZm/extensions/jquery.axZm.openAjaxZoomInFancyBox.js"></script>

<!-- Colorbox plugin, only needed if ajaxZoomOpenMode below is set to "colorbox", optional -->
<link href="../axZm/plugins/demo/colorbox/example2/colorbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../axZm/plugins/demo/colorbox/jquery.colorbox-min.js"></script>
 
<!-- IE < 9 @media query support -->
<script src="../axZm/plugins/css3-mediaqueries.min.js"></script>

<!-- Javascript to style the syntax, not needed! Disabled for IE less 9 -->
<link name="az_editor_css_scripts" rel="stylesheet" href="../axZm/plugins/demo/prism/prism.css" type="text/css" media="screen">
<script>if (document.addEventListener){document.write('<script src=\"../axZm/plugins/demo/prism/prism.min.js\"><\/script>');}</script>

<style type="text/css"> 
	html {font-family: Tahoma, Arial; font-size: 10pt; margin: 0; padding: 0; border: 0; width: 100%; height: 100%;}
	body {margin: 0; padding: 0; height: 100%;}
	h2 {padding:0px; margin: 25px 0px 15px 0px; font-size: 16pt;}	
	a {color: blue; outline: 0; outline-style: none; text-decoration: none;} a:visited {color: blue;} a:hover {color: green;}
	h2 {padding:0px; margin: 35px 0px 15px 0px; padding: 25px 10px 0; font-size: 22px;}
	h3 {font-family: Arial; color: #1A4A7A; font-size: 18px; padding: 20px 0px 3px 0px; margin: 0;}
	p code {background-color: #FDFDFD; border-radius: 4px; color: #AB166C; font-size: 90%; padding: 2px 4px; white-space: nowrap;
}
	.clearfix:after {
	    visibility: hidden;
	    display: block;
	    content: "";
	    clear: both;
	    height: 0;
	}
	* html .clearfix             { zoom: 1; }
	*:first-child+html .clearfix { zoom: 1; }
	
	/* On default it is black */
	body:-webkit-full-screen  {background-color: #FFFFFF;} 
	body:-moz-full-screen     {background-color: #FFFFFF;} 
	body:-ms-full-screen      {background-color: #FFFFFF;} 
	body:-o-full-screen       {background-color: #FFFFFF;} 
	body:full-screen          {background-color: #FFFFFF;} 

	
	/* Overwrite some css from /axZm/extensions/skins/default/jquery.axZm.thumbSlider.css */
	.axZmThumbSlider li{
		background-color: #FFF!important; box-shadow: none!important;
	}

	
	/* Overwrite some css from /axZm/axZm.css */
	.axZm_zoomHorGalleryDescr{display:none;}
	.axZm_zoomHorGalleryDescr{display: none;}
	
	#axZm_zoomContainer{background-color: #FFFFFF;}
	.axZm_zoomContainer{background-color: #FFFFFF;}
	.axZm_zoomGalleryVerticalContainer{background-color: #FFFFFF;}
	.zFsO{background-color: #FFFFFF;}
	.zFsOResOverlay{background-color: #FFFFFF;}
	#axZmTempLoading{background-image: url('../axZm/icons/ajax-loader-bert.gif'); background-repeat: no-repeat; background-position: center;}
	
	
	/* Vertical Thumbs */
	.axZm_zoomGalleryBox, .axZm_zoomGalleryBoxOver, .axZm_zoomGalleryBoxSelected{
		border-color: #AAAAAA; /*anim*/
		background-color: #FFFFFF; /*anim*/
		color: #444444; /*anim*/
	    -moz-border-radius: 3px;
	    -webkit-border-radius: 3px;
	    border-radius: 3px;
	}

	.axZm_zoomGalleryBoxSelected{
		border-color: #0191ff; /*anim*/
		background-color: #FFFFFF; /*anim*/
		color: #444444; /*anim*/
	}

	.axZm_zoomGalleryBoxOver{
		border-color: #0191ff; /*anim*/
		background-color: #FFFFFF; /*anim*/
		color: #444444; /*anim*/
	}

	/* the css is byloaded, so we use important here */
	.jspTrack{background-image: none !important; background-color: #E7E7E7 !important;}
	
	.axZm_spinPreloaderBar{
		background-color: #0191ff;
	}

	.axZm_spinPreloaderHolder{
		background-image: url('../axZm/icons/tr_black_50.png');
	    -moz-border-radius: 0px;
	    -webkit-border-radius: 0px;
	    border-radius: 0px;
	}
	
	.axZm_zoomMapHolder{
		border-color: #AAA;
	}
	
 	/******************************
		AJAX-ZOOM mouseover block 
	******************************/
	
	/* wrapper for all html */
	#az_mouseOverZoomParent{
		position: relative; 
		width: 100%;
	}
	
	#az_mouseOverZoomContainer{
		position: relative; 
		background-color: #FFFFFF; 
		border: #AAA 1px solid;
	}
	
	#az_mouseOverZoomGallery{
		position: relative; 
		margin-top: 20px; 
		height: 76px; 
		width: 100%; 
		display: none;
	}

 
 	/*********************************************************
		Responsive page layout used for this demo, not needed 
	**********************************************************/	
	#responsiveContainer{padding: 10px; position: relative;}
	#topContainer {height: 110px; background-color: #B9CC52; position: relative;}
	#leftSide {width: 32%; background-color: #FFF; float: left; position: relative; z-index: 1; /* pos and zindex - fix for IE7*/}
	
	#middleSide {margin-left: 32%; margin-right: 250px; background-color: #FFF; min-height: 500px;}
	#middleSideInner {margin-left: 10px; background-color: #EEE; overflow: hidden;}
	#middleSideContent {padding: 10px 10px 200px 10px; position: relative;}
	
	#rightSide {width: 250px; position: absolute; right: 0px; top: 0; height: 100%;}
	#rightSideInner {background-color: #E66E55; position: absolute; top: 10px; right: 10px; bottom: 10px; left: 0px;}
	#rightSideContent {padding: 10px; color: #FFF;}
	
	#descrDiv {clear: both; padding: 10px; margin: 0 10px 0 10px; background-color: #777777; color: #FFF;}
	#codeDiv {clear: both; padding: 10px; margin: 10px 10px 0 10px; background-color: #EEEEEE;}
	#docuDiv {clear: both; padding: 10px; margin: 10px 10px 0 10px; background-color: #EEEEEE;}
	#commentDiv {clear: both; padding: 10px; margin: 10px 10px 10px 10px; background-color: #EEEEEE;}
	
	
	.colorSwitchTest{
		display: inline-block; width: 40px; height: 40px; cursor: pointer; border: 2px solid #FFF; border-radius: 22px;
	}
	.colorSwitchTest:hover{
		border: 2px solid transparent;
	}
	
	.btn_toggle {padding: 3px 5px; font-size: 12px; line-height: 1.5; border-radius: 3px; color: #333; background-color: #fff; border: #ccc 1px solid;
		white-space: nowrap; vertical-align: middle; touch-action: manipulation; cursor: pointer; text-decoration: none; margin-bottom: 1px;}
	.btn_toggle:hover {color: #333; background-color: #e6e6e6; border-color: #adadad;}

	/**********************************************************************
		media query to adjust the layout if it is lesser then 960px width
		responsive page layout used for this demo, not needed
	**********************************************************************/
	@media only screen and (max-width: 960px){
		#responsiveContainer {padding: 0; overflow-x: hidden;}
		#az_mouseOverZoomContainer {border-width: 0px!important;}
		
		#leftSide {width: 100%; float: none;}
		
		#middleSide {width: 100%; margin-left: 0; float: none; min-height: 100px; background-color: #F2D3A2; overflow-x: hidden;}
		#middleSideInner {margin-left: 0;}
		#middleSideContent {padding: 10px;}
		
		#rightSide {width: 100%; float: none; position: static; height: auto; overflow-x: hidden;}
		#rightSideInner {position: static;} 
		
		#descrDiv {margin: 0; overflow-x: hidden;}
		#codeDiv {margin: 0; overflow-x: hidden;}
		#docuDiv {margin: 0; overflow-x: hidden;}
		#commentDiv {margin: 0; overflow-x: hidden;}
		h2 {font-size: 18px; padding: 15px 10px 0;}
	}
</style>

</head>
<body>

<?php
include ('navi.php'); // This include is just for the demo, you can remove it
?>

<div id="topContainer">
	<h2 style="margin: 0;">
		Responsive AJAX-ZOOM mousehover zoom jQuery extension Ver. 4 with <u>optional</u> 360?? spins or multilevel 3D. 
	</h2>
</div>

<div id="responsiveContainer">

	<div id="leftSide" class="images">
	
		<!-- AJAX-ZOOM mouseover block  -->
		<div id="az_mouseOverZoomParent">
			<!-- Container for mouse over image -->
			<div id="az_mouseOverZoomContainer">
				Mouseover Zoom loading...
			</div>
			
			<!-- gallery with thumbs (will be filled with thumbs by javascript) -->
			<div id="az_mouseOverZoomGallery">
				Gellery loading...
			</div>
		 </div>
		<!-- AJAX-ZOOM mouseover block END -->
		
	</div>

	<div id="middleSide">
		<div id="middleSideInner">
			<div id="middleSideContent">
				<div style="border: red 3px solid; padding: 10px; margin-bottom: 25px; font-size: 125%; background-color: #fed9d9;">
					This mouseover zoom <b>version 4</b> (previously example32.php) is depreciated. 
					For new projects please use our <a href="example32.php">newest mouseover zoom version</a>. 
					However all latest files of this <b>version 4</b> will be kept permanenty in the download package. 
					Also this example / demonstration will be kept as it might be still used in some 
					e-commerce plugins / modules and is possibly needed for reference. If not already done, 
					all e-commerce plugins / modules will be updated to the latest major mouseover zoom version ASAP. 
					Most options which make sense in responsive webdesign are transmitted to latest version 
					but might be not activated on default. Not responsive implementations of Colorbox and Fanybox are removed.
				</div>
				<h3 style="margin: 0; padding-top: 0px;">Alternative AJAX-ZOOM (high resolution zoom view on click) opening methods</h3>
				
			    <table style="float: left; margin-right: 50px;">
				    <tr class="doptth">
				         <th>&zwj;</th><th style="text-align: left;">This will change "ajaxZoomOpenMode" option</th>
				    </tr>
				    <tr>
					    <td width="30"><input type="radio" name="ajaxZoomOpenMode" autocomplete=off onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'ajaxZoomOpenMode')"  value="fullscreen"></td>
					    <td>Open AJAX-ZOOM at fullscreen mode</td>
				    </tr>
				    
				    <tr>
					    <td><input type="radio" name="ajaxZoomOpenMode" autocomplete=off onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'ajaxZoomOpenMode')" value="fancyboxFullscreen" checked></td>
					    <td>Open AJAX-ZOOM in responsive "Fancybox"</td>
				    </tr>
				    
				    <tr>
					    <td><input type="radio" name="ajaxZoomOpenMode" autocomplete=off onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'ajaxZoomOpenMode')" value="fancybox"></td>
					    <td>Open AJAX-ZOOM in regular "Fancybox"</td>
				    </tr>
				    
				    <tr>
					    <td><input type="radio" name="ajaxZoomOpenMode" autocomplete=off onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'ajaxZoomOpenMode')" value="colorbox"></td>
					    <td>Open AJAX-ZOOM in "Colorbox"</td>
				    </tr>
				</table>
				
				<table style="float: left;">
				    <tr class="doptth">
				         <th>&zwj;</th><th style="text-align: left;">Some other settings</th>
				    </tr>
				    <tr>
				         <td>&zwj;</td>
				         <td> 
						    <div style="width: 150px; float: left;">Enable monitor size fullscreen:</div>
						    <input type="radio" name="fullScreenApi" onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'fullScreenApi')" autocomplete=off value="true"> - enable 
						    <input type="radio" name="fullScreenApi" onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'fullScreenApi')" autocomplete=off value="false" checked> - disable	                	 
				         </td>
				    </tr>
				    <tr>
				         <td>&zwj;</td>
				         <td> 
						    <div style="width: 150px; float: left;">360??/3D "preview" mode:</div>
						    <input type="radio" name="images360Preview" onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'images360Preview')" autocomplete=off value="true" checked> - enable 
						    <input type="radio" name="images360Preview" onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'images360Preview')" autocomplete=off value="false"> - disable	                	 
				         </td>
				    </tr>
				    
				    <tr>
				         <td>&zwj;</td>
				         <td> 
						    <div style="width: 150px; float: left;">Disable scroll animation:</div>
						    <input type="radio" name="disableScrollAnm" onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'disableScrollAnm')" autocomplete=off value="false" > - enable 
						    <input type="radio" name="disableScrollAnm" onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'disableScrollAnm')" autocomplete=off value="true" checked> - disable	                	 
				         </td>
				    </tr>
				    
				    <tr id="tintFilter_div">
				         <td>&zwj;</td>
				         <td> 
						    <div style="width: 150px; float: left;">Tint filter:</div>
						    <select name="tintFilter" onchange="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'tintFilter', 'mouseOverZoomParam', undefined, true)" autocomplete=off>
						    	<option value="false"> none </option>
						    	<option value="blur"> blur </option>
						    	<option value="grayscale"> grayscale </option>
						    	<option value="sepia"> sepia </option>
						    	<option value="invert"> invert </option>
						    	<option value="saturate"> saturate </option>
						    	<option value="custom"> custom </option>
						    </select>
				         </td>
				    </tr>
				    <tr>
				         <td>&zwj;</td>
				         <td> 
						    <div style="width: 150px; float: left;">Mouseover Zoom:</div>
						    <input type="radio" name="noMouseOverZoom" onclick="jQuery('#slideOutDest_div').css('display', 'none'); jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'noMouseOverZoom', 'mouseOverZoomParam', undefined, true)" autocomplete=off value="false" checked> - enabled 
						    <input type="radio" name="noMouseOverZoom" onclick="jQuery('#slideOutDest_div').css('display', ''); jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'noMouseOverZoom', 'mouseOverZoomParam', undefined, true)" autocomplete=off value="true"> - disabled	                	 
				         </td>
				    </tr>
				    
				    <tr style="display: none;" id="slideOutDest_div">
				         <td>&zwj;</td>
				         <td> 
						    <div style="width: 150px; float: left;">Slider effect:</div>
						    <select name="slideOutDest" onchange="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'slideOutDest', 'mouseOverZoomParam', undefined, true)" autocomplete=off>
						    	<option value="1"> 1 </option>
						    	<option value="2"> 2 </option>
						    	<option value="3"> 3 </option>
						    </select>
				         </td>
				    </tr>
				    
				    <tr>
				         <td>&zwj;</td>
				         <td> 
						    <div style="width: 150px; float: left;">Prev, next arrows:</div>
						    <input type="radio" name="prevNextArrows" onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'prevNextArrows'); jQuery('#az_mouseOverZoomContainer>.axZm_mouseOverPrevNextArrows').css('display', 'block');" autocomplete=off value="true"> - enabled 
						    <input type="radio" name="prevNextArrows" onclick="jQuery.mouseOverZoom_setOpt('az_mouseOverZoomContainer', 'prevNextArrows'); jQuery('#az_mouseOverZoomContainer>.axZm_mouseOverPrevNextArrows').css('display', 'none');" autocomplete=off value="false" checked> - disabled	                	 
				         </td>
				    </tr>
				    
				    <tr>
				         <td>&zwj;</td>
				         <td> 
				         	<script>var changeAxZmSpinToZoomEffect = function(){
				         		var v = jQuery('#axZmSpinToZoomEffectSel').val();
				         		if (v == 'sel'){
				         			delete window.axZmSpinToZoomEffect;
								}else{
									window.axZmSpinToZoomEffect = v;
								}
				         	}</script>
						    <div style="width: 150px; float: left;">SpinTo effect:</div>
							<select id="axZmSpinToZoomEffectSel" style="width: 165px" autocomplete="off" onchange="changeAxZmSpinToZoomEffect()">
								<option value="sel">Choose effect for 360 "Product tour"</option>
								<option value="0">0. Spin and zoom simultaneously</option>
								<option value="1">1. Zoom out and zoomin while spinning</option>
								<option value="2">2. Zoom out while spinning, then zoom in</option>
								<option value="3">3. Zoom out, then spin and zoom</option>
								<option value="4">4. Zoom out, spin, zoom in after spinning</option>
								<option value="5">5. Zoom out and zoomin while spinning with extra round</option>
								<option value="6">6. Zoom out 1/3 out, zoom in from 2/3 to 1 while spinning with extra round</option>
								<option value="7">7. Zoom out while spinning with extra round, zoom in after spinning</option>
								<option value="8">8. Zoom out, spin with extra round, zoom in after spinning</option>
								<option value="rand">9: Randomly from the above</option>
							</select>	
				         </td>
				    </tr>
			    
			    </table>
			    
			    <h3 style="margin: 0; clear: both;">Load different images / 360?? set and other API</h3>
			    <table>
			    	<tr>
			    		<td style="width: 60px"><div id="color_1" class="colorSwitchTest" style="background-color: #D83E2D;"></div></td>
			    		<td style="width: 60px"><div id="color_2" class="colorSwitchTest" style="background-color: #33354E;"></div></td>
			    		<td style="width: 60px"><div id="color_3" class="colorSwitchTest" style="background-color: red;"></div></td>
			    		<td style="width: 60px"><div id="color_4" class="colorSwitchTest" style="background-color: yellow;"></div></td>
			    		<td style="width: 60px"><div id="color_5" class="colorSwitchTest" style="background-color: gray;"></div></td>
			    		<td style="width: 60px"><div id="color_6" class="colorSwitchTest" style="background-color: #D88448;"></div></td>
			    		<td style="width: 60px"><div id="color_7" class="colorSwitchTest" style="background-color: green;"></div></td>
			    	</tr>
			    	<tr>
			    		<td style="font-size: 80%"><a href="javascript: void(0)" onclick="replaceHeighlight('#replaceImages1', true); jQuery('#color_1').trigger('click')">360 +<br>images</a></td>
			    		<td style="font-size: 80%"><a href="javascript: void(0)" onclick="replaceHeighlight('#replaceImages2', true); jQuery('#color_2').trigger('click')">only<br>images</a></td>
			    		<td style="font-size: 80%"><a href="javascript: void(0)" onclick="replaceHeighlight('#replaceImages3', true); jQuery('#color_3').trigger('click')">only one 360</a></td>
			    		<td style="font-size: 80%"><a href="javascript: void(0)" onclick="replaceHeighlight('#replaceImages4', true); jQuery('#color_4').trigger('click')">two 360<br>or more</a></td>
			    		<td style="font-size: 80%"><a href="javascript: void(0)" onclick="replaceHeighlight('#replaceImages5', true); jQuery('#color_5').trigger('click')">only one image</a></td>
			    		<td style="font-size: 80%"><a href="javascript: void(0)" onclick="replaceHeighlight('#replaceImages6', true); jQuery('#color_6').trigger('click')">one 360 with product tour</a></td>
			    		<td style="font-size: 80%"><a href="javascript: void(0)" onclick="replaceHeighlight('#replaceImages7', true); jQuery('#color_7').trigger('click')">no 360<br>no images</a></td>
			    	</tr>
			    </table>
			    
			    <script id="replaceImages1">
			    	// 360 + images
			    	jQuery('#color_1').bind('click', function(){
						jQuery.mouseOverZoomInit.replaceImages({
						    divID: 'az_mouseOverZoomContainer',
						    images360Overlay: true,
						    images360Thumb: true,
						    images360: {
						    	1: {path: "/pic/zoom3d/Uvex_Occhiali", position: "first", spinReverse: false, spinDemoTime: 4500, crop: jsonData1}
						    },
							images: {
								1: {img: "/pic/zoom/fashion/fashion_004.jpg", title: "Test Title 1"},
								2: {img: "/pic/zoom/fashion/fashion_003.jpg", title: "Test Title 2"},
								3: {img: "/pic/zoom/fashion/fashion_001.jpg", title: "Test Title 3"},
								4: {img: "/pic/zoom/fashion/fashion_002.jpg", title: "Test Title 4"},
								5: {img: "/pic/zoom/fashion/fashion_008.jpg", title: "Test Title 5"},
								6: {img: "/pic/zoom/fashion/fashion_010.jpg", title: "Test Title 6"}
							}
						});
			    	});
			    </script>
			    
			    <script id="replaceImages2">
			    	// Bind jQuery.mouseOverZoomInit.replaceImages to the element with ID #color_2
			    	// We only need the reference to "az_mouseOverZoomContainer" 
			    	// and define images obeject and or images360 object
			    	jQuery('#color_2').bind('click', function(){
						jQuery.mouseOverZoomInit('replaceImages', {
						    divID: 'az_mouseOverZoomContainer',
						    images360: {
						      // You could put a different 360 in here
						    },
							images: {
								1: {img: "/pic/zoom/fashion/fashion_005.jpg", title: "Test Title 1"},
								2: {img: "/pic/zoom/fashion/fashion_006.jpg", title: "Test Title 2"},
								3: {img: "/pic/zoom/fashion/fashion_007.jpg", title: "Test Title 3"},
								4: {img: "/pic/zoom/fashion/fashion_009.jpg", title: "Test Title 4"}
							}						
						});
			    	});
			     </script>
			     
			    <script id="replaceImages3">
			    	// Only one 360
			    	jQuery('#color_3').bind('click', function(){
						jQuery.mouseOverZoomInit.replaceImages({
						    divID: 'az_mouseOverZoomContainer',
						    images360: {
						    	1: {path: "/pic/zoom3d/Uvex_Occhiali", position: "first", spinReverse: false, spinDemoTime: 4500}
						    },
							images: {
								// no images
							}						
						});
			    	});
			    </script>
			    
			    <script id="replaceImages4">
			    	// Two 360 or more
			    	jQuery('#color_4').bind('click', function(){
						jQuery.mouseOverZoomInit.replaceImages({
						    divID: 'az_mouseOverZoomContainer',
						    images360Overlay: false,
							images360Thumb: true,
						    images360: {
						     	1: {path: "/pic/zoom3d/Uvex_Occhiali", position: "first", spinReverse: false, spinDemoTime: 4500}
						    },
							images: {
								// no images
							}
						});
			    	});
			    </script>
			    
			    <script id="replaceImages5">
			    	// No 360, one image
			    	jQuery('#color_5').bind('click', function(){
						jQuery.mouseOverZoomInit.replaceImages({
							divID: 'az_mouseOverZoomContainer',
							images360: {
							    // no 360
							},
							images: {
								1: {img: "/pic/zoom/fashion/fashion_009.jpg", title: "Test Title 1"},
							}
						});
					});
			    </script>
			    
			    <script id="replaceImages6">
			    	// 360 with product tour, crop defined in jsonData1 - external js variable
			    	jQuery('#color_6').bind('click', function(){
						jQuery.mouseOverZoomInit.replaceImages({
						    divID: 'az_mouseOverZoomContainer',
						    images360: {
								1: {path: "/pic/zoom3d/Uvex_Occhiali", position: "first", spinReverse: false, spinDemoTime: 4500, crop: jsonData1}
						    },
							images: {
								// no images
							}
						});
			    	});
			    </script>
			    
			    <script id="replaceImages7">
			    	// No 360, no images
			    	jQuery('#color_7').bind('click', function(){
						jQuery.mouseOverZoomInit.replaceImages({
						    divID: 'az_mouseOverZoomContainer',
						    images360: {
						      	// no 360
						    },
							images: {
								// no images
							}
						});
			    	});
			    </script>
			    
			    <script>
			    	var replaceHeighlight = function(s, open){
			    		jQuery('#codeExample_replaceImages_parent div:eq(0)').remove();
			    		jQuery('#codeExample_replaceImages_parent').append('<pre id="codeExample_replaceImages"><code class="language-js"></code></pre>');
			    		jQuery('code', jQuery('#codeExample_replaceImages')).html(jQuery(s).html());
			    		Prism.highlightElement(jQuery('code', jQuery('#codeExample_replaceImages'))[0]);
			    		//SyntaxHighlighter.highlight();
			    		if (open){
			    			jQuery('#codeExample_replaceImages_parent').slideDown();
						}
					};
			    </script>
			    
			    <div id="codeExample_replaceImages_parent" style="display: none; position: relative">
			    	<a href="javascript: void(0)" onclick="jQuery('#codeExample_replaceImages_parent').slideToggle();" style="position: absolute; right: 1%; top: -20px">Close code</a>
			    </div>
				
				<h3>E-Commerce modules</h3>
				<a href="https://www.ajax-zoom.com/index.php?cid=modules&module=magento">
					<img border="0" src="https://www.ajax-zoom.com/pic/layout/magento_logo.png" style="width: 85px;">
				</a>
				<a href="https://www.ajax-zoom.com/index.php?cid=modules&module=prestashop">
					<img border="0" src="https://www.ajax-zoom.com/pic/layout/prestashop_logo.png" style="width: 85px;">
				</a>
			   	<a href="https://www.ajax-zoom.com/index.php?cid=modules&module=shopware" style="position: relative; top: 7px">
			   		<img border="0" src="https://www.ajax-zoom.com/pic/layout/shopware_logo.png" style="width: 85px;">
			   	</a>
				<a href="https://www.ajax-zoom.com/index.php?cid=modules&module=opencart" style="position: relative; top: 7px" >
					<img border="0" src="https://www.ajax-zoom.com/pic/layout/opencart_logo.png" style="width: 85px;">
				</a>
			   	<a href="https://www.ajax-zoom.com/index.php?cid=modules&module=woocommerce"  style="position: relative; top: 8px">
			   		<img border="0" src="https://www.ajax-zoom.com/pic/layout/woocommerce_logo.png" style="width: 85px;">
			   	</a>
				<div>The logotypes above are used for illustration purposes only. 
					AJAX-ZOOM is not affiliated or in partnership with any of the ecommerce software companies represented below. 
					The AJAX-ZOOM extensions / modules / plugins are not official extensions of these companies. 
				</div>
			</div>
		</div>
	</div>
	
	<div id="rightSide">
		<div id="rightSideInner">
			<div id="rightSideContent">
				<h3 style="margin: 0; padding-top: 0; color: #FFF;">About this mousehover zoom</h3>
				<p style="margin-top: 5px">Prior to Ver. 4.0 of this AJAX-ZOOM mousehover zoom extension it was responsive for the flyout window only. 
					The actual "preview image" was not responsive. In this extension everything is responsive now. 
				</p>
				<p>It has been tested in various Browsers including IE7.
				</p>
				<h3 style="margin: 0; padding-top: 10px; color: inherit;">Ver. 4 is depreciated</h3>
				<p style="margin-top: 5px">This mouseover zoom version 4 is depreciated. For new projects please use our <a href="example32.php" style="color: #FFF">current version</a>. 
					Version 4 is kept because it might be still used in some e-commerce plugins / modules. 
				</p>
			</div>
			
		</div>
	</div>
	
</div>

<div id="codeDiv">
	<h3 style="padding-top: 0; margin-bottom: 10px;">JavaScript & CSS files in Head</h3>
	Please note that depending on configuration not all of these js and css files are needed! See "Dependencies" below;
	<br>
	<br>
	<a class="btn_toggle" href="javascript: void(0)" onclick="jQuery(this).next().slideToggle()">Show / hide - JavaScript & CSS files in Head</a>
	<div style="clear:both; margin: 5px 0px 5px 0px; display: none;">
		<?php
		echo '<pre><code class="language-markup">';
		echo htmlspecialchars ('
<!-- jQuery core, needed if not already present! -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<!-- AJAX-ZOOM core, needed! -->
<link href="../axZm/axZm.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../axZm/jquery.axZm.js"></script>

<!-- Include mousewheel script, optional -->
<script type="text/javascript" src="../axZm/extensions/axZmThumbSlider/lib/jquery.mousewheel.min.js"></script>

<!-- Include thumbSlider JS & CSS, optional -->
<link href="../axZm/extensions/axZmThumbSlider/skins/default/jquery.axZm.thumbSlider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../axZm/extensions/axZmThumbSlider/lib/jquery.axZm.thumbSlider.js"></script>

<!-- Preloading spinner, optional -->
<script type="text/javascript" src="../axZm/plugins/spin/spin.min.js"></script>

<!-- Scripts for 360 crop gallery! Only needed if you use 360 "Product Tour" -->
<script type="text/javascript" src="../axZm/extensions/jquery.axZm.imageCropLoad.js"></script>
<link rel="stylesheet" href="../axZm/extensions/jquery.axZm.expButton.css" type="text/css" />
<script type="text/javascript" src="../axZm/extensions/jquery.axZm.expButton.js"></script>

<!-- AJAX-ZOOM mouse over zoom extension, needed! -->
<link href="../axZm/extensions/axZmMouseOverZoom/jquery.axZm.mouseOverZoom.4.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../axZm/extensions/axZmMouseOverZoom/jquery.axZm.mouseOverZoom.4.js"></script>
<script type="text/javascript" src="../axZm/extensions/axZmMouseOverZoom/jquery.axZm.mouseOverZoomInit.4.js"></script>

<!--  Fancybox lightbox javascript, please note: it has been slightly modified for AJAX-ZOOM, only needed if ajaxZoomOpenMode below is set to "fancyboxFullscreen" or "fancybox", optional. AJAX-ZOOM will also work with fancybox 2.0 wihtout any changes -->
<link href="../axZm/plugins/demo/jquery.fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../axZm/plugins/demo/jquery.fancybox/jquery.fancybox-1.3.4.js"></script>

<!--  AJAX-ZOOM extension to load AJAX-ZOOM into maximized fancybox, requires jquery.fancybox-1.3.4.css and jquery.fancybox-1.3.4.js, optional -->
<script type="text/javascript" src="../axZm/extensions/jquery.axZm.openAjaxZoomInFancyBox.js"></script>

<!-- Colorbox plugin, only needed if ajaxZoomOpenMode below is set to "colorbox", optional -->
<link href="../axZm/plugins/demo/colorbox/example2/colorbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../axZm/plugins/demo/colorbox/jquery.colorbox-min.js"></script>

<!-- Please call pinit.js only once per page -->
<script data-pin-build="parsePinBtns" type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>

<!-- IE < 9 @media query support -->
<script src="../axZm/plugins/css3-mediaqueries.min.js"></script>

<style type="text/css">
	/******************************
		AJAX-ZOOM mouseover block 
	******************************/

	/* wrapper for all html */
	#az_mouseOverZoomParent{
		position: relative; 
		width: 100%;
	}

	#az_mouseOverZoomContainer{
		position: relative; 
		background-color: #FFFFFF; 
		border: #AAA 1px solid;
	}

	#az_mouseOverZoomGallery{
		position: relative; 
		margin-top: 20px; 
		height: 76px; 
		width: 100%; 
		display: none;
	}
</style>
		');
		echo '</code></pre>';
		?>
	</div>
	
	<h3>HTML markup</h3>
	<a class="btn_toggle" href="javascript: void(0)" onclick="jQuery(this).next().slideToggle()">Show / hide - HTML markup</a>
	<div style="clear: both; margin: 5px 0px 5px 0px; display: none;">
		<?php
		echo '<pre><code class="language-markup">';
		echo htmlspecialchars ('
<!-- AJAX-ZOOM mouseover block  -->
<div id="az_mouseOverZoomParent">
	<!-- Container for mouse over image -->
	<div id="az_mouseOverZoomContainer">
		Mouseover Zoom loading...
	</div>
	
	<!-- gallery with thumbs (will be filled with thumbs by javascript) -->
	<div id="az_mouseOverZoomGallery">
		Gellery loading...
	</div>
 </div>
<!-- AJAX-ZOOM mouseover block END -->
		');
		echo '</code></pre>';
		?>
	</div>
	
	<h3>Javascript</h3>
	<p>You do not need all the options below to be listed as most of them are set to their default values. 
	</p>
	<a class="btn_toggle" href="javascript: void(0)" onclick="jQuery(this).next().slideToggle()">Show / hide - Javascript</a>
	<pre style="display: none;"><code id="codeExample"></code></pre>
	<!-- Not needed -->
	<script type="text/javascript">
		jQuery(document).ready(function(){
 			jQuery('#codeExample').html(jQuery('#mouseOverZoomInit').html()).addClass("language-js");
			Prism.highlightElement(jQuery('#codeExample')[0]);
 		});
	</script>
</div>

<div id="docuDiv">
	<h3 style="padding-top: 0; margin-bottom: 10px;">Dependencies</h3>
	<p style="margin-top: 0;">	Several different plugins are used in this mouseover zoom tool. 
		Depending on the configuration not all of them are needed but they all  
		are included in the <a href="https://www.ajax-zoom.com/index.php?cid=download">download package</a>. 
		The options below refer to jQuery.mouseOverZoomInit(options) which acts like a proxy to the other plugins. 
	</p>
	
	Needed plugins: 
 	<ul>
		<li>jquery.axZm.mouseOverZoom.js - main mouseover zoom extension;
		</li>
		<li>jquery.axZm.mouseOverZoomInit.js - function to build all needed html and call other plugins which simplifies integration; 
			if you would like to change something in the source code of jquery.axZm.mouseOverZoomInit.js please copy it renamed 
			in the same directory so your changes do not get overwritten when you or somebody else will be updating AJAX-ZOOM later.
		</li>
		<li>jquery.axZm.js - main AJAX-ZOOM javascript file which loads AJAX-ZOOM to display high resolution image when the user clicks on the lens; 
		depending on AJAX-ZOOM configuration AJAX-ZOOM loads some other stoff dynamically, so you do not have to worry about it.
		</li>
	</ul>
	
	Optional plugins to open AJAX-ZOOM: 
 	<ul>
		<li>jquery.fancybox-1.3.4.js - needed if "ajaxZoomOpenMode" option is set to 'fancyboxFullscreen' or 'fancybox';
		</li>
		<li>jquery.axZm.openAjaxZoomInFancyBox.js - needed if "ajaxZoomOpenMode" option is set to 'fancyboxFullscreen';
		</li>
		<li>jquery.colorbox.js - needed if "ajaxZoomOpenMode" option is set to 'colorbox'; please note that colorbox has at least 
			five skins which are changed over the included css file: 
			<code>/axZm/plugins/demo/colorbox/example<span style="color: red; font-weight: bold;">2</span>/colorbox.css</code>
		</li>
	</ul>
	
	Optional plugins: 
 	<ul>
		<li>jquery.axZm.thumbSlider.js - needed if "galleryAxZmThumbSlider" option is set to true; 
		this is the replacement for previously used jcarousel (jQuery plugin for sliding thumbs which has got too old);
		</li>
		<li>spin.js - needed if "spinner" option is set to true;
		</li>
		<li>jquery.mousewheel.js - needed if in "galleryAxZmThumbSlider" option is set to true and in 
		"galleryAxZmThumbSliderParam" the suboption "mouseWheelScrollBy" is used;
		</li>
		<li>jquery.axZm.imageCropLoad.js and jquery.axZm.expButton.js - needed if 360 "Product Tour" is used;
		</li>
	</ul>
	
	<h3 style="margin-bottom: 10px;">Documentation</h3>
	<a class="btn_toggle" href="javascript: void(0)" onclick="jQuery(this).next().slideToggle()">Show / hide - Documentation</a>
	<div style="display: none; margin-top: 10px;">
	<?php 
	include('extensions_doc/docu_mouseOverZoom4.inc.html'); 
	?>
	</div>
</div>

<div id="commentDiv">
	<?php
	// Bottom navigation for examples, not needed!
	include ('footer.php');
	?>
</div>

<script type="text/javascript">
	var jsonData1 = [{"qString": "previewDir=/pic/zoom3d/Uvex_Occhiali/&previewPic=EOS_1100D_LOW_RES_18F_010.jpg&qual=90&width=180&height=180&cache=1&x1=659&y1=324&x2=924&y2=590","zoomID": 10,"imgName": "EOS_1100D_LOW_RES_18F_010.jpg","crop": [659, 324, 924, 590],"title": "SHOOTING","descr": "<p>Theme-based scene modes select a combination of aperture, shutter speed, ISO and focus mode that is appropriate for the subject being photographed. Choose from Portrait, Landscape, Close-up, Sports and Night Portrait, and let the EOS 1100D do the hard work for you.</p>\n\n<table cellpadding=&#34;0&#34; cellspacing=&#34;0&#34; border=&#34;0&#34;>\n\t<tr>\n\t\t<th>Modes</th>\n\t\t<td>Auto, Portrait, Landscape, Close-up, Sports, Night Portrait, No Flash, Creative Auto, Program AE , Shutter priority AE, Aperture priority AE, Manual, A-DEP</td>\n\t</tr><tr>\n\t\t<th>Picture Styles</th>\n\t\t<td>Standard, Portrait, Landscape, Neutral, Faithful, Monochrome, User Defined (x3)</td>\n\t</tr><tr>\n\t\t<th>Colour Space</th>\n\t\t<td>sRGB and Adobe RGB</td>\n\t</tr><tr>\n\t\t<th>Image Processing</th>\n\t\t<td>Highlight Tone Priority<BR>Auto Lighting Optimizer (4 settings)<BR>Long exposure noise reduction<BR>High ISO speed noise reduction (4 settings)<BR>Auto Correction of Lens Peripheral illumination<BR>Basic+ (Shoot by ambience selection, Shoot by lighting or scene type)</td>\n\t</tr><tr>\n\t\t<th>Drive Modes</th>\n\t\t<td>Single, Continuous, Self timer (2s, 10s, 10s + continuous shots 2-10)</td>\n\t</tr><tr>\n\t\t<th>Continuous Shooting</th>\n\t\t<td>Max. JPEG Approx. 3fps for approx. 830 images????<BR>Max. RAW Approx  2fps for up to approx. 5 images</td>\t\n\t</tr>\n</table>\n\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.\n</p>\n\n<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. \n</p>"}, {"qString": "previewDir=/pic/zoom3d/Uvex_Occhiali/&previewPic=EOS_1100D_LOW_RES_18F_015.jpg&qual=90&width=180&height=180&cache=1&x1=1009&y1=298&x2=1423&y2=712","zoomID": 15,"imgName": "EOS_1100D_LOW_RES_18F_015.jpg","crop": [1009, 298, 1423, 712],"title": "VIEWFINDER","descr": "<table cellpadding=&#34;0&#34; cellspacing=&#34;0&#34; border=&#34;0&#34;>\n\t<tr>\n\t\t<th>Type</th>\n\t\t<td>Pentamirror</td>\n\t</tr><tr>\n\t\t<th>Coverage (Vertical/Horizontal)</th>\n\t\t<td>Approx. 95%</td>\n\t</tr><tr>\n\t\t<th>Magnification</th>\n\t\t<td>Approx. 0.80x??</td>\n\t</tr><tr>\n\t\t<th>Eyepoint</th>\n\t\t<td>Approx. 21mm (from eyepiece lens center)</td>\n\t</tr><tr>\n\t\t<th>Dioptre Correction</th>\n\t\t<td>-2.5 to +0.5 m-1 (dioptre)</td>\n\t</tr><tr>\n\t\t<th>Focusing Screen</th>\n\t\t<td>Fixed</td>\n\t</tr><tr>\n\t\t<th>Mirror</th>\n\t\t<td>Quick-return half mirror (Transmission: reflection ratio of 40:60, no mirror cut-off with EF600mm f/4 or shorter)</td>\n\t</tr><tr>\n\t\t<th>Viewfinder Information</th>\n\t\t<td>AF information: AF points, focus confirmation light<BR>Exposure information: Shutter speed, aperture value, ISO speed (always displayed), AE lock, exposure level/compensation, spot metering circle, exposure warning, AEB<BR>Flash information: Flash ready, high-speed sync, FE lock, flash exposure compensation, red-eye reduction light<BR>Image information: Highlight tone priority (D+), monochrome shooting, maximum burst (1 digit display), White balance correction, SD card information</td>\n\t</tr><tr>\n\t\t<th>Depth of Field Preview</th>\n\t\t<td>Yes, assigned to SET button with C.Fn-8-5</td>\n\t</tr><tr>\n\t\t<th>Eyepiece Shutter</th>\n\t\t<td>On strap</td>\t\n\t</tr>\n</table>"}, {"qString": "previewDir=/pic/zoom3d/Uvex_Occhiali/&previewPic=EOS_1100D_LOW_RES_18F_004.jpg&qual=90&width=180&height=180&cache=1&x1=817&y1=47&x2=1231&y2=461","zoomID": 4,"imgName": "EOS_1100D_LOW_RES_18F_004.jpg","crop": [817, 47, 1231, 461],"title": "FLASH","descr": "<table cellpadding=&#34;0&#34; cellspacing=&#34;0&#34; border=&#34;0&#34;>\n\t<tr>\n\t\t<th>Type</th>\n\t\t<td>TTL-CT-SIR with a CMOS sensor</td>\t\n\t</tr><tr>\n\t\t<th>AF System/ Points</th>\n\t\t<td>9 AF points (f/5.6 cross type at centre)</td>\t\n\t</tr><tr>\n\t\t<th >AF Working Range</th>\n\t\t<td>EV 0 - 18 (at 23??C & ISO100)</td>\t\n\t</tr><tr>\n\t\t<th >AF Modes</th>\n\t\t<td>AI Focus<BR>One Shot<BR>AI Servo </td>\t\n\t</tr><tr>\n\t\t<th>AF Point Selection</th>\n\t\t<td>Automatic selection, Manual selection</td>\t\n\t</tr><tr>\n\t\t<th>Selected AF Point Display</th>\n\t\t<td>Superimposed in viewfinder and indicated on LCD monitor</td>\t\n\t</tr><tr>\n\t\t<th>Predictive AF</th>\n\t\t<td>Yes, up to 10m</td>\n\t</tr><tr>\n\t\t<th>AF Lock </th>\n\t\t<td>Locked when shutter button is pressed half way in One Shot AF mode</td>\n\t</tr><tr>\n\t\t<th>AF Assist Beam</th>\n\t\t<td>Intermittent firing of built-in flash or emitted by optional dedicated Speedlite</td>\n\t</tr><tr>\n\t\t<th>Manual Focus</th>\n\t\t<td>Selected on lens, default in Live View Mode</td>\t\n\t</tr><tr>\n\t\t<th>AF Microadjustment</th>\n\t\t<td>No</td>\n\t</tr>\n</table>"}, {"qString": "previewDir=/pic/zoom3d/Uvex_Occhiali/&previewPic=EOS_1100D_LOW_RES_18F_013.jpg&qual=90&width=180&height=180&cache=1&x1=793&y1=123&x2=1105&y2=435","zoomID": 13,"imgName": "EOS_1100D_LOW_RES_18F_013.jpg","crop": [793, 123, 1105, 435],"title": "FLASH SHOE","descr": "<p>When it comes to flash photography, the Canon Speedlite range of flashguns offers unparalleled access to creativity. \nUsed on-camera, their high power gives them more range than an EOS built-in flash, while their specification includes features such as bounce flash, for softer portrait lighting. It???s also possible to use a Canon Speedlite flash off-camera, triggering it wirelessly with the optional Speedlite ST-E2 infrared transmitter. Lighting a subject in this way lets a photographer control exactly where light is coming from and where shadows are falling.\n</p>"}, {"qString": "previewDir=/pic/zoom3d/Uvex_Occhiali/&previewPic=EOS_1100D_LOW_RES_18F_014.jpg&qual=90&width=180&height=180&cache=1&x1=642&y1=566&x2=1213&y2=1138","zoomID": 14,"imgName": "EOS_1100D_LOW_RES_18F_014.jpg","crop": [642, 566, 1213, 1138],"title": "LCD MONITOR","descr": "<p>Intuitive handling, ergonomic design and an intelligent control layout make the EOS 1100D a DSLR you will want to take everywhere with you. The EOS 1100D???s Feature Guide provides descriptions of many of the camera???s functions, as well as advice on how to use them in your own photography.\n</p>\n\n<table cellpadding=&#34;0&#34; cellspacing=&#34;0&#34; border=&#34;0&#34;>\n\t<tr>\n\t\t<th>Type</th>\n\t\t<td>6.8cm (2.7&#34;) TFT, approx. 230k dots</td>\n\t</tr><tr>\n\t\t<th>Coverage</th>\n\t\t<td>Approx. 100%</td>\n\t</tr><tr>\n\t\t<th>Viewing Angle (Horizontally/Vertically)</th>\n\t\t<td>Approx 170??</td>\n\t</tr><tr>\n\t\t<th>Brightness Adjustment</th>\n\t\t<td>Adjustable to one of seven levels</td>\n\t</tr><tr>\n\t\t<th>Display Options</th>\n\t\t<td>(1) Quick Control Screen<BR>(2) Camera settings</td>\n\t</tr>\n</table>"}, {"qString": "previewDir=/pic/zoom3d/Uvex_Occhiali/&previewPic=EOS_1100D_LOW_RES_18F_004.jpg&qual=90&width=180&height=180&cache=1&x1=333&y1=379&x2=1161&y2=1208","zoomID": 4,"imgName": "EOS_1100D_LOW_RES_18F_004.jpg","crop": [333, 379, 1161, 1208],"title": "LENS / FOCUSING","descr": "<table cellpadding=&#34;0&#34; cellspacing=&#34;0&#34; border=&#34;0&#34;>\n\t<tr><th>Type</th>\n\t\t<td>TTL-CT-SIR with a CMOS sensor</td>\n\t</tr><tr>\n\t\t<th>AF System/ Points</th>\n\t\t<td>9 AF points (f/5.6 cross type at centre)</td>\n\t</tr><tr>\n\t\t<th>AF Working Range</th>\n\t\t<td>EV 0 - 18 (at 23??C & ISO100)</td>\n\t</tr><tr>\n\t\t<th>AF Modes</th>\n\t\t<td>AI Focus<br>One Shot<br>AI Servo </td>\n\t</tr><tr>\n\t\t<th>AF Point Selection</th>\n\t\t<td>Automatic selection, Manual selection</td>\t</tr>\n\t<tr><tr>\n\t\t<th>Selected AF Point Display</th>\n\t\t<td>Superimposed in viewfinder and indicated on LCD monitor</td>\n\t</tr><tr>\n\t\t<th>Predictive AF</th>\n\t\t<td>Yes, up to 10m??</td>\n\t</tr><tr>\n\t\t<th>AF Lock </th>\n\t\t<td>Locked when shutter button is pressed half way in One Shot AF mode</td>\n\t</tr><tr>\n\t\t<th>AF Assist Beam</th>\n\t\t<td>Intermittent firing of built-in flash or emitted by optional dedicated Speedlite</td>\n\t</tr><tr>\n\t\t<th>Manual Focus</th>\n\t\t<td>Selected on lens, default in Live View Mode</td>\n\t</tr><tr>\n\t\t<th>AF Microadjustment</th>\n\t\t<td>No</td>\n\t</tr>\n</table>"}, {"qString": "previewDir=/pic/zoom3d/Uvex_Occhiali/&previewPic=EOS_1100D_LOW_RES_18F_006.jpg&qual=90&width=180&height=180&cache=1&x1=327&y1=53&x2=1511&y2=1237","zoomID": 6,"imgName": "EOS_1100D_LOW_RES_18F_006.jpg","crop": [327, 53, 1511, 1237],"title": "MANUFACTURER IFRAME LINK","descr": "iframe:https://www.canon.co.uk/For_Home/Product_Finder/Cameras/Digital_SLR/EOS_1100D"}, {"qString": "previewDir=/pic/zoom3d/Uvex_Occhiali/&previewPic=EOS_1100D_LOW_RES_18F_004.jpg&qual=90&width=180&height=180&cache=1&x1=260&y1=0&x2=1660&y2=1400","zoomID": 4,"imgName": "EOS_1100D_LOW_RES_18F_004.jpg","crop": [260, 0, 1660, 1400],"descr": "iframe://www.youtube.com/embed/eLvvPr6WPdg?feature=player_detailpage"}];

</script>

<!-- Init mouseover -->
<script type="text/javascript" id='mouseOverZoomInit'>
	// or
	// jQuery('#az_mouseOverZoomContainer').mouseOverZoomInit
	// if you need it chainable
	jQuery.mouseOverZoomInit({
		axZmPath: "../axZm/", // Path to AJAX-ZOOM, e.g. /zoomTest/axZm/
		divID: "az_mouseOverZoomContainer", // DIV for mouseover zoom
		galleryDivID: "az_mouseOverZoomGallery", // DIV id of the gallery, set to false to disable gallery

		// Object containing absolte paths to the master images, optional with titles. Start with 1, not 0
		// Your master image can be as big as you want, it never loads into cache
		// You can also protect the directory with .htaccess or other http access restrictions.
		// Alternatively you can link to your static images with these keys: 
		// "zoom" - big mouseover image, "preview" - preview image and "thumb" - image for the gallery. 
		// "img" - your master image is needed anyway to open AJAX-ZOOM on click
		images: {
			1: {img: "/pic/zoom/fashion/fashion_004.jpg", title: "Test Title 1"},
			2: {img: "/pic/zoom/fashion/fashion_003.jpg", title: "Test Title 2"},
			3: {img: "/pic/zoom/fashion/fashion_001.jpg", title: "Test Title 3"},
			4: {img: "/pic/zoom/fashion/fashion_002.jpg", title: "Test Title 4"},
			5: {img: "/pic/zoom/fashion/fashion_008.jpg", title: "Test Title 5"},
			6: {img: "/pic/zoom/fashion/fashion_010.jpg", title: "Test Title 6"}
		},
		
		firstImageToLoad: 1, // image which should be loaded at first
		
		images360: { // path(s) to the folder with 360 images
			1: {path: "/pic/zoom3d/Uvex_Occhiali", position: "first", spinReverse: true, spinDemoTime: 4500, crop: jsonData1}
		},
		
		images360firstToLoad: false, // Show 360 image first instead of plain image

		images360Thumb: true, // show first image of the spin as thumb
		images360Preview: true, // 360 / 3D over mouse over first 
		images360examplePreview: "mouseOverExtension360", // Configuration set which is passed to ajax-zoom when images360Preview is true
		//zoomMsg360: "Drag to spin 360??, scroll to zoom in and out, when zoomed right click and drag to pan", // Message displayed under mouse over zoom
		
		thumbW: 64, // gallery thumb width
		thumbH: 64, // gallery thumb height
		thumbRetina: true, // will double the resolution
		
		cropAxZmThumbSliderParam: {}, // Slider settings for 360?? "Product Tour". Can be kept empty
		cropSliderPosition: 'left', // Position of the crop slider, possible values: "top", "right", "bottom", "left"
		cropSliderDimension: 86, // Width or height (depending on position) of the instantly created container for the 360?? "Product Tour" thumb slider
		cropSliderThumbAutoSize: true, // Thumb CSS size will be set instantly depending on "cropSliderDimension" option
		cropSliderThumbAutoMargin: 7, // Thumb margin when set instantly
		cropSliderThumbDescr: true, // Enable descriptions for the thumbs in the slider for 360?? "Product Tour"
		
		galleryAxZmThumbSlider: true, // use axZmThumbSlider on gallery thumbnails
		
		// axZmThumbSlider parametrs if used - "galleryAxZmThumbSlider" option set to true
		// for more info see https://www.ajax-zoom.com/axZm/extensions/axZmThumbSlider/
		galleryAxZmThumbSliderParam: {
			orientation: "horizontal",
			scrollBy: 1,
			btn: true,
 			btnClass: "axZmThumbSlider_button_new",
 			btnBwdStyle: {marginLeft: 0, marginRight: 0},
 			btnFwdStyle: {marginLeft: 0, marginRight: 0},
			btnLeftText: null, 
			btnRightText: null,
			btnHidden: true,
			pressScrollSnap: true,
			centerNoScroll: true,
			wrapStyle: {borderWidth: 0},
 			thumbImgStyle:{
 				maxHeight: "64px",
 				maxWidth: "64px",
 				borderRadius: 3
			},
 			thumbLiStyle: {
	            width: 64, 
	            height: 64, 
	            lineHeight: "62px",
	            marginBottom: 2,
	            marginLeft: 3,
	            marginRight: 3,
	            borderRadius: 3
		    }
		},
		preloadMouseOverImages: true, // preload all preview and mouse over images, possible values: false, true, "oneByOne" 
		width: "auto", // width of the mouse image or "auto"
		height: "auto", // height of the mouse image or "auto"
		responsive: true, //responsive, "width" && "height" should be set
		heightRatio: 1.0, // If "responsive" option is enabled, "heightRatio" with instantly adjust the height of mouseover container depending on width
		heightMaxWidthRatio:  ["960|0.8", "700|0.7"], // Set "heightRatio" depending on window width
		maxSizePrc: "1|-120", // If "responsive" option is enabled
		
		//Please note that the size is limited by <code>$zoom['config']['allowDynamicThumbsMaxSize']</code> which is can be set in '/axZm/zoomConfig.inc.php'
		mouseOverZoomWidth: 1200, // max width of the image that will be shown in the zoom window (flyout)
		mouseOverZoomHeight: 1200, // max height of the image that will be shown in the zoom window (flyout)

		ajaxZoomOpenMode: "fancyboxFullscreen", // possible values: "fullscreen", "fancyboxFullscreen", "fancybox", "colorbox"
		example: "mouseOverExtension", // configuration set which is passed to ajax-zoom when ajaxZoomOpenMode is "fullscreen"
		exampleFancyboxFullscreen: "mouseOverExtension", // configuration set which is passed to ajax-zoom when ajaxZoomOpenMode is "fancyboxFullscreen"
		exampleFancybox: "modal", // configuration set which is passed to ajax-zoom when ajaxZoomOpenMode is "fancybox"
		exampleColorbox: "modal", // configuration set which is passed to ajax-zoom when ajaxZoomOpenMode is "colorbox"
		
		// If fancybox is used in "ajaxZoomOpenMode" option, below are some fancybox options
		fancyBoxParam: {
			boxMargin: 0,
			boxPadding: 0,
			boxCenterOnScroll: true,
			boxOverlayShow: true,
			boxOverlayOpacity: 0.75,
			boxOverlayColor: "#777",
			boxTransitionIn: "fade", // "elastic", "fade" or "none"
			boxTransitionOut: "fade", // "elastic", "fade" or "none"
			boxSpeedIn: 300,
			boxSpeedOut: 300,
			boxEasingIn: "swing",
			boxEasingOut: "swing",
			boxShowCloseButton: true,
			boxEnableEscapeButton: true,
			boxTitleShow: true,
			boxTitlePosition: "float", // "float", "outside", "inside" or "over"
			boxTitleFormat: null
		},
		disableScrollAnm: true, // disable animation while AJAX-ZOOM zooming
		fullScreenApi: false, // try to open AJAX-ZOOM at browsers fullscreen mode, possible on modern browsers except IE and mobile
		axZmCallBacks: { // AJAX-ZOOM has several callbacks, https://www.ajax-zoom.com/index.php?cid=docs#onBeforeStart
			onFullScreenReady: function(){ // example placing any information above the viewer
				// Here you can place you custom code
			}
		},

		// Experimental
		pinterest: {
			enabled: false, // enable / disable
			build: "parsePinBtns", // function name exposed to window object, see data-pin-build="parsePinBtns" in assets.pinterest.com/js/pinit.js script tag in head
			btnSrc: "//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png",
			data: { // any data attributes
				"pin-do" : "buttonPin",
				"pin-shape": null,
				"pin-config": "none", 
				"pin-color": null,
				"pin-height": null
			}
		},
				
		// Mouse hover zoom parameters
		mouseOverZoomParam: {
			position: "right", // inside, top, right, bottom, left
			posAutoInside: 150, // applies when width (left, right) or height (top, bottom) of zoom window are less than this px value (zoomWidth || zoomHeight are set to auto); if zoomWidth || zoomHeight are fixed, applies when zoom window is out of page border
			touchScroll: 0.8, // enable slider for touch devices if width is more than 80% of window width
			noMouseOverZoom: false, // enable slider for all devices
			autoFlip: false, //  flip right to left and bottom to top if less than int px or false to disable
			biggestSpace: false, // Overrides position and instantly chooses the direction, disables autoFlip; playes nicely when zoomWidth and zoomHeight are set to "auto"
			zoomFullSpace: false, // Uses full screen height (does not align to the map / disables adjustY) if position is right or left || uses full screen width (does not align to the map / disables adjustX) if position is top or bottom
			zoomWidth: "#middleSideContent", // width of the zoom window e.g. 530 or "auto" or jQuery selector|correction value, e.g. "#refWidthTest|+20"
			zoomHeight: "#middleSideContent", // height of the zoom window e.g. 375, or "auto"!
			autoMargin: 10, // if zoomWidth or zoomHeight are set to "auto", the margin to the edge of the screen
			adjustX: 10, // horizontal margin of the zoom window
			adjustY: -1, // vertical margin of the zoom window
			
			lensOpacity: 1, // opacity of the selector lens
			lensStyle: {}, // quickly override lens style
			lensClass: null, // define css class
			
			zoomAreaBorderWidth: 1, // border thickness of the zoom window
			galleryFade: 150, // speed of inner fade or false
			shutterSpeed: 150, // speed of shutter fadein or false; applies only if image proportions are different from container
			showFade: 300, // speed of fade out for mouse over
			hideFade: 300, // speed of fade in for mouse over
			autoScroll: "200|-10", // scroll window vertically on thumb gallery click if image is not fully visible
			
			flyOutSpeed: 0, // speed for flyout or false to disable
			flyOutTransition: "linear", // transition for flyout
			flyOutOpacity: 0.6, // initial opacity for flyout
			flyBackSpeed: 0, // speed for fly back or false to disable
			flyBackTransition: "linear",
			flyBackOpacity: 0.2, // opacity when the image flies back
			
			smoothMove: 6, // int bigger 1 indicates smoother movements; set 0 to disable
			
			tint: false, // color value around the lens or false
			tintOpacity: 0.3, // opacity of the area around the lens when tint is not false
			tintFilter: false, // apply filter to the image, e.g. "blur", "grayscale", "sepia", "invert", "saturate";
			tintLensBack: true, // show lens background image
			
			showTitle: false, // bool, enable / disable title on zoom window
			titleOpacity: 0.4, // opacity value of the title
			titlePosition: "top", // position of the title, top or bottom
			cursorPositionX: 0.5, // cursor over lens  horizontal offset, 0.5 is middle
			cursorPositionY: 0.55, //  cursor over lens vertical offset, 0.5 is middle
			loading: true, // display loading information, CSS .mouseOverLoading
			//loadingMessage: "Loading...", // Loading message, not needed, can be just the spinner - see below
			loadingWidth: 90, // width of loading container 
			loadingHeight: 20, // height of loading container 
			loadingOpacity: 1.0, // opacity of the loading container (the transparent background is set via png image on default, see css class)
			zoomHintEnable: true, // show icon at top left
			zoomHintText: { 
				"en" : "Zoom",
				"de" : "Zoom",
				"fr" : "Zoom",
				"es" : "Zoom"
			}, 
			zoomMsgHover: {  
				"en" : "Roll over the image to zoom in",
				"de" : "F??r gr????ere Ansicht mit der Maus ??ber das Bild ziehen",
				"fr" : "Survolez l'image pour zoomer",
				"es" : "Pase el cursor sbore la imagen para hacer zoom con la rueda del rat??n"
			},
			zoomMsgClick: {  
				"en" : "Click to open expanded view",
				"de" : "Klicken Sie auf das Bild, um erweiterte Ansicht zu ??ffnen",
				"fr" : "Cliquez sur l'image pour ouvrir la vue ??largie",
				"es" : "Haga clic para ampliar la imagen"
			},
			
			spinner: true, // use ajax loading spinner without gif files etc.
			
			slideInTime: 200, // slide in time if "noMouseOverZoom" is enabled or "touchScroll" option enables for touch devices
			slideInEasingCSS3: 'easeOutExpo', // jQuery equivalent of easing or own function (string), e.g. 'cubic-bezier(0.21,0.51,0.4,2.02)'
			slideInEasing: 'easeOutExpo', // jQuery easing function for sliding in (fallback if CSS3 animation is not supported)
			slideInScale: 0.8, // scale initial size (goes to 1.0 while animation)
			slideOutScale: 0.8, // scale slideout size
			slideOutOpacity: 0, // slideout opacity
			slideOutDest: 1 // target slideout position, possible values: 1, 2 or 3
		},
		postMode: false

	});
</script>

</body>
</html>