<!-- view.php --> 
 <?php 
 include_once("../../globals.php"); 
 include_once("$srcdir/api.inc"); 
 formHeader("Form: Forms_Cardiology"); 
 $obj = formFetch("form_Forms_Cardiology", $_GET["id"]);  //#Use the formFetch function from api.inc to get values for existing form. 
  
 function chkdata_Txt(&$obj, $var) { 
         return htmlentities($obj{"$var"}); 
 } 
 function chkdata_Date(&$obj, $var) { 
         return htmlentities($obj{"$var"}); 
 } 
 function chkdata_CB(&$obj, $nam, $var) { 
 	if (preg_match("/$var/",$obj{$nam})) {return "checked";} else {return "";}
 } 
 function chkdata_Radio(&$obj, $nam, $var) { 
 	if (strpos($obj{$nam},$var) !== false) {return "checked";} 
 } 
  function chkdata_PopOrScroll(&$obj, $nam, $var) { 
  if (preg_match("/$var/",$obj{$nam})) {return "selected";} else {return "";} 	
 } 
  
 ?> 
 <html><head> 
 <link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
 </head> 
 <body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0> 
 <style type="text/css">@import url(../../../library/dynarch_calendar.css);</style>
<script type="text/javascript" src="../../../library/dialog.js"></script>
<script type="text/javascript" src="../../../library/textformat.js"></script>
<script type="text/javascript" src="../../../library/dynarch_calendar.js"></script>
<script type="text/javascript" src="../../../library/dynarch_calendar_en.js"></script>
<script type="text/javascript" src="../../../library/dynarch_calendar_setup.js"></script>
<script language='JavaScript'> var mypcc = '1'; </script>
 
 <form method=post action="<?echo $rootdir?>/forms/Forms_Cardiology/save.php?mode=update&id=<?echo $_GET["id"];?>" name="my_form" onSubmit="return top.restoreSession()"> 
 <h1> Forms_Cardiology </h1> 
 <hr> 
 <input type="submit" name="submit form" value="submit form" /> 
  
 <table width="100%" cellpadding="0" cellspacing="0">    
  
     <tr> 
  
         <td class='text'   valign="top" style="border: 1px #000000 solid; height: 15px;"> 
  
             <table width="100%" cellpadding="0" cellspacing="0"> 
  
                 <tr> 
  
                     <td class='text'   colspan="5" align="center" style="border: 1px #000000 solid; height: 15px;"> 
  
                         <h3> 
  
                             PATIENT INFORMATION - PLEASE PRINT 
  
                         </h3> 
                     </td> 
                 </tr> 
                 <tr><td class='text'   colspan="5"><b> <? xl("FULL LEGAL NAME(FIRST NAME)",'e') ?> </b></td></tr> 
  
                 <tr>                     
  
                     <td class='text'   style="border: 1px #000000 solid;">                         
  
 <table> 
  
 <tr><td class='text' > first name</td> <td class='text' ><input type="text" name="_first_name" value="<?php $result = chkdata_Txt($obj,"_first_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > middle name</td> <td class='text' ><input type="text" name="_middle_name" value="<?php $result = chkdata_Txt($obj,"_middle_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > last name</td> <td class='text' ><input type="text" name="_last_name" value="<?php $result = chkdata_Txt($obj,"_last_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   colspan="2" style="border: 1px #000000 solid;">                         
  
 <table> 
  
 <tr><td class='text' > nick name</td> <td class='text' ><input type="text" name="_nick_name" value="<?php $result = chkdata_Txt($obj,"_nick_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
                 </tr> 
  
                  
  
                  
  
                 <tr> 
  
                      
  
                     <td class='text'   colspan="2" style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > street address number</td> <td class='text' ><input type="text" name="_street_address_number" value="<?php $result = chkdata_Txt($obj,"_street_address_number"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > street name</td> <td class='text' ><input type="text" name="_street_name" value="<?php $result = chkdata_Txt($obj,"_street_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > street name apt</td> <td class='text' ><input type="text" name="_street_name_apt" value="<?php $result = chkdata_Txt($obj,"_street_name_apt"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > street name space</td> <td class='text' ><input type="text" name="_street_name_space" value="<?php $result = chkdata_Txt($obj,"_street_name_space"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
                 </tr> 
  
                   <tr> 
  
                      
  
                     <td class='text'   colspan="2" style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > po box address number</td> <td class='text' ><input type="text" name="_po_box_address_number" value="<?php $result = chkdata_Txt($obj,"_po_box_address_number"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > po box street</td> <td class='text' ><input type="text" name="_po_box_street" value="<?php $result = chkdata_Txt($obj,"_po_box_street"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > po box apt</td> <td class='text' ><input type="text" name="_po_box_apt" value="<?php $result = chkdata_Txt($obj,"_po_box_apt"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > po box space</td> <td class='text' ><input type="text" name="_po_box_space" value="<?php $result = chkdata_Txt($obj,"_po_box_space"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
                 </tr> 
  
                  
  
                  <tr> 
  
                      
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > city</td> <td class='text' ><input type="text" name="_city" value="<?php $result = chkdata_Txt($obj,"_city"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > state</td> <td class='text' ><input type="text" name="_state" value="<?php $result = chkdata_Txt($obj,"_state"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > zip code</td> <td class='text' ><input type="text" name="_zip_code" value="<?php $result = chkdata_Txt($obj,"_zip_code"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > social security</td> <td class='text' ><input type="text" name="_social_security" value="<?php $result = chkdata_Txt($obj,"_social_security"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > home phone</td> <td class='text' ><input type="text" name="_home_phone" value="<?php $result = chkdata_Txt($obj,"_home_phone"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
                 </tr> 
  
                  
  
                 <tr> 
  
                      
  
                     <td class='text'    colspan="4" style="border: 1px #000000 solid; height: 10px;"> 
  
 <table> 
  
 <tr><td class='text' > email address</td> <td class='text' ><input type="text" name="_email_address" value="<?php $result = chkdata_Txt($obj,"_email_address"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     
  
                      <td class='text'   style="border: 1px #000000 solid; height: 10px;"> 
  
 <table> 
  
 <tr><td class='text' > cell phone</td> <td class='text' ><input type="text" name="_cell_phone" value="<?php $result = chkdata_Txt($obj,"_cell_phone"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
                 </tr> 
  
                  
  
                  <tr> 
  
                      
  
                     <td class='text'   style="border: 1px #000000 solid; height: 15px;"> 
  
 <table> 
  
 <tr><td class='text' > 
 <span ><?php xl(' date of birth (yyyy-mm-dd): ','e') ?></span> 
 </td><td class='text' > 
 <input type='text' size='10' name='_date_of_birth' id='_date_of_birth' onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)' title='yyyy-mm-dd last date of this event'  value="<?php $result = chkdata_Date($obj,"_date_of_birth"); echo $result;?>"> 
 <img src='../../../interface/pic/show_calendar.gif' align='absbottom' width='24' height='22' 
 id='img__date_of_birth' border='0' alt='[?]' style='cursor:pointer' 
 title='Click here to choose a date'> 
 <script> 
 Calendar.setup({inputField:'_date_of_birth', ifFormat:'%Y-%m-%d', button:'img__date_of_birth'}); 
 </script> 
 </td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid; height: 15px;"> 
  
 <table> 
  
 <tr><td class='text' > age</td> <td class='text' ><input type="text" name="_age" value="<?php $result = chkdata_Txt($obj,"_age"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid; height: 15px;"> 
  
 <table> 
  
 <tr><td class='text' > sex</td> <td class='text' ><br> <label><input type="checkbox" name="_sex[]" value="MALE" <?php $result = chkdata_CB($obj,"_sex","MALE"); echo $result;?> <? xl(">MALE",'e') ?> </label> 
 <br> <label><input type="checkbox" name="_sex[]" value="FEMALE" <?php $result = chkdata_CB($obj,"_sex","FEMALE"); echo $result;?> <? xl(">FEMALE",'e') ?> </label></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid; height: 15px;"> 
  
 <table> 
  
 <tr><td class='text' > marital status</td> <td class='text' ><br> <label><input type="checkbox" name="_marital_status[]" value="MARRIED" <?php $result = chkdata_CB($obj,"_marital_status","MARRIED"); echo $result;?> <? xl(">MARRIED",'e') ?> </label> 
 <br> <label><input type="checkbox" name="_marital_status[]" value="SINGLE" <?php $result = chkdata_CB($obj,"_marital_status","SINGLE"); echo $result;?> <? xl(">SINGLE",'e') ?> </label></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid; height: 15px;"> 
  
 <table> 
  
 <tr><td class='text' > occupation</td> <td class='text' ><input type="text" name="_occupation" value="<?php $result = chkdata_Txt($obj,"_occupation"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
                 </tr> 
  
                 <tr> 
  
                     <td class='text'     style="border: 1px #000000 solid; height: 15px;"> 
  
 <table> 
  
 <tr><td class='text' > employer name</td> <td class='text' ><input type="text" name="_employer_name" value="<?php $result = chkdata_Txt($obj,"_employer_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   colspan="4" style="border: 1px #000000 solid;;"> 
  
                         <table> 
  
                             <tr> 
  
                                 <td class='text'  > 
  
 <table> 
  
 <tr><td class='text' > employer street address</td> <td class='text' ><input type="text" name="_employer_street_address" value="<?php $result = chkdata_Txt($obj,"_employer_street_address"); echo $result;?>"></td></tr> 
  
 </table> 
                                 </td> 
  
                                 <td class='text'  > 
  
 <table> 
  
 <tr><td class='text' > employer city</td> <td class='text' ><input type="text" name="_employer_city" value="<?php $result = chkdata_Txt($obj,"_employer_city"); echo $result;?>"></td></tr> 
  
 </table> 
                                 </td> 
  
                                 <td class='text'  > 
  
 <table> 
  
 <tr><td class='text' > employer state</td> <td class='text' ><input type="text" name="_employer_state" value="<?php $result = chkdata_Txt($obj,"_employer_state"); echo $result;?>"></td></tr> 
  
 </table> 
                                 </td> 
  
                                 <td class='text'  > 
  
 <table> 
  
 <tr><td class='text' > employer zip code</td> <td class='text' ><input type="text" name="_employer_zip_code" value="<?php $result = chkdata_Txt($obj,"_employer_zip_code"); echo $result;?>"></td></tr> 
  
 </table> 
                                 </td> 
                             </tr> 
  
                         </table> 
                     </td> 
                 </tr> 
  
                  <tr> 
  
                      
  
                     <td class='text'   style="border: 1px #000000 solid; height: 15px;"> 
  
 <table> 
  
 <tr><td class='text' > business phone</td> <td class='text' ><input type="text" name="_business_phone" value="<?php $result = chkdata_Txt($obj,"_business_phone"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid; height: 15px;"> 
  
 <table> 
  
 <tr><td class='text' > extension</td> <td class='text' ><input type="text" name="_extension" value="<?php $result = chkdata_Txt($obj,"_extension"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid; height: 15px;"> 
  
 <table> 
  
 <tr><td class='text' > drivers license</td> <td class='text' ><input type="text" name="_drivers_license" value="<?php $result = chkdata_Txt($obj,"_drivers_license"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   colspan="2" style="border: 1px #000000 solid; height: 15px;"> 
  
 <table> 
  
 <tr><td class='text' > drivers license state</td> <td class='text' ><input type="text" name="_drivers_license_state" value="<?php $result = chkdata_Txt($obj,"_drivers_license_state"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     
                 </tr> 
  
                  
  
                  
  
             </table> 
         </td> 
     </tr> 
  
      
  
      
  
      
  
      
  
     <tr> 
  
          <td class='text'   valign="top" style="border: 1px #000000 solid; height: 15px;"> 
  
             <table width="100%" cellpadding="0" cellspacing="0"> 
  
                 <tr> 
  
                     <td class='text'   colspan="7" align="center" style="border: 1px #000000 solid; height: 15px;"> 
  
                         <h3> 
  
                             SPOUSE'S, PARENT'S, AND / OR GUARANTER'S INFORMATION 
  
                         </h3> 
                     </td> 
                 </tr> 
  
                 <tr><td class='text'   colspan="7"> 
  
 <table> 
  
 <tr><td class='text' > spg refers to spouse/parents/guarantors</td> <td class='text' ><input type="text" name="_spg_refers_to_spouse_parents_guarantors"  /></td></tr> 
  
 </table> 
                 </td></tr> 
  
                 <tr> 
  
                      
  
                     <td class='text'   colspan="2" style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg first name</td> <td class='text' ><input type="text" name="_spg_first_name" value="<?php $result = chkdata_Txt($obj,"_spg_first_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg middle name</td> <td class='text' ><input type="text" name="_spg_middle_name" value="<?php $result = chkdata_Txt($obj,"_spg_middle_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   colspan="2" style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg last name</td> <td class='text' ><input type="text" name="_spg_last_name" value="<?php $result = chkdata_Txt($obj,"_spg_last_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   colspan="2" style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg occupation</td> <td class='text' ><input type="text" name="_spg_occupation" value="<?php $result = chkdata_Txt($obj,"_spg_occupation"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
                 </tr> 
  
                  
  
                  <tr> 
  
                      
  
                     <td class='text'   colspan="2" style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg address if different than above</td> <td class='text' ><input type="text" name="_spg_address_if_different_than_above" value="<?php $result = chkdata_Txt($obj,"_spg_address_if_different_than_above"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg city</td> <td class='text' ><input type="text" name="_spg_city" value="<?php $result = chkdata_Txt($obj,"_spg_city"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg state</td> <td class='text' ><input type="text" name="_spg_state" value="<?php $result = chkdata_Txt($obj,"_spg_state"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg zip code</td> <td class='text' ><input type="text" name="_spg_zip_code" value="<?php $result = chkdata_Txt($obj,"_spg_zip_code"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   colspan="2" style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg home phone</td> <td class='text' ><input type="text" name="_spg_home_phone" value="<?php $result = chkdata_Txt($obj,"_spg_home_phone"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
                 </tr> 
  
                  
  
                   <tr> 
  
                      
  
                     <td class='text'   colspan="2" style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg employer street address</td> <td class='text' ><input type="text" name="_spg_employer_street_address" value="<?php $result = chkdata_Txt($obj,"_spg_employer_street_address"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                    <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg employer city</td> <td class='text' ><input type="text" name="_spg_employer_city" value="<?php $result = chkdata_Txt($obj,"_spg_employer_city"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg employer state</td> <td class='text' ><input type="text" name="_spg_employer_state" value="<?php $result = chkdata_Txt($obj,"_spg_employer_state"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg employer zip code</td> <td class='text' ><input type="text" name="_spg_employer_zip_code" value="<?php $result = chkdata_Txt($obj,"_spg_employer_zip_code"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg employer business phone</td> <td class='text' ><input type="text" name="_spg_employer_business_phone" value="<?php $result = chkdata_Txt($obj,"_spg_employer_business_phone"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'    style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > spg employer extension</td> <td class='text' ><input type="text" name="_spg_employer_extension" value="<?php $result = chkdata_Txt($obj,"_spg_employer_extension"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
                 </tr> 
  
                  
  
             </table> 
         </td> 
     </tr> 
  
      
  
      <tr> 
  
          <td class='text'   valign="top" style="border: 1px #000000 solid; height: 15px;"> 
  
             <table width="100%" cellpadding="0" cellspacing="0"> 
  
                 <tr> 
  
                     <td class='text'   colspan="3" align="center" style="border: 1px #000000 solid; height: 15px;"> 
  
                         <h3> 
  
                             CONCERNING INSURANCE 
  
                         </h3> 
                     </td> 
                 </tr> 
  
                 <tr> 
  
                      
  
                     <td class='text'   colspan="3" style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > concerning insurance deatils</td> <td class='text' ><label><input type="checkbox" name="_concerning_insurance_deatils[]" value="SPOUCE IS POLICY HOLDER" <?php $result = chkdata_CB($obj,"_concerning_insurance_deatils","SPOUCE IS POLICY HOLDER"); echo $result;?> <? xl(">SPOUCE IS POLICY HOLDER",'e') ?> </label>
   <label><input type="checkbox" name="_concerning_insurance_deatils[]" value="MEDICARE" <?php $result = chkdata_CB($obj,"_concerning_insurance_deatils","MEDICARE"); echo $result;?> <? xl(">MEDICARE",'e') ?> </label>
   <label><input type="checkbox" name="_concerning_insurance_deatils[]" value="MEDICAL" <?php $result = chkdata_CB($obj,"_concerning_insurance_deatils","MEDICAL"); echo $result;?> <? xl(">MEDICAL",'e') ?> </label>
   <label><input type="checkbox" name="_concerning_insurance_deatils[]" value="HMO" <?php $result = chkdata_CB($obj,"_concerning_insurance_deatils","HMO"); echo $result;?> <? xl(">HMO",'e') ?> </label>
   <label><input type="checkbox" name="_concerning_insurance_deatils[]" value="WORK COMP" <?php $result = chkdata_CB($obj,"_concerning_insurance_deatils","WORK COMP"); echo $result;?> <? xl(">WORK COMP",'e') ?> </label></td></tr> 
  
 </table> 
                     </td> 
  
                     
                 </tr> 
  
                 <tr> 
  
                      
  
                     <td class='text'   colspan="3" align="right" > 
  
 <table> 
  
 <tr><td class='text' > 
 <span ><?php xl(' date of injury (yyyy-mm-dd): ','e') ?></span> 
 </td><td class='text' > 
 <input type='text' size='10' name='_date_of_injury' id='_date_of_injury' onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)' title='yyyy-mm-dd last date of this event'  value="<?php $result = chkdata_Date($obj,"_date_of_injury"); echo $result;?>"> 
 <img src='../../../interface/pic/show_calendar.gif' align='absbottom' width='24' height='22' 
 id='img__date_of_injury' border='0' alt='[?]' style='cursor:pointer' 
 title='Click here to choose a date'> 
 <script> 
 Calendar.setup({inputField:'_date_of_injury', ifFormat:'%Y-%m-%d', button:'img__date_of_injury'}); 
 </script> 
 </td></tr> 
  
 </table> 
                     </td> 
  
                     
                 </tr> 
  
                  
  
                  <tr> 
  
                      
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > primary insurance co here</td> <td class='text' ><input type="text" name="_primary_insurance_co_here" value="<?php $result = chkdata_Txt($obj,"_primary_insurance_co_here"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > primary insurance group number</td> <td class='text' ><input type="text" name="_primary_insurance_group_number" value="<?php $result = chkdata_Txt($obj,"_primary_insurance_group_number"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > primary insurance id number</td> <td class='text' ><input type="text" name="_primary_insurance_id_number" value="<?php $result = chkdata_Txt($obj,"_primary_insurance_id_number"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      
                 </tr> 
  
                  
  
                  <tr> 
  
                      
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > primary insurance insured name</td> <td class='text' ><input type="text" name="_primary_insurance_insured_name" value="<?php $result = chkdata_Txt($obj,"_primary_insurance_insured_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > 
 <span ><?php xl(' primary insurance insured date of birth (yyyy-mm-dd): ','e') ?></span> 
 </td><td class='text' > 
 <input type='text' size='10' name='_primary_insurance_insured_date_of_birth' id='_primary_insurance_insured_date_of_birth' onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)' title='yyyy-mm-dd last date of this event'  value="<?php $result = chkdata_Date($obj,"_primary_insurance_insured_date_of_birth"); echo $result;?>"> 
 <img src='../../../interface/pic/show_calendar.gif' align='absbottom' width='24' height='22' 
 id='img__primary_insurance_insured_date_of_birth' border='0' alt='[?]' style='cursor:pointer' 
 title='Click here to choose a date'> 
 <script> 
 Calendar.setup({inputField:'_primary_insurance_insured_date_of_birth', ifFormat:'%Y-%m-%d', button:'img__primary_insurance_insured_date_of_birth'}); 
 </script> 
 </td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > primary insurance insured address</td> <td class='text' ><input type="text" name="_primary_insurance_insured_address" value="<?php $result = chkdata_Txt($obj,"_primary_insurance_insured_address"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      
                 </tr> 
  
                  
  
                   <tr> 
  
                      
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > secondary insurance co name</td> <td class='text' ><input type="text" name="_secondary_insurance_co_name" value="<?php $result = chkdata_Txt($obj,"_secondary_insurance_co_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > secondary insurance group number</td> <td class='text' ><input type="text" name="_secondary_insurance_group_number" value="<?php $result = chkdata_Txt($obj,"_secondary_insurance_group_number"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > secondary insurance id number</td> <td class='text' ><input type="text" name="_secondary_insurance_id_number" value="<?php $result = chkdata_Txt($obj,"_secondary_insurance_id_number"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      
                 </tr> 
  
                  
  
                   <tr> 
  
                      
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > secondary insurance insureds name</td> <td class='text' ><input type="text" name="_secondary_insurance_insureds_name" value="<?php $result = chkdata_Txt($obj,"_secondary_insurance_insureds_name"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > 
 <span ><?php xl(' secondary insurance insureds date of birth (yyyy-mm-dd): ','e') ?></span> 
 </td><td class='text' > 
 <input type='text' size='10' name='_secondary_insurance_insureds_date_of_birth' id='_secondary_insurance_insureds_date_of_birth' onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)' title='yyyy-mm-dd last date of this event'  value="<?php $result = chkdata_Date($obj,"_secondary_insurance_insureds_date_of_birth"); echo $result;?>"> 
 <img src='../../../interface/pic/show_calendar.gif' align='absbottom' width='24' height='22' 
 id='img__secondary_insurance_insureds_date_of_birth' border='0' alt='[?]' style='cursor:pointer' 
 title='Click here to choose a date'> 
 <script> 
 Calendar.setup({inputField:'_secondary_insurance_insureds_date_of_birth', ifFormat:'%Y-%m-%d', button:'img__secondary_insurance_insureds_date_of_birth'}); 
 </script> 
 </td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > secondary insurance insureds col address</td> <td class='text' ><input type="text" name="_secondary_insurance_insureds_col_address" value="<?php $result = chkdata_Txt($obj,"_secondary_insurance_insureds_col_address"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      
                 </tr> 
  
                  
  
                  
  
                  
  
             </table> 
         </td> 
     </tr> 
  
      
  
      
  
       <tr> 
  
          <td class='text'   valign="top" style="border: 1px #000000 solid; height: 15px;"> 
  
             <table width="100%" cellpadding="0" cellspacing="0"> 
  
                 <tr> 
  
                     <td class='text'   colspan="4" align="center" style="border: 1px #000000 solid; height: 15px;"> 
  
                         <h3> 
  
                             EMERGENCY INFORMATION 
  
                         </h3> 
                     </td> 
                 </tr> 
  
                  
  
                                 
  
                  <tr> 
  
                      
  
                     <td class='text'   colspan="3" style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > person to notify in case of emergency not leaving with you</td> <td class='text' ><input type="text" name="_person_to_notify_in_case_of_emergency_not_leaving_with_you" value="<?php $result = chkdata_Txt($obj,"_person_to_notify_in_case_of_emergency_not_leaving_with_you"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > relationship</td> <td class='text' ><input type="text" name="_relationship" value="<?php $result = chkdata_Txt($obj,"_relationship"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      
                 </tr> 
  
                  
  
                  <tr> 
  
                      
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > person address</td> <td class='text' ><input type="text" name="_person_address" value="<?php $result = chkdata_Txt($obj,"_person_address"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > person street</td> <td class='text' ><input type="text" name="_person_street" value="<?php $result = chkdata_Txt($obj,"_person_street"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > person apt</td> <td class='text' ><input type="text" name="_person_apt" value="<?php $result = chkdata_Txt($obj,"_person_apt"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      
  
                       <td class='text'   style="border: 1px #000000 solid;"> 
  
 <table> 
  
 <tr><td class='text' > person space</td> <td class='text' ><input type="text" name="_person_space" value="<?php $result = chkdata_Txt($obj,"_person_space"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      
                 </tr> 
  
                   <tr> 
  
                      
  
                     <td class='text'   style="border: 1px #000000 solid; height: 6px;"> 
  
 <table> 
  
 <tr><td class='text' > person city</td> <td class='text' ><input type="text" name="_person_city" value="<?php $result = chkdata_Txt($obj,"_person_city"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     <td class='text'   style="border: 1px #000000 solid; height: 6px;"> 
  
 <table> 
  
 <tr><td class='text' > person state</td> <td class='text' ><input type="text" name="_person_state" value="<?php $result = chkdata_Txt($obj,"_person_state"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                      <td class='text'   style="border: 1px #000000 solid; height: 6px;"> 
  
 <table> 
  
 <tr><td class='text' > person zip code</td> <td class='text' ><input type="text" name="_person_zip_code" value="<?php $result = chkdata_Txt($obj,"_person_zip_code"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
  
                     
  
                      <td class='text'   style="border: 1px #000000 solid; height: 6px;"> 
  
 <table> 
  
 <tr><td class='text' > person home phone</td> <td class='text' ><input type="text" name="_person_home_phone" value="<?php $result = chkdata_Txt($obj,"_person_home_phone"); echo $result;?>"></td></tr> 
  
 </table> 
                     </td> 
                 </tr> 
  
                  
  
                   
  
                  
  
                  
  
                  
  
             </table> 
         </td> 
     </tr> 
  
 </table> 
 <table><tr><td class='text'   colspan="3"><h3> <? xl("Health History (Confidential)",'e') ?> </h3></td></tr> 
  
 <tr> 
 <td class='text'   colspan="3" style="border: 1px #000000 solid"><h3> <? xl("History and Physical",'e') ?> </h3></td></tr> 
  
 <tr><td class='text'  > 
 <? xl("Heart problems",'e') ?> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Heart Attack" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Heart Attack"); echo $result;?> <? xl(">Heart Attack",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Angina" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Angina"); echo $result;?> <? xl(">Angina",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Heart Murmur" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Heart Murmur"); echo $result;?> <? xl(">Heart Murmur",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Rheumatic Fever" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Rheumatic Fever"); echo $result;?> <? xl(">Rheumatic Fever",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Abnormal Rhythm-arrhythmia" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Abnormal Rhythm-arrhythmia"); echo $result;?> <? xl(">Abnormal Rhythm(arrhythmia)",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Palpitations and irregular heartbeats" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Palpitations and irregular heartbeats"); echo $result;?> <? xl(">Palpitations and irregular heartbeats",'e') ?> </label><br>
 <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Fainting" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Fainting"); echo $result;?> <? xl(">Fainting",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Enlarge Heart" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Enlarge Heart"); echo $result;?> <? xl(">Enlarge Heart",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Chest Pains or Pressure" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Chest Pains or Pressure"); echo $result;?> <? xl(">Chest Pains or Pressure",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Shortness of Breath" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Shortness of Breath"); echo $result;?> <? xl(">Shortness of Breath",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Dizziness" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Dizziness"); echo $result;?> <? xl(">Dizziness",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Swollen Legs" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Swollen Legs"); echo $result;?> <? xl(">Swollen Legs",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Heart Failure" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Heart Failure"); echo $result;?> <? xl(">Heart Failure",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Blue Lips or Fingernails" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Blue Lips or Fingernails"); echo $result;?> <? xl(">Blue Lips or Fingernails",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Leg Cramps when you walk" <?php $result = chkdata_CB($obj,"heart_problems_or_symptoms","Leg Cramps when you walk"); echo $result;?> <? xl(">Leg Cramps when you walk",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top"> 
  <? xl("Have you ever had",'e') ?> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="A Stress Test" <?php $result = chkdata_CB($obj,"have_you_ever_had","A Stress Test"); echo $result;?> <? xl(">A Stress Test",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="An Echocardiogram" <?php $result = chkdata_CB($obj,"have_you_ever_had","An Echocardiogram"); echo $result;?> <? xl(">An Echocardiogram",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Cardiac Catheterization" <?php $result = chkdata_CB($obj,"have_you_ever_had","Cardiac Catheterization"); echo $result;?> <? xl(">Cardiac Catheterization",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Coronary Angioplasty" <?php $result = chkdata_CB($obj,"have_you_ever_had","Coronary Angioplasty"); echo $result;?> <? xl(">Coronary Angioplasty",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Coronary Bypass Surgery" <?php $result = chkdata_CB($obj,"have_you_ever_had","Coronary Bypass Surgery"); echo $result;?> <? xl(">Coronary Bypass Surgery",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Valve Surgery" <?php $result = chkdata_CB($obj,"have_you_ever_had","Valve Surgery"); echo $result;?> <? xl(">Valve Surgery",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Electrophysiology Study or Proc" <?php $result = chkdata_CB($obj,"have_you_ever_had","Electrophysiology Study or Proc"); echo $result;?> <? xl(">Electrophysiology Study or Proc",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="A Pacemaker" <?php $result = chkdata_CB($obj,"have_you_ever_had","A Pacemaker"); echo $result;?> <? xl(">A Pacemaker",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Implanted Defibrillator" <?php $result = chkdata_CB($obj,"have_you_ever_had","Implanted Defibrillator"); echo $result;?> <? xl(">Implanted Defibrillator",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="ECG" <?php $result = chkdata_CB($obj,"have_you_ever_had","ECG"); echo $result;?> <? xl(">ECG",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="24 Holter Monitor" <?php $result = chkdata_CB($obj,"have_you_ever_had","24 Holter Monitor"); echo $result;?> <? xl(">24 Holter Monitor",'e') ?> </label> 
 <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Event Recorder " <?php $result = chkdata_CB($obj,"have_you_ever_had","Event Recorder "); echo $result;?> <? xl(">Event Recorder ",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top">   
  <? xl("Check if you have",'e') ?> <br> <label><input type="checkbox" name="check_if_you_have[]" value="High Blood Pressure" <?php $result = chkdata_CB($obj,"check_if_you_have","High Blood Pressure"); echo $result;?> <? xl(">High Blood Pressure",'e') ?> </label>  <br> <label><input type="checkbox" name="check_if_you_have[]" value="High Cholestrol" <?php $result = chkdata_CB($obj,"check_if_you_have","High Cholestrol"); echo $result;?> <? xl(">High Cholestrol",'e') ?> </label> 
 <br> <label><input type="checkbox" name="check_if_you_have[]" value="Ever Smoked" <?php $result = chkdata_CB($obj,"check_if_you_have","Ever Smoked"); echo $result;?> <? xl(">Ever Smoked",'e') ?> </label> 
 <br> <label><input type="checkbox" name="check_if_you_have[]" value="Diabetes" <?php $result = chkdata_CB($obj,"check_if_you_have","Diabetes"); echo $result;?> <? xl(">Diabetes",'e') ?> </label> 
 <br> <label><input type="checkbox" name="check_if_you_have[]" value="Do You Exercise" <?php $result = chkdata_CB($obj,"check_if_you_have","Do You Exercise"); echo $result;?> <? xl(">Do You Exercise",'e') ?> </label><br> <? xl("Close family member with",'e') ?> <br> <label><input type="checkbox" name="close_family_member_with[]" value="Heart Attack" <?php $result = chkdata_CB($obj,"close_family_member_with","Heart Attack"); echo $result;?> <? xl(">Heart Attack",'e') ?> </label> 
 <br> <label><input type="checkbox" name="close_family_member_with[]" value="Angina" <?php $result = chkdata_CB($obj,"close_family_member_with","Angina"); echo $result;?> <? xl(">Angina",'e') ?> </label><br><? xl("If a woman have you",'e') ?> <br> <label><input type="checkbox" name="if_a_woman_have_you[]" value="Passed Menopause" <?php $result = chkdata_CB($obj,"if_a_woman_have_you","Passed Menopause"); echo $result;?> <? xl(">Passed Menopause",'e') ?> </label><br> <? xl("Menopause passed on what age",'e') ?> <input type="text" name="menopause_passed_on_what_age" value="<?php $result = chkdata_Txt($obj,"menopause_passed_on_what_age"); echo $result;?>">
  
<br> <label><input type="checkbox" name="have_you_take_estrogen_replacement" value="yes" <?php $result = chkdata_CB($obj,"have_you_take_estrogen_replacement","yes"); echo $result;?>></label>  <? xl("Have you take estrogen replacement",'e') ?> 
 </td> 
 </tr> 
  

 <tr><td class='text' colspan="3" > <? xl("Please tell us anything else about heart",'e') ?> <textarea name="please_tell_us_anything_else_about_heart"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"please_tell_us_anything_else_about_heart"); echo $result;?></textarea></td></tr> 
  
 
 <tr><td class='text'   colspan="3" style="border: 1px #000000 solid; height: 28px;"><h3> <? xl("Current Medications",'e') ?> </h3></td></tr> 
  
 <tr> 
  
 <td class='text'   colspan="3"> 
     <strong> <? xl("Please tell us about medicines(name,dose or strength,how many times a day).Include over the counter medictaions:",'e') ?> </strong></td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Medicine detail1",'e') ?> <textarea name="medicine_detail1"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"medicine_detail1"); echo $result;?></textarea></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Medicine detail2",'e') ?> <textarea name="medicine_detail2"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"medicine_detail2"); echo $result;?></textarea></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Medicine detail3",'e') ?> <textarea name="medicine_detail3"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"medicine_detail3"); echo $result;?></textarea></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Medicine detail4",'e') ?> <textarea name="medicine_detail4"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"medicine_detail4"); echo $result;?></textarea></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Medicine detail5",'e') ?> <textarea name="medicine_detail5"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"medicine_detail5"); echo $result;?></textarea></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Medicine detail6",'e') ?> <textarea name="medicine_detail6"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"medicine_detail6"); echo $result;?></textarea></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Medicine detail7",'e') ?> <textarea name="medicine_detail7"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"medicine_detail7"); echo $result;?></textarea></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Medicine detail8",'e') ?> <textarea name="medicine_detail8"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"medicine_detail8"); echo $result;?></textarea></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr> 
 <td class='text'   colspan="3" style="border: 1px #000000 solid;"><h3> <? xl("Allergies",'e') ?> </h3></td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Are you allergic to any medications",'e') ?>
     <label><input type="checkbox" name="are_you_allergic_to_any_medications[]" value="Yes" <?php $result = chkdata_CB($obj,"are_you_allergic_to_any_medications","Yes"); echo $result;?> <? xl(">Yes",'e') ?> </label>
     <label><input type="checkbox" name="are_you_allergic_to_any_medications[]" value="No" <?php $result = chkdata_CB($obj,"are_you_allergic_to_any_medications","No"); echo $result;?> <? xl(">No",'e') ?> </label></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Lis medicine to which you are allergic",'e') ?> <input type="text" name="lis_medicine_to_which_you_are_allergic" value="<?php $result = chkdata_Txt($obj,"lis_medicine_to_which_you_are_allergic"); echo $result;?>"></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("What kind of reaction did you have",'e') ?> <input type="text" name="what_kind_of_reaction_did_you_have" value="<?php $result = chkdata_Txt($obj,"what_kind_of_reaction_did_you_have"); echo $result;?>"></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr> 
  
<td class='text'    valign="top"> 
  
 <? xl("Constitutional",'e') ?> <br> <label><input type="checkbox" name="constitutional[]" value="Lack of energy" <?php $result = chkdata_CB($obj,"constitutional","Lack of energy"); echo $result;?> <? xl(">Lack of energy",'e') ?> </label> 
 <br> <label><input type="checkbox" name="constitutional[]" value="Trouble sleeping" <?php $result = chkdata_CB($obj,"constitutional","Trouble sleeping"); echo $result;?> <? xl(">Trouble sleeping",'e') ?> </label> 
 <br> <label><input type="checkbox" name="constitutional[]" value="Loss of appetite" <?php $result = chkdata_CB($obj,"constitutional","Loss of appetite"); echo $result;?> <? xl(">Loss of appetite",'e') ?> </label> 
 <br> <label><input type="checkbox" name="constitutional[]" value="Weight changes" <?php $result = chkdata_CB($obj,"constitutional","Weight changes"); echo $result;?> <? xl(">Weight changes",'e') ?> </label> 
 <br> <label><input type="checkbox" name="constitutional[]" value="Fever" <?php $result = chkdata_CB($obj,"constitutional","Fever"); echo $result;?> <? xl(">Fever",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top"> 
  
 <? xl("Heent",'e') ?> <br> <label><input type="checkbox" name="heent[]" value="Blurred vision" <?php $result = chkdata_CB($obj,"heent","Blurred vision"); echo $result;?> <? xl(">Blurred vision",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heent[]" value="Glaucoma" <?php $result = chkdata_CB($obj,"heent","Glaucoma"); echo $result;?> <? xl(">Glaucoma",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heent[]" value="Cataracts" <?php $result = chkdata_CB($obj,"heent","Cataracts"); echo $result;?> <? xl(">Cataracts",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heent[]" value="Buzzing or ringing in ears" <?php $result = chkdata_CB($obj,"heent","Buzzing or ringing in ears"); echo $result;?> <? xl(">Buzzing or ringing in ears",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heent[]" value="Hay fever" <?php $result = chkdata_CB($obj,"heent","Hay fever"); echo $result;?> <? xl(">Hay fever",'e') ?> </label> 
 <br> <label><input type="checkbox" name="heent[]" value="Sinus problem" <?php $result = chkdata_CB($obj,"heent","Sinus problem"); echo $result;?> <? xl(">Sinus problem",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top"> 
  
<? xl("Respiratory",'e') ?> <br> <label><input type="checkbox" name="respiratory[]" value="Wheezing" <?php $result = chkdata_CB($obj,"respiratory","Wheezing"); echo $result;?> <? xl(">Wheezing",'e') ?> </label> 
 <br> <label><input type="checkbox" name="respiratory[]" value="Cough" <?php $result = chkdata_CB($obj,"respiratory","Cough"); echo $result;?> <? xl(">Cough",'e') ?> </label> 
 <br> <label><input type="checkbox" name="respiratory[]" value="Coughing Blood" <?php $result = chkdata_CB($obj,"respiratory","Coughing Blood"); echo $result;?> <? xl(">Coughing Blood",'e') ?> </label> 
 <br> <label><input type="checkbox" name="respiratory[]" value="Asthma" <?php $result = chkdata_CB($obj,"respiratory","Asthma"); echo $result;?> <? xl(">Asthma",'e') ?> </label> 
 <br> <label><input type="checkbox" name="respiratory[]" value="Tuberculosis" <?php $result = chkdata_CB($obj,"respiratory","Tuberculosis"); echo $result;?> <? xl(">Tuberculosis",'e') ?> </label>
 </td> 
 </tr> 
  
 <tr> 
  
<td class='text'    valign="top"> 
  
 <? xl("Digestive",'e') ?> <br> <label><input type="checkbox" name="digestive[]" value="Indigestion" <?php $result = chkdata_CB($obj,"digestive","Indigestion"); echo $result;?> <? xl(">Indigestion",'e') ?> </label> 
 <br> <label><input type="checkbox" name="digestive[]" value="Change in bowel habits" <?php $result = chkdata_CB($obj,"digestive","Change in bowel habits"); echo $result;?> <? xl(">Change in bowel habits",'e') ?> </label> 
 <br> <label><input type="checkbox" name="digestive[]" value="Bloody or tarry stools" <?php $result = chkdata_CB($obj,"digestive","Bloody or tarry stools"); echo $result;?> <? xl(">Bloody or tarry stools",'e') ?> </label> 
 <br> <label><input type="checkbox" name="digestive[]" value="Jaundice" <?php $result = chkdata_CB($obj,"digestive","Jaundice"); echo $result;?> <? xl(">Jaundice",'e') ?> </label> 
 <br> <label><input type="checkbox" name="digestive[]" value="Liver problems" <?php $result = chkdata_CB($obj,"digestive","Liver problems"); echo $result;?> <? xl(">Liver problems",'e') ?> </label> 
 <br> <label><input type="checkbox" name="digestive[]" value="Ulcers" <?php $result = chkdata_CB($obj,"digestive","Ulcers"); echo $result;?> <? xl(">Ulcers",'e') ?> </label> 
 <br> <label><input type="checkbox" name="digestive[]" value="Gallstone" <?php $result = chkdata_CB($obj,"digestive","Gallstone"); echo $result;?> <? xl(">Gallstone",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top"> 
  
  <? xl("Urinary",'e') ?> <br> <label><input type="checkbox" name="urinary[]" value="Frequency" <?php $result = chkdata_CB($obj,"urinary","Frequency"); echo $result;?> <? xl(">Frequency",'e') ?> </label> 
 <br> <label><input type="checkbox" name="urinary[]" value="Infections" <?php $result = chkdata_CB($obj,"urinary","Infections"); echo $result;?> <? xl(">Infections",'e') ?> </label> 
 <br> <label><input type="checkbox" name="urinary[]" value="Stones" <?php $result = chkdata_CB($obj,"urinary","Stones"); echo $result;?> <? xl(">Stones",'e') ?> </label> 
 <br> <label><input type="checkbox" name="urinary[]" value="Bladder incontinence" <?php $result = chkdata_CB($obj,"urinary","Bladder incontinence"); echo $result;?> <? xl(">Bladder incontinence",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top"> 
  
<? xl("Musculoskeletal",'e') ?> <br> <label><input type="checkbox" name="musculoskeletal[]" value="Joint pain swelling or redness" <?php $result = chkdata_CB($obj,"musculoskeletal","Joint pain swelling or redness"); echo $result;?> <? xl(">Joint pain swelling or redness",'e') ?> </label> 
 <br> <label><input type="checkbox" name="musculoskeletal[]" value="arthritis" <?php $result = chkdata_CB($obj,"musculoskeletal","arthritis"); echo $result;?> <? xl(">arthritis",'e') ?> </label> 
 <br> <label><input type="checkbox" name="musculoskeletal[]" value="back pain" <?php $result = chkdata_CB($obj,"musculoskeletal","back pain"); echo $result;?> <? xl(">back pain",'e') ?> </label> 
 <br> <label><input type="checkbox" name="musculoskeletal[]" value="muscle aches" <?php $result = chkdata_CB($obj,"musculoskeletal","muscle aches"); echo $result;?> <? xl(">muscle aches",'e') ?> </label> 
 <br> <label><input type="checkbox" name="musculoskeletal[]" value="muscle tenderness" <?php $result = chkdata_CB($obj,"musculoskeletal","muscle tenderness"); echo $result;?> <? xl(">muscle tenderness",'e') ?> </label> 
 <br> <label><input type="checkbox" name="musculoskeletal[]" value="gout" <?php $result = chkdata_CB($obj,"musculoskeletal","gout"); echo $result;?> <? xl(">gout",'e') ?> </label>
 </td> 
 </tr> 
  
 <tr> 
  
<td class='text'    valign="top"> 
  
  <? xl("Dermatological",'e') ?> <br> <label><input type="checkbox" name="dermatological[]" value="Rash" <?php $result = chkdata_CB($obj,"dermatological","Rash"); echo $result;?> <? xl(">Rash",'e') ?> </label> 
 <br> <label><input type="checkbox" name="dermatological[]" value="Itching" <?php $result = chkdata_CB($obj,"dermatological","Itching"); echo $result;?> <? xl(">Itching",'e') ?> </label> 
 <br> <label><input type="checkbox" name="dermatological[]" value="other skin problems" <?php $result = chkdata_CB($obj,"dermatological","other skin problems"); echo $result;?> <? xl(">other skin problems",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top"> 
  
 <? xl("Men",'e') ?> <br> <label><input type="checkbox" name="men[]" value="Prostate problems" <?php $result = chkdata_CB($obj,"men","Prostate problems"); echo $result;?> <? xl(">Prostate problems",'e') ?> </label> 
 <br> <label><input type="checkbox" name="men[]" value="night time urination" <?php $result = chkdata_CB($obj,"men","night time urination"); echo $result;?> <? xl(">night time urination",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top"> 
  
> <? xl("Women",'e') ?> <br> <label><input type="checkbox" name="women[]" value="Abnormal Menstrua periods" <?php $result = chkdata_CB($obj,"women","Abnormal Menstrua periods"); echo $result;?> <? xl(">Abnormal Menstrua periods",'e') ?> </label> 
 <br> <label><input type="checkbox" name="women[]" value="could you be pregnant" <?php $result = chkdata_CB($obj,"women","could you be pregnant"); echo $result;?> <? xl(">could you be pregnant",'e') ?> </label>
 </td> 
 </tr> 
  
 <tr> 
  
<td class='text'    valign="top"> 
  
 <? xl("Female reproductive",'e') ?> <br> <label><input type="checkbox" name="female_reproductive[]" value="breast lumps" <?php $result = chkdata_CB($obj,"female_reproductive","breast lumps"); echo $result;?> <? xl(">breast lumps",'e') ?> </label> 
 <br> <label><input type="checkbox" name="female_reproductive[]" value="recent mamogram" <?php $result = chkdata_CB($obj,"female_reproductive","recent mamogram"); echo $result;?> <? xl(">recent mamogram",'e') ?> </label> 
 <br> <label><input type="checkbox" name="female_reproductive[]" value="pap smear or pelvic exam" <?php $result = chkdata_CB($obj,"female_reproductive","pap smear or pelvic exam"); echo $result;?> <? xl(">pap smear or pelvic exam",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top"> 
  
 <? xl("Neurological",'e') ?> <br> <label><input type="checkbox" name="neurological[]" value="Paralysis-even temporary" /> <? xl("Paralysis-even temporary",'e') ?> </label> 
 <br> <label><input type="checkbox" name="neurological[]" value="stroke" <?php $result = chkdata_CB($obj,"neurological","stroke"); echo $result;?> <? xl(">stroke",'e') ?> </label> 
 <br> <label><input type="checkbox" name="neurological[]" value="numbness" <?php $result = chkdata_CB($obj,"neurological","numbness"); echo $result;?> <? xl(">numbness",'e') ?> </label> 
 <br> <label><input type="checkbox" name="neurological[]" value="loss of balance" <?php $result = chkdata_CB($obj,"neurological","loss of balance"); echo $result;?> <? xl(">loss of balance",'e') ?> </label> 
 <br> <label><input type="checkbox" name="neurological[]" value="dizziness" <?php $result = chkdata_CB($obj,"neurological","dizziness"); echo $result;?> <? xl(">dizziness",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top"> 
  
 <? xl("Psychiatric",'e') ?> <br> <label><input type="checkbox" name="psychiatric[]" value="Unusual thoughts" <?php $result = chkdata_CB($obj,"psychiatric","Unusual thoughts"); echo $result;?> <? xl(">Unusual thoughts",'e') ?> </label> 
 <br> <label><input type="checkbox" name="psychiatric[]" value="Nervousness" <?php $result = chkdata_CB($obj,"psychiatric","Nervousness"); echo $result;?> <? xl(">Nervousness",'e') ?> </label> 
 <br> <label><input type="checkbox" name="psychiatric[]" value="crying or sadness" <?php $result = chkdata_CB($obj,"psychiatric","crying or sadness"); echo $result;?> <? xl(">crying or sadness",'e') ?> </label> 
 <br> <label><input type="checkbox" name="psychiatric[]" value="depression" <?php $result = chkdata_CB($obj,"psychiatric","depression"); echo $result;?> <? xl(">depression",'e') ?> </label> 
 <br> <label><input type="checkbox" name="psychiatric[]" value="suicide attempts" <?php $result = chkdata_CB($obj,"psychiatric","suicide attempts"); echo $result;?> <? xl(">suicide attempts",'e') ?> </label>
 </td> 
 </tr> 
  
 <tr> 
  
<td class='text'    valign="top"> 
  
<? xl("Endocrinology",'e') ?> <br> <label><input type="checkbox" name="endocrinology[]" value="Thyroid disorder" <?php $result = chkdata_CB($obj,"endocrinology","Thyroid disorder"); echo $result;?> <? xl(">Thyroid disorder",'e') ?> </label> 
 <br> <label><input type="checkbox" name="endocrinology[]" value="Diabetes" <?php $result = chkdata_CB($obj,"endocrinology","Diabetes"); echo $result;?> <? xl(">Diabetes",'e') ?> </label> 
 <br> <label><input type="checkbox" name="endocrinology[]" value="Excess thirst" <?php $result = chkdata_CB($obj,"endocrinology","Excess thirst"); echo $result;?> <? xl(">Excess thirst",'e') ?> </label> 
 <br> <label><input type="checkbox" name="endocrinology[]" value="Excess hunger" <?php $result = chkdata_CB($obj,"endocrinology","Excess hunger"); echo $result;?> <? xl(">Excess hunger",'e') ?> </label> 
 <br> <label><input type="checkbox" name="endocrinology[]" value="excess urination" <?php $result = chkdata_CB($obj,"endocrinology","excess urination"); echo $result;?> <? xl(">excess urination",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top"> 
  
 <? xl("Hematological",'e') ?> <br> <label><input type="checkbox" name="hematological[]" value="Bleeding" <?php $result = chkdata_CB($obj,"hematological","Bleeding"); echo $result;?> <? xl(">Bleeding",'e') ?> </label> 
 <br> <label><input type="checkbox" name="hematological[]" value="Easy bruising" <?php $result = chkdata_CB($obj,"hematological","Easy bruising"); echo $result;?> <? xl(">Easy bruising",'e') ?> </label> 
 <br> <label><input type="checkbox" name="hematological[]" value="risk factors for hiv" <?php $result = chkdata_CB($obj,"hematological","risk factors for hiv"); echo $result;?> <? xl(">risk factors for hiv",'e') ?> </label> 
 <br> <label><input type="checkbox" name="hematological[]" value="Anemia" <?php $result = chkdata_CB($obj,"hematological","Anemia"); echo $result;?> <? xl(">Anemia",'e') ?> </label> 
 <br> <label><input type="checkbox" name="hematological[]" value="Cancer" <?php $result = chkdata_CB($obj,"hematological","Cancer"); echo $result;?> <? xl(">Cancer",'e') ?> </label>
 </td> 
  
<td class='text'    valign="top">&nbsp; 
  
  
 </td> 
 </tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <? xl("Have you had any operations",'e') ?> <textarea name="have_you_had_any_operations"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"have_you_had_any_operations"); echo $result;?></textarea>
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Are you being treated now or have been treated for any illness",'e') ?> <textarea name="are_you_being_treated_now_or_have_been_treated_for_any_illness"  rows="4" cols="40"><?php $result = chkdata_Txt($obj,"are_you_being_treated_now_or_have_been_treated_for_any_illness"); echo $result;?></textarea></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3" style="border: 1px #000000 solid;"><h3> <? xl("Social History 
 ",'e') ?></h3> </td></tr> 
  
 <tr> 
  
 <td   colspan="2" class='text'><strong> 
  
 Marital </strong></td> 
  
<td    valign="top" class='text'><strong> 
  
 Health Habits: </strong></td> 
 </tr> 
  
 <tr> 
  
 <td class='text'   colspan="2"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Marital status",'e') ?>
     <label><input type="checkbox" name="marital_status[]" value="single" <?php $result = chkdata_CB($obj,"marital_status","single"); echo $result;?> <? xl(">single",'e') ?> </label>
     <label><input type="checkbox" name="marital_status[]" value="married" <?php $result = chkdata_CB($obj,"marital_status","married"); echo $result;?> <? xl(">married",'e') ?> </label> 
  <label><input type="checkbox" name="marital_status[]" value="widowed" <?php $result = chkdata_CB($obj,"marital_status","widowed"); echo $result;?> <? xl(">widowed",'e') ?> </label> 
  <label><input type="checkbox" name="marital_status[]" value="divorced" <?php $result = chkdata_CB($obj,"marital_status","divorced"); echo $result;?> <? xl(">divorced",'e') ?> </label></td></tr> 
  
 </table> 
 </td> 
  
<td class='text'    valign="top"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Do you smoke",'e') ?>
     <label><input type="checkbox" name="do_you_smoke[]" value="Yes" <?php $result = chkdata_CB($obj,"do_you_smoke","Yes"); echo $result;?> <? xl(">Yes",'e') ?> </label>
     <label><input type="checkbox" name="do_you_smoke[]" value="No" <?php $result = chkdata_CB($obj,"do_you_smoke","No"); echo $result;?> <? xl(">No",'e') ?> </label></td></tr> 
  
 </table> 
 </td> 
 </tr> 
  
 <tr> 
  
 <td class='text'   colspan="2"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Occupation",'e') ?> <input type="text" name="occupation" value="<?php $result = chkdata_Txt($obj,"occupation"); echo $result;?>"></td></tr> 
  
 </table> 
 </td> 
  
<td class='text'    valign="top"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("How many packs per day",'e') ?> <input type="text" name="how_many_packs_per_day" value="<?php $result = chkdata_Txt($obj,"how_many_packs_per_day"); echo $result;?>"></td></tr> 
  
 </table> 
 </td> 
 </tr> 
  
 <tr> 
  
 <td class='text'   colspan="2"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Leisure activities",'e') ?> <input type="text" name="leisure_activities" value="<?php $result = chkdata_Txt($obj,"leisure_activities"); echo $result;?>"></td></tr> 
  
 </table> 
 </td> 
  
<td class='text'    valign="top"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("For how many years",'e') ?> <input type="text" name="for_how_many_years" value="<?php $result = chkdata_Txt($obj,"for_how_many_years"); echo $result;?>"></td></tr> 
  
 </table> 
 </td> 
 </tr> 
  
 <tr> 
  
 <td class='text'   colspan="2"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Educational level",'e') ?> <input type="text" name="educational_level" value="<?php $result = chkdata_Txt($obj,"educational_level"); echo $result;?>"></td></tr> 
  
 </table> 
 </td> 
  
<td class='text'    valign="top"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("How much alcohol do you drink",'e') ?> <input type="text" name="how_much_alcohol_do_you_drink" value="<?php $result = chkdata_Txt($obj,"how_much_alcohol_do_you_drink"); echo $result;?>"></td></tr> 
  
 </table> 
 </td> 
 </tr> 
  
 <tr> 
  
 <td class='text'   colspan="2">&nbsp; 
  
  
 </td> 
  
<td class='text'    valign="top"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Do you use any drugs",'e') ?> <input type="text" name="do_you_use_any_drugs" value="<?php $result = chkdata_Txt($obj,"do_you_use_any_drugs"); echo $result;?>"></td></tr> 
  
 </table> 
 </td> 
 </tr> 
  
 <tr><td class='text'   colspan="3"  style="border: 1px #000000 solid;"> 
  <h3>
 Family History: </h3>
 </td></tr> 
 <tr><td class='text'   colspan="3"> <? xl("Check if any close family members(parents,brothers and sisters,children) have:",'e') ?> </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Heart problems",'e') ?>
     <label><input type="checkbox" name="heart_problems[]" value="Mother" <?php $result = chkdata_CB($obj,"heart_problems","Mother"); echo $result;?> <? xl(">Mother",'e') ?> </label>
     <label><input type="checkbox" name="heart_problems[]" value="Father" <?php $result = chkdata_CB($obj,"heart_problems","Father"); echo $result;?> <? xl(">Father",'e') ?> </label>
     <label><input type="checkbox" name="heart_problems[]" value="Brother" <?php $result = chkdata_CB($obj,"heart_problems","Brother"); echo $result;?> <? xl(">Brother",'e') ?> </label> 
  <label><input type="checkbox" name="heart_problems[]" value="Sister" <?php $result = chkdata_CB($obj,"heart_problems","Sister"); echo $result;?> <? xl(">Sister",'e') ?> </label>
 <label><input type="checkbox" name="heart_problems[]" value="Child" <?php $result = chkdata_CB($obj,"heart_problems","Child"); echo $result;?> <? xl(">Child",'e') ?> </label>
 <label><input type="checkbox" name="heart_problems[]" value="None" <?php $result = chkdata_CB($obj,"heart_problems","None"); echo $result;?> <? xl(">None",'e') ?> </label></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("High blood pressure",'e') ?>
     <label><input type="checkbox" name="high_blood_pressure[]" value="Mother" <?php $result = chkdata_CB($obj,"high_blood_pressure","Mother"); echo $result;?> <? xl(">Mother",'e') ?> </label>
     <label><input type="checkbox" name="high_blood_pressure[]" value="Father" <?php $result = chkdata_CB($obj,"high_blood_pressure","Father"); echo $result;?> <? xl(">Father",'e') ?> </label>
     <label><input type="checkbox" name="high_blood_pressure[]" value="Brother" <?php $result = chkdata_CB($obj,"high_blood_pressure","Brother"); echo $result;?> <? xl(">Brother",'e') ?> </label>
     <label><input type="checkbox" name="high_blood_pressure[]" value="Sister" <?php $result = chkdata_CB($obj,"high_blood_pressure","Sister"); echo $result;?> <? xl(">Sister",'e') ?> </label>
     <label><input type="checkbox" name="high_blood_pressure[]" value="Child" <?php $result = chkdata_CB($obj,"high_blood_pressure","Child"); echo $result;?> <? xl(">Child",'e') ?> </label>
     <label><input type="checkbox" name="high_blood_pressure[]" value="None" <?php $result = chkdata_CB($obj,"high_blood_pressure","None"); echo $result;?> <? xl(">None",'e') ?> </label></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Diabetes",'e') ?>
     <label><input type="checkbox" name="diabetes[]" value="Mother" <?php $result = chkdata_CB($obj,"diabetes","Mother"); echo $result;?> <? xl(">Mother",'e') ?> </label>
     <label><input type="checkbox" name="diabetes[]" value="Father" <?php $result = chkdata_CB($obj,"diabetes","Father"); echo $result;?> <? xl(">Father",'e') ?> </label>
     <label><input type="checkbox" name="diabetes[]" value="Brother" <?php $result = chkdata_CB($obj,"diabetes","Brother"); echo $result;?> <? xl(">Brother",'e') ?> </label> 
<label><input type="checkbox" name="diabetes[]" value="Sister" <?php $result = chkdata_CB($obj,"diabetes","Sister"); echo $result;?> <? xl(">Sister",'e') ?> </label>
 <label><input type="checkbox" name="diabetes[]" value="Child" <?php $result = chkdata_CB($obj,"diabetes","Child"); echo $result;?> <? xl(">Child",'e') ?> </label>
 <label><input type="checkbox" name="diabetes[]" value="None" <?php $result = chkdata_CB($obj,"diabetes","None"); echo $result;?> <? xl(">None",'e') ?> </label></td></tr> 
  
 </table> 
 </td></tr> 
  
 <tr><td class='text'   colspan="3"> 
  
 <table> 
  
 <tr><td class='text' > cancer<label><input type="checkbox" name="_cancer[]" value="Mother" <?php $result = chkdata_CB($obj,"_cancer","Mother"); echo $result;?> <? xl(">Mother",'e') ?> </label>
   <label><input type="checkbox" name="_cancer[]" value="Father" <?php $result = chkdata_CB($obj,"_cancer","Father"); echo $result;?> <? xl(">Father",'e') ?> </label> 
  <label><input type="checkbox" name="_cancer[]" value="Brother" <?php $result = chkdata_CB($obj,"_cancer","Brother"); echo $result;?> <? xl(">Brother",'e') ?> </label>
 <label><input type="checkbox" name="_cancer[]" value="Sister" <?php $result = chkdata_CB($obj,"_cancer","Sister"); echo $result;?> <? xl(">Sister",'e') ?> </label>
 <label><input type="checkbox" name="_cancer[]" value="Child" <?php $result = chkdata_CB($obj,"_cancer","Child"); echo $result;?> <? xl(">Child",'e') ?> </label>
 <label><input type="checkbox" name="_cancer[]" value="None" <?php $result = chkdata_CB($obj,"_cancer","None"); echo $result;?> <? xl(">None",'e') ?> </label></td></tr> 
  
 </table> 
     </td></tr> 
  
 <tr> 
  
 <td class='text'   colspan="3" style="border: 1px #000000 solid;"> 
  <h3>
 Hospitalizations: </h3>
 </td></tr> 
  
 <tr> 
  
<td class='text'    valign="top"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Year",'e') ?> <input type="text" name="year" value="<?php $result = chkdata_Txt($obj,"year"); echo $result;?>"></td></tr> 
  
 </table> 
 </td> 
  
<td class='text'    valign="top"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Hospital",'e') ?> <input type="text" name="hospital" value="<?php $result = chkdata_Txt($obj,"hospital"); echo $result;?>"></td></tr> 
  
 </table> 
 </td> 
  
<td class='text'    valign="top"> 
  
 <table> 
  
 <tr><td class='text' > <? xl("Reason",'e') ?> <input type="text" name="reason" value="<?php $result = chkdata_Txt($obj,"reason"); echo $result;?>"></td></tr> 
  
 </table> 
 </td> 
 </tr> 
  
 </table> 
 <table></table><input type="submit" name="submit form" value="submit form" /> 
  
 </form> 
 <?php 
 formFooter(); 
 ?> 
