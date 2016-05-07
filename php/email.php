<?php
header('Location: http://www.book-bridges.com');
?>

<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "athletters@gmail";
    $email_subject = "Newsletter Registration";
     
    $email = $_POST['email']; // required
 	$email_from = $_POST['email'];
    $email_message = "Registrants email below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message = "Email:".clean_string($email)."\n";
     
     
// create email headers

$headers = 'From: Athletters';
@mail($email_to, $email_subject, $email_message, $headers); 


	echo '<script>window.alert("Thank you for registering");<script>';}

?>

 

 
