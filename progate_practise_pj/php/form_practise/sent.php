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
    <div class="thanks-message">Thanks for contacting us!</div>
    <div class="display-contact">

      <div class="form-title">Submitted</div>

      <div class="form-item">■ Name</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ Age</div>
      <?php echo $_POST['age']; ?>

      <div class="form-item">■ Category</div>
      <?php echo $_POST['category']; ?>

      <div class="form-item">■ Message</div>
      <?php 
      echo $_POST['body'];
      ?>
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