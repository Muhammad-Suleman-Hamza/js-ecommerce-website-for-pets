<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>White my Pet | Home</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/bootstrap-4-hover-navbar.css" rel="stylesheet">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media-queries.css">
        <link rel="stylesheet" href="css/carousel.css">

        <!-- Favicon and touch icons -->
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


        <!--Demo purpose css-->
    </head>
<style>
.navbar {  
    /*margin-top: 20px;*/
}
.split li{
     /*float: left;*/
}
.navbar-light .navbar-nav .nav-link {
    color: white !important;
}
button:focus {
    outline:0;
}
select:focus {
    /*outline:none !important;*/
    outline:0 !important;
}
textarea:hover, 
input:hover, 
textarea:active, 
input:active, 
textarea:focus, 
input:focus,
button:focus,
button:active,
button:hover,
label:focus,
.btn:active,
.btn.active
{
    outline:0px !important;
    -webkit-appearance:none;
    box-shadow: none !important;
}
.logo {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.navbar-light .navbar-toggler-icon {
    background-color: white;
    padding: 20px !important;
    padding-left: 30px !important;
    padding-right: 30px !important;
    border-radius: 5px;
}
@media only screen and (max-width: 1161px) {
#search_input{
    width: auto !important;
}
}
@media only screen and (max-width: 986px) {
#Category_selector{
    width: auto !important;
}
}
@media only screen and (max-width: 914px) {
#search_submit{
    width: auto !important;
}
}
@media only screen and (max-width: 950px) {
#top_main_logo_container{
  justify-content: start !important;
}
#search_container{
  justify-content: start !important;
}
#other_categoriers{
  justify-content: center !important;
  margin: 0px !important;
  font-size: 14px;
  margin-left: -20px !important;
}
}
/*Nav Bar*/
#nav_user_image, #nav_heart_image, #nav_bag_image,#add_to_cart_bag{
    -webkit-filter: invert(100%);
    filter: invert(100%);
}
#nav_user_image{

}
@media only screen and (max-width: 991px) {
#navbar_search_form{
    display: block !important;
    margin-left: 1.3% !important;
}
.navbar-nav{
    margin-left: 1.3% !important;
}
#top_main_search_container,#other_categoriers{
    display: none !important;
}
#my_account_and_other_items_container_1, #my_account_and_other_items_container_2{
     justify-content: start !important;
     margin-left: 5em !important;
}
#logo_container{
    margin-left: 0px !important;
    margin-right: 0px !important;
    margin-left: 5em !important;
}

}
@media only screen and (max-width: 900px) {
#my_account_and_other_items_container_1, #my_account_and_other_items_container_2{
     margin-left: 4em !important;
}
#logo_container{
   justify-content: center;
}
}
@media only screen and (max-width: 870px) {
#my_account_and_other_items_container_1, #my_account_and_other_items_container_2{
     margin-left: 3em !important;
}
}
@media only screen and (max-width: 840px) {
#my_account_and_other_items_container_1, #my_account_and_other_items_container_2{
     margin-left: 2em !important;
}
}
@media only screen and (max-width: 840px) {
#my_account_and_other_items_container_1, #my_account_and_other_items_container_2{
     margin-left: 1.5em !important;
}
}
@media only screen and (max-width: 795px) {
#my_account_and_other_items_container_1, #my_account_and_other_items_container_2{
     margin-left: 1em !important;
}
}
/*@media only screen and (max-width: 795px) {
#my_account_and_other_items_container_1, #my_account_and_other_items_container_2{
     margin-left: 0.5em !important;
}
}*/
/*@media only screen and (max-width: 750px) {
#my_account_and_other_items_container_1, #my_account_and_other_items_container_2{
     margin-left: 0em !important;
}
}*/
@media only screen and (max-width: 768px) {
#my_account_and_other_items_container_1, #my_account_and_other_items_container_2{
    justify-content: start !important; 
}
#top_main_my_account_and_other_items_container{
    margin-bottom: 5% !important;
}
#logo_container{
    display: block;
    margin-left: auto;
    margin-right: auto;
}
}
@media only screen and (max-width: 767px) {
#my_account_and_other_items_container_1{
    display: none !important;
}
#my_account_and_other_items_container_2{
    padding-top: 40px !important;
    justify-content: center !important;
}
.my_account_and_other_items_container_nav{
    /*display: block !important;  */
    visibility: visible !important;
}
#logo_container{
    display: /*block*/;
    margin-left: 0 !important;
    margin-right: 0 !important;
}
}
@media only screen and (max-width: 700px) {
#my_account_and_other_items_container_2{
    margin-right: 20% !important;
}
}
/*Products*/
.dot {
  height: 5px;
  width: 5px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
  margin-left: auto;
  margin-right: auto;
}
.top-left {
  position: absolute;
  top: 4px;
  left: 10px;
}

