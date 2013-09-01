<?php

$rand1 = rand(5, 12);
$rand2 = rand(3,11);

$randsum = $rand1 + $rand2;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">



 <head>
  <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="jquery.validate.min.js"></script>
  <script type="text/javascript" src="formguard.js" ></script>
  <script type="text/javascript">
  //<![CDATA[
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
		    // add a custom validator - the exact answer
            $.validator.addMethod(
               "exactomundo",
                function(value, element, rvalue) 
				{
                  if (value == rvalue) return true;
                  else return false; 
                },
                "The answer is <?= $randsum ?>"
             );
		
            //form validation rules
            $("#email-form").validate({
                rules: {
                    FirstName: "required",
                    LastName: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    rsum : {
                        required: true,
                        exactomundo:  <?= $randsum ?>
					},
                    comments: {
                        required: true,
                        minlength: 5
                    },
                },
                messages: {
                    FirstName: "Please enter your First Name",
                    LastName: "Please enter your Last Name",
                    comments: {
                        required: "Please do not send empty message",
                        minlength: "Your email must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address",
                    rsum: "Please type the correct answer: <?= $randsum ?>",
                },
                submitHandler: function(form) 
				{
                  formProtect();
                  form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) 
	{
      JQUERY4U.UTIL.setupFormValidation();
    });
	
})(jQuery, window, document);
//]]>
  </script>

<title>Maui Cricket Club</title>

  

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="mm_travel2.css" type="text/css" />
  
  <style type="text/css">
  #email-form {
    background: url("form-fieldset.gif") repeat-x scroll left bottom #F8FDEF;
    border: 1px solid #DFDCDC;
    border-radius: 15px 15px 15px 15px;
    display: inline-block;
    margin-bottom: 30px;
    margin-left: 0px;
    margin-top: 10px;
    padding: 25px 50px 10px;
    width: 350px;
}

#email-form .fieldgroup {
    background: url("form-divider.gif") repeat-x scroll left top transparent;
    display: inline-block;
    padding: 8px 10px;
    width: 340px;
}

#email-form .fieldgroup label {
    float: left;
	padding: 7px 0 0;
    text-align: left;
    width: 99px;
}

#email-form .fieldgroup input{
    float: left;
    height: 20px;
	width: 200px;
}
#email-form .fieldgroup textarea{
    float: left;
    height: 100px;
	width: 300px;
}
#email-form .submit {
    padding: 10px;
	width: 300px;
	height: 40px !important;
}

#email-form .fieldgroup label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 4px 0 5px 0px;
    padding: 0;
    text-align: left;
    width: 220px;
}
  
  </style>

  

<meta name="verify-v1" content="sodqMXCZy7x8ZSVKbMlpRIHhoJchZI/pc9wglqwkwkU=" />



 </head>



 <body bgcolor="#C0DFFD">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


   <table width="100%" border="0" cellspacing="0" cellpadding="0">

  

    <tr bgcolor="#3366CC">

     <td width="382" colspan="3" rowspan="2"><img src="mm_travel_photo.jpg" alt="Header image" width="382" height="127" border="0" /></td>



     <td width="378" height="63" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap">MAUI CRICKET CLUB</td>

     <td width="100%">&nbsp;</td>



    </tr>

    <tr bgcolor="#3366CC">

     <td height="64" colspan="3" id="tagline" valign="top" align="center">Baldwin Beach, Paia</td>



     <td width="100%">&nbsp;</td>

    </tr>

    <tr>

     <td colspan="7" bgcolor="#003366"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>

    </tr>



    <tr bgcolor="#CCFF99">

     <td colspan="7" id="dateformat" height="25">&nbsp;&nbsp;PHOTOS</td>



    </tr>

    <tr>



     <td colspan="7" bgcolor="#003366"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>



    </tr>



    <tr>

     <td width="165" valign="top" bgcolor="#E6F3FF">

      <table border="0" cellspacing="0" cellpadding="0" width="165" id="navigation">

       <tr>

        <td width="165">&nbsp;<br />

