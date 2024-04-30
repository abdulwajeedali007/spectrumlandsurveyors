 <?php require('./partials/header.php') ?>
 <!-- Contact Banner start -->
 <section class="banner">
     <img src="./assets/images/contact-banner.jpg" class="w-100 d-block" alt="about us banner">

     <div class="banner-content">
         <div class="container">
             <div class="row">
                 <div class="col">
                     <h2>Contact us</h2>
                     <p class="d-none d-md-block">
                         Ready to embark on your next adventure? Contact us today to start planning!</p>
                 </div>
             </div>
         </div>
     </div>


 </section>
 <!-- Contact Banner end -->
 <!-- Contact start -->
 <section class="contact">
     <div class="container">
         <div class="row">
             <div class="col">
                 <div class="contact-heading">
                     <h1>Contact us</h1>
                     <h3>Get in touch</h3>
                 </div>
             </div>
         </div>
         <div class="row ">
             <div class="col-md-4">
                 <div class="content">

                     <h5> Don't be shy</h5>
                     <p>
                         Feel free to get in touch with us, Have questions or ready to plan your next trip? Reach out to us!
                     </p>
                     <p class="text">
                         <i class="bi bi-phone"></i> +971 585880646,0585880646
                     </p>
                     <p class="text">
                         <i class="bi bi-envelope"></i> Bin.ali@detailstravels.com
                     </p>
                     <p class="text">
                         <i class="bi bi-envelope"></i> Info@detailstravels.com
                     </p>
                     <p class="text">
                         <i class="bi bi-browser-chrome"></i> www.detailstravels.com
                     </p>
                     <p class="text">
                         <i class="bi bi-globe-americas"></i> Madina Zayed Commercial Tower,1st Floor , Max home business Center, office number 113.
                     </p>
                 </div>
             </div>
             <div class="col-md-8">
                 <div class="contact-form">
                     <form method="POST">
                         <div class="row">
                             <div class="col">
                                 <div class="form-floating mb-3">
                                     <input type="name" name="name" class="form-control" id="floatinName" placeholder="Name" required>
                                     <label for="floatinName">Name *</label>
                                 </div>
                             </div>
                             <div class="col">

                                 <div class="form-floating mb-3">
                                     <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                     <label for="floatingInput">Email address *</label>
                                 </div>

                             </div>

                         </div>
                         <div class="row">
                             <div class="col">
                                 <div class="form-floating mb-3">
                                     <input type="number" name="mobile" class="form-control" id="floatingNumber" placeholder="Phone number" required>
                                     <label for="floatingNumber">Phone *</label>
                                 </div>
                             </div>
                             <div class="col">
                                 <div class="form-floating mb-3">
                                     <select class="form-select" name="service" id="floatingSelect" aria-label="Floating label select example">
                                         <option selected>Select service</option>
                                         <option value="Vist visa">Vist visa</option>
                                         <option value="Umrah package">Umrah package</option>
                                         <option value="Holiday package">Holiday package</option>
                                         <option value="Ticket Reservation">Ticket Reservation</option>
                                         <option value="Worldwide Transportation">Worldwide Transportation</option>
                                         <option value="Hotel Booking">Hotel Booking</option>
                                     </select>
                                     <label for="floatingSelect">Services</label>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col">
                                 <div class="form-floating mb-3">
                                     <textarea class="form-control" name="comment" rows="5" cols="50" maxlength="400" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
                                     <label for="floatingTextarea">Comments *</label>
                                 </div>
                             </div>
                         </div>
                         <input class="message-send-btn" value="Send message" name="send" type="submit">
                     </form>
                 </div>
             </div>
         </div>



 </section>
 <!-- Contact start -->

 <?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['send'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $service = $_POST['service'];
        $comment = $_POST['comment'];


        //Load Composer's autoloader
        require './PHPMailer/PHPMailer.php';
        require './PHPMailer/Exception.php';
        require './PHPMailer/SMTP.php';


        require './classes/config.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = config::SMTP_HOST;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = config::SMTP_USER;                     //SMTP username
            $mail->Password   = config::SMTP_PASSWORD;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = config::SMTP_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            // kcdj vfli vmuc gtwi
            //Recipients
            $mail->From = $email;
            $mail->addAddress('ali.cosmicvent@gmail.com');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Contact us form';
            $mail->Body    = "Name: $name <br> Email $email <br> Mobile: $mobile <br> Service: $service <br> Comment: $comment";
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo '<div class="alert alert-success" id="success-message" role="alert">
  Message has been sent successfully.
</div>';
        } catch (Exception $e) {
            echo '<div class="alert alert-danger" role="alert">
 Message could not send
</div>';
        }
    };



    ?>
 <?php require('./partials/footer.php') ?>