.top-right {
  position: absolute;
  top: 4px;
  right: 10px;
}
/*Supported Companies*/
@media (min-width: 768px) {

    /* show 3 items */
    .carousel-inner .active,
    .carousel-inner .active + .carousel-item,
    .carousel-inner .active + .carousel-item + .carousel-item,
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
        display: block;
    }
    
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
      position: relative;
      transform: translate3d(0, 0, 0);
    }
    
    .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    
    /* farthest right hidden item must be abso position for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }

}

 /* Bootstrap Lightbox using Modal */

#profile-grid { overflow: auto; white-space: normal; } 
#profile-grid .profile { padding-bottom: 40px; }
#profile-grid .panel { padding: 0 }
#profile-grid .panel-body { padding: 15px }
#profile-grid .profile-name { font-weight: bold; }
#profile-grid .thumbnail {margin-bottom:6px;}
#profile-grid .panel-thumbnail { overflow: hidden; }
#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}
</style>
<script type="text/javascript">
function country_hidden_div_function(){
    var country_check=document.getElementById('country_hidden_div');
    if(country_check.style.display=="none"){
        document.getElementById('country_hidden_div').style.display="block";
        // document.getElementById('current_country').style.display="none";
    }
    else{
        document.getElementById('country_hidden_div').style.display="none";
        // document.getElementById('current_country').style.display="block";
    }
}
function going_to_be_current_country(current_country)
{
   var country_change=document.getElementById('current_country');
    // if(current=='Saudi Arabia'){
        document.getElementById('country_hidden_div').style.display="none";
        country_change.style.display="block";
        document.getElementById('country_name').innerHTML =current_country;
        document.getElementById('country_flag').src="images/"+current_country+".png";
    // }
    // else if(current=='Qatar'){
    //     document.getElementById('country_hidden_div').style.display="none";
    //     change.style.display="block";
    //     document.getElementById('country_name').innerHTML =current;
    //     document.getElementById('country_flag').src="images/Qatar.png";
    // }
}
function currency_hidden_div_function(){
    var currency_check=document.getElementById('currency_hidden_div');
    if(currency_check.style.display=="none"){
        document.getElementById('currency_hidden_div').style.display="block";
        // document.getElementById('current_currency').style.display="none";
    }
    else{
        document.getElementById('currency_hidden_div').style.display="none";
        // document.getElementById('current_currency').style.display="block";
    }
}
function going_to_be_current_currency(current_currency){
    var currency_change=document.getElementById('current_currency');
    // if(current=='Saudi Arabia'){
        document.getElementById('currency_hidden_div').style.display="none";
        currency_change.style.display="block";
        document.getElementById('currency_name').innerHTML =current_currency;
        // document.getElementById('country_flag').src="images/"+current+".png";
}
// Supported Companies

$('#carouselExample').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


  $('#carouselExample').carousel({ 
                interval: 2000
        });


  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
