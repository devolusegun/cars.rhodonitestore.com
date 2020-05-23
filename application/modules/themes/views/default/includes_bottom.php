    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->

    <script src="<?php echo theme_url();?>/assets/js/bootstrap.min.js"></script>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> <?php echo lang_key('sign_in');?> </h4>

            </div>

            <div class="modal-body">

                <?php
                $fb_enabled = get_settings('autocon_settings','enable_fb_login','No');
                $gplus_enabled = get_settings('autocon_settings','enable_gplus_login','No');
                if($fb_enabled=='Yes' || $gplus_enabled=='Yes'){
                ?>

                <!-- Social Logins-->
                <div style="height: 1px; background-color: #fff; text-align: center">
                  <span style="background-color:#fff; position: relative; top: -12px; font-size:16px;padding:0px 8px;">
                    Login with social account
                  </span>
                </div>
                <div style="text-align:center;">
                    <br>
                    <?php if($fb_enabled=='Yes'){?>
                    <a href="<?php echo site_url('account/newaccount/fb');?>">
                        <img alt="FB" src="<?php echo theme_url();?>/assets/social-icons/facebook_login.png"
                        data-toggle="tooltip" data-placement="top" data-original-title="Login with facebook"/>
                    </a>
                    <?php }?>
                    <?php if($gplus_enabled=='Yes'){?>
                    <a href="<?php echo site_url('account/newaccount/google_plus');?>">
                        <img alt="G Plus" src="<?php echo theme_url();?>/assets/social-icons/google+.png"
                        data-toggle="tooltip" data-placement="top" data-original-title="Login with google"/>
                    </a>
                    <?php }?>
                </div>
                <hr>
                <?php 
                }
                ?>

                <!-- Email Logins-->

                

                <form action="<?php echo site_url('account/login');?>" method="post">

                     <div class="row">

                        <div class="col-sm-3" style="padding-top:7px; font-weight:bold;">

                            <?php echo lang_key('email');?>

                        </div>

                        <div class="col-sm-12">

                            <input type="text" class="form-control" name="useremail" placeholder="" autofocus>

                        </div>

                     </div>

                     <br>

                     <div class="row">

                        <div class="col-sm-3" style="padding-top:7px;font-weight:bold;">

                            <?php echo lang_key('password');?>

                        </div>

                        <div class="col-sm-12">

                            <input type="password" class="form-control" name="password" placeholder="">

                        </div>

                     </div>

                     <?php if(constant("ENVIRONMENT")=='demo'){?>
                      <div class="row">

                        <div class="col-sm-12" style="padding-top:7px;font-weight:bold;">

                            demo user : dealer@webhelios.com pass: 12345

                        </div>
                     </div>
                     <?php }?>
                     
                     <br>

                     <div class="row">

                        <div class="col-sm-12">

                            <button type="submit" class="btn btn-primary pull-left"> <?php echo lang_key('Log On');?></button>
                            <div style="margin-top:8px">
                                <a style="margin:10px 0 0 10px;" href="<?php echo site_url('account/signup');?>"><?php echo lang_key('sign_up');?></a><a style="margin-left:10px;" href="<?php echo site_url('account/recoverpassword');?>"><?php echo lang_key('Forgot Password?');?></a>
                            </div>
                        </div>

                     </div>

                </form>

            </div>

            <div class="modal-footer">

            </div>

        </div>

        <!-- /.modal-content -->

    </div>

    <!-- /.modal-dialog -->
    </div>

    <!-- CODEINE  Was Here *** I MADE PoP-UP for 'List Your Car' Menu Here -->
    <div id="lycModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="lycModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="lycModalLabel"><i class="fa fa-car"></i> How To Sell Your Car </h4>
                </div>
                <div class="modal-body">

                    <!-- Social Logins-->
                    <p dir="ltr"><strong>Tips for Safe Buying &amp; Selling</strong></p>
                    <hr>

                    <div class="col-sm-12" style="height: 1px; background-color: #fff; text-align: center">

                  <!--<span style="background-color:#fff; position: relative; top: -12px; font-size:16px;padding:0px 8px;">
                    Login with email
                  </span>-->
                    </div>

                    <!-- Article on Tips Start Here-->
                    <form action="<?php //echo site_url('account/login');?>" method="post">
                        <p dir="ltr">We take all the necessary precautions to ensure that our platform is a safe place for car sellers and buyers to transact. However, since we are not involved in the actual transactions, we offer these key tips to stay safe.</p>
                        <p dir="ltr">To help us constantly improve your safety and experience, please report any suspicious posts and interactions to us on&nbsp;email&nbsp;<a href="mailto:info@rhodonitestore.com" target="_blank" rel="noopener">info@rhodonitestore.com</a></p>
                        <p dir="ltr"><strong>Safety Tips For Car Buyers</strong></p>
                        <p dir="ltr">1.&nbsp;<u>Communication</u>:</p>
                        <p dir="ltr">*Insist on speaking directly to the seller on the phone. Most online scams are conducted via email or SMS only.</p>
                        <p dir="ltr">*Speak to the seller more than once. Confirm their telephone number so that you can call back with follow up questions.</p>
                        <p dir="ltr">2.&nbsp;<u>Look out for:</u></p>
                        <p dir="ltr">*Vehicles advertised with prices that are significantly below the market value. If the deal sounds too good to be true, it probably is.</p>
                        <p dir="ltr">*Existing restrictions and requirements for importing vehicles when buying from an overseas seller.</p>
                        <p dir="ltr">*The registration plate, car identification and engine numbers match the information in any paperwork or insurance documentation.</p>
                        <p dir="ltr">*Similar advertisements made for the same car elsewhere at a different price, the scammer may have replicated a genuine seller's advertisement and altered the contact details, then lowered the car's price to entice victims.</p>
                        <p dir="ltr">3.&nbsp;<u>Never</u>:</p>
                        <p dir="ltr">*Send money through a wire transfer or mobile banking service to people you do not know or trust.</p>
                        <p dir="ltr">*Send your personal or financial details to a seller.</p>
                        <p dir="ltr">*Agree to go on a test drive in an area you do not know. Insist on meeting in a safe well lit location. Preferably where CCTV is available and agree the route of a test drive beforehand.<br /><br /></p>
                        <p dir="ltr"><strong>Safety Tips For Car Sellers</strong></p>
                        <p dir="ltr"><u>Communication</u>:</p>
                        <p dir="ltr">Insist on speaking directly to the buyer on phone. Most online scams are conducted via email or SMS only.</p>
                        <p dir="ltr"><u>Look out for buyers who:</u></p>
                        <p dir="ltr">*Hurriedly make an offer before inspecting the vehicle, genuine buyers are thorough before making any offer.</p>
                        <p dir="ltr">*Make an offer that is higher than the set price in the pretence that they want to buy quickly. A genuine buyer will always want the best price they can get.</p>
                        <p dir="ltr">*Claim to be agents buying on behalf of someone else or for export.</p>
                        <p dir="ltr">Ask that you pay additional charges like shipping, agent fees or custom charges.</p>
                        <p dir="ltr"><u>Never</u>:</p>
                        <p dir="ltr">*Share your personal details, account details, Mpesa details or banking information.</p>
                        <p dir="ltr">*Share your login credentials.</p>
                        <p dir="ltr">*Reveal the current location of the vehicle.<br /><br /></p>
                        <p dir="ltr"><strong>Closing the Deal;</strong></p>
                        <p dir="ltr">*Know how much you're willing to accept and prepare to negotiate to a minimum price.</p>
                        <p dir="ltr">*Don't take your ad down until you are certain you have received payment from the buyer - it won't cost you anything to have it up longer.</p>
                        <p dir="ltr">*Don't rely on "proof" of payment from the buyer. Check with your bank or other provider that the money has been cleared and you can see the funds in your account before parting with your item.</p>
                        <p dir="ltr">*Only accept cash inside the premises of your bank where potential fakes can be checked or so you do not carry large amounts of cash in public after a sale.</p>
                        <p dir="ltr">*Beware of forged bank cheques. Electronic transfers which can be confirmed by your bank are the safest option. A genuine buyer will never object.</p>
                        <p dir="ltr">*Give the buyer a receipt to confirm you've received their payment.</p>
                        <p dir="ltr">*Insist on a receipt from the buyer confirming delivery of your vehicle.</p>
                        <p dir="ltr"><strong>If you'd like to advertise a vehicle for sale please click below</strong></p>
                        <!-- Article ends here -->
                         <!--<div class="row">
                            <div class="col-sm-3" style="padding-top:7px; font-weight:bold;">
                                Email
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="useremail" placeholder="" autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3" style="padding-top:7px;font-weight:bold;">
                                Password
                            </div>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" name="password" placeholder="">
                            </div>
                        </div>-->
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <a style="margin:10px 0 0 10px;" class="btn btn-primary pull-left" href="<?php echo site_url('account/register');?>">Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


<script type="text/javascript">

jQuery(document).ready(function(){

    jQuery('.view-filters').change(function(){
        var val = jQuery('select[name=view_orderby]').val();
        if(val!='')
        jQuery(this).parent().submit();

    });

});

</script>
<?php 
if(get_settings('autocon_settings','enable_cookie_policy_popup','No')=='Yes'){
    require_once 'eu_cookie_popup.php';     
}
?>

<?php
$ga_tracking_code = get_settings('site_settings','ga_tracking_code','');

if($ga_tracking_code != ''){
    echo $ga_tracking_code;
}

?>