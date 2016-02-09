<?php
//haalt de gegevens op
$user = fetch('GET', '/v1/people/~:(firstName,lastName,headline,location,email-address,picture-url,num-connections)');
?>
<body>
<div class="container">
    <div class="col-xs-12 maincontainer">
        <div class="col-xs-12 image">IMG HIER</div>
        <h1>The Logaholic Analytics</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Location</th>
                <th>Connections</th>
            </tr>
            </thead>
            <tbody>
            <tr><pre>
                <?php print_r($user);?>
                    </pre>
                <td><?php echo $user->firstName ?></td>
                <td><?php echo $user->lastName ?></td>
                <td><?php echo $user->emailAddress ?></td>
                <td><?php  echo $user->location->name ?></td>
                <td><?php echo $user->numConnections ?></td>
            </tr>
            </tbody>
        </table>

        <h1>About <?php echo $user->firstName ?></h1>
        <p><?php echo $user->headline ?></p>
    </div>

</div>
</body>
</html>