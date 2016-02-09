<body>

<?php
// Congratulations! You have a valid token. Now fetch your profile
$user = fetch('GET', '/v1/people/~:(firstName,lastName)');
//print "Hello $user->firstName $user->lastName.";
echo "Hello  $user->lastName";
exit;


?>
</body>
</html>