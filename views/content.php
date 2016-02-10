<?php
//haalt de gegevens op
$user = fetch('GET', '/v1/people/~:(firstName,lastName,headline,location,email-address,picture-urls::(original),num-connections,id,phonetic-first-name,current-share,specialties)');
?>
<body>
<?php
function closeSession(){
IN.User.logout();
}?>

    <div class="col-xs-10 maincontainer">
        <div class="container">
        <h1>The Logaholic Analytics</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Location</th>
                <th>Connections</th>
                <th>Linkedin ID</th>
            </tr>
            </thead>
            <tbody>
            <tr>
<!--                <pre>-->
<!--                --><?php //print_r($user);?>
<!--                    </pre>-->
                <td><?php echo $user->firstName ?></td>
                <td><?php echo $user->lastName ?></td>
                <td><?php echo $user->emailAddress ?></td>
                <td><?php  echo $user->location->name ?></td>
                <td><?php echo $user->numConnections ?></td>
                <td><?php echo $user->id ?></td>
            </tr>
            </tbody>
        </table>

        <h1>About <?php echo $user->firstName ?></h1>
        <div class="col-xs-12 image"><img src="<?php echo $user->pictureUrls->values[0]?>" alt="No profile picture on linked in"></div>
        <p><?php echo $user->headline ?></p>
    </div>

</div>
</body>
</html>