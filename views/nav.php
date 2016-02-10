<?php
// Congratulations! You have a valid token. Now fetch your profile
$user = fetch('GET', '/v1/people/~:(firstName,lastName)');
?>

<div class="col-xs-2 sidebar">
    <h1> Welcome <?php echo $user->firstName ?></h1>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-home"></span> Account Options <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="logout.php" class="myButton" onclick="closeSession()" id="logout-link">Logout</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
            <li>
                <li></li></a>
            </li>
            <li>
                <a href="#"><li><span class="glyphicon glyphicon-stats"></span> Analytics</li></a>
            </li>
            <li>
                <a href="#">Overview</a>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
    <ul>



    </ul>
</div>