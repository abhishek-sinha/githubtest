<?php
if(@$_POST['Submit']=="submit"){
$file="demo.xls";
extract($_POST);
//open Excel Stream to output 
$export_file = "/example.xls";  
 $fp = fopen($export_file, "wb"); $output = array( array("Serial" => "1", "Item" => "Cables", "Stock" => "100", "Cost per unit" => "$2" ), array("Serial" => "2", "Item" => "Phones", "Stock" => "40", "Cost per unit" => "$23" ), array("Serial" => "3", "Item" => "Keypads", "Stock" => "5", "Cost per unit" => "$4" ), array("Serial" => "4", "Item" => "Helmets", "Stock" => "54", "Cost per unit" => "$42" ), ); 
 //write the array to Excel
 fwrite($fp, serialize($output)); 
 fclose($fp); //set headers to download Excel sheet
 header ("Cache-Control: no-cache, must-revalidate");
 header ("Pragma: no-cache"); 
 header ("Content-type: application/vnd.ms-excel");
 header ("Content-Disposition: attachment; filename=\"" . basename($export_file) . "\"" );   
 readfile($export_file);
 
}
?>
<!-- saved from url=(0022)http://internet.e-mail --><html><head>

<script type="text/javascript">
function validateOnSubmit()
{
if(document.mainform.complaintdate.value == ''){
alert("Please Select the Date of Complaint");
document.mainform.complaintdate.focus();
return false;
}
if(document.mainform.complainantname.value == ''){
alert("Please Select the Name of Complainant");
document.mainform.complainantname.focus();
return false;
}
if(document.mainform.natureofcomplaint.value == '-'){
alert("Please select the Nature of Complaint");
document.mainform.state.focus();
return false;
}
if(document.mainform.callhandledby.value == ''){
alert("Please select Call handled by");
document.mainform.callhandledby.focus();
return false;
}
if(document.mainform.complaintstatus.value == ''){
alert("Please Select Call Status");
document.mainform.complaintstatus.focus();
return false;
}
document.mainform.submit();
}

</script>
<script language="javascript" type="text/javascript" src="datetimepicker.js">
</script>
<title>NDIM IT Support System </title>

