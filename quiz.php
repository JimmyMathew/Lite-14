
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<style type="text/css">
.texts #quizform table {
	text-align: left;
}
</style>
</head>

<body>
<script language="javascript">

</script>
<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <table border='0' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
    <tr class=texts>
	<?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Your Score has been updated successfully</span><br><br>";
}
?><br>
<form action="insertpoints.php" name="quizform" id="quizform">
<table width="1180" border="0">
  <br>
    <tr><td>1.Which of the following languages is more suited for a structured program?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q1" ID="q1">
 PL/1<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q1" ID="q1">
     FORTRAN   <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q1" ID="q1">
C<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="1" NAME="q1" ID="q1">
       PASCAL<BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="1180" border="0">
    <tr><td>2.Which of the following computer languages is used for artificial intelligence?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q2" ID="q2">
 FORTRAN<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q2" ID="q2">
     PROLOG  <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q2" ID="q2">
COBOL<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q2" ID="q2">
      None of the above<BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="1180" border="0">
    <tr><td>3.Which of the following bus types is being used by the Apple Macintosh computer?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q3" ID="q3">
 ISA<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q3" ID="q3">
     NuBus  <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q3" ID="q3">
EISA<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q3" ID="q3">
     PCI Bus <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="1180" border="0">
    <tr><td>4.Servers are computers that provide resources to other computers connected to a: </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q4" ID="q4">
 Mainframe<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q4" ID="q4">
     Supercomputer<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q4" ID="q4">
Network<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q4" ID="q4">
      Client<BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
   <table width="1180" border="0">
    <tr><td>5.Frames from one LAN can be transmitted to another LAN via the device </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q5" ID="q5">
 Router
<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q5" ID="q5">
     Bridge<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q5" ID="q5">
Repeater<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q5" ID="q5">
      Modem<BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  <table width="1180" border="0">
    <tr><td>6.Which of the following conditions is used to transmit two packets over a medium at the same time?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q6" ID="q6">
 Contention
<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q6" ID="q6">
     Collision<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q6" ID="q6">
Synchronous<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q6" ID="q6">
      Asynchronous<BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  <table width="1180" border="0">
    <tr><td>7.The term 'duplex' refers to the ability of the data receiving stations to echo back a confirming message to the sender. <br>&nbsp;&nbsp;&nbsp;&nbsp;In full duplex data transmission, both the sender and the receiver</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q7" ID="q7">
 Cannot talk at once
 <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q7" ID="q7">
     Can receive and send data simultaneously<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q7" ID="q7">
Can send or receive data one at a time<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q7" ID="q7">
     Can do one way data transmission only <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="1180" border="0">
    <tr><td>8.How many hosts are attached to each of the local area networks at your site?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q8" ID="q8">
 128<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q8" ID="q8">
     254<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q8" ID="q8">
          256<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q8" ID="q8">
   64 <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
   <table width="1180" border="0">
    <tr><td>9.Which of the following TCP/IP protocol is used for transferring electronic mail messages from one machine to another?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q9" ID="q9">
 FTP
 <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q9" ID="q9">
     SNMP<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q9" ID="q9">
          SMTP<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q9" ID="q9">
   RPC<BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
   <table width="1180" border="0">
    <tr><td>10.What operates in the Data Link and the Network layer?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q10" ID="q10">
NIC <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q10" ID="q10">
     Bridge<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q10" ID="q10">
          Brouter<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q10" ID="q10">
   Router<BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  <table width="1180" border="0">
    <tr><td>11.Which of the following device is used to connect two systems, especially if the systems use different protocols?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q11" ID="q11">
Hub<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q11" ID="q11">
     Bridge<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q11" ID="q11">
          Gateway<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q11" ID="q11">
   Repeater<BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
 
  <table width="1180" border="0">
    <tr><td>12.A distributed network configuration in which all data/information pass through a central computer is
	</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q12" ID="q12">
 Bus network
<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q12" ID="q12">
     Star network<BR></td></tr><tr>    
     <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q12" ID="q12">
          Ring network<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q12" ID="q12">Point-to-point network
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
 
  
  
  <table width="1180" border="0">
    <tr><td>13. The part of machine level instruction, which tells the central processor what has to be done, is
	</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="1" NAME="q13" ID="q13">
   Operation code
   <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q13" ID="q13">
     Address<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q13" ID="q13">
          Locator<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q13" ID="q13">
	Flip-Flop <BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  
  
  <table width="1180" border="0">
    <tr>
      <td>14. The Memory Buffer Register (MBR)
	</td>
    </tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><p>
        <INPUT TYPE="RADIO" VALUE="0" NAME="q14" ID="q14">
        Is a hardware memory device which denotes the location of the current instruction &nbsp; &nbsp; &nbsp;&nbsp;<BR>
        </p></td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q14" ID="q14">
     Is a group of electrical circuits (hardware), that performs the intent of instructions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fetched from memory. <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q14" ID="q14">
          Contains the address of the memory location that is to be read from or stored into.<BR></td>
    <td width="277"><br><INPUT TYPE="RADIO" VALUE="1" NAME="q14" ID="q14">
	Contains a copy of the designated memory location specified by the MAR after a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"read" or&nbsp;the new contents of the memory prior to a "write".<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  
   <table width="1180" border="0">
    <tr><td>15. Resolution of externally defined symbols is performed by
	</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="1" NAME="q15" ID="q15">
   Linker
   <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q15" ID="q15">
   Loader<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q15" ID="q15">
          Compiler<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q15" ID="q15">
	Assembler <BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  
  
    <table width="1180" border="0">
    <tr><td>
