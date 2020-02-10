<?php
	session_start();
?>
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Co-Operative Hingoli</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.6 -->

  <link rel="stylesheet" href="https://iibf.esdsconnect.com/assets/admin/bootstrap/css/bootstrap.min.css">

  <!-- Font Awesome -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="https://iibf.esdsconnect.com/assets/admin/dist/css/AdminLTE.min.css">

  <!-- iCheck -->

  <link rel="stylesheet" href="https://iibf.esdsconnect.com/assets/admin/plugins/iCheck/square/blue.css">

  <script src="https://iibf.esdsconnect.com/assets/admin/plugins/jQuery/jQuery-2.2.0.min.js"></script>

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->
  <style>
	ul {
	  margin-top: -1px;
	  padding: 5px 10px 5px 30px;
	  border: 1px solid #1287c0;
	  background-color: #dcf1fc;
	}
	ul li {
		padding: 2px 0;
	}
	.login-box-body a {
		line-height: 20px;
	}
	.short_logo {
		display: inline-block;
		margin: 0 0 0 20px;
	}
	.login-logo a {
		color: #619fda;
		font-weight: 600;
		text-align: center;
		font-size: 28px;
		line-height: 24px;
		display: inline-block;
	}
	.login-logo a small {
		font-size: 14px;
		color: #1d1d1d;
	}
	.form-control {
		width: 60%;
	}
	label {
		line-height: 18px;
		font-weight: normal;
	}
	form {
		padding: 10px;
		border: 1px solid #1287c0;
		background-color: #dcf1fc;
	}
	.form-group {
		margin-bottom: 10px;
	}
	a.forget {
		color: #9d0000;
		line-height: 24px;
	}
	a.forget:hover {
		color: #9d0000;
		text-decoration: underline;
	}
	.btn.btn-flat {
		min-height: 34px;
		background-color: #015171;
	}
	.red {
		color: #f00;
	}

  </style>

</head>

<body class="hold-transition login-page">

<div class="login-box" style="padding: 80px;">

  <div class="login-logo">
    <div class="short_logo"></div>
    <div><a>Co-Operative Society<br><small>District : Hingoli  | State :Maharashtra</small></a></div>

  </div>

  							

  
  

  <!-- /.login-logo -->

  <div class="login-box-body">
        
    
         
    
        

   
   <form action="login.php" method="post" name="loginFrm" id="loginFrm">
   
<div style="background-color:#7fd1ea; color:#fff; padding:3px 10px; margin-bottom:5px; font-size:16px;">Login</div>
      <div class="form-group has-feedback clearfix">
  <label for="text" class="col-md-6">Username <span class="red">*</span> :</label>
        <input type="text" class="form-control" placeholder="Register No" name="username" value='' autocomplete="off" required>

        <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->

      </div>

      <div class="form-group has-feedback clearfix">
        <label for="password" class="col-md-6">Password <span class="red">*</span> :</label>

        <input type="password" class="form-control" name="password" value=''  placeholder="Password" autocomplete="off" required>
	   </div>
      
    
      
       <div class="row">
        <div class="col-xs-4">
		  <input id="Submit" class="btn btn-primary btn-block btn-flat" name="btnLogin" value="Submit" type="submit">
      </div>
      
      <div class="col-xs-4">
	      <input class="btn btn-primary btn-block btn-flat" onclick="document.forgetFrm.reset();" name="Reset" value="Reset" type="reset">
      </div>
    
      
        <span style="color:#F00;"></span> 
        <span style="color:#F00;"></span> </div>

        <!-- /.col -->
  </form>
  
      <ul>
		<!--<li><a class="disability" href="ValidateDetails.php?ex=MQ==&amp;me=Tk0=&amp;ei=NTE=">Forgot Password/Get password Click Here</a></li>-->
        <li><a class="disability forget" href="">Having Touble ? Contact Service Provider</a></li>
        
        		
		</ul>		
        
        						<span class = "errors"><?php
                                        if(!empty($_SESSION['message']))
                                        {
											?>
											


											<span class="btn-danger" style="padding : 10px;"><?php echo $_SESSION['message']; ?></span>
											
											<?php
                                        }
                                        
                                    ?></span>
                                <?php unset($_SESSION['message']); ?>
        
        
        		
	   </div>

  

    <!-- /.social-auth-links -->

    <!--<a href="#">I forgot my password</a><br>-->

	<center> Copyright © 2020 Co-Operative Society | Dist - Hingoli</center>
  </div>

  <!-- /.login-box-body -->

</div>



<!-- /.login-box -->



<link href="https://iibf.esdsconnect.com/assets/css/parsley.css" rel="stylesheet">

<script src="https://iibf.esdsconnect.com/assets/js/parsley.min.js"></script>

<!-- jQuery 2.2.0 -->

<!-- Bootstrap 3.3.6 -->

<script src="https://iibf.esdsconnect.com/assets/admin/bootstrap/js/bootstrap.min.js"></script>

<!-- iCheck -->

<script src="https://iibf.esdsconnect.com/assets/admin/plugins/iCheck/icheck.min.js"></script>



<script>

  $(function () {

    $('input').iCheck({

      checkboxClass: 'icheckbox_square-blue',

      radioClass: 'iradio_square-blue',

      increaseArea: '20%' // optional

    });
	
	
	$('#new_captcha').click(function(event){
        event.preventDefault();
    $.ajax({
 		type: 'POST',
 		url: site_url+'Nonmem/generatecaptchaajax/',
 		success: function(res)
 		{	
 			if(res!='')
 			{$('#captcha_img').html(res);
 			}
 		}
    });
	});

	

  });

  

</script>

<script type="text/javascript">

  $('#loginFrm').parsley('validate');

</script>

</body>

</html>