&nbsp;<br /></td>



       </tr>

   <tr>



        <td width="165"><a href="jun2013/" class="navText">Summer 2013</a></td>

       </tr>


       <tr>



        <td width="165"><a href="jul2012/" class="navText">Summer 2012</a></td>

       </tr>

       <tr>

       <tr>



        <td width="165"><a href="aug2011/" class="navText">Summer 2011</a></td>

       </tr>

       <tr>



       <tr>



        <td width="165"><a href="aug2010games/" class="navText">Aug 2010 - MAUI</a></td>

       </tr>

       <!-- tr>



        <td width="165"><a href="aug2010pitch/" class="navText">Aug 2010 - PITCH</a></td>

       </tr>

       <tr>



        <td width="165"><a href="The_Berwick_Diaries_NZ.pdf" class="navText">Mar 2010 - NZ</a></td>

       </tr -->

       <tr>



        <td width="165"><a href="pkc2009/" class="navText">Oct 2009 - PKC</a></td>

       </tr>

       <tr>

        <td width="165"><a href="hcc/" class="navText">Jun 2008 - HCC</a></td>

       </tr>



       <tr>



        <td width="165"><a href="pitch/" class="navText">May 2008 - PITCH</a></td>

       </tr>

       <!--tr>



        <td width="165"><a href="ccnsw/" class="navText">Apr 2008 - CCNSW</a></td>



       </tr -->

       <tr>



        <td width="165"><a href="sep2007/" class="navText">Sep 2007 - OAHU</a></td>



       </tr>

       <tr>

        <td width="165"><a href="aug2004/" class="navText">Previous</a></td>

       </tr>

      </table>

     <br />

&nbsp;<br />&nbsp;<br />&nbsp;<br /> 

    </td>

    

    <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>



    <td width="350" colspan="2" valign="top"><img src="mm_spacer.gif" alt="" width="350" height="1" border="0" /><br />

&nbsp;<br />

&nbsp;<br />

     <table border="0" cellspacing="0" cellpadding="0" width="350">

      <tr>

<!-- td class="pageName">Welcome to the Hawaiian <a href="http://www.lords.org/mcc/about-mcc/" target="_blank">MCC</a>!</td -->
<td class="pageName">

<a href="https://maps.google.com/?t=h&ie=UTF8&ll=20.913053,-156.391837&spn=0.00124,0.00114&z=19&source=embed" tabindex="0" title="Google Maps" accesskey="m" target="_blank">MAP OF CRICKET GROUND</a><BR/>
Weekly Saturday 4 PM HST


<!--
    <table border="1" bordercolor="#FF0000">

        <tr><th>Next Matches</th></tr>

          <tr>

          <td class="pageName">SATURDAY, JUNE 29, 2013</td>

		</tr>

        

          <tr>

          <td class="pageName">SUNDAY, JUNE  30, 2013</td>

		</tr>

        

     </table>

-->
     </tr>

      <tr><td class="bodyText">

           <!-- p>Indeed, paradise can be improved.  Was the cricket the only thing missing in your life on Maui?  Not to worry, we have it here!!  And it is getting better.</p -->
            &nbsp;


          </td>



      </tr>

     </table>

        



<!-- IMPORTANT Announcement 



      <table border="1" bordercolor="#FF0000">

        

          <tr>

          <td class="pageName">SATURDAY, August 21, 2010<BR /> Noon-3:30 PM Twenty-20<BR /><strong>Lahaina</strong> Recreational Center <BR />(near Aquatic Center)</td>

		</tr>

        

          <tr>

          <td class="pageName">SUNDAY, August 22, 2010<BR /> Noon-5:00 PM  30 overs<BR /><strong>Baldwin</strong> Beach Park, Paia</td>

		</tr>

        

     </table>



        