function product_size_function(product_number,product_size)
{   

       var current_product="product_"+product_number+"_size_"+product_size;
       var current_product_XS="product_"+product_number+"_size_XS";
       var current_product_S="product_"+product_number+"_size_S";
       var current_product_M="product_"+product_number+"_size_M";
       var current_product_L="product_"+product_number+"_size_L";
       var current_product_XL="product_"+product_number+"_size_XL";
       // alert(product_size);
    if(product_size=="XS"){
         if(document.getElementById(current_product).style.color=="rgb(170, 31, 46)"){  
           document.getElementById(current_product).style.color="black";    
           document.getElementById(current_product).style.border="none";
        }
        else{
            document.getElementById(current_product).style.color="#aa1f2e";        
            document.getElementById(current_product).style.border="thin solid #aa1f2e";        
            document.getElementById(current_product_S).style.color="black";        
            document.getElementById(current_product_M).style.color="black";        
            document.getElementById(current_product_L).style.color="black";        
            document.getElementById(current_product_XL).style.color="black";
            document.getElementById(current_product_S).style.border="none";
            document.getElementById(current_product_M).style.border="none";
            document.getElementById(current_product_L).style.border="none";
            document.getElementById(current_product_XL).style.border="none";
        }
    }
    else if(product_size=="S"){
         if(document.getElementById(current_product).style.color=="rgb(170, 31, 46)"){  
           document.getElementById(current_product).style.color="black";    
           document.getElementById(current_product).style.border="none";
        }
        else{
            document.getElementById(current_product).style.color="#aa1f2e";        
            document.getElementById(current_product).style.border="thin solid #aa1f2e";        
            document.getElementById(current_product_XS).style.color="black";        
            document.getElementById(current_product_M).style.color="black";        
            document.getElementById(current_product_L).style.color="black";        
            document.getElementById(current_product_XL).style.color="black";
            document.getElementById(current_product_XS).style.border="none";
            document.getElementById(current_product_M).style.border="none";
            document.getElementById(current_product_L).style.border="none";
            document.getElementById(current_product_XL).style.border="none";
        }
    }
    else if(product_size=="M"){
         if(document.getElementById(current_product).style.color=="rgb(170, 31, 46)"){  
           document.getElementById(current_product).style.color="black";    
           document.getElementById(current_product).style.border="none";
        }
        else{
            document.getElementById(current_product).style.color="#aa1f2e";        
            document.getElementById(current_product).style.border="thin solid #aa1f2e";        
            document.getElementById(current_product_S).style.color="black";        
            document.getElementById(current_product_XS).style.color="black";        
            document.getElementById(current_product_L).style.color="black";        
            document.getElementById(current_product_XL).style.color="black";
            document.getElementById(current_product_S).style.border="none";
            document.getElementById(current_product_XS).style.border="none";
            document.getElementById(current_product_L).style.border="none";
            document.getElementById(current_product_XL).style.border="none";
        }
    }
    else if(product_size=="L"){
         if(document.getElementById(current_product).style.color=="rgb(170, 31, 46)"){  
           document.getElementById(current_product).style.color="black";    
           document.getElementById(current_product).style.border="none";
        }
        else{
            document.getElementById(current_product).style.color="#aa1f2e";        
            document.getElementById(current_product).style.border="thin solid #aa1f2e";        
            document.getElementById(current_product_S).style.color="black";        
            document.getElementById(current_product_M).style.color="black";        
            document.getElementById(current_product_XS).style.color="black";        
            document.getElementById(current_product_XL).style.color="black";
            document.getElementById(current_product_S).style.border="none";
            document.getElementById(current_product_M).style.border="none";
            document.getElementById(current_product_XS).style.border="none";
            document.getElementById(current_product_XL).style.border="none";
        }
    }
    else if(product_size=="XL"){
         if(document.getElementById(current_product).style.color=="rgb(170, 31, 46)"){  
           document.getElementById(current_product).style.color="black";    
           document.getElementById(current_product).style.border="none";
        }
        else{
            document.getElementById(current_product).style.color="#aa1f2e";        
            document.getElementById(current_product).style.border="thin solid #aa1f2e";        
            document.getElementById(current_product_S).style.color="black";        
            document.getElementById(current_product_M).style.color="black";        
            document.getElementById(current_product_L).style.color="black";        
            document.getElementById(current_product_XS).style.color="black";
            document.getElementById(current_product_S).style.border="none";
            document.getElementById(current_product_M).style.border="none";
            document.getElementById(current_product_L).style.border="none";
            document.getElementById(current_product_XS).style.border="none";
        }
    }
}
function product_color_function(product_number,dot_number,product_color)
{
  if (product_color=="dr") {
    product_color="dark_red";
  }
  else if(product_color=="db") {
      product_color="dark_blue";
  }
  else if(product_color=="yc") {
      product_color="yellow";
  }
  else if(product_color=="oc") {
      product_color="orange";
  }
  else if(product_color=="gc") {
      product_color="grey";
  }
    var current_product_color="product_"+product_number+"_color_"+product_color;
    var current_product_dark_red="product_"+product_number+"_color_dark_red";
    var current_product_dark_blue="product_"+product_number+"_color_dark_blue";
    var current_product_yellow="product_"+product_number+"_color_yellow";
    var current_product_orange="product_"+product_number+"_color_orange";
    var current_product_grey="product_"+product_number+"_color_grey";

    var current_product_dot="product_"+product_number+"_dot_"+dot_number;
    var current_product_dot_1="product_"+product_number+"_dot_1";
    var current_product_dot_2="product_"+product_number+"_dot_2";
    var current_product_dot_3="product_"+product_number+"_dot_3";
    var current_product_dot_4="product_"+product_number+"_dot_4";
    var current_product_dot_5="product_"+product_number+"_dot_5";
    
    if(product_color=='dark_red'){
        if(document.getElementById(current_product_dot).style.display=="block"){
           document.getElementById(current_product_dot).style.display="none";    
        }
        else{
            document.getElementById(current_product_dot_1).style.display="block";        
            document.getElementById(current_product_dot_2).style.display="none";        
            document.getElementById(current_product_dot_3).style.display="none";        
            document.getElementById(current_product_dot_4).style.display="none";        
            document.getElementById(current_product_dot_5).style.display="none";
        }        
    }
    else if(product_color=='dark_blue'){
        if(document.getElementById(current_product_dot).style.display=="block"){
           document.getElementById(current_product_dot).style.display="none";    
        }
        else{
            document.getElementById(current_product_dot_2).style.display="block";        
            document.getElementById(current_product_dot_1).style.display="none";        
            document.getElementById(current_product_dot_3).style.display="none";        
            document.getElementById(current_product_dot_4).style.display="none";        
            document.getElementById(current_product_dot_5).style.display="none";
        }        
    }
    else if(product_color=='yellow'){
        if(document.getElementById(current_product_dot).style.display=="block"){
           document.getElementById(current_product_dot).style.display="none";    
        }
        else{
            document.getElementById(current_product_dot_3).style.display="block";        
            document.getElementById(current_product_dot_1).style.display="none";        
            document.getElementById(current_product_dot_2).style.display="none";        
            document.getElementById(current_product_dot_4).style.display="none";        
            document.getElementById(current_product_dot_5).style.display="none";
        }        
    }
    else if(product_color=='orange'){
        if(document.getElementById(current_product_dot).style.display=="block"){
           document.getElementById(current_product_dot).style.display="none";    
        }
        else{
            document.getElementById(current_product_dot_4).style.display="block";        
            document.getElementById(current_product_dot_1).style.display="none";        
            document.getElementById(current_product_dot_2).style.display="none";        
            document.getElementById(current_product_dot_3).style.display="none";        
            document.getElementById(current_product_dot_5).style.display="none";
        }        
    }
    else if(product_color=='grey'){
        if(document.getElementById(current_product_dot).style.display=="block"){
           document.getElementById(current_product_dot).style.display="none";    
        }
        else{
            document.getElementById(current_product_dot_5).style.display="block";        
            document.getElementById(current_product_dot_1).style.display="none";        
            document.getElementById(current_product_dot_2).style.display="none";        
            document.getElementById(current_product_dot_3).style.display="none";        
            document.getElementById(current_product_dot_4).style.display="none";
        }        
    }
}
  
