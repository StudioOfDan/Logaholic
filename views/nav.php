<?php
// Congratulations! You have a valid token. Now fetch your profile
$user = fetch('GET', '/v1/people/~:(firstName,lastName)');
?>

<div class="col-xs-2 sidebar">
    <h1> Welcome <?php $user->firstName ?></h1>
    <ul>
        <a href="#"><li><span class="glyphicon glyphicon-home"></span> Account info</li></a>
        <a href="#"><li><span class="glyphicon glyphicon-stats"></span> Analytics</li></a>

    </ul>
</div>