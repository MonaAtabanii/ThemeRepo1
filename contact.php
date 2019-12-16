<?php include 'includes/config.php'?>


<?php get_header()?>

<h2>Contact Us</h2>

<?php

$to = 'monaatabani@gmail.com';

$from = 'noreply@nony4coding.com';

if(isset($_POST["FirstName"])){//if data show it
    
  /*
    //echo $_POST["FirstName"];
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
  */
    
    $replyTo= $_POST["Email"];

    $subject = 'Creative Contact Page ';

   // $message = $_POST["Comments"];
    $message = process_post();

    $today = date('F j, Y, g:i:s a');

    $message .= " " . $today;

    $headers =  'From: '. $from . PHP_EOL .

            'Reply-To: ' . $replyTo . PHP_EOL .

            'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    //echo 'Email sent? ' . $today;
    echo '
            <div class="form-group col-lg-12">
            <p>We\'ll get back to you shortly!</p>
            <p><a href="">BACK</a></p>
        </div>
     '
;

}else{//no data, show form
  echo '
  <form action="" method="post">
    
    <div class="row">
        <div class="form-group col-lg-4">
            <label class="text-heading" for="FirstName">First Name</label>
            <input class="form-control" type="text" name="FirstName" id="FirstName" autofocus required />
        </div>
        
       <div class="form-group col-lg-4">
            <label class="text-heading" for="LastName">Last Name</label>
            <input class="form-control" type="text" name="Last_Name" id="LastName" required />
        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading" for="Email">Email</label>
            <input class="form-control" type="email" name="Email" id="Email" required />
        </div>
        <div class="form-group col-lg-4">
         <p>Which name you prefer?</p>
        <input type="radio" name="naming" value="first"> First Name
        <br><input type="radio" name="naming" value="last"> Last Name<br>
        <input type="radio" name="naming" value="other"> Other
        <input class="form-control" type="text" name="Other" id="Other" /><br>
        

            </div>
            
            <div class="form-group col-lg-4">
            </div>
            
            <div class="form-group col-lg-4">
            <p>What tools you use to design?</p>
            <br>
            <input type="checkbox" name="tools" value="photoshop" />Photoshop CC<br />
            <input type="checkbox" name="tools" value="skitch" />Skitch<br />
            <input type="checkbox" name="tools" value="aperture" />Aperture<br />
            <input type="checkbox" name="tools" value="inDesign" />InDesign CC<br />
            
            </div>
            
            
           <div class="clearfix"></div>   
           <div class="form-group col-lg-12">
             <label class="text-heading" for="Comments">Comments</label>
             <textarea class="form-control" name="Comments" id="Comments"></textarea>
        </div>
        
        <br>
<div class="g-recaptcha" data-sitekey="6LcmBcUUAAAAAJNy-WYK_2LHDXNFpotpQZ6cSfxa"></div>
<br>

        
        <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
    </div>
    </form>
  ';
 
}
?>


<?php get_footer()?>
<?php
function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}


/*<label for="contactoption" id="option">How would you like us to contact you?</label><br>
            <p><input type="radio" class="radio" name="contactoption" id="email" value="email">E-mail</p>
            <p><input type="radio" class="radio" name="contactoption" id="phone" value="phone">Phone</p>*/

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
<script>
/**
* requires reCAPTCHA so user doesn't lose form data
*
* https://stackoverflow.com/questions/27706594/how-can-i-make-recaptcha-a-required-field
*
* In this version, jQuery is required and code will find first form on page and require
* the reCAPTCHA for that form using document.forms[0]
*/

function checkRecaptcha() {
res = $('#g-recaptcha-response').val();
if (res == "" || res == undefined || res.length == 0)
return false;
else
return true;
}
$(function() {
let thisForm = document.forms[0];
$(thisForm).submit(function(e) {
if(!checkRecaptcha()) {
alert("Please confirm you are not a robot.");
return false;
}
});
});
</script>