function minus_function(product_quantity)
{
    var pq=product_quantity+"_product_quantity";
    var current_quantity=document.getElementById(pq).value;
    current_quantity = +current_quantity - +1;
    if(current_quantity<0)
    {
        document.getElementById(pq).value=0;
    }
    else{
        document.getElementById(pq).value=current_quantity;
    }

}
function plus_function(product_quantity){
    var pq=product_quantity+"_product_quantity";
    var current_quantity=document.getElementById(pq).value;
        current_quantity = +current_quantity + +1;
        if(current_quantity>100)
        {
            document.getElementById(pq).value=100;
        }
        else{
            document.getElementById(pq).value=current_quantity;
        }
}
function add_to_cart_function(product_quantity)
{
     var pq=product_quantity+"_product_quantity";
     var product_number="product_"+product_quantity;
     document.getElementById(product_number).style.backgroundColor="#aa1f2e";  
     var add_to_cart_quantity=document.getElementById(pq).value;
     setTimeout(function(){ 
        document.getElementById(product_number).style.backgroundColor="#252a68"; }, 200);
}
function product_heart_function(check){
    var product_heart_ID="product_heart_"+check;
    var product_like_heart_ID="product_like_heart_"+check;
    // if (check==1) {
        document.getElementById(product_heart_ID).style.display="none";
        document.getElementById(product_like_heart_ID).style.display="block";
    // }
}
function product_like_heart_function(check){
    var product_heart_ID="product_heart_"+check;
    var product_like_heart_ID="product_like_heart_"+check;
    // if(check==1){
        document.getElementById(product_heart_ID).style.display="block";
        document.getElementById(product_like_heart_ID).style.display="none";
    // }
}

