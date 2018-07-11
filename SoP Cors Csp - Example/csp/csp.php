<?php
header("Content-Type: text/html");
header("content-Security-Policy: default-src 'self'");
?>

<html>
<body bgcolor="#F5EEF8">
<font size="06" color="red">Content-Security-Policy?</font>
<div>
<p></p>
</div>
<form action="" method="post">

<?php if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $input = $_POST['inputText']; //get input text
  $message = "Success! You entered: ".$input;
echo $message;
} ?>
  <input type="text" name="inputText"/>
  <input type="submit" name="SubmitButton"/>
</form>    
</body>
</html>
