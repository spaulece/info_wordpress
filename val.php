<?php 
/**
* Template Name: form
*/
get_header();

$validation =true;
$nameerror = $emailerror = $numerror = $commenterr = "";
$name = $email = $comment = $pnumber = "";

if(isset($_POST['submit'])){
if ($_POST['flname'] == "" ){
	$nameerror['flname'] = "Name is required";
}
else {
    $name = test_input($_POST["flname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameerror = "Only letters and white space allowed";
    }
  }
if (empty($_POST["email"])) {
    $emailerror = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerror = "Invalid email format";
    }
  }
 if (empty($_POST["pnumber"])) {
    $numerror = "Number is required";
  } else {
    $pnumber = test_input($_POST["pnumber"]);
  }

if (empty($_POST["comment"])) {
    $commenterr = "Ask Your query";
  } else {
    $comment = test_input($_POST["comment"]);
  }

if ($_POST['flname'] != "" && $_POST['email'] !="" && $_POST['pnumber'] != "" && $_POST['comment'] != ""){
$validation =true;
}else{
$validation =false;
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<section id="form"  style="padding: 8em 0;">
	<div class="container" style="width: 40%; margin-left: 405px; margin-top:">
	<form method="post" action="">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="flname" class="form-control" value="<?php echo isset($_POST["flname"]) ? $_POST["flname"] : ''; ?>">
			<?php echo $nameerror; ?>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>"><?php echo $emailerror; ?>
		<div class="form-group">
			<label>Phone Number</label>
			<input type="text" name="pnumber" class="form-control" value="<?php echo isset($_POST["pnumber"]) ? $_POST["pnumber"] : ''; ?>"><?php echo $numerror; ?>
		</div>
		<div class="form-group">
			<label>Message</label>
			<textarea class="form-control" rows="5" name="comment" value="<?php echo isset($_POST["comment"]) ? $_POST["comment"] : ''; ?>" ></textarea><?php echo $commenterr; ?>
		</div>
		<input type="submit" name="submit" class=" btn btn-danger">
	</form>
	</div>
</section>

<?php
if(isset($_POST['submit'])){
include_once("wp-config.php");
include_once("wp-includes/wp-db.php");
global $wpdb;
$fname = $_POST['flname'];
$el = $_POST['email'];
$pn = $_POST['pnumber'];
$ct = $_POST['comment'];
if($validation==true){
$sql = $wpdb->insert('info2', array(
	   "flname" => $fname,
	   "email" => $el,
	    "pnumber" => $pn,
	   "comment" => $ct
	));
$sql = $wpdb->query($query);
}

if($run){
	echo "data inserted";

$to = "sumitavapl@gmail.com, somebodyelse@example.com";
$subject = "Test Mail";

$message = "
<html>
<head>
<title>Test Mail</title>
</head>
<body>
<p>This is for tetsing purpose</p>
<table>
<tr>
<th>Firstname ".$fname ." </th>
<th>Email: ".$el."</th>
<th>Phone ".$pn ." </th>
<th>Message: ".$ct."</th>
</tr>
</table>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <no@reply.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
}
/*
else
echo "error!"; */
}
?>
<?php get_footer();?>