<?php
// Caching directives - CANNOT MODIFY GO-DADDY headers 
//header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
//header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

// random between 1 and 8 to determine length of captcha code
$rand1 = rand(1, 8);
// this clumsy text is used several times, so centralize it
$captcha_default = "Type text or number...";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">



 <head>
  <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="jquery.validate.min.js"></script>
  <script type="text/javascript" src="formguard.js" ></script>
    <script type="text/javascript">
  //<![CDATA[
 
 function getImnage()
 {
   
 } 
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
		    // add validator method that recognizes default value has been unchanged 
			$.validator.addMethod(
                'noPlaceholder', function (value, element) {
                    return value !== element.defaultValue;
                }, 'Please enter a value.'
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
                    comments: {
                        required: true,
                        minlength: 5
                    },
					captcha_code: {
					    noPlaceholder: true
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
					captcha_code: "Please enter code shown or solve math",
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
  

  <meta name="verify-v1" content="sodqMXCZy7x8ZSVKbMlpRIHhoJchZI/pc9wglqwkwkU=" />



 </head>



 <body bgcolor="#C0DFFD">
 <div id="fb-root"></div>
  <script type="text/javascript" src="fb.js" ></script>

   <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#3366CC">
     <td width="100" colspan="3" rowspan="2"><img src="mm_travel_photo.jpg" height="127" border="0" /></td>
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
        <td width="165">&nbsp;<br />&nbsp;<br /></td>
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
    </td>

    <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    
    
    <td colspan="2" valign="top"><img src="mm_spacer.gif" alt="" width="350" height="1" border="0" />
 
 
 <!-- Map and Logo -->
 
     <table border="0" cellspacing="0" cellpadding="0" width="350">
      <tr>
        <td class="pageName" align="center">
         <a href="map.php" target="_blank">MAP OF CRICKET GROUND</a><BR/>
          Weekly Saturday 4 PM HST
         </td>
       </tr>
       <tr>
        <td><img src="logo.png" height="500"/></td>
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

<!-- Recent event 

    <table border="0">



     <tr>

      <td class="bodyText">






        <p>Maui Cricket Club and the <a href="http://www.honolulucricketclub.org" target="_blank">Honolulu Cricket Club</a> are proud to have participated in the <a target="_blank" href="oct2009/festival.pdf">Princess Ka&lsquo;iulani Festival</a> on Saturday, October 17 at Waldorf High School and Sunday, October 18, 2009 at Baldwin Beach in Paia (<a href="pkc2009/">Photos</a>)</p>  

<p>Past pictures on left side menu.</p>



      </td>


   </table>

        -->


  </td>





   <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>

   <td width="190" valign="top">
   
      <table border="0" cellspacing="0" cellpadding="0" width="350">
      <tr height="50">
        <td class="pageName" align="left">Contact:</td>
       </tr>
      </table>

   
    <table border="0" cellspacing="0" cellpadding="0" width="190">
     <tr>
         <td width="110" align="center">
       <!-- form action="gdform.php" method="post" onsubmit="return checkData();" -->
       <form id="email-form" action="not-sent.html" method="post">


        <div id="form-content">
        <fieldset>

            <div class="fieldgroup">
                <label for="FirstName">First Name:</label>
                <input type="text" name="FirstName" title="Enterr First Name">
            </div>

            <div class="fieldgroup">
                <label for="LastName">Last Name:</label>
                <input type="text" name="LastName" title="Enter Last Name">
            </div>

            <div class="fieldgroup">
                <label for="email">Email:</label>
                <input type="text" name="email" title="Enter YOUR Email Address - this WILL be shared with club meembers">
            </div>

            <div class="fieldgroup">
               <label for="comments" style="padding-top:0px;">Message:</label>
               <textarea name="comments" title="Enter your email message to Maui Cricket Club"></textarea>
            </div>

            <div class="fieldgroup" align="center">
                <img id="captcha" src="secureimage/securimage_show.php?lambai=<?=$rand1?>" alt="CAPTCHA Image" />
                <div align="left">
                  <a href="#" onclick="document.getElementById('captcha').src = 'secureimage/securimage_show.php?' + Math.random() + '&lambai=' + Math.floor((Math.random()*8)+1); return false">Change Image</a>
                </div>
            </div>
            
            <div class="fieldgroup" >
                <label for="captcha_code">Answer <a href="http://repository.cmu.edu/cgi/viewcontent.cgi?article=1142&context=compsci" target="_blank">CAPTCHA</a>:</label>
                <input type="text" name="captcha_code" value="<?= $captcha_default ?>" 
                                   onfocus="if(this.value == '<?= $captcha_default ?>'){this.value = '';}" 
                                   onblur="if(this.value == ''){this.value='<?= $captcha_default ?>';}"
                                   title="Enter code, UPPER or lower case, does not matter; for math, enter JUST number answer">
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

         <td width="40"><img src="mm_spacer.gif" alt="" width="40" height="1" border="0" /></td>

         <td width="40">      <fb:like href="http://www.facebook.com/MauiCricketClub" width="300" show_faces="true" send="true"></fb:like><!-- Facebook Badge START --><a href="https://www.facebook.com/MauiCricketClub" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Maui Cricket Club">Maui Cricket Club</a><br/><a href="https://www.facebook.com/MauiCricketClub" target="_TOP" title="Maui Cricket Club"><img src="https://badge.facebook.com/badge/467952583215150.3315.1890262196.png" style="border: 0px;" /></a><br/><a href="https://www.facebook.com/advertising" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Make your own badge!">Promote Your Page Too</a><!-- Facebook Badge END -->          
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

