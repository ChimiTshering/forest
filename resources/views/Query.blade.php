<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>HELLO World
    </h1>

    <?php
    
  
    
    ?>

    <table >

    <tr>
    
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>

    </tr>

    @foreach($users as $user)
    <tr>
    
        <td><?php  echo $user->id ?></td>
        <td><?php  echo $user->name ?></td>
        <td><?php  echo $user->email ?></td>
    
 
    </tr>
    @endforeach
    </table>

</body>
</html>