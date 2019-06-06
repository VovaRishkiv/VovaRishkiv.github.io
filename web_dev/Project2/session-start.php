<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "aqua";
$_SESSION["favanimal"] = "elephant";
echo "Session variables are set.";
?>

</body>
</html>
