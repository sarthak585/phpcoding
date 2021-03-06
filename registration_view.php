<?php
$doNotAuthenticate = true;
include_once "config.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Online Exam Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/animate-custom.css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/admin_style.css" />
    </head>
    <body>
		<?php 	include_once 'header.php';	?>
        <div class="container">
            <header>
                <h1>Login and Registration Form</h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper" class="login_wrapper">
                        <div id="login" class="animate form">
                            <?php
                            if (isset($_GET['iserror']) && $_GET['iserror']==true){
                                echo "Invalid Username or Password";
                            }
                            ?>
                            <form  method="post" action="<?php echo BASE_URL; ?>login.php" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>
                    </div>
                    <div id="wrapper">
                        <div id="register" class="animate form">
                            <form  method="post" action="<?php echo BASE_URL; ?>registration.php" autocomplete="on"> 
                                <h1> Sign up </h1>
                                <table cellpadding="10" cellspacing="10">
                                    <tr>
                                        <td width="50%">
                                                <p>                                                  
                                                    <label for="firstname" class="youmail" data-icon="u">First Name</label>
                                                    <input id="firstname" name="firstname"  required="required" type="text" placeholder="First Name"/>
                                                </p>         
                                                <p>
                                                    <label for="lastname" class="youmail" data-icon="u">Last Name</label>
                                                    <input id="lastname"  name="lastname" required="required" type="text" placeholder="Last Name"/>
                                                </p>         
                                                <p>
                                                    <label for="emailsignup" class="youmail" data-icon="e"> Your email</label>
                                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/>
                                                </p>         
                                                <p>    
                                                    <label for="phone" class="youmail" data-icon="p">Phone</label>
                                                    <input id="phone" name="phone" required="required" type="number" placeholder="Phone Number"/>
                                                </p>
                                       </td>
                                        <td width="50%">
                                            <p> 
                                                <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                                <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                            </p>
                                            <p> 
                                                <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                                <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                            </p>
                                            <p> 
                                                <label for="passwordsignup_confirm" class="youpasswd"  data-icon="p">Please confirm your password </label>
                                                <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                            </p>
                                            <p class="signin button"> 
                                                <input type="submit" value="Sign up"/> 
                                            </p>
                                       </td>
                                    </tr>
                                </table>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>