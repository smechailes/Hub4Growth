<div id="templatemo_contact" class="container_wapper">
    <div class="container-fluid">
        <h1>Contact</h1>
        <div class="col-xs-12">
            <!-- <div id="templatemo_contact_map"></div> -->
            <?php include 'inc/map.php'; ?>
        </div>
        <?php $contact=getContactInfo();

   ?>

  <!--  -->
        <div class="col-md-4">
            <h2>Contact Info.</h2>
            <p><?php echo $contact['description']; ?></p>
            <br>
            <p><strong>Email:  </strong><?php echo $contact['email']; ?><br /><strong>Phone:  </strong><?php echo $contact['phone']; ?><br /><strong>Fax:  </strong><?php echo $contact['fax']; ?><br /><strong>Address:  </strong> <?php echo $contact['address']; ?><br/><strong>P.O. Box:  </strong><?php echo $contact['pobox']; ?></p>
            <ul class="list-inline social-link">
           <!--      <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li> -->
                <li>
                    <a href="<?php echo $contact[link]; ?>" title="CIDS Nepal"><i class="fa fa-facebook"></i></a>
                </li>
                <!-- <li>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-github"></i></a>
                </li> -->
           </ul>
        </div>

        <form action="#" method="post" class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                <h2>Send Enquiry</h2>
                </div>
                <div class="col-md-6">
                    <p>Name</p>
                    <input type="text" name="name" id="name" placeholder="Your Name" />
                </div>
                <div class="col-md-6">
                    <p>Email</p>
                    <input type="text" name="email" id="email" placeholder="Your Email" />
                </div>
                <div class="col-md-12">
                    <p>Subject</p>
                    <input type="text" name="subject" id="subject" placeholder="Subject" />
                </div>
                <div class="col-md-12">
                    <p>Message</p>
                    <textarea name="message" id="message"  placeholder="Write your message here..."></textarea>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-offset-6">
                    <button type="submit">Send</button>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="templatemo_footer">
    <div>
        <p id="footer">Copyright &copy; 2015 Hub4Growth</p>
    </div>
</div>
<script src="<?php echo JS_URL; ?>jquery.min.js"></script>
<script src="<?php echo JS_URL; ?>jquery-ui.min.js"></script>
<script src="<?php echo JS_URL; ?>bootstrap.min.js"></script>
<script src="<?php echo JS_URL; ?>jquery.singlePageNav.min.js"></script>
<script src="<?php echo JS_URL; ?>unslider.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?client=AIzaSyDn9aLsmlbuXnPTUxpjzIt4d2HhnBA3vOAAIzaSyDn9aLsmlbuXnPTUxpjzIt4d2HhnBA3vOA&v=3.exp&sensor=false"></script> -->
<!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDn9aLsmlbuXnPTUxpjzIt4d2HhnBA3vOA&callback=initialize">
    </script> -->
    <script type="text/javascript" src="<?php echo JS_URL; ?>templatemo_script.js">
    </script>
<?php //include INC_PATH."/assets/js/templatemo_script.php"; ?>
</body>
</html>
