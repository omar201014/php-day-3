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
            $courses=$_POST['courses'];
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
            <input type="text" name="name">
            <span class="error">* <?php echo $nameErrMsg;?></span>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" name="email">
            <span class="error">*<?php echo $mailErrMsg;?></span>
            <br><br>
            <label for="group">Group #</label>
            <input type="text" name="group">
            <br><br>
            <label for="class_details">Class Details:</label>
            <textarea name="class_details" cols="40" rows="5" style="display:block;"></textarea>
            <br><br>
            <label for="gender">Gender: </label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <span class="error">* <?php echo $genderErrMsg;?></span>
            <br><br>
            <label for="courses">select a course:</label>
            <select name="courses" multiple>
                <option value="html">html</option>
                <option value="Javascript">Javascript</option>
                <option value="PHP">PHP</option>
                <option value="MySQL">MySQL</option>
            </select>
            <br><br>
            <label for="terms">Agree</label>
            <input type="checkbox" name="terms">
            <span class="error">* <?php echo $termsErrMsg;?></span>
            <br><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
echo "<h2>your given values are as:</h2>"."<br />";
echo "name :".$name."<br />";
echo "Email :".$email."<br />";
echo "Group :".$group."<br />";
echo "Class Details :".$class_details."<br />";
echo "Gender :".$gender."<br />";
echo "Your courses are :".$courses."<br />";
?>