</script>
    <body style="overflow-x: hidden !important;">
        <div class="fluid-container"> 
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6" 
                     style="justify-content: start;" id="top_main_logo_container">
                    <img class="" id="logo_container" src="images/Logo.png" width="110px" height="110px" style="margin-left: 6%;">
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-6 col-6" style="padding-top: 20px;" id="top_main_search_container">
                    <div class="row" style="justify-content: center;" id="search_container">
                        <form>
                        <div class="form-group">
                            <div style="float: left;">
                                <input class="form-control" type="search" name="search_input" placeholder="Search Here" id="search_input" 
                                style="border-right: none !important;
                                border-width: 1px;border-radius: 30px 0px 0px 30px; width: 15em; border-color: #252a68;">
                            </div>
                           <div style="float: left;">
                                <select class="form-control" style="border-width: 1px;
                                border-radius: 0px 0px 0px 0px;box-shadow: none !important;
                                width:9.2em;border-color: #252a68;" id="Category_selector">
                                    <option>All Categories</option>
                                    <option>New Arrivals</option>
                                    <option>Sale</option>
                                    <option>Ladies</option>
                                    <option>Men</option>
                                    <option>Clothing</option>
                                    <option>Footwear</option>
                                    <option>Accessories</option>
                                </select>
                           </div>
                            <div style="float: left;">
                                <button class="submit fa fa-search" 
                                        style="height:38px; width: 40px; background-color: white; border-left:none; border-width: 1px;border-radius: 0px 30px 30px 0px;width: 3em;border-color: #252a68;"
                                            id="search_submit">
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                   <div class="row" style="justify-content: center;" id="other_categoriers">
                        <ul style="margin-left: -35px;">
                            <li style="display:inline;margin-right: 10px;"><a href="#" style="color: #aa1f2e;font-size: 13px;">Food</a></li>
                            <li style="display:inline;margin-left: 10px;margin-right: 10px;"><a href="#" style="color: #aa1f2e;font-size: 13px;">Toy</a></li>
                            <li style="display:inline;margin-left: 10px;margin-right: 10px"><a href="#" style="color: #aa1f2e;font-size: 13px;">Grooming</a></li>
                            <li style="display:inline;margin-left: 10px;"><a href="#" style="color: #aa1f2e;font-size: 13px;">Health Care Supplies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6" id="top_main_my_account_and_other_items_container">
                   <div class="row" style="padding-top: 20px;justify-content: center;margin-left: 14%;"
                        id="my_account_and_other_items_container_1">
                       <div style="margin-right: 0.3em;">
                           <img src="images/user.png" width="35px" height="35px">
                       </div>
                       <div style="margin-left: 10px !important;margin-top: -2px !important;">
                           <p style="margin: 0px !important;padding: 0px !important; color: #252a68;font-size: 15px;line-height: 21px;margin-right: 0.3em;">
                              Hello!</p>
                           <p style="margin: 0px !important;margin-top: -10px !important;padding: 0px !important;"><a href="" style="color: black; font-size: 15px;line-height: 21px;color: #252a68;margin-right: 0.3em;"><b>My Account</b></a></p>
                       </div>
                       <div style="margin-left: 5px !important;margin-right: 0.3em;">
                           <img src="images/heart.png" width="27px" height="27px">
                       </div>
                       <div style="margin-left: 5px !important;">
                           <img src="images/bag.png" width="25px" height="28px">
                       </div>
                   </div>
                   <div class="row" style="width: 100%;position: absolute; z-index: 1;justify-content: center;margin-left: 5%;margin-top:2px;" id="my_account_and_other_items_container_2">
                    <div>
                        <p><a href="" style="color: #aa1f2e; font-size: 14px;">Become a Seller</a></p>
                    </div>
                    <div class="country_selection" style="margin-left: 20px; margin-right: 1%;">
                        <div>
                            <p style="" id="current_country" style="padding-left: 2%;" 
                            onclick="country_hidden_div_function();">
                            <img  id="country_flag" src="images/Saudi Arabia.png"  
                            style="">
                            <span id="country_name" style="color:#252a68;font-size: 13px;">Saudi Arabia</span>
                            <i class="fa fa-angle-down" aria-hidden="true""></i>
                        </p>
                        </div>
                        <div class="" id="country_hidden_div" style="background-color: white;display: none; padding-left: 2%;padding-right: 4%; width: max-content;">
                        <p onclick="going_to_be_current_country('Saudi Arabia');">
                            <img src="images/Saudi Arabia.png" style="padding: 4px;">
                            <span style="color:#252a68;font-size: 13px;">Saudi Arabia</span>
                        </p>
                        <p onclick="going_to_be_current_country('Qatar');">
                            <img src="images/Qatar.png" style="padding: 4px;">
                            <span style="color:#252a68;font-size: 13px;">Qatar</span>
                        </p>
                        <p onclick="going_to_be_current_country('Kuwait');">
                            <img src="images/Kuwait.png" style="padding: 4px;">
                            <span style="color:#252a68;font-size: 13px;">Kuwait</span>
                        </p>
                        <p onclick="going_to_be_current_country('Bahrain');">
                            <img src="images/Bahrain.png" style="padding: 4px;">
                            <span style="color:#252a68;font-size: 13px;">Bahrain</span>
                        </p>
                        <p onclick="going_to_be_current_country('Oman');">
                            <img src="images/Oman.png" style="padding: 4px;">
                            <span style="color:#252a68;font-size: 13px;">Oman</span>
                        </p>
                        <p onclick="going_to_be_current_country('UAE');">
                            <img src="images/UAE.png" style="padding: 4px;">
                            <span style="color:#252a68;font-size: 13px;">UAE</span>
                        </p>
                        <p onclick="going_to_be_current_country('India');">
                            <img src="images/India.png" style="padding: 4px;">
                            <span style="color:#252a68;font-size: 13px;">India</span>
                        </p>
                        </div>
                    </div>
                    <div id="currency_selection" style="margin-left: 1%;">
                        <div>
                            <p id="current_currency"onclick="currency_hidden_div_function();">
                            <span id="currency_name" style="color:#252a68;font-size: 13px;">USD</span>
                            <i class="fa fa-angle-down" aria-hidden="true""></i>
                        </p>
                        </div>
                        <div class="" id="currency_hidden_div" style="background-color: white;display: none; padding-left: 2%;padding-right: 4%; width: max-content;">
                        <p onclick="going_to_be_current_currency('USD');">
                            <span style="color:#252a68;font-size: 13px;">USD</span>
                        </p>
                        <p onclick="going_to_be_current_currency('EURO');">
                            <span style="color:#252a68;font-size: 13px;">EURO</span>
                        </p>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="fluid-container">

            <!-- Static navbar -->
            <nav class="navbar navbar-expand-lg navbar-light  btco-hover-menu "  
                 style="background-color: #252a68 !important;">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="row my_account_and_other_items_container_nav" style="margin-right: 0.6em; visibility: hidden;" 
                     id="">
                    <div>
                        <img id="nav_user_image" src="images/user.png" 
                             width="35px" height="35px">
                    </div>
                    <div>
                        <p style="margin: 0px;margin-left: 0.9em;color: white;">Hello!</p>
                        <p style="margin: 0px;margin-top: -10px !important;">
                        <a href="" style="color: white; font-size: 14px;">My Account</a>
                    </p>
                    </div>
                    <div style="">
                        <img id="nav_heart_image" src="images/heart.png" 
                             width="27px" height="27px">
                    </div>
                    <div style="">
                        <img id="nav_bag_image" src="images/bag.png" 
                             width="25px" height="28px">
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <form class="mx-2 my-auto "style="display: none;" id="navbar_search_form">
                        <input type="text" class="form-control border border-right-0" placeholder="Search...">
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- dog -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dog
                            </a>
                            <ul class="dropdown-menu split" aria-labelledby="navbarDropdownMenuLink" style="width: max-content;">
                                <div style="float: left; background-color:white !important;">
                                    <li><a class="dropdown-item dropdown-toggle" href="#">Dog 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 6</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div style="float: left; background-color:white !important;">
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 7</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 8</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 9</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 10</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 11</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Dog 12</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Dog 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Dog 6</a></li>
                                    </ul>
                                </li>
                                </div>
                            </ul>
                        </li>
                        <!-- cat -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cat
                            </a>
                            <ul class="dropdown-menu split" aria-labelledby="navbarDropdownMenuLink" style="width: max-content;">
                                <div style="float: left; background-color:white !important;">
                                    <li><a class="dropdown-item dropdown-toggle" href="#">Cat 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 6</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div style="float: left; background-color:white !important;">
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 7</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 8</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 9</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 10</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 11</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cat 12</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Cat 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                </div>
                            </ul>
                        </li>
                        <!-- Bird -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bird
                            </a>
                            <ul class="dropdown-menu split" aria-labelledby="navbarDropdownMenuLink" style="width: max-content;">
                                <div style="float: left; background-color:white !important;">
                                    <li><a class="dropdown-item dropdown-toggle" href="#">Bird 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 6</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div style="float: left; background-color:white !important;">
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 7</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 8</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 9</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 10</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 11</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Bird 12</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Bird 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Bird 6</a></li>
                                    </ul>
                                </li>
                                </div>
                            </ul>
                        </li>
                        <!-- Small Pet -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Small Pet
                            </a>
                            <ul class="dropdown-menu split" aria-labelledby="navbarDropdownMenuLink" style="width: max-content;">
                                <div style="float: left; background-color:white !important;">
                                    <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 6</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div style="float: left; background-color:white !important;">
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 7</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 8</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 9</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 10</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 11</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Small Pet 12</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Small Pet 6</a></li>
                                    </ul>
                                </li>
                                </div>
                            </ul>
                        </li>
                        <!-- Reptile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Reptile
                            </a>
                            <ul class="dropdown-menu split" aria-labelledby="navbarDropdownMenuLink" style="width: max-content;">
                                <div style="float: left; background-color:white !important;">
                                    <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 6</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div style="float: left; background-color:white !important;">
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 7</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Cat 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 8</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 9</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 10</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 11</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reptile 12</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Reptile 6</a></li>
                                    </ul>
                                </li>
                                </div>
                            </ul>
                        </li>
                        <!-- Aquatic -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Aquatic
                            </a>
                            <ul class="dropdown-menu split" aria-labelledby="navbarDropdownMenuLink" style="width: max-content;">
                                <div style="float: left; background-color:white !important;">
                                    <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 6</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div style="float: left; background-color:white !important;">
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 7</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 8</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 9</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 10</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 11</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Aquatic 12</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Aquatic 6</a></li>
                                    </ul>
                                </li>
                                </div>
                            </ul>
                        </li>
                        <!-- Horse -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Horse
                            </a>
                            <ul class="dropdown-menu split" aria-labelledby="navbarDropdownMenuLink" style="width: max-content;">
                                <div style="float: left; background-color:white !important;">
                                    <li><a class="dropdown-item dropdown-toggle" href="#">Horse 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 6</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div style="float: left; background-color:white !important;">
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 7</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 8</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 9</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 10</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 11</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Horse 12</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Horse 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Horse 6</a></li>
                                    </ul>
                                </li>
                                </div>
                            </ul>
                        </li>
                        <!-- Farm Animal -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Farm Animal
                            </a>
                            <ul class="dropdown-menu split" aria-labelledby="navbarDropdownMenuLink" style="width: max-content;">
                                <div style="float: left; background-color:white !important;">
                                    <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 6</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div style="float: left; background-color:white !important;">
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 7</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 8</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 9</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 10</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 11</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Farm Animal 12</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Farm Animal 6</a></li>
                                    </ul>
                                </li>
                                </div>
                            </ul>
                        </li>
                        <!-- Zoo Animal -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Zoo Animal
                            </a>
                            <ul class="dropdown-menu split" aria-labelledby="navbarDropdownMenuLink" style="width: max-content;">
                                <div style="float: left; background-color:white !important;">
                                    <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 6</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div style="float: left; background-color:white !important;">
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 7</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 8</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 9</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 10</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 11</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Zoo Animal 12</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 1</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 2</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 3</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 4</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 5</a></li>
                                        <li><a class="dropdown-item" href="#">Submenu Zoo Animal 6</a></li>
                                    </ul>
                                </li>
                                </div>
                            </ul>
                        </li>
                         <li class="nav-item dropdown">
                             <!-- <a href="">Hi</a> -->
                            <!-- <div class="row" style="margin-left: 20px;" 
                                 id="nav_my_account_and_other_items_container">
                                <div>
                                   <img id="nav_user_image" src="images/user.png" width="35px" height="35px">
                                </div>
                                <div style="">
                                   <p style="margin: 0px !important;padding: 0px !important;color: white;">Hello!</p>
                                   <p style="margin: 0px !important;margin-top: -10px !important;padding: 0px !important;"><a href="" style="color: white; font-size: 14px;">My Account</a></p>
                                </div>
                                <div style="">
                                    <img id="nav_heart_image" src="images/heart.png" width="27px" height="27px">
                                </div>
                                <div style="">
                                    <img id="nav_bag_image" src="images/bag.png" width="25px" height="28px">
                                </div>
                            </div> -->
                         </li>
                    </ul>
                </div>
            </nav>

            <!-- Main component for a primary marketing message or call to action -->
            

        </div> 
        <div style="font-size: 22px;line-height: 27px;color: #252a68;font-weight: 700;text-align: center;margin-top: 4%;">
            <p>PRODUCT SHOWCASE</p>
        </div>

        <!-- Items -->
        <div class="container" style="">
            <!-- Card Row 1 -->
            <div class="row" id="product_container" style="justify-content: center;">
                <!-- Card 1 -->
               <!-- <button id="btn1">Try</button> -->
            </div>
        </div>
                <!-- Supported Companies -->
        <div class="top-content">
            <div class="container-fluid">
                <div id="supported_companies_carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                            <img src="images/01.png" class="img-fluid mx-auto d-block" alt="img1">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="images/02.png" class="img-fluid mx-auto d-block" alt="img2">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="images/03.png" class="img-fluid mx-auto d-block" alt="img3">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="images/04.png" class="img-fluid mx-auto d-block" alt="img4">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="images/05.png" class="img-fluid mx-auto d-block" alt="img5">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="images/06.png" class="img-fluid mx-auto d-block" alt="img6">
                        </div>
                        
                    </div>
                    <a class="carousel-control-prev" href="#supported_companies_carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#supported_companies_carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer style="background-color: #252a68">
            <div >
            <p style="text-align: center; color: white;font-size: 15px;font-weight: 300;">
                <span style="font-weight: 700;">
                    Made With Love <i class="fa fa-heart" style="color: red;"></i> & BWD
                </span><br>2019 Copyright  - All Right Reserved Whites MyPet</p>
            </div>
        </footer>




