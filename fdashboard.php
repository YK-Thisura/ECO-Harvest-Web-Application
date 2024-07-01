<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Eco Harvest</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;600&display=swap">
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap');

body {
font-family: 'Signika', sans-serif;
margin: 20px;
font-weight:bold;
padding: 10px;
background-color: white;
position: relative; /* Ensure the body has a relative position */
}


        header {
            background-color: white;
            color: darkgreen;
            text-align: center;
            padding: 15px 0;
        }
.card {
    background: white;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}
.form-control {
    border: 1px solid rgb(112, 111, 111);
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: white;
    color: #0e4dcc;
}
body {
    background: white;
    margin-top: 20px;
}

.ui-w-80 {
    width : 80px !important;
    height: auto;
}

.text-light {
    color: #babbbc !important;
}


.card {
    background-clip: padding-box;
    box-shadow     : 0 1px 4px rgba(24, 28, 33, 0.012);
}

.row-bordered {
    overflow: hidden;
}

.account-settings-fileinput {
    position  : absolute;
    visibility: hidden;
    width     : 1px;
    height    : 1px;
    opacity   : 0;
}

        
</style>
</head>
<header>
    <div class="back-btn" onclick="goBack()">
        <img src="images/index/logo.png" alt="Logo" style="width: 100px; height: auto;">
      </div>
      <div class="title-text">Welcome to Farmer Dashboard </div> 
</header>
<body>
<div class="col-md-9">
<div class="tab-content">
<div class="tab-pane fade active show" id="account-general">
<div class="card-body media align-items-center">
<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt class="d-block ui-w-80">
<div class="media-body ml-4">
<label class="btn btn-outline-primary">
Upload new photo
<input type="file" class="account-settings-fileinput">
</label> &nbsp;
<button type="button" class="btn btn-default md-btn-flat">Reset</button>
<div class="text-light small mt-1">Allowed JPG, GIF or PNG. </div>
</div>
</div>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="account-settings">
</div>
</div>
</div>
</div>
<form action="finfo.php" method="post">
<br class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<h6 class="mb-3 text-primary">Personal Informations</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="firstName">First Name</label>
<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="lastName">Last Name</label>
<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="email">E-mail</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Enter email ID">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="birthday">Birth Day</label>
<input type="text" class="form-control" id="birthday" name="birthday" placeholder="Enter birthday">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="phone">Phone</label>
<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="website">Web Site</label>
<input type="text" class="form-control" id="website" name="website" placeholder="Enter web site">
</div>
</div>
</div>
<br></br>
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<h6 class="mb-3 text-primary">Location & Address</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="street">Street</label>
<input type="name" class="form-control" id="street" name="street" placeholder="Enter Street">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="city">City</label>
<input type="name" class="form-control" id="city" name="city" placeholder="Enter City">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="province">Province</label>
<input type="text" class="form-control" id="province" name="province" placeholder="Enter province">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="zipCode">Zip Code</label>
<input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
</div>
</div>
</div>
<br></br>
<br class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<h6 class="mb-3 text-primary">Tell your Enquiry for Us</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="query">Query</label>
<textarea class="form-control" rows="6" name="query" placeholder="Type Here ...."></textarea>
</div>
</div>
</div>
<br></br>
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="text-right">
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<button type="button" class="btn btn-secondary">Cancel</button>
</div>
</div>
</div>
<br></br>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
        // JavaScript function to go back to the previous state
        function goBack() {
      // Assuming your home page URL is "index.html" or adjust accordingly
      window.location.href = "index.php";
    }
</script>
</body>
</html>