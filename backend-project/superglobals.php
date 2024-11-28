<?php
$y = 22;

function myfunction () {
    echo $GLOBALS [ 'y'];
}



myfunction();

echo "<br>";
echo "<br>";

// super globals to be considered

//$GLOBALS
//$_SERVER
//$_POST
//$_GET

echo $_SERVER ['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];

// Single quotes and double quotes difference
$z= "Mary";
echo "Hello $z";
echo"<br>";
echo 'Hello $z';


?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" 
method="POST" >

<input type="text" placeholder="First Name" name="fname">
<br><br>
<input type="text" placeholder="Last Name" name="lname">
<br><br>
<button type="submit">Submit</button>

</form>

<?php
$first_name = $last_name =""; 
// initialise variables to empty string

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // checking if form is submitted via POST method
    
    $first_name = htmlspecialchars($_POST['fname']);
    $last_name = htmlspecialchars($_POST['lname']);
    // $_POST["fname] holds form data of a form that used post method 
    //htmlspecialchars is used to prevent malicious codes

    

    echo "<h2> Good Afternoon $first_name $last_name </h2>";
    // <script>malicious code displayed as plain text</script>
}


?>