16. In which addressing mode the contents of a register specified in the instruction are first decremented, and 
then these contents are used as the effective address of the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;operands? </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q16" ID="q16">
   Index addressing
   <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q16" ID="q16">
   Indirect addressing<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q16" ID="q16">
          Auto increment<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="1" NAME="q16" ID="q16">
	Auto decrement <BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
 
 


 <table width="1180" border="0">
    <tr><td>
17. When did IBM release the first version of disk operating system DOS version 1.0?
	</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="1" NAME="q17" ID="q17">
1981
   <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q17" ID="q17">
 1982<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q17" ID="q17">
          1983<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q17" ID="q17">
	1984<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  
 <table width="1180" border="0">
    <tr><td>
18. Operating system
	</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q18" ID="q18">
	Links a program with the subroutines it references

   <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q18" ID="q18">
  Provides a layered, user-friendly interface
<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q18" ID="q18">
           Enables the programmer to draw a flowchart
<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q18" ID="q18">
	 All of the above
<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
 
<table width="1180" border="0">
    <tr><td>
19. Data encryption
 
 </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q19" ID="q19">
Is mostly used by public networks
 <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q19" ID="q19">
 Is mostly used by financial networks
 <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q19" ID="q19">
          Cannot be used by private installations
 <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q19" ID="q19">
	Is not necessary, since data cannot be intercepted



<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  

<table width="1180" border="0">
    <tr><td>20. Which company was declared as the most attractive employer in India, according to the HR service company, Randstad?
	</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q20" ID="q20">
Hewlett Packard   <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q20" ID="q20">
    Google India
<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q20" ID="q20">
           Microsoft
<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q20" ID="q20">
	 Lenovo 
<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  
  
    



<table width="1180" border="0">
    <tr><td>21.Which social media on 18 April 2013 unveiled a new music app called #Music?

 
	</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="1" NAME="q21" ID="q21">
Twitter
 <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q21" ID="q21">
    Facebook
 <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q21" ID="q21">
           YouTube
 <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q21" ID="q21">
	 Stumble Upon 
<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  
  
    
<table width="1180" border="0">
    <tr><td>22.Who invented microprocessor?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q22" ID="q22">
Joseph jacquard
 <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q22" ID="q22">
    Herman h Goldstein
 <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q22" ID="q22">
           Marcian E Huff
 <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q22" ID="q22">
	 George boole 
<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  
  
    

<table width="1180" border="0">
    <tr><td>23.Infrared signals can be used for short range communication in a closed area using ___ propagation.
	
</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q23" ID="q23">
Ground <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q23" ID="q23">
    Sky
 <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q23" ID="q23">
           Line of sight
<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q23" ID="q23">
	 Space    
<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
<table width="1180" border="0">
    <tr><td>24.India's first super computer is
</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q24" ID="q24">
Agni
  <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q24" ID="q24">
    Flow solver
 
 <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q24" ID="q24">
           Param
 <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q24" ID="q24">
	 Trisul

<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>  





 	<table width="1180" border="0">
    <tr><td>25.Which of the following is an example of non volatile memory?
 	
 </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q25" ID="q25">
VLSI
 <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q25" ID="q25">
    LSI
 <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q25" ID="q25">
          RAM <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="1" NAME="q25" ID="q25">
	 ROM
<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>  
  
  
  
  
 
 <table width="1180" border="0">
    <tr><td>26.The errors that can be pointed out by the compiler are
 	</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q26" ID="q26">
Syntax errors 
 <BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q26" ID="q26">
    Internal errors
 <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q26" ID="q26">
           Semantic errors<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="1" NAME="q26" ID="q26">
Logical errors<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>  
  
  
    
 <table width="1180" border="0">
    <tr>
      <td> 27. Who is considered to be &quot;The Father&quot; of Artificial Intelligence?</td>
    </tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q27" ID="q27">
Alan Turing<BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q27" ID="q27">
    John McCarthy
 <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q27" ID="q27">
           George Boole
 <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q27" ID="q27">
Allen Newell<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>  
  
  
    
<table width="1180" border="0">
    <tr><td> 28. From what location are the 1st computer instructions available on boot up?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="1" NAME="q28" ID="q28">
ROM BIOS<BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q28" ID="q28">
    CPU<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q28" ID="q28">
           boot.ini<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q28" ID="q28">
CONFIG.SYS<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  
<table width="1180" border="0">
    <tr><td> 29. A hard disk is divided into tracks which are further subdivided into:</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q29" ID="q29">