<script type="text/javascript">
  //Sizes
  var XS="XS";
  var S ="S";
  var M ="M";
  var L ="L";
  var XL="XL";
  //Color
  var dr="dr";
  var db="db";
  var yc="yc";
  var oc="oc";
  var gc="gc";
  //Number
  var one=1;
  var two=2;
  var three=3;
  var four=4;
  var five=5;
 $(document).ready(function(){
  for(i = 1; i <= 16; i++) { 

  // $("#btn1").click(function(){
    $("#product_container").append(" <div class='col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12'style='margin-top: 0.3%;'><div class='fluid-container' style='margin-bottom: 20px;text-align: -webkit-center;'><div class='card' style='width:260px;height: 365px;'><div class='fluid-container'><img src='images/cat.png' alt='Product Image' style='width:100%;'><div class='top-left' style='background-color: #e17725; color: white;padding-left: 5px;padding-right: 5px; padding-top: 1px;padding-bottom: 2px;border-radius: 5px;font-size: 11px;width: 81px;margin-left: -2%;'>Special Offer</div><div class='top-right' style=''><div style=''><img src='images/heart.png' alt='Heart' style='width:26px;height: 26px; float: right;padding: 4px;background-color: #dbdbdb;border-radius: 50px;'  id='product_heart_"+i+"' onclick='product_heart_function("+i+");'></div><img src='images/like_heart.png' alt='Like Heart' style='width:26px;height: 26px; float: right;padding: 4px;background-color: #dbdbdb;border-radius: 50px; display: none;'  id='product_like_heart_"+i+"' onclick='product_like_heart_function("+i+");'></div></div><div class='card-body' style='padding-top: 0px;'><div class='row' style='margin: 0px; padding: 0px;'><img src='images/star.png' width='30%' height='10%'><p class='card-title' style='padding: 0px; margin: 0px; margin-left: 12%;font-size: 12px;color: #aa1f2e;font-weight: 500;text-align: center;'>Brand</p></div><div class='' style='padding: 0px;margin: 0px;'><p class='card-title' style='text-align: center;padding: 0px;margin: 0px;margin-top: -2%;font-size: 12px;line-height: 17px;color: #252a68;font-weight: 500;text-align: center;'>Product Name</p></div><p class='card-text' style='font-size: 10px;text-align: center;'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p class='card-text' style='font-size: 10px;text-align: center;margin-top: -6%;'><button style='background-color: transparent; border:none; font-size: 12px;font-weight: 500' id='product_"+i+"_size_XS' onclick='product_size_function("+i+","+XS+");'><b>XS</b></button><button style='background-color: transparent; border:none; font-size: 12px;font-weight: 500' id='product_"+i+"_size_S'  onclick='product_size_function("+i+","+S+");'><b>S</b></button><button style='background-color: transparent; border:none; font-size: 12px;font-weight: 500' id='product_"+i+"_size_M'  onclick='product_size_function("+i+","+M+");'><b>M</b></button> <button style='background-color: transparent; border:none; font-size: 12px;font-weight: 500' id='product_"+i+"_size_L'  onclick='product_size_function("+i+","+L+");'><b>L</b></button><button style='background-color: transparent; border:none; font-size: 12px;font-weight: 500' id='product_"+i+"_size_XL'  onclick='product_size_function("+i+","+XL+");'><b>XL</b></button></p><p class='card-text' style='font-size: 10px;text-align: center;margin-bottom: 0px; margin: 0px; margin-top: -6%;'><button style='background-color: #d75a4a; width: 20px; height: 20px; margin-right: 5%; border:none; font-size: 12px;font-weight: 500' id='color_dark_red'  onclick='product_color_function("+i+","+one+","+dr+");'><span class='dot' style='display: none;' id='product_"+i+"_dot_"+one+"'></span></button><button style='background-color: #252a68; width: 20px; height: 20px; margin-right: 5%; border:none; font-size: 12px;font-weight: 500' id='color_dark_blue'  onclick='product_color_function("+i+","+two+","+db+");'><span class='dot' style='display: none;' id='product_"+i+"_dot_"+two+"'></span></button><button style='background-color: #d9b234; width: 20px; height: 20px; margin-right: 5%; border:none; font-size: 12px;font-weight: 500' id='color_yellow'onclick='product_color_function("+i+","+three+","+yc+");'><span class='dot' style='display: none;' id='product_"+i+"_dot_"+three+"'></span></button> <button style='background-color: #e17725; width: 20px; height: 20px; margin-right: 5%; border:none; font-size: 12px;font-weight: 500' id='color_orange'  onclick='product_color_function("+i+","+four+","+oc+");'><span class='dot' style='display: none;' id='product_"+i+"_dot_"+four+"'></span></button><button style='background-color: #d4d4d4; width: 20px; height: 20px; margin-right: 5%; border:none; font-size: 12px;font-weight: 500' id='color_grey'  onclick='product_color_function("+i+","+five+","+gc+");'><span class='dot' style='display: none;' id='product_"+i+"_dot_"+five+"'></span></button></p><p class='card-text' style='margin: 0px;'><div class='row'><div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6'><p style='text-align: center; font-size: 17px;color: #252a68;font-weight: 500;'>$150</p> </div><div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6'><p style='text-align: center; font-size: 17px;color: #aa1f2e;font-weight: 500;'>$100</p></div></div></p><p class='card-text' style='margin-top: -12%;'><div class='row'><div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6'style='margin-left: -3%;'><div style='border:1px solid grey;width: 78px;height: 22px;border-radius: 50px;'><img src='images/plus.png' width='10px' height='10px' style='float: left;margin-top: 8%;margin-left: 12%;'onclick='plus_function("+i+")'><input type='text' readonly='readonly' value='0' name='' style='float: left; width: 50%; height: 70%; border:none;margin-top: 3%;text-align: center;'id='"+i+"_product_quantity'><img src='images/minus.png' width='10px' height='10px' style='float: left;margin-top: 8%;'onclick='minus_function("+i+")'> </div></div><div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6'style=''><div style='border:1px solid grey;border-radius: 50px; background-color: #252a68;color: white;width: 99px;height: 21px;border-radius: 11px;'onclick='add_to_cart_function("+i+")' id='product_"+i+"'><img id='add_to_cart_bag' src='images/bag.png' width='12px' height='12px'style='float: left; margin-top: 2%;margin-left: 10%;'><p style='float: left; font-size: 10px;margin-left: 5%;margin-top: 3%;line-height: 14px;font-weight: 500;'>Add to Cart</p></div></div></div><div class='row'><div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12'><p style='color: #2b2d41;font-size: 9px; text-align: left;font-weight: 500;font-size: 9px;line-height: 12px;'><strong style='color: #2b2d41'>SKU: </strong><span style='color: grey'>HFY-HFY-MJE</span></p></div></div><div class='row' style='margin-top: -6%;'><div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6'style=''><p style='color: #2b2d41;font-size: 9px; text-align: left;font-weight: 500;font-size: 9px;line-height: 12px;'><strong style='color: #2b2d41'>Barcode </strong><span style='color: grey'>1254654554</span></p></div><div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6'style=''><p style='color: #2b2d41;font-size: 9px; text-align: left;font-weight: 500;font-size: 9px;line-height: 12px;'><strong style='color: #2b2d41'>Expire: </strong><span style='color: grey'>12-Dec-2020</span></p></div></div></p></div></div></div></div>");
  // });
}
});
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <script src="js/bootstrap-4-hover-navbar.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
