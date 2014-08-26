<!--
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
         Brand and toggle get grouped for better mobile display
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.html">Base Admin 3.0</a>
        </div>
         Collect the nav links, forms, and other content for toggling
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="./signup.html">
                        Create an Account
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class="icon-chevron-left"></i>&nbsp;&nbsp;
                        Back to Homepage
                    </a>
                </li>
            </ul>
        </div> /.navbar-collapse
    </div>  /.container
</nav>-->
<div class="account-container stacked">
    <div class="content clearfix">
        <?php echo $this->Form->create("User"); ?>
        <h1>Sign In</h1>
        <div class="login-fields">
            <p>Sign in using your registered account:</p>
            <div class="field">
                <label for="username">Username:</label>
                <input id="username" name="data[User][username]" value="" placeholder="Username" class="form-control input-lg username-field" type="text">
            </div> <!-- /field -->
            <div class="field">
                <label for="password">Password:</label>
                <input id="password" name="data[User][password]" value="" placeholder="Password" class="form-control input-lg password-field" type="password">
            </div> <!-- /password -->
        </div> <!-- /login-fields -->
        <div class="login-actions">
            <span class="login-checkbox">
                <input id="Field" name="Field" class="field login-checkbox" value="First Choice" tabindex="4" type="checkbox">
                <label class="choice" for="Field">Keep me signed in</label>
            </span>
            <button class="login-action btn btn-primary">Sign In</button>
        </div> <!-- .actions -->
        <div class="login-social">
            <p>Sign in using social network:</p>
            <div class="twitter">
                <a href="#" class="btn_1">Login with Twitter</a>
            </div>
            <div class="fb">
                <a href="#" class="btn_2">Login with Facebook</a>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div> <!--/content -->
</div> <!--/account-container -->
<!--Text Under Box -->
<div class = "login-extra">
    Don't have an account? <?php echo $this->Html->link('Sign Up', array('action' => 'register')); ?><br>
    Remind <a href="#">Password</a>
</div> <!-- /login-extra -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<a style="display: none;" href="#top" id="back-to-top"><i class="icon-chevron-up"></i></a>