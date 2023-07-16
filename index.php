<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            $nameErrMsg = "name is required";
        }else{
            $name = $_POST['name'];
        }
        if(empty($_POST['email'])){
            $mailErrMsg="email is required";
        }else{
            $email = $_POST['email'];
        }
        if(empty($_POST['gender'])){
           $genderErrMsg="please select your gender";
        }else{
            $gender = $_POST['gender'];
        }
        if(empty($_POST['terms'])){
            $termsErrMsg="you must agree to terms";
        }else{
            $terms = $_POST['terms'];
        }
        if(isset($_POST['group'])){
            $group =$_POST['group'];
        }
        if(isset($_POST['class_details'])){
            $class_details=$_POST['class_details'];
        }    
        if(isset($_POST['courses'])){
            $selected_courses=$_POST['courses'];
        }    
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body>
        <h2>Application Name : AAST_BIS Class Registration</h2>
        <p><span class="error">*Required field.</span></p>
        <form action="<?php $_PHP_SELF ?>" method="post">
            <label for="name">Name:</label>
            <input id="name" type="text" name="name">
            <span class="error">* <?php echo $nameErrMsg;?></span>
            <br><br>
            <label for="email">Email:</label>
            <input id="email" type="email" name="email">
            <span class="error">*<?php echo $mailErrMsg;?></span>
            <br><br>
            <label for="group">Group #</label>
            <input id="group" type="text" name="group">
            <br><br>
            <label for="class_details">Class Details:</label>
            <textarea id="class_details" name="class_details" cols="40" rows="5" style="display:block;"></textarea>
            <br><br>
            <label for="gender">Gender: </label>
            <input id="male" type="radio" name="gender" value="male"><label for="male">Male</label>
            <input id="female" type="radio" name="gender" value="female"><label for="female">Female</label>
            <span class="error">* <?php echo $genderErrMsg;?></span>
            <br><br>
            <label for="courses">select a course:</label>
            <select name="courses[]" multiple>
                <option value="html">html</option>
                <option value="Javascript">Javascript</option>
                <option value="PHP">PHP</option>
                <option value="MySQL">MySQL</option>
            </select>
            <br><br>
            <label for="terms">Agree</label>
            <input id="terms" type="checkbox" name="terms">
            <span class="error">* <?php echo $termsErrMsg;?></span>
            <br><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php

echo "<h2>your given values are as:</h2>"."<br />";

if (!$nameErrMsg && !$mailErrMsg && !$genderErrMsg && !$termsErrMsg && !$genderErrMsg){
    echo "name :".$name."<br />";
    echo "Email :".$email."<br />";
    echo "Group :".$group."<br />";
    echo "Class Details :".$class_details."<br />";
    echo "Gender :".$gender."<br />";
    echo "Your selected courses are :"."<br />";
    foreach($selected_courses as $course){
        echo $course."<br />";
    }
}
?>