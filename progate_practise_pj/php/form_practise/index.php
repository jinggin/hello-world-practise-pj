<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Progate Form Practise</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>About Progate</li>
        <li>Recruitment</li>
        <li class="selected">Contact</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">Contact</div>
      <form action="sent.php" method="post">
        <div class="form-item">Name</div>
        <input type="text" name="name">

        <div class="form-item">Age</div>
        <select name="age">
            <option value="unselected">Select your age</option>
            <?php 
                for ($age = 6; $age <= 100; $age++) {
                    echo "<option value='{$age}'>{$age}</option>";
                }
            ?>
        </select>

        <div class="form-item">Category</div>
        <?php 
            $types = array('About Progate', 'Comments/Opinions', 'Job inquiry', 'Media', 'Payment', 'Other');
        ?>
        <select name="category">
            <option value="unselected">Select reason for contacting us</option>
            <?php 
                foreach ($types as $type) {
                    echo "<option value='{$type}'>{$type}</option>";
                }
            ?>
        </select>

        <div class="form-item">Message</div>
        <textarea name="body"></textarea>
        <input type="submit" value="Submit">
      </form>
      
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>About This Practise</li>
        <li>Contact</li>
      </ul>
    </div>
  </div>
</body>
</html>