<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-1ZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9s+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="./script.js" type="text/javascript"></script>
</head>


<body>
  <div class="wrapper">
    <div class="title">Student Registration Form PHP
    </div>
    <form action="ins.php" method="POST" enctype="multipart/form-data">
      <div class="form">

        <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" id="name" name="fname" placeholder="Enter first name" maxlength="30"
            pattern="[A-Za-z]{1,32}" title="Enter only alphabets" required>
        </div>

        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" id="name" name="lname" placeholder="Enter last name" maxlength="30"
            pattern="[A-Za-z]{1,32}" title="Enter only alphabets" required>
        </div>

        <div class="inputfield" id="gender">
          <label for="">Gender</label>
          <input type="radio" name="gender" id="radio" value="Male">Male
          <input type="radio" name="gender" id="radio" value="Female">Female
        </div>

        <div class="inputfield">
          <label for="">Age</label>
          <input type="text" class="input" name="age" placeholder="Enter your age" maxlength="2" pattern="^[0-9]{2}$"
            required placeholder="Enter your age" title="Enter numbers only">
        </div>

        <div class="inputfield">
          <label for="">Date of Birth</label>
          <input type="date" class="input" name="dob" required>
        </div>

        <div class="inputfield">
          <label>Email Address</label>
          <input type="email" class="input" name="email" placeholder="Enter your email"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required>
        </div>

        <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" id="password" name="pass" placeholder="Enter your password min 8 characters"
            autocomplete="off" onkeyup='check()' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            maxlength="100" minlength="8" required>
        </div>

        <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" onkeyup='check()' class="input" id="confirm-password" name="cpass"
            placeholder="Confirm password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            maxlength="100" minlength="8" required>
        </div>

        <p id="message"></p>

    
        <div class="inputfield" id="hobbies" >
          <label for="">Hobbies</label>
          <div class="hobbies" >
            <input type="checkbox" name="Hobbies" id="" value="Music">
            <label for="">Music</label>
            <input type="checkbox" name="Hobbies" id="" value="Movies">
            <label for="">Movies</label>
            <input type="checkbox" name="Hobbies" id="" value="Sports">
            <label for="">Sports</label>
            <input type="checkbox" name="Hobbies" id="" value="Travel">
            <label for="">Travel</label>
          </div>
        </div>

        

        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" name="check" value="Declared" required>
            <span class="checkmark"></span>
          </label>
          <p>I hereby declare that the above information provided is true and correct.</p>
        </div>

        <div class="inputfield" required>
          <div data-netlify-recaptcha="true"></div>
        </div>

        <div class="inputfield btns" id="btn">
          <button type="submit" value="Register" name="register" class="btn" onclick="checkPassword()">Register</button>
          <button type="reset" value="Reset" class="btn">Reset</button>
        </div>

      </div>
    </form>
  </div>

</body>

</html>