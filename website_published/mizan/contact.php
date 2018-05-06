<!DOCTYPE html>
<html>
<head>
  <title>Mizanur Rahman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" />
  <link href="contact.css" rel="stylesheet" />
</head>

<body>
  <?php
      include_once('header.php')
  ?>
<div class="wrapper">
<br>
<br>
<br>
<br>
<div class="padding">
  <div class="container">
    <div class="row contact text-center">
      <div class="col-12">
        <h1>Contact Info</h1>
        <hr class="light-200">
        <h4>I would love to get feedback about anything</h4>

    <form id="contact-form" action="connection.php" method="POST" role="form">

      <div class="messages"></div>

      <div class="controls">

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_name">Firstname *</label>
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_lastname">Lastname *</label>
                      <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_email">Email *</label>
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_phone">Phone</label>
                      <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="form_message">Message *</label>
                      <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-12">
                  <input type="submit" name="submit"class="btn btn-success btn-send" value="Send message">
                  <div id = "message"></div>
              </div>
          </div>
      </div>

  </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