-->

    <table>



     <tr>

      <td class="bodyText">



        <!-- Recent event 



        <p>Maui Cricket Club and the <a href="http://www.honolulucricketclub.org" target="_blank">Honolulu Cricket Club</a> are proud to have participated in the <a target="_blank" href="oct2009/festival.pdf">Princess Ka&lsquo;iulani Festival</a> on Saturday, October 17 at Waldorf High School and Sunday, October 18, 2009 at Baldwin Beach in Paia (<a href="pkc2009/">Photos</a>)</p>  

<p>Past pictures on left side menu.</p>

        -->


      </td>

     <tr>

      <td>

        
<fb:like href="http://www.facebook.com/MauiCricketClub" width="300" show_faces="true" send="true"></fb:like>

       <!-- form action="gdform.php" method="post" onsubmit="return checkData();" -->
       <form id="email-form" action="not-sent.html" method="post">


        <div id="form-content">
        <fieldset>

            <div class="fieldgroup">
                <label for="FirstName">First Name:</label>
                <input type="text" name="FirstName">
            </div>

            <div class="fieldgroup">
                <label for="LastName">Last Name:</label>
                <input type="text" name="LastName">
            </div>

            <div class="fieldgroup">
                <label for="email">Email:</label>
                <input type="text" name="email">
            </div>

            <div class="fieldgroup">
                <label for="rsum">What is <?= $rand1 ?> + <?= $rand2 ?> ?</label>
                <input type="text" name="rsum" value="Prove you are human ;-)">
            </div>
            
            
            <div class="fieldgroup">
               <label for="comments" style="padding-top:0px;">Message:</label>
               <textarea name="comments"></textarea>
            </div>

            <div class="fieldgroup">
                <input type="submit" value="Send" class="submit">
            </div>

        </div><!-- ends form-content div -->

        </fieldset>
         <input type="hidden" name="subject" value="Maui Cricket Club Inquiry" />
         <input type="hidden" name="redirect" value="thankyou.html" />

</form>

 



     </td>



    </tr>

   </table>





   <br />

  </td>





   <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>

   <td width="190" valign="top"><br />

&nbsp;<br />

    <table border="0" cellspacing="0" cellpadding="0" width="190">



     <tr><td colspan="3" class="subHeader" align="center">&nbsp;</td></tr>

     <tr>

         <td width="40"><img src="mm_spacer.gif" alt="" width="40" height="1" border="0" /></td>

         <td width="110" id="sidebar" class="smallText" align="center"><img src="logo.png" height="500"/>

          <!-- p>
          
          <!-- <a href="pkc2009/hires/trophy0.JPG"><img src="pkc2009/lores/trophy0.jpg" alt="PKC" width="400" height="300" vspace="6" border="0" /></a><br /><br />



             <a href="pkc2009/hires/trophy0.JPG">(Click to enlarge)</a><
             
           
             
             </p -->

          <!--

          <p><img src="mm_travel_photo2.jpg" alt="Image 2" width="110" height="110" vspace="6" border="0" /><br />Include a short description here.<br />



          <a href="javascript:;">Read more &gt;</a></p> 

          -->

          <br />&nbsp;<br />&nbsp;<br />

         </td>



         <td width="40">      <!-- Facebook Badge START --><a href="https://www.facebook.com/MauiCricketClub" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Maui Cricket Club">Maui Cricket Club</a><br/><a href="https://www.facebook.com/MauiCricketClub" target="_TOP" title="Maui Cricket Club"><img src="https://badge.facebook.com/badge/467952583215150.3315.1890262196.png" style="border: 0px;" /></a><br/><a href="https://www.facebook.com/advertising" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Make your own badge!">Promote Your Page Too</a><!-- Facebook Badge END -->          
</td>



     </tr>



    </table>

   </td>

   <td width="100%">&nbsp;</td>

  

  </tr>

  <tr>



  <td width="165">&nbsp;</td>

  <td width="50">&nbsp;</td>

  <td width="167">&nbsp;</td>

  <td width="138">&nbsp;</td>

  <td width="50">&nbsp;</td>

  <td width="190">&nbsp;</td>



  <td width="100%">&nbsp;</td>

  </tr>



 </table>



</body>



</html>

