<?php



//Adding isset button function on submit button.
if(isset($_POST["submit"])) {

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$your_msg=$_POST['your_msg'];

$to = 'email.com';
$headers = "email.com";
$message = "name = $name \n\n email = $email \n\n phone = $phone \n\n subject = $subject \n\n your_msg = $your_msg" ;

if (mail($to, $message, $headers)){

  echo "<script>alert('Thank You For Your Message);</script>";
}
else {
  echo "email does not sent";
}

}
?>


<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Font Awesome Min CSS -->
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!-- Mean Menu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Progress Circle Min CSS -->
        <link rel="stylesheet" href="assets/css/progresscircle.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">

        <title>form details</title>

        <link rel="icon" type="image/png" href="assets/img/fuerte-logo1.png">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

 
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Form Details</h2>
                                    </div>
            </div>

            <div class="dot-shape1"><img src="assets/img/shape/dot1.png" alt="image"></div>
            <div class="dot-shape2"><img src="assets/img/shape/dot2.png" alt="image"></div>
            <div class="dot-shape3"><img src="assets/img/shape/dot3.png" alt="image"></div>
            <div class="dot-shape4"><img src="assets/img/shape/dot4.png" alt="image"></div>
            <div class="dot-shape5"><img src="assets/img/shape/dot5.png" alt="image"></div>
            <div class="dot-shape6"><img src="assets/img/shape/dot6.png" alt="image"></div>
            <div class="dot-shape7"><img src="assets/img/shape/dot1.png" alt="image"></div>
            <div class="shape16"><img src="assets/img/shape/13.svg" alt="image"></div>
            <div class="shape17"><img src="assets/img/shape/14.svg" alt="image"></div>
            <div class="shape18"><img src="assets/img/shape/15.png" alt="image"></div>
            <div class="shape19"><img src="assets/img/shape/16.png" alt="image"></div>
            <div class="shape20"><img src="assets/img/shape/14.svg" alt="image"></div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Area -->
        <section class="contact-area ptb-110">
            <div class="container">
               
                    <div class="col-lg-7 col-md-12">
                        <div class="contact-form">
                          

                            <form id="contactForm" enctype="multipart/form-data" method="post" action="bannerscon.php">
                             <!--   <div class="row">-->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name" style="box-shadow: 1px 2px 1px 2px grey;">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div><br>
                              <!--  <div class="row">-->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <!-- <label for="Form-email3" style="padding-left:10px;"> <h5><b>Contact no </b></h5></label>-->
                                              <input type="text" class="form-control" id="phonecode" list="phcode" name="phonecode" data-toggle="dropdown" style="box-shadow: 1px 2px 1px 2px grey;"  placeholder="country code"  required autocomplete="off" >

                                <datalist id="phcode">
                                   <option data-countryCode="DZ" value="+213">Algeria (+213)</option>
                                   <option data-countryCode="AD" value="+376">Andorra (+376)</option>
                                   <option data-countryCode="AO" value="+244">Angola (+244)</option>
                                   <option data-countryCode="AI" value="+1264">Anguilla (+1264)</option>
                                   <option data-countryCode="AG" value="+1268">Antigua &amp; Barbuda (+1268)</option>
                                   <option data-countryCode="AR" value="+54">Argentina (+54)</option>
                                   <option data-countryCode="AM" value="+374">Armenia (+374)</option>
                                   <option data-countryCode="AW" value="+297">Aruba (+297)</option>
                                   <option data-countryCode="AU" value="+61">Australia (+61)</option>
                                   <option data-countryCode="AT" value="+43">Austria (+43)</option>
                                   <option data-countryCode="AZ" value="+994">Azerbaijan (+994)</option>
                                   <option data-countryCode="BS" value="+1242">Bahamas (+1242)</option>
                                   <option data-countryCode="BH" value="+973">Bahrain (+973)</option>
                                   <option data-countryCode="BD" value="+880">Bangladesh (+880)</option>
                                   <option data-countryCode="BB" value="+1246">Barbados (+1246)</option>
                                   <option data-countryCode="BY" value="+375">Belarus (+375)</option>
                                   <option data-countryCode="BE" value="+32">Belgium (+32)</option>
                                   <option data-countryCode="BZ" value="+501">Belize (+501)</option>
                                   <option data-countryCode="BJ" value="+229">Benin (+229)</option>
                                   <option data-countryCode="BM" value="+1441">Bermuda (+1441)</option>
                                   <option data-countryCode="BT" value="+975">Bhutan (+975)</option>
                                   <option data-countryCode="BO" value="+591">Bolivia (+591)</option>
                                   <option data-countryCode="BA" value="+387">Bosnia Herzegovina (+387)</option>
                                   <option data-countryCode="BW" value="+267">Botswana (+267)</option>
                                   <option data-countryCode="BR" value="+55">Brazil (+55)</option>
                                   <option data-countryCode="BN" value="+673">Brunei (+673)</option>
                                   <option data-countryCode="BG" value="+359">Bulgaria (+359)</option>
                                   <option data-countryCode="BF" value="+226">Burkina Faso (+226)</option>
                                   <option data-countryCode="BI" value="+257">Burundi (+257)</option>
                                   <option data-countryCode="KH" value="+855">Cambodia (+855)</option>
                                   <option data-countryCode="CM" value="+237">Cameroon (+237)</option>
                                   <option data-countryCode="CA" value="+1">Canada (+1)</option>
                                   <option data-countryCode="CV" value="+238">Cape Verde Islands (+238)</option>
                                   <option data-countryCode="KY" value="+1345">Cayman Islands (+1345)</option>
                                   <option data-countryCode="CF" value="+236">Central African Republic (+236)</option>
                                   <option data-countryCode="CL" value="+56">Chile (+56)</option>
                                   <option data-countryCode="CN" value="+86">China (+86)</option>
                                   <option data-countryCode="CO" value="+57">Colombia (+57)</option>
                                   <option data-countryCode="KM" value="+269">Comoros (+269)</option>
                                   <option data-countryCode="CG" value="+242">Congo (+242)</option>
                                   <option data-countryCode="CK" value="+682">Cook Islands (+682)</option>
                                   <option data-countryCode="CR" value="+506">Costa Rica (+506)</option>
                                   <option data-countryCode="HR" value="+385">Croatia (+385)</option>
                                   <option data-countryCode="CU" value="+53">Cuba (+53)</option>
                                   <option data-countryCode="CY" value="+90392">Cyprus North (+90392)</option>
                                   <option data-countryCode="CY" value="+357">Cyprus South (+357)</option>
                                   <option data-countryCode="CZ" value="+42">Czech Republic (+42)</option>
                                   <option data-countryCode="DK" value="+45">Denmark (+45)</option>
                                   <option data-countryCode="DJ" value="+253">Djibouti (+253)</option>
                                   <option data-countryCode="DM" value="+1809">Dominica (+1809)</option>
                                   <option data-countryCode="DO" value="+1809">Dominican Republic (+1809)</option>
                                   <option data-countryCode="EC" value="+593">Ecuador (+593)</option>
                                   <option data-countryCode="EG" value="+20">Egypt (+20)</option>
                                   <option data-countryCode="SV" value="+503">El Salvador (+503)</option>
                                   <option data-countryCode="GQ" value="+240">Equatorial Guinea (+240)</option>
                                   <option data-countryCode="ER" value="+291">Eritrea (+291)</option>
                                   <option data-countryCode="EE" value="+372">Estonia (+372)</option>
                                   <option data-countryCode="ET" value="+251">Ethiopia (+251)</option>
                                   <option data-countryCode="FK" value="+500">Falkland Islands (+500)</option>
                                   <option data-countryCode="FO" value="+298">Faroe Islands (+298)</option>
                                   <option data-countryCode="FJ" value="+679">Fiji (+679)</option>
                                   <option data-countryCode="FI" value="+358">Finland (+358)</option>
                                   <option data-countryCode="FR" value="+33">France (+33)</option>
                                   <option data-countryCode="GF" value="+594">French Guiana (+594)</option>
                                   <option data-countryCode="PF" value="+689">French Polynesia (+689)</option>
                                   <option data-countryCode="GA" value="+241">Gabon (+241)</option>
                                   <option data-countryCode="GM" value="+220">Gambia (+220)</option>
                                   <option data-countryCode="GE" value="+7880">Georgia (+7880)</option>
                                   <option data-countryCode="DE" value="+49">Germany (+49)</option>
                                   <option data-countryCode="GH" value="+233">Ghana (+233)</option>
                                   <option data-countryCode="GI" value="+350">Gibraltar (+350)</option>
                                   <option data-countryCode="GR" value="+30">Greece (+30)</option>
                                   <option data-countryCode="GL" value="+299">Greenland (+299)</option>
                                   <option data-countryCode="GD" value="+1473">Grenada (+1473)</option>
                                   <option data-countryCode="GP" value="+590">Guadeloupe (+590)</option>
                                   <option data-countryCode="GU" value="+671">Guam (+671)</option>
                                   <option data-countryCode="GT" value="+502">Guatemala (+502)</option>
                                   <option data-countryCode="GN" value="+224">Guinea (+224)</option>
                                   <option data-countryCode="GW" value="+245">Guinea - Bissau (+245)</option>
                                   <option data-countryCode="GY" value="+592">Guyana (+592)</option>
                                   <option data-countryCode="HT" value="+509">Haiti (+509)</option>
                                   <option data-countryCode="HN" value="+504">Honduras (+504)</option>
                                   <option data-countryCode="HK" value="+852">Hong Kong (+852)</option>
                                   <option data-countryCode="HU" value="+36">Hungary (+36)</option>
                                   <option data-countryCode="IS" value="+354">Iceland (+354)</option>
                                   <option data-countryCode="IN" value="+91">India (+91)</option>
                                   <option data-countryCode="ID" value="+62">Indonesia (+62)</option>
                                   <option data-countryCode="IR" value="+98">Iran (+98)</option>
                                   <option data-countryCode="IQ" value="+964">Iraq (+964)</option>
                                   <option data-countryCode="IE" value="+353">Ireland (+353)</option>
                                   <option data-countryCode="IL" value="+972">Israel (+972)</option>
                                   <option data-countryCode="IT" value="+39">Italy (+39)</option>
                                   <option data-countryCode="JM" value="+1876">Jamaica (+1876)</option>
                                   <option data-countryCode="JP" value="+81">Japan (+81)</option>
                                   <option data-countryCode="JO" value="+962">Jordan (+962)</option>
                                   <option data-countryCode="KZ" value="+7">Kazakhstan (+7)</option>
                                   <option data-countryCode="KE" value="+254">Kenya (+254)</option>
                                   <option data-countryCode="KI" value="+686">Kiribati (+686)</option>
                                   <option data-countryCode="KP" value="+850">Korea North (+850)</option>
                                   <option data-countryCode="KR" value="+82">Korea South (+82)</option>
                                   <option data-countryCode="KW" value="+965">Kuwait (+965)</option>
                                   <option data-countryCode="KG" value="+996">Kyrgyzstan (+996)</option>
                                   <option data-countryCode="LA" value="+856">Laos (+856)</option>
                                   <option data-countryCode="LV" value="+371">Latvia (+371)</option>
                                   <option data-countryCode="LB" value="+961">Lebanon (+961)</option>
                                   <option data-countryCode="LS" value="+266">Lesotho (+266)</option>
                                   <option data-countryCode="LR" value="+231">Liberia (+231)</option>
                                   <option data-countryCode="LY" value="+218">Libya (+218)</option>
                                   <option data-countryCode="LI" value="+417">Liechtenstein (+417)</option>
                                   <option data-countryCode="LT" value="+370">Lithuania (+370)</option>
                                   <option data-countryCode="LU" value="+352">Luxembourg (+352)</option>
                                   <option data-countryCode="MO" value="+853">Macao (+853)</option>
                                   <option data-countryCode="MK" value="+389">Macedonia (+389)</option>
                                   <option data-countryCode="MG" value="+261">Madagascar (+261)</option>
                                   <option data-countryCode="MW" value="+265">Malawi (+265)</option>
                                   <option data-countryCode="MY" value="+60">Malaysia (+60)</option>
                                   <option data-countryCode="MV" value="+960">Maldives (+960)</option>
                                   <option data-countryCode="ML" value="+223">Mali (+223)</option>
                                   <option data-countryCode="MT" value="+356">Malta (+356)</option>
                                   <option data-countryCode="MH" value="+692">Marshall Islands (+692)</option>
                                   <option data-countryCode="MQ" value="+596">Martinique (+596)</option>
                                   <option data-countryCode="MR" value="+222">Mauritania (+222)</option>
                                   <option data-countryCode="YT" value="+269">Mayotte (+269)</option>
                                   <option data-countryCode="MX" value="+52">Mexico (+52)</option>
                                   <option data-countryCode="FM" value="+691">Micronesia (+691)</option>
                                   <option data-countryCode="MD" value="+373">Moldova (+373)</option>
                                   <option data-countryCode="MC" value="+377">Monaco (+377)</option>
                                   <option data-countryCode="MN" value="+976">Mongolia (+976)</option>
                                   <option data-countryCode="MS" value="+1664">Montserrat (+1664)</option>
                                   <option data-countryCode="MA" value="+212">Morocco (+212)</option>
                                   <option data-countryCode="MZ" value="+258">Mozambique (+258)</option>
                                   <option data-countryCode="MN" value="+95">Myanmar (+95)</option>
                                   <option data-countryCode="NA" value="+264">Namibia (+264)</option>
                                   <option data-countryCode="NR" value="+674">Nauru (+674)</option>
                                   <option data-countryCode="NP" value="+977">Nepal (+977)</option>
                                   <option data-countryCode="NL" value="+31">Netherlands (+31)</option>
                                   <option data-countryCode="NC" value="+687">New Caledonia (+687)</option>
                                   <option data-countryCode="NZ" value="+64">New Zealand (+64)</option>
                                   <option data-countryCode="NI" value="+505">Nicaragua (+505)</option>
                                   <option data-countryCode="NE" value="+227">Niger (+227)</option>
                                   <option data-countryCode="NG" value="+234">Nigeria (+234)</option>
                                   <option data-countryCode="NU" value="+683">Niue (+683)</option>
                                   <option data-countryCode="NF" value="+672">Norfolk Islands (+672)</option>
                                   <option data-countryCode="NP" value="+670">Northern Marianas (+670)</option>
                                   <option data-countryCode="NO" value="+47">Norway (+47)</option>
                                   <option data-countryCode="OM" value="+968">Oman (+968)</option>
                                   <option data-countryCode="PW" value="+680">Palau (+680)</option>
                                   <option data-countryCode="PA" value="+507">Panama (+507)</option>
                                   <option data-countryCode="PG" value="+675">Papua New Guinea (+675)</option>
                                   <option data-countryCode="PY" value="+595">Paraguay (+595)</option>
                                   <option data-countryCode="PE" value="+51">Peru (+51)</option>
                                   <option data-countryCode="PH" value="+63">Philippines (+63)</option>
                                   <option data-countryCode="PL" value="+48">Poland (+48)</option>
                                   <option data-countryCode="PT" value="+351">Portugal (+351)</option>
                                   <option data-countryCode="PR" value="+1787">Puerto Rico (+1787)</option>
                                   <option data-countryCode="QA" value="+974">Qatar (+974)</option>
                                   <option data-countryCode="RE" value="+262">Reunion (+262)</option>
                                   <option data-countryCode="RO" value="+40">Romania (+40)</option>
                                   <option data-countryCode="RU" value="+7">Russia (+7)</option>
                                   <option data-countryCode="RW" value="+250">Rwanda (+250)</option>
                                   <option data-countryCode="SM" value="+378">San Marino (+378)</option>
                                   <option data-countryCode="ST" value="+239">Sao Tome &amp; Principe (+239)</option>
                                   <option data-countryCode="SA" value="+966">Saudi Arabia (+966)</option>
                                   <option data-countryCode="SN" value="+221">Senegal (+221)</option>
                                   <option data-countryCode="CS" value="+381">Serbia (+381)</option>
                                   <option data-countryCode="SC" value="+248">Seychelles (+248)</option>
                                   <option data-countryCode="SL" value="+232">Sierra Leone (+232)</option>
                                   <option data-countryCode="SG" value="+65">Singapore (+65)</option>
                                   <option data-countryCode="SK" value="+421">Slovak Republic (+421)</option>
                                   <option data-countryCode="SI" value="+386">Slovenia (+386)</option>
                                   <option data-countryCode="SB" value="+677">Solomon Islands (+677)</option>
                                   <option data-countryCode="SO" value="+252">Somalia (+252)</option>
                                   <option data-countryCode="ZA" value="+27">South Africa (+27)</option>
                                   <option data-countryCode="ES" value="+34">Spain (+34)</option>
                                   <option data-countryCode="LK" value="+94">Sri Lanka (+94)</option>
                                   <option data-countryCode="SH" value="+290">St. Helena (+290)</option>
                                   <option data-countryCode="KN" value="+1869">St. Kitts (+1869)</option>
                                   <option data-countryCode="SC" value="+1758">St. Lucia (+1758)</option>
                                   <option data-countryCode="SD" value="+249">Sudan (+249)</option>
                                   <option data-countryCode="SR" value="+597">Suriname (+597)</option>
                                   <option data-countryCode="SZ" value="+268">Swaziland (+268)</option>
                                   <option data-countryCode="SE" value="+46">Sweden (+46)</option>
                                   <option data-countryCode="CH" value="+41">Switzerland (+41)</option>
                                   <option data-countryCode="SI" value="+963">Syria (+963)</option>
                                   <option data-countryCode="TW" value="+886">Taiwan (+886)</option>
                                   <option data-countryCode="TJ" value="+7">Tajikstan (+7)</option>
                                   <option data-countryCode="TH" value="+66">Thailand (+66)</option>
                                   <option data-countryCode="TG" value="+228">Togo (+228)</option>
                                   <option data-countryCode="TO" value="+676">Tonga (+676)</option>
                                   <option data-countryCode="TT" value="+1868">Trinidad &amp; Tobago (+1868)</option>
                                   <option data-countryCode="TN" value="+216">Tunisia (+216)</option>
                                   <option data-countryCode="TR" value="+90">Turkey (+90)</option>
                                   <option data-countryCode="TM" value="+7">Turkmenistan (+7)</option>
                                   <option data-countryCode="TM" value="+993">Turkmenistan (+993)</option>
                                   <option data-countryCode="TC" value="+1649">Turks &amp; Caicos Islands (+1649)</option>
                                   <option data-countryCode="TV" value="+688">Tuvalu (+688)</option>
                                   <option data-countryCode="UG" value="+256">Uganda (+256)</option>
                                   <option data-countryCode="GB" value="+44">UK (+44)</option>
                                   <option data-countryCode="UA" value="+380">Ukraine (+380)</option>
                                   <option data-countryCode="AE" value="+971">United Arab Emirates (+971)</option>
                                   <option data-countryCode="UY" value="+598">Uruguay (+598)</option>
                                   <option data-countryCode="US" value="+1">USA (+1)</option> 
                                   <option data-countryCode="UZ" value="+7">Uzbekistan (+7)</option>
                                   <option data-countryCode="VU" value="+678">Vanuatu (+678)</option>
                                   <option data-countryCode="VA" value="+379">Vatican City (+379)</option>
                                   <option data-countryCode="VE" value="+58">Venezuela (+58)</option>
                                   <option data-countryCode="VN" value="+84">Vietnam (+84)</option>
                                   <option data-countryCode="VG" value="+84">Virgin Islands - British (+1284)</option>
                                   <option data-countryCode="VI" value="+84">Virgin Islands - US (+1340)</option>
                                   <option data-countryCode="WF" value="+681">Wallis &amp; Futuna (+681)</option>
                                   <option data-countryCode="YE" value="+969">Yemen (North)(+969)</option>
                                   <option data-countryCode="YE" value="+967">Yemen (South)(+967)</option>
                                   <option data-countryCode="ZM" value="+260">Zambia (+260)</option>
                                   <option data-countryCode="ZW" value="+263">Zimbabwe (+263)</option>
 
 
                               </datalist>
                              <br> 
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" required data-error="Please enter your number" class="form-control" style="box-shadow: 1px 2px 1px 2px grey;" placeholder="Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="form-email3"   autocomplete="off" style="box-shadow: 1px 2px 1px 2px grey;" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                        <br>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="city" id="city" required data-error="Please enter your city" class="form-control" style="box-shadow: 1px 2px 1px 2px grey;" placeholder="City">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                         <br>           <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" id="address" class="form-control" required data-error="Please enter your address" style="box-shadow: 1px 2px 1px 2px grey;" placeholder="Address">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                    <br>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input list="country" name="country" id="datalist-input" class="form-control" style="box-shadow: 1px 2px 1px 2px grey;" placeholder="select country"/>
                                           <datalist id="country">
                                        <option value="Afghanistan" />
                                        <option value="Albania" />
                                        <option value="Algeria" />
                                        <option value="American Samoa" />
                                        <option value="Andorra" />
                                        <option value="Angola" />
                                        <option value="Anguilla" />
                                        <option value="Antarctica" />
                                        <option value="Antigua and Barbuda" />
                                        <option value="Argentina" />
                                        <option value="Armenia" />
                                        <option value="Aruba" />
                                        <option value="Australia" />
                                        <option value="Austria" />
                                        <option value="Azerbaijan" />
                                        <option value="Bahamas" />
                                        <option value="Bahrain" />
                                        <option value="Bangladesh" />
                                        <option value="Barbados" />
                                        <option value="Belarus" />
                                        <option value="Belgium" />
                                        <option value="Belize" />
                                        <option value="Benin" />
                                        <option value="Bermuda" />
                                        <option value="Bhutan" />
                                        <option value="Bolivia" />
                                        <option value="Bosnia and Herzegovina" />
                                        <option value="Botswana" />
                                        <option value="Bouvet Island" />
                                        <option value="Brazil" />
                                        <option value="British Indian Ocean Territory" />
                                        <option value="Brunei Darussalam" />
                                        <option value="Bulgaria" />
                                        <option value="Burkina Faso" />
                                        <option value="Burundi" />
                                        <option value="Cambodia" />
                                        <option value="Cameroon" />
                                        <option value="Canada" />
                                        <option value="Cape Verde" />
                                        <option value="Cayman Islands" />
                                        <option value="Central African Republic" />
                                        <option value="Chad" />
                                        <option value="Chile" />
                                        <option value="China" />
                                        <option value="Christmas Island" />
                                        <option value="Cocos (Keeling) Islands" />
                                        <option value="Colombia" />
                                        <option value="Comoros" />
                                        <option value="Congo" />
                                        <option value="Congo, The Democratic Republic of The" />
                                        <option value="Cook Islands" />
                                        <option value="Costa Rica" />
                                        <option value="Cote D'ivoire" />
                                        <option value="Croatia" />
                                        <option value="Cuba" />
                                        <option value="Cyprus" />
                                        <option value="Czech Republic" />
                                        <option value="Denmark" />
                                        <option value="Djibouti" />
                                        <option value="Dominica" />
                                        <option value="Dominican Republic" />
                                        <option value="Ecuador" />
                                        <option value="Egypt" />
                                        <option value="El Salvador" />
                                        <option value="Equatorial Guinea" />
                                        <option value="Eritrea" />
                                        <option value="Estonia" />
                                        <option value="Ethiopia" />
                                        <option value="Falkland Islands (Malvinas)" />
                                        <option value="Faroe Islands" />
                                        <option value="Fiji" />
                                        <option value="Finland" />
                                        <option value="France" />
                                        <option value="French Guiana" />
                                        <option value="French Polynesia" />
                                        <option value="French Southern Territories" />
                                        <option value="Gabon" />
                                        <option value="Gambia" />
                                        <option value="Georgia" />
                                        <option value="Germany" />
                                        <option value="Ghana" />
                                        <option value="Gibraltar" />
                                        <option value="Greece" />
                                        <option value="Greenland" />
                                        <option value="Grenada" />
                                        <option value="Guadeloupe" />
                                        <option value="Guam" />
                                        <option value="Guatemala" />
                                        <option value="Guinea" />
                                        <option value="Guinea-bissau" />
                                        <option value="Guyana" />
                                        <option value="Haiti" />
                                        <option value="Heard Island and Mcdonald Islands" />
                                        <option value="Holy See (Vatican City State)" />
                                        <option value="Honduras" />
                                        <option value="Hong Kong" />
                                        <option value="Hungary" />
                                        <option value="Iceland" />
                                        <option value="India" />
                                        <option value="Indonesia" />
                                        <option value="Iran, Islamic Republic of" />
                                        <option value="Iraq" />
                                        <option value="Ireland" />
                                        <option value="Israel" />
                                        <option value="Italy" />
                                        <option value="Jamaica" />
                                        <option value="Japan" />
                                        <option value="Jordan" />
                                        <option value="Kazakhstan" />
                                        <option value="Kenya" />
                                        <option value="Kiribati" />
                                        <option value="Korea, Democratic People's Republic of" />
                                        <option value="Korea, Republic of" />
                                        <option value="Kuwait" />
                                        <option value="Kyrgyzstan" />
                                        <option value="Lao People's Democratic Republic" />
                                        <option value="Latvia" />
                                        <option value="Lebanon" />
                                        <option value="Lesotho" />
                                        <option value="Liberia" />
                                        <option value="Libyan Arab Jamahiriya" />
                                        <option value="Liechtenstein" />
                                        <option value="Lithuania" />
                                        <option value="Luxembourg" />
                                        <option value="Macao" />
                                        <option value="Macedonia, The Former Yugoslav Republic of" />
                                        <option value="Madagascar" />
                                        <option value="Malawi" />
                                        <option value="Malaysia" />
                                        <option value="Maldives" />
                                        <option value="Mali" />
                                        <option value="Malta" />
                                        <option value="Marshall Islands" />
                                        <option value="Martinique" />
                                        <option value="Mauritania" />
                                        <option value="Mauritius" />
                                        <option value="Mayotte" />
                                        <option value="Mexico" />
                                        <option value="Micronesia, Federated States of" />
                                        <option value="Moldova, Republic of" />
                                        <option value="Monaco" />
                                        <option value="Mongolia" />
                                        <option value="Montserrat" />
                                        <option value="Morocco" />
                                        <option value="Mozambique" />
                                        <option value="Myanmar" />
                                        <option value="Namibia" />
                                        <option value="Nauru" />
                                        <option value="Nepal" />
                                        <option value="Netherlands" />
                                        <option value="Netherlands Antilles" />
                                        <option value="New Caledonia" />
                                        <option value="New Zealand" />
                                        <option value="Nicaragua" />
                                        <option value="Niger" />
                                        <option value="Nigeria" />
                                        <option value="Niue" />
                                        <option value="Norfolk Island" />
                                        <option value="Northern Mariana Islands" />
                                        <option value="Norway" />
                                        <option value="Oman" />
                                        <option value="Pakistan" />
                                        <option value="Palau" />
                                        <option value="Palestinian Territory, Occupied" />
                                        <option value="Panama" />
                                        <option value="Papua New Guinea" />
                                        <option value="Paraguay" />
                                        <option value="Peru" />
                                        <option value="Philippines" />
                                        <option value="Pitcairn" />
                                        <option value="Poland" />
                                        <option value="Portugal" />
                                        <option value="Puerto Rico" />
                                        <option value="Qatar" />
                                        <option value="Reunion" />
                                        <option value="Romania" />
                                        <option value="Russian Federation" />
                                        <option value="Rwanda" />
                                        <option value="Saint Helena" />
                                        <option value="Saint Kitts and Nevis" />
                                        <option value="Saint Lucia" />
                                        <option value="Saint Pierre and Miquelon" />
                                        <option value="Saint Vincent and The Grenadines" />
                                        <option value="Samoa" />
                                        <option value="San Marino" />
                                        <option value="Sao Tome and Principe" />
                                        <option value="Saudi Arabia" />
                                        <option value="Senegal" />
                                        <option value="Serbia and Montenegro" />
                                        <option value="Seychelles" />
                                        <option value="Sierra Leone" />
                                        <option value="Singapore" />
                                        <option value="Slovakia" />
                                        <option value="Slovenia" />
                                        <option value="Solomon Islands" />
                                        <option value="Somalia" />
                                        <option value="South Africa" />
                                        <option value="South Georgia and The South Sandwich Islands" />
                                        <option value="Spain" />
                                        <option value="Sri Lanka" />
                                        <option value="Sudan" />
                                        <option value="Suriname" />
                                        <option value="Svalbard and Jan Mayen" />
                                        <option value="Swaziland" />
                                        <option value="Sweden" />
                                        <option value="Switzerland" />
                                        <option value="Syrian Arab Republic" />
                                        <option value="Taiwan, Province of China" />
                                        <option value="Tajikistan" />
                                        <option value="Tanzania, United Republic of" />
                                        <option value="Thailand" />
                                        <option value="Timor-leste" />
                                        <option value="Togo" />
                                        <option value="Tokelau" />
                                        <option value="Tonga" />
                                        <option value="Trinidad and Tobago" />
                                        <option value="Tunisia" />
                                        <option value="Turkey" />
                                        <option value="Turkmenistan" />
                                        <option value="Turks and Caicos Islands" />
                                        <option value="Tuvalu" />
                                        <option value="Uganda" />
                                        <option value="Ukraine" />
                                        <option value="United Arab Emirates" />
                                        <option value="United Kingdom" />
                                        <option value="United States" />
                                        <option value="United States Minor Outlying Islands" />
                                        <option value="Uruguay" />
                                        <option value="Uzbekistan" />
                                        <option value="Vanuatu" />
                                        <option value="Venezuela" />
                                        <option value="Viet Nam" />
                                        <option value="Virgin Islands, British" />
                                        <option value="Virgin Islands, U.S" />
                                        <option value="Wallis and Futuna" />
                                        <option value="Western Sahara" />
                                        <option value="Yemen" />
                                        <option value="Zambia" />
                                        <option value="Zimbabwe" />
                                        </datalist></div>
        
         
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                         <br>
                         <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="organization" id="organization" required data-error="Please enter your organization" class="form-control" style="box-shadow: 1px 2px 1px 2px grey; background-color:white" placeholder="Organization/Company">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                    <br>
                                   
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                           <input type="URL" id="Form-email3" class="form-control" name="website" placeholder="website" style="box-shadow: 1px 2px 1px 2px grey; background-color:white">
                            
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                        <br>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                           
                            <label for="Form-email3"> <h5><b>Categories</b></h5></label><br> 
                                           <input type="radio" name="categories" value="Social Media - 1080 * 1080" style="padding-left:300px;"> Social Media - 1080 * 1080 <br>
            <input type="radio" name="categories" value="Facebook post - 1080 * 1080" style="padding-left:300px;"> Facebook post - 1080 * 1080 <br>
            <input type="radio" name="categories" value="Instagram - 1080 * 1080" style="padding-left:300px;"> Instagram - 1080 * 1080 <br>
            <input type="radio" name="categories" value="Facebook cover - 640 * 360" style="padding-left:300px;"> Facebook cover - 640 * 360 <br>
            <input type="radio" name="categories" value="Regular image - 500 * 500" style="padding-left:300px;"> Regular image - 500 * 500 <br>
            <input type="radio" name="categories" value="Festival image - 500 * 500" style="padding-left:300px;"> Festival image - 500 * 500 <br>
            <input type="radio" name="categories" value="Twitter cover - 1500 * 500" style="padding-left:300px;"> Twitter cover - 1500 * 500<br>
            <input type="radio" name="categories" value="Pinterest cover - 217 * 146" style="padding-left:300px;"> Pinterest cover - 217 * 146 <br>
            <input type="radio" name="categories" value="Hoding (as per requirement)" style="padding-left:300px;"> Hoding (as per requirement) <br>
            <input type="radio" name="categories" value="Standee (as per requirement)" style="padding-left:300px;"> Standee (as per requirement) <br>
            <input type="radio" name="categories" value="Pamphlet (A4)" style="padding-left:300px;"> Pamphlet (A4)  <br>
            <input type="radio" name="categories" value="brochure (A4)" style="padding-left:300px;"> brochure (A4) <br>
            <input type="radio" name="categories" value="flyer (A4)" style="padding-left:300px;"> flyer (A4) <br>
            
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                    <br>
                                <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                           <input type="URL" id="Form-email3" class="form-control" name="concept" style="box-shadow: 1px 2px 1px 2px grey;" placeholder="Main concepts of your banner">
                            
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                      
                        <br>    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                           <input type="" id="Form-email3" class="form-control" name="idea" style="box-shadow: 1px 2px 1px 2px grey;" placeholder="Describe any ideas you have in mind for your banner design">
                            
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                        <br>    
                        <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                           <input type="" id="Form-email3" class="form-control" name="comment" style="box-shadow: 1px 2px 1px 2px grey;" placeholder="Any additional comments">
                            
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                        <br>    
                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="Form-email3"> <h5><b>How many concepts or sample do you want to receive</b></h5></label><br> 
                               
                                           
                                           <input type="radio" name="sample" value="1" style="padding-left:300px;"> 1 <br>
            <input type="radio" name="sample" value="2" style="padding-left:300px;"> 2 <br>
            <input type="radio" name="sample" value="3" style="padding-left:300px;"> 3 <br>
            <input type="radio" name="sample" value="5" style="padding-left:300px;"> 5 <br>
            <input type="radio" name="sample" value="more" style="padding-left:300px;"> More <br>
                            
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                        <br>   
                        <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                           <label for="text"<h5 style="padding-left:10px;"><b>Attach a file </b></h5></label><br>
                    <input type="file" name="file" id="text" style="padding-left:10px;"> <br><br>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                        <br>    
                      
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                              <!--  </div>-->
                            </form>
                            <!--for row-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            
            <div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
        </section>
        <!-- End Contact Area -->

       
    
       <!-- 
        <div class="go-top"><i class="fas fa-arrow-up"></i><i class="fas fa-arrow-up"></i></div>
        -->
        <!-- jQuery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Popper Min JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Parallax Min JS -->
        <script src="assets/js/parallax.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Mean Menu JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Progress Circle Min JS -->
        <script src="assets/js/progresscircle.min.js"></script>
        <!-- WOW Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- AjaxChimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Map API JS FILES -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApghCIIx9MpQhA768sKXxvR_Okg0SF2k4&callback=initMap"></script>
        <!-- Evolta Map JS -->
        <script src="assets/js/evolta-map.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
    </body>
</html>