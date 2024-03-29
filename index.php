<!DOCTYPE html>
<html>
    <head>
        <title>Contact me !</title>
        <script type="text/javascript">
                window.onload = () => {
                  let str = "Project made with Bootstrap and PHP \n Via Udemy";
                  alert(str);
                }
        </script>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/script.js"></script>
    </head>


    <body>

       <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contact me !</h2>
            </div>

           <div class="row">
               <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="php/contact.php" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">First name <span class="blue">*</span></label>
                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Your first name">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Last name <span class="blue">*</span></label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Your last name">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder="Your email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Phone number</label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Your phone number">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message <span class="blue">*</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="Your message" rows="4"></textarea>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <p class="blue"><strong>* Required informations</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
           </div>
        </div>

    </body>

</html>
