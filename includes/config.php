<?php
/*
config.php

stores configuration information for our web application

*/

//removes header already sent errors
ob_start();

define('SECURE',false); #force secure, https, for all site pages

define('PREFIX', 'widgets_fl19_'); #Adds uniqueness to your DB table names.  Limits hackability, naming collisions

header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

define('DEBUG',true); #we want to see all errors

include 'credentials.php';//stores database info
include 'common.php';//stores favorite functions

//prevents date errors
date_default_timezone_set('America/Los_Angeles');

//create config object
$config = new stdClass;

//CHANGE TO MATCH YOUR PAGES

//here is our navigation
$config->nav1['index.php']='Home';
$config->nav1['about.php']='About Us';
$config->nav1['daily.php']='Daily Cat';
$config->nav1['CustomerList_Pager_WaterMelon.php']='Customer List/View Pager Database';
$config->nav1['contact.php']='Contact Us';

/*$config->nav1['index.php'] = "HOME";
$config->nav1['customers.php'] = "CUSTOMERS";
$config->nav1['contact.php'] = "CONTACT";
$config->nav1['daily.php'] = "DAILY";*/

//create default page identifier
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//START NEW THEME STUFF - be sure to add trailing slash!
$sub_folder = 'widgets/';//change to 'widgets' or 'sprockets' etc.
$config->theme = 'Clean';//sub folder to themes

//will add sub-folder if not loaded to root:
$config->physical_path = $_SERVER["DOCUMENT_ROOT"] . '/' . $sub_folder;
//force secure website
if (SECURE && $_SERVER['SERVER_PORT'] != 443) {#force HTTPS
	header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}else{
    //adjust protocol
    $protocol = (SECURE==true ? 'https://' : 'http://'); // returns true
    
}
$config->virtual_path = $protocol . $_SERVER["HTTP_HOST"] . '/' . $sub_folder;

define('ADMIN_PATH', $config->virtual_path . 'admin/'); # Could change to sub folder
define('INCLUDE_PATH', $config->physical_path . 'includes/');


//CHANGE ITEMS BELOW TO MATCH YOUR SHORT TAGS
$config->title = THIS_PAGE;
$config->banner = 'Widgets';
$config->loadhead = '';//place items in <head> element

// default:
$config->slogan = 'Let\'s Have Some Fun!';
      $config->sitename = "Mona's Template - 2019";
       $config->pageHeader = 'Any PageHeader';
     $config->subHeader = 'Any SubHeader';
  /*    $config->sloganIcon='';//will be replaced in contact.php by hero icons*/


        
 /*   case 'contact.php':    
        $config->title = 'Contact Page';    
    break;
    
    case 'appointment.php':    
        $config->title = 'Appointment Page';
        $config->banner = 'Widget Appointments!';
    break;
        
   case 'template.php':    
        $config->title = 'Template Page';    
    break; */
switch(THIS_PAGE){        
         case 'index.php':
         $config->title = 'My Home Page';
        $config->pageHeader = 'Welcome';
        $config->subHeader = 'The default home page';
    break;
        
    case 'about.php':
         $config->title = 'About Us';
         $config->pageHeader = 'Curiosity Killed the Cat!';
        $config->subHeader = 'Just learn More';
    break;
        
     case 'CustomerList_Pager_WaterMelon.php':
        $config->title = 'Customer View/List Pager WaterMelon Page';
        $config->pageHeader = 'What a great Customers Pager!';
         $config->subHeader = 'WOW WHAT A GREAT CUSTOMERS WE HAVE!';
    break;


     case 'daily.php':
         $config->title = 'My lovely Cat\'s Page';
        $config->pageHeader = 'Meeeewaaaaa!';
         $config->subHeader = 'Sweet Daily Cats';
    break;
        
   case 'contact.php':
         $config->title = 'Contact page';
         $config->pageHeader = 'Please contact usContact us for more Fun!';
         $config->subHeader = 'We appreciate your feedback';
        /* $config->sloganIcon= randomize($heros);*/
    break;      
        
}

//creates theme virtual path for theme assets, JS, CSS, images
$config->theme_virtual = $config->virtual_path . 'themes/' . $config->theme . '/';

/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/
/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/
if(startSession() && isset($_SESSION['AdminID']))
{#add admin logged in info to sidebar or nav
    
    $config->adminWidget = '
        <a href="' . ADMIN_PATH . 'admin_dashboard.php">ADMIN</a> 
        <a href="' . ADMIN_PATH . 'admin_logout.php">LOGOUT</a>
    ';
}else{//show login (YOU MAY WANT TO SET TO EMPTY STRING FOR SECURITY)
    
    $config->adminWidget = '
        <a  href="' . ADMIN_PATH . 'admin_login.php">LOGIN</a>
    ';
}

function makeLinks($nav)
{
$myReturn='';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key){//current page add active class
            
              $myReturn .='
        <li class="nav-item ">
              <a class="nav-link active" href="' . $key . ' ">' . $value . ' </a>
        </li>';             
        }else{//add no formatting  
        $myReturn .='
        <li class="nav-item">
              <a class="nav-link" href="' . $key . ' ">' . $value . ' </a>
        </li>';  }  
    }
    
    return $myReturn;
}


?>