<!DOCTYPE html>
<html>
<head>
<title>29_clean</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="imagetoolbar" content="no">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<!--  Bootstrap is not needed -->
<link rel="stylesheet" href="example_files/bootstrap/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="example_files/css/examples.css" type="text/css">

<!--  Include jQuery core into head section -->
<script src="../axZm/plugins/jquery-1.8.3.min.js"></script>

<!--  AJAX-ZOOM javascript -->
<script type="text/javascript" src="../axZm/jquery.axZm.js"></script>
<link type="text/css" href="../axZm/axZm.css" rel="stylesheet" />

<!-- JavaScript for 360/3D gallery -->
<script type="text/javascript" src="../axZm/extensions/jquery.axZm.360Gallery.js"></script>
<link rel="stylesheet" type="text/css" href="../axZm/extensions/jquery.axZm.360Gallery.css" />

<!-- Include axZm.thumbSlider -->
<link rel="stylesheet" type="text/css" href="../axZm/extensions/axZmThumbSlider/skins/default/jquery.axZm.thumbSlider.css" />
<script type="text/javascript" src="../axZm/extensions/axZmThumbSlider/lib/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="../axZm/extensions/axZmThumbSlider/lib/jquery.axZm.thumbSlider.js"></script>

<style type="text/css">
	#playerWrap {
		padding-right: 120px; /* width of the gallery */
		height: 600px;
		max-height: calc(100vh - 50px);
		position: relative;
	}

	#spinGalleryContainer {
		position: absolute;
		z-index: 11;
		width: 120px; 
		height: 100%; 
		right: 0px;
		top: 0px;
	}

	#axZmPlayerContainer {
		position: relative;
		height: 100%;
	}

	#spinGallery {
		position: absolute;
		right: 0;
		width: 110px;
		height: 100%;
		overflow: hidden;
	}

	/* hide gallery for small screens */
	@media (max-width: 768px) {
		#spinGalleryContainer {
			display: none;
		}
		#playerWrap {
			padding-right: 0;
			height: 400px;
		}
	}
</style>

