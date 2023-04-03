<?php

$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];

?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            .cms{
                color: red;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
            <?php foreach($students as $student){?>
                <tr class="<?php echo $student['status']==='CMS'? "cms":"";?>">
                    <td><?php echo $student['name'];?></td>
                    <td><?php echo $student['email'];?></td>
                    <td><?php echo $student['status'];?></td>
                </tr>
            <?php }?>            
        </table>
    </body>
</html>