<style type="text/css">.pageText {	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 12px;    margin-right: 2px;}.pageTextBold {	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 12px;    margin-right: 0px;    font-weight:bold;}.pageTextLarge {	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 12px;    margin-right: 2px;    font-weight:bold; }.qText {	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 16px;   }.qOptions {	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 12px;   }.pageTextSmall {    color:Gray;	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 10px;}.smallLink {    	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 10px;	COLOR:#006699;}            .style2        {            width: 493px;            height: 18px;        }        .style3        {            width: 175px;            height: 16px;        }        .style4        {            font-family: Verdana, Arial, Helvetica, sans-serif;            font-size: 11px;            font-weight: bold;            margin-right: 0px;        }        .style5        {            width: 255px;            height: 19px;        }        .style6        {            width: 113px;            height: 18px;        }        .style7        {            width: 114px;            height: 15px;        }        .style8        {            width: 86px;            height: 10px;        }        


</style>
</head>
<body>

</div>
<form name='mainform' method="POST" action="">

                  
<table align="center"  border="0" >            
<tr><td  align="center" ><img src="technicalsupport.jpg" style="width: 200px; height: 80px" /></td></tr>	    
<tr>	<th class="pageText" width=30%><b><font color=red size=4>New Delhi Institute of Management</font></b></th></tr> 

<tr>	<th class="pageText" width=20%><b><font color=red size=2>IT/Technical Support Reporting System</font></b></th></tr>
<tr>	<td></td></tr>
<tr>	<td></td></tr>

<tr>	<td></td></tr>
</table>



<table align="center" cellpadding="2" cellspacing="2" border="0" width=45%>


<tr>	<th class="pageText" width=20%><b><font color=#FF0000 size=2>Instructions:</font></b></th>
	
</tr>
<tr>	<td></td></tr>
<tr>	<th class="pageText" ><img src="arrow.jpg" height="20" width="20" /></td>
	
	<td class="pageText"><b>Enter all relevent details in the Complaint form and click Submit.</b></td>
</tr>




</table>


<table bgcolor="#CCCCFF" align="center" cellpadding="2" cellspacing="2" border="0" style="border-style: solid; border-width: thin; border-color: #FF0000; width: 50%;">

<tr >	<td >&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>	<td class="pageText" colspan=3>
		<fieldset>
		<legend><b>Complaint Details:</b></legend>
		<table cellpadding="4" cellspacing="4">

		<tr><td class="pageText"><font color=red>*</font><b>Date of Complaint</b><br /></td> <td>&nbsp;:&nbsp;</td></td><td><input name="complaintdate" id="demo1" type="text" size="20"><a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>

		</td></tr>
		
		<tr>	<td class="pageText"><font color=red>*</font><b>Name of the complainant</b><br /></td> <td>&nbsp;:&nbsp;</td>
		<td><select name="complainantname" class="inputField" > 
			<option value="-">---------------------------------</option>
			<option value="Abhishek Bothra">Abhishek Bothra</option>
			<option value="Amandeep Singh">Amandeep Singh</option>
			<option value="Amphitheater">Amphitheater</option>
			<option value="Anand Manral">Anand Manral</option>
			<option value="Anita Saxena">Anita Saxena</option>
			<option value="Ankur Bansal">Ankur Bansal</option>
			<option value="Arati Basu">Arati Basu</option>
			<option value="Auditorium">Auditorium</option>
			<option value="Bhumika Bansal">Bhumika Bansal</option>
			<option value="Bk Dhup">Bk Dhup</option>
			<option value="Chand Tandon">Chand Tandon</option>
			<option value="Chandra Prakash">Chandra Prakash</option>
			<option value="Chandrama Kathait">Chandrama Kathait</option>
			<option value="Class Room 102">Class Room 102</option>
			<option value="Class Room 201">Class Room 201</option>
			<option value="Class Room 202">Class Room 202</option>
			<option value="Class Room 203">Class Room 203</option>
			<option value="Class Room 301">Class Room 301</option>
			<option value="Class Room 302">Class Room 302</option>
			<option value="Class Room 303">Class Room 303</option>
			<option value="Class Room 401">Class Room 401</option>
			<option value="Class room 5401">Class room 5401</option>
			<option value="Class room 5402">Class room 5402</option>
			<option value="Class room 5403">Class room 5403</option>
			<option value="Class room 5404">Class room 5404</option>
			<option value="Class Room 5501">Class Room 5501</option>
			<option value="Class Room 5502">Class Room 5502</option>
			<option value="Class Room 5503">Class Room 5503</option>
			<option value="Conference Room">Conference Room</option>
			<option value="CRC Student">CRC Student</option>
			<option value="Damian">Damian</option>
			<option value="Devendra Singh">Devendra Singh</option>
			<option value="Gajendra Sharma">Gajendra Sharma</option>
			<option value="Gauri Modwel">Gauri Modwel</option>
			<option value="Gs Riar">Gs Riar</option>
			<option value="Gurleen Kaur">Gurleen Kaur</option>
			<option value="Harish Kumar">Harish Kumar</option>
			<option value="Harish Yadav">Harish Yadav</option>
			<option value="Hemlata Singh">Hemlata Singh</option>
			<option value="Jasleen Bindra">Jasleen Bindra</option>
			<option value="Kamal Ashwani">Kamal Ashwani</option>
			<option value="Komal Sharma">Komal Sharma</option>
			<option value="Letha P">Letha P</option>
			<option value="Madan Kumar">Madan Kumar</option>
			<option value="Madhu Dogra">Madhu Dogra</option>
			<option value="Mahender">Mahender</option>
			<option value="Manab Adhikary">Manab Adhikary</option>
			<option value="Mandeeprawat">Mandeeprawat</option>
			<option value="Manoj Kumar">Manoj Kumar</option>
			<option value="Manvendra Singh">Manvendra Singh</option>
			<option value="Meena Sinha">Meena Sinha</option>
			<option value="Meenu Singh">Meenu Singh</option>
			<option value="Mini Rajan">Mini Rajan</option>
			<option value="Mohd Kasim">Mohd Kasim</option>
			<option value="Monika Nijhawan">Monika Nijhawan</option>
			<option value="Neeti">Neeti</option>
			<option value="Nishu Malhotra">Nishu Malhotra</option>
			<option value="Palak Khanna">Palak Khanna</option>
			<option value="Poonam Rawat">Poonam Rawat</option>
			<option value="Pradeep Jha">Pradeep Jha</option>
			<option value="Pradeep Kumar">Pradeep Kumar</option>
			<option value="Praveen Malik">Praveen Malik</option>
			<option value="Pronoy Dutt">Pronoy Dutt</option>
			<option value="Raj Changrani">Raj Changrani</option>
			<option value="Raj Jaiswal">Raj Jaiswal</option>
			<option value="Ravi Malhotra">Ravi Malhotra</option>
			<option value="Ravi Prakash">Ravi Prakash</option>
			<option value="Ritu">Ritu</option>
			<option value="S Mookherjee">S Mookherjee</option>
			<option value="S Prasad">S Prasad</option>
			<option value="Sandipdas">Sandipdas</option>
			<option value="Sangeeta Magan">Sangeeta Magan</option>
			<option value="Sanjeev Kanojia">Sanjeev Kanojia</option>
			<option value="Sarita Garkoti">Sarita Garkoti</option>
			<option value="Saurabh Tiwari">Saurabh Tiwari</option>
			<option value="Shagun Arora">Shagun Arora</option>
			<option value="Shivani Agarwal">Shivani Agarwal</option>
			<option value="Shubhra Samaddar">Shubhra Samaddar</option>
			<option value="Ss Sharma">Ss Sharma</option>
			<option value="Sunil Hastodiya">Sunil Hastodiya</option>
			<option value="Sunil Rana">Sunil Rana</option>
			<option value="Teena Singh">Teena Singh</option>
			<option value="Tripti Desai">Tripti Desai</option>
			<option value="Vigya Garg">Vigya Garg</option>
			<option value="Vijay Jain">Vijay Jain</option>
			<option value="Vinay Kumar">Vinay Kumar</option>
			<option value="Vineet Vishnu">Vineet Vishnu</option>
			<option value="Vinita Sharma">Vinita Sharma</option>
			<option value="Vk Mahajan">Vk Mahajan</option>
			<option value="Vmbansaldda">Vmbansaldda</option>
			<option value="Wasim Akram">Wasim Akram</option>
		</select></td>
</tr>

<tr>	<td class="pageText"><font color=red>*</font><b>Nature of Complaint</b> </td> <td>&nbsp;:&nbsp;</td>
	<td><select name="natureofcomplaint" class="inputField">
			<option value="-">-----------</option>
			<option value="Hardware Issues">Hardware Issues</option>
			<option value="Internet Problem">Internet Problem</option>
			<option value="LCD Projector">LCD Projector</option>
			<option value="Networking Problem">Networking Problem</option>
			<option value="Printer Issues">Printer Issues</option>
			<option value="Scanner Issues">Scanner Issues</option>
			<option value="Slow Computer Issues">Slow Computer Issues</option>
			<option value="Software Issues">Software Issues</option>
			<option value="UPS Issues">UPS Issues</option>
			<option value="Virus Issues">Virus Issues</option>
			<option value="Othesr">Others</option>
		</select></td>
</tr>

<tr>	<td class="pageText"><b>&nbsp;Complaint Discription (if any)</b></td> <td>&nbsp;:&nbsp;</td>
	<td><textarea name="complaintdiscription" rows="6" cols="25" class="inputField" style="width:250px;"></textarea></td>
	</tr>


		</table>
		</fieldset>

	</td>

<tr >	<td >&nbsp;</td>
	<td>&nbsp;</td>
</tr>

</tr>

<tr>	<td class="pageText" colspan=3>
		<fieldset>
		<legend><b>Call handled Details:</b></legend>
		<table cellpadding="4" cellspacing="4">
		<tr>
			<td class="pageText"><font color=red>*</font><b>Call Handled by</b></td> <td>&nbsp;:&nbsp;</td>
			<td><select name="callhandledby" class="inputField">
			<option value="-">---------------</option>
			<option value="Amandeep Singh">Amandeep Singh</option>
			<option value="Saurabh Tiwari">Saurabh Tiwari</option>
			<option value="Ravi Prakash">Ravi prakash</option>
		</select></td>
		</tr>

<tr>	<td class="pageText"><font color=red>*</font><b>Complaint Status</b></td> <td>&nbsp;:&nbsp;</td>
	<td><select name="complaintstatus" class="inputField">
			<option value="-">-------------------------</option>
			<option value="Completed">Completed</option>
			<option value="Under process">Under Process</option>
			<option value="Pending">Pending</option>
		</select></td>
</tr>	    

		
		</table>
		</fieldset>

	</td>



</tr>
</tr>
<tr >	<td class="pageText"></td>
	<td>&nbsp;</td>
</tr>
<tr >	<td class="pageText" colspan=3 ><div align="center">
			
		<input type="submit" name="Submit" value="submit">&nbsp;&nbsp;<input type="reset" value="Reset!"></div></td>
                  <br>
             
			
                  

	<td>&nbsp;</td>
</tr>


</table>
</div>


</form>
</body>
</html>