</head>
<body>
<?php
// This include is just for the demo, you can remove it
if (file_exists(dirname(__FILE__).'/navi.php')) {
	include dirname(__FILE__).'/navi.php';
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
				JavaScript HTML5 360??/3D spin + 2D Gallery + Video clean example
			</h1>
		</div>
		<div class="col-md-12">

			<div id="playerWrap">
				<!-- Container where AJAX-ZOOM will be loaded into -->
				<div id="axZmPlayerContainer">
					<!-- This div will be removed after anything is loaded into "content" div -->
					<h4>Loading, please wait...</h4>
				</div>

				<div id="spinGalleryContainer">
					<!-- Thumb slider -->
					<div id="spinGallery">
						<!-- Temp message that will be removed after the slider initialization -->
						<div id="spinGallery_temp" class="spinGallery_temp">
							<!-- Gallery will be loaded after first object is loaded... -->
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!--  Init AJAX-ZOOM player -->
<script type="text/javascript">
// Load 360 gallery and first spin
jQuery.axZm360Gallery ({
	axZmPath: "../axZm/", // Path to /axZm/ directory, e.g. "/test/axZm/"

	// Over galleryData" option you can precisely define which 360s or 3D have to beloaded. 
	// Additionally you can also define regular 2D images and videos located at 
	// some straming platform like youtube, iframed content or load content over ajax
	galleryData: [
		["image360", "/pic/zoom3d/Uvex_Occhiali"],
		["imageZoom", "/pic/zoom/boutique/boutique_001.jpg"],
		["imageZoom", "/pic/zoom/boutique/boutique_002.jpg"],
		["imageZoom", "/pic/zoom/boutique/boutique_003.jpg"],
		["imageZoom", "/pic/zoom/boutique/boutique_004.jpg"],
		["imageZoom", "/pic/zoom/boutique/boutique_005.jpg"],
		["imageZoom", "/pic/zoom/boutique/boutique_006.jpg"],
		["imageZoom", "/pic/zoom/boutique/boutique_007.jpg"],
		["imageZoom", "/pic/zoom/boutique/boutique_008.jpg"],
		["imageZoom", "/pic/zoom/boutique/boutique_009.jpg"],
		["youtube", "n3rPDLzted4"],
		["vimeo", "162826208"],
		/*["dailymotion", "x20g8k1"],*/
		["ajax", "extensions_doc/docu_360Gallery.inc.html"],
		["iframe", "extensions_doc/docu_360Gallery.inc.html"]
	],

	// AJAX-ZOOM supports "hotspots" which can be optionally loaded 
	// for 3D/360 or 2D (plain images). 
	// Hotspots can be configured manually in example33.php 
	galleryHotspots: {
		bike360: "../pic/hotspotJS/bike.js"
	},

	firstToLoad: null, // name of 360, "imageZoom" or null

	// Some of the AJAX-ZOOM option normally set in zoomConfig.inc.php and zoomConfigCustom.inc.php 
	// can be set directly as js var in this callback
	azOptions: {
		//e.g.
		// zoomSlider: false,
		// gallerySlideNavi: true,
		// gallerySlideNaviOnlyFullScreen: true
	},

	divID: "axZmPlayerContainer", // The ID of the element (placeholder) where AJAX-ZOOM has to be inserted into
	embedResponsive: true, // if divID is responsive, set this to true
	spinGalleryContainerID: "spinGalleryContainer", // Parent container of gallery div
	spinGalleryID: "spinGallery",
	spinGallery_tempID: "spinGallery_temp",

	// background color of the player, possible values: #hex color or "auto" 
	// if "auto" AJAX-ZOOM will try to determin the background color
	// use "auto" only if you have e.g. black and white on different 360s
	backgroundColor: "#FFFFFF",

	// Set to check spinReverse / spinReverseZ settings upon the below options (toReverseArr, toReverseArrZ)
	checkReverse: true,

	// Array with folder names where spinReverse option should be applied
	toReverseArr: [
		"Uvex_Occhiali",
		"Atomic",
		"Floete",
		"Nike_Running",
		"Pelican",
		"Speed_Strength_BlackJacket",
		"Speed_Strength_WhiteJacket",
		"Uzi_32"
	], 

	// Array with folder names where spinReverseZ option should be applied
	toReverseArrZ: [],
	toBounceArr: ["Teva"],

	// use axZmThumbSlider extension for the thumbs, set false to disable
	axZmThumbSlider: true,

	// Options passed to $.axZmThumbSlider
	// For more information see /axZm/extensions/axZmThumbSlider/
	axZmThumbSliderParam: {
		btn: false,
		orientation: "vertical",
		scrollbar: true,
		scrollbarMargin: 10,
		wrapStyle: {borderWidth: 0}
		//scrollbarClass: "axZmThumbSlider_scrollbar_thin"
	},

	// try to open AJAX-ZOOM at browsers fullscreen mode
	fullScreenApi: false,

	// Show 360 thumb gallery at fullscreen mode, 
	// possible values: "bottom", "top", "left", "right" or false 
	thumbsAtFullscreen: false,

	thumbsCache: true, // cache thumbnails
	thumbWidth: 87, // width of the thumbnail image
	thumbHeight: 87, // height of the thumbnail image
	thumbQual: 90, // jpg quality of the thumbnail image
	thumbMode: false, // possible values: "contain", "cover" or false
	thumbBackColor: "#FFFFFF", // background color of the thumb if thumbMode is set to "contain"
	thumbRetina: true, // true will double the resolution of the thumbnails
	thumbDescr: true, // Show thumb description

	// Custom description of the thumbs
	thumbDescrObj: {
		"boutique_001.jpg": "Image 1",
		"boutique_002.jpg": "Image 2",
		"boutique_003.jpg": "Image 3",
		"boutique_004.jpg": "Image 4",
		"boutique_005.jpg": "Image 5",
		"boutique_006.jpg": "Image 6",
		"boutique_007.jpg": "Image 7",
		"boutique_008.jpg": "Image 8",
		"boutique_009.jpg": "Image 9",
		"Uvex_Occhiali": "EOS_1100D",
		"docu_360Gallery.inc.html": "Documentation",
		"n3rPDLzted4": "Youtube video",
		"162826208": "Vimeo video",
		"x20g8k1": "Dailymotion"
	},
	thumbIcon: true // Show 360 or 3D icon for the thumbs
});
</script>

</body>
</html>