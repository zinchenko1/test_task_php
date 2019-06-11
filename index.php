<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $website_title = 'Home Task'; 
    require 'block/head.php';
  ?>
</head>
<body>
    <div class="container" >
        <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <form class="form-horizontal" id="form">
                    <div class="row form-group field">
                        <label class="col-xs-4 control-label">
                        <span>*</span>Name :
                        </label>
                        <div class="col-xs-8">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="row form-group field">
                        <label class="col-xs-4 control-label">
                        <span>*</span>Phone :
                        </label>
                        <div class="col-xs-8">
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter your phone" required>
                        </div>
                    </div>
                    <div class="row form-group field">
                        <label class="col-xs-4 control-label">
                            E-mail :
                        </label>
                        <div class="col-xs-8">
                            <input type="email" name="email" id="email" class="form-control" placeholder="username@sitename.com" />
                        </div>
                    </div>
                    <div class="row form-group field">
                        <label class="col-xs-4 control-label">
                            Comment :
                        </label>
                        <div class="col-xs-8">
                            <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="Enter your comment"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                        <div class="alert alert-danger mt-2" id="error">Error</div>
                            <button type="button" id="send" class="btn btn-default pull-right form-submit">
                                Send
                            </button>
                        </div>
                    </div>
                </form>
                
                <div class="thank-you" id="done">
                Thank you for your feedback!
                </div>
            </div>
            <div class="col-xs-4"></div>
        </div>
    </div>

    <script src="assets/js/maskinput.js"></script>
    
    <script>
        jQuery(function($){
            $("#phone").mask("+38(999) 999-9999");
        });
    </script>

</body>
</html>