Clusters<BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q29" ID="q29">
    Sectors<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q29" ID="q29">
           Vectors<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q29" ID="q29">
Heads<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p



><table width="1180" border="0">
    <tr><td> 30. Which common bus specification provides the fastest data transfer rate?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q30" ID="q30">
VL bus<BR>
   </td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q30" ID="q30">
    ISA<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q30" ID="q30">
          PCI<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q30" ID="q30">
All of the above<BR></td></tr><tr>
    </tr>
  </table>
  <p>&nbsp;</p>
<input name="" value="Submit your answers" class="button" type="submit" onClick="javascript:suming();"/>
  <input name="points"  id="points" type="text" readonly="readonly" style="display:none"/><br /><br />
  <script>
function getRadioVal(form, name) {
    var val;
    // get list of radio buttons with specified name
    var radios = form.elements[name];
    
    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) { // radio checked?
            val = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }else{
			val = 0;
		}
    }
    return val; // return value of checked radio or undefined if none checked
}
function suming(){
	var txtQuestion1 = getRadioVal( document.getElementById('quizform'), 'q1' );
	var txtQuestion2 = getRadioVal( document.getElementById('quizform'), 'q2' );
	var txtQuestion3 = getRadioVal( document.getElementById('quizform'), 'q3' );
	var txtQuestion4 = getRadioVal( document.getElementById('quizform'), 'q4' );
	var txtQuestion5 = getRadioVal( document.getElementById('quizform'), 'q5' );
	var txtQuestion6 = getRadioVal( document.getElementById('quizform'), 'q6' );
	var txtQuestion7 = getRadioVal( document.getElementById('quizform'), 'q7' );
	var txtQuestion8 = getRadioVal( document.getElementById('quizform'), 'q8' );
	var txtQuestion9 = getRadioVal( document.getElementById('quizform'), 'q9' );
	var txtQuestion10 = getRadioVal( document.getElementById('quizform'),'q10' );
	var txtQuestion11= getRadioVal( document.getElementById('quizform'), 'q11' );
	var txtQuestion12= getRadioVal( document.getElementById('quizform'), 'q12' );
	var txtQuestion13= getRadioVal( document.getElementById('quizform'), 'q13' );
	var txtQuestion14= getRadioVal( document.getElementById('quizform'), 'q14' );
	var txtQuestion15= getRadioVal( document.getElementById('quizform'), 'q15' );
	var txtQuestion16= getRadioVal( document.getElementById('quizform'), 'q16' );
	var txtQuestion17= getRadioVal( document.getElementById('quizform'), 'q17' );
	var txtQuestion18= getRadioVal( document.getElementById('quizform'), 'q18' );
	var txtQuestion19= getRadioVal( document.getElementById('quizform'), 'q19' );
	var txtQuestion20= getRadioVal( document.getElementById('quizform'), 'q20' );
	var txtQuestion21= getRadioVal( document.getElementById('quizform'), 'q21' );
	var txtQuestion22= getRadioVal( document.getElementById('quizform'), 'q22' );
	var txtQuestion23= getRadioVal( document.getElementById('quizform'), 'q23' );
	var txtQuestion24= getRadioVal( document.getElementById('quizform'), 'q24' );
	var txtQuestion25= getRadioVal( document.getElementById('quizform'), 'q25' );
	var txtQuestion26= getRadioVal( document.getElementById('quizform'), 'q26' );
	var txtQuestion27= getRadioVal( document.getElementById('quizform'), 'q27' );
	var txtQuestion28= getRadioVal( document.getElementById('quizform'), 'q28' );
	var txtQuestion29= getRadioVal( document.getElementById('quizform'), 'q29' );
	var txtQuestion30 = getRadioVal( document.getElementById('quizform'), 'q30' );
	
	var result = parseInt(txtQuestion1) + parseInt(txtQuestion2) + parseInt(txtQuestion3)
	+ parseInt(txtQuestion4) + parseInt(txtQuestion5) + parseInt(txtQuestion6)
	+ parseInt(txtQuestion7) + parseInt(txtQuestion8) + parseInt(txtQuestion9)
	+ parseInt(txtQuestion10) + parseInt(txtQuestion11) + parseInt(txtQuestion12)
	+ parseInt(txtQuestion13) + parseInt(txtQuestion14) + parseInt(txtQuestion15)
	+ parseInt(txtQuestion16) + parseInt(txtQuestion17) + parseInt(txtQuestion18)
	+ parseInt(txtQuestion19) + parseInt(txtQuestion20) + parseInt(txtQuestion21)
	+ parseInt(txtQuestion22) + parseInt(txtQuestion23) + parseInt(txtQuestion24)
	+ parseInt(txtQuestion25) + parseInt(txtQuestion26) + parseInt(txtQuestion27)
	+ parseInt(txtQuestion28) + parseInt(txtQuestion29) + parseInt(txtQuestion30);
	
	if (!isNaN(result)) {
        document.getElementById('points').value = result;
      }
}
</script>

  </form>
  