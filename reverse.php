

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<style type="text/css">
.texts #reverseform table {
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
<form action="insertpoints.php" name="reverseform" id="reverseform">
  <table width="1180" border="0">

    <tr><td>1.	What will be the output of the program? <br> &nbsp;&nbsp;&nbsp;&nbsp;void MyFunction(int a, int b = 40) <br> &nbsp;&nbsp;&nbsp;&nbsp;{cout<< " a = "<< a << " b = " << b << endl;} <br> 
    &nbsp;&nbsp;&nbsp;&nbsp;int main(){ <br>     
    &nbsp;&nbsp;&nbsp;&nbsp;MyFunction(20, 30); <br>     &nbsp;&nbsp;&nbsp;&nbsp;return 0; } <br></td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q1" ID="q1">
 a = 20 b = 40 <BR>
</td>
     <td width="287"><p>
       <INPUT TYPE="RADIO" VALUE="1" NAME="q1" ID="q1">
         a = 20 b = 30      <BR>
         </p>
      </td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q1" ID="q1">
a = 20 b = Garbage <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q1" ID="q1">
      a = Garbage b = 40 <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
   <table width="1180" border="0">

    <tr><td>2. What is the pecularity of red black trees? </td></tr>
    </table>   
	 <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q2" ID="q2">
	The root do not contain data  <BR>
</td>
     <td width="287"><p>&nbsp;
       </p>
       <p>
         <INPUT TYPE="RADIO" VALUE="1" NAME="q2 " ID="q2">
         The leaf nodes are not relevant and do not contain data <BR>
         </p></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q2" ID="q2">	
	  The leaf nodes are relevant and contain data<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q2 " ID="q2">
     	Both A and C <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  <table width="1180" border="0">

    <tr><td>3.	What is the value of "d" after this line of code has been executed? <br> &nbsp;&nbsp;&nbsp;&nbsp;double d = Math.round ( 2.5 + Math.random() ); </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q3 " ID="q3">
	2  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q3" ID="q3">
    	3 <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q3 " ID="q3">	
	  4 <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q3 " ID="q3">
     	2.5  <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
   <table width="1180" border="0">

    <tr><td>4.	Which of the following function / type of function cannot be overloaded?  </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q4" ID="q4">
	Member function <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q4" ID="q4">
    	Static function <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q4 " ID="q4">	
	 Virtual function <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q4 " ID="q4">
     	Both B and C  <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="1180" border="0">

    <tr><td>5.	What will be the output of the following program? <br> &nbsp;&nbsp;&nbsp;&nbsp;int MyFunction(int a, int b = 3, int c = 3) <br> &nbsp;&nbsp;&nbsp;&nbsp;{cout<< ++a * ++b * --c ;  <br> 
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;} <br> 
    &nbsp;&nbsp;&nbsp;&nbsp;int main() <br> &nbsp;&nbsp;&nbsp;&nbsp;{MyFunction(5, 0, 0); <br> 
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;} </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q5 " ID="q5">
	8 <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q5 " ID="q5">
    	6  <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q5 " ID="q5">	
	-6 <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q5 " ID="q5">
     	-8  <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="1180" border="0">

    <tr><td>6.	Point out the error in the following program. <br> &nbsp;&nbsp;&nbsp;&nbsp;int main() <br> 
    &nbsp;&nbsp;&nbsp;&nbsp;{char *ptr; <br>     &nbsp;&nbsp;&nbsp;&nbsp;*ptr = (char)malloc(30); <br>     
    &nbsp;&nbsp;&nbsp;&nbsp;strcpy(ptr, "RAM"); <br>     
    &nbsp;&nbsp;&nbsp;&nbsp;printf("%s", ptr); <br> &nbsp;&nbsp;&nbsp;&nbsp;free(ptr); <br> &nbsp;&nbsp;&nbsp;&nbsp;return 0;} </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q6 " ID="q6">
	Error: in strcpy() statement.  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q6 " ID="q6">
    	Error: in *ptr = (char)malloc(30);  <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q6" ID="q6">	
	Error: in free(ptr);  <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q6 " ID="q6">
     	No error   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="1180" border="0">
    <tr><td>7.	Which of the following is/are legal method declarations?  </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q7" ID="q7">
	protected abstract void m1();  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q7 " ID="q7">
    	static final void m1(){}  <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q7 " ID="q7">	
	synchronized public final void m1() {}  <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="1" NAME="q7 " ID="q7">
     	All of the above   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="1180" border="0">
    <tr><td>8.	Which statement is true?  </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q8 " ID="q8">
	Programs will not run out of memory.  <BR>
</td>
     <td width="287"><p>&nbsp;
       </p>
       <p>
         <INPUT TYPE="RADIO" VALUE="0" NAME="q8 " ID="q8">
         Objects that will never again be used are eligible for garbage collection. <BR>
         </p></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q8 " ID="q8">	
	Objects that are referred to by other objects  will never be garbage collected. <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="1" NAME="q8 " ID="q8">
     	Objects that can be reached from a live thread will never be garbage collected.
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  <table width="1180" border="0">
    <tr><td> 9. class Boo <br> &nbsp;&nbsp;&nbsp;{Boo(String s) { } <br> &nbsp;&nbsp;&nbsp;Boo() { }} <br> &nbsp;&nbsp;&nbsp;class Bar extends Boo <br> 
    &nbsp;&nbsp;&nbsp;{Bar() { } <br>     
    &nbsp;&nbsp;&nbsp;Bar(String s) {super(s);} <br> &nbsp;&nbsp;&nbsp;&nbsp;void zoo() <br>     &nbsp;&nbsp;&nbsp;&nbsp;{  // insert code here }} <br> &nbsp;&nbsp;&nbsp;&nbsp;which one create an anonymous inner class from within class Bar? </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q9 " ID="q9">
	Boo f = new Boo(24) { };  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q9 " ID="q9">
    	Boo f = new Bar() { };  <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q9 " ID="q9">	
	Bar f = new Boo(String s) { };  <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q9 " ID="q9">
     	Boo f = new Boo.Bar(String s) { };
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
   <table width="1180" border="0">
    <tr><td> 10. Which collection class allows you to associate its elements with key values, and allows you to retrieve objects in FIFO (first-in, first-out) sequence?   </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q10 " ID="q10">
	java.util.ArrayList  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q10 " ID="q10">
    	java.util.LinkedHashMap <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q10 " ID="q10">	
	java.util.HashMap  <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q10 " ID="q10">
     	java.util.TreeMap
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="1180" border="0">
    <tr><td> 11. Which of the following options causes a compiler error?   </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q11 " ID="q11">
	int[ ] scores = {3, 5, 7};  <BR>
</td>
     <td width="287"><p>
       <INPUT TYPE="RADIO" VALUE="1" NAME="q11 " ID="q11">
    	int [ ][ ] scores = {2,7,6}, {9,3,45};  <BR>
       </p>
      </td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q11 " ID="q11">	
	String cats[ ] = {"Fluffy", "Spot", "Zeus"};   <BR></td>
    <td width="277"><p>&nbsp;
      </p>
      <p>
        <INPUT TYPE="RADIO" VALUE="0" NAME="q11 " ID="q11">
        boolean results[ ] = new boolean []  {true, false, true}; <BR>
        </p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
 <table width="1180" border="0">
    <tr><td> 12.An atomic literal is which of the following?  </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q12 " ID="q12">
	Strings  <BR>
</td>
     <td width="287"><p>
       <INPUT TYPE="RADIO" VALUE="0" NAME="q12 " ID=" q12">
    	Boolean  <BR>
       </p>
      </td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q12 " ID="q12">	
	Long  <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="1" NAME="q12 " ID="q12">
     	All of the above.
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>  
<table width="1180" border="0">
    <tr><td> 13.Which header file should be included to use functions like malloc() and calloc()?  </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q13 " ID="q13">
	memory.h  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q13 " ID="q13">
    	stdlib.h  <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q13 " ID="q13">	
	string.h  <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q13 " ID="q13">
     	dos.h
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>  
  <table width="1180" border="0">
    <tr><td> 14.Which of the following statements are correct about the function?<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long fun(int num)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long f=1;<br> 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=1; i<=num; i++)<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f = f * i;<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return f;<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>  </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q14 " ID="q14">
	The function calculates the value of 1 raised to power num. <BR>
</td>
     <td width="287"><p>
       <INPUT TYPE="RADIO" VALUE="0" NAME="q14 " ID="q14">
       The function calculates the square root of an integer <BR>
         </p>
      </td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q14 " ID="q14">	
	The function calculates the factorial value of  an integer  <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q14 " ID="q14">
     	None of above
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>  
  
  
  <table width="1180" border="0">
    <tr><td> 15.Which one of the following is the correct way to declare a pure virtual function?  </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q15 " ID="q15">
virtual void Display(void)={0};  <BR>
</td>
     <td width="287"><p>
       <INPUT TYPE="RADIO" VALUE="0" NAME="q15 " ID="q15">
    	virtual void Display = 0;  <BR>
       </p>
      </td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q15 " ID="q15">	
	virtual void Display(void) = 0;  <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q15 " ID="q15">
     	void Display(void) = 0;
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>  
  
  
<table width="1180" border="0">
    <tr><td> 16.What would be output of following program?<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public class FunDo {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public static void main(String[]args) {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int x = 9;<br>
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x += (x = 3);<br>
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print(x);<br>
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int y = 9;<br>
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y = y + (y = 3);<br>
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print(" ");<br>
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(y);<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}}<br>  </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q16 " ID="q16">
9 9 <BR>
</td>
     <td width="287"><p>
       <INPUT TYPE="RADIO" VALUE="0" NAME="q16 " ID="q16">
    	3 9  <BR>
       </p>
      </td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q16 " ID="q16">	
	Compile time error  <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="1" NAME="q16 " ID="q16">
     12 12  
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>  
  
  
  <table width="1180" border="0">
    <tr><td> 17.A term used to describe interconnected computer configuration is </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="1" NAME="q17 " ID="q17">
	Multiprogramming  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q17 " ID="q17">
    		Modulation  <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q17 " ID="q17">	
		Multiprocessing  <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q17 " ID="q17">
     		Micro program sequence
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>  
  
  
  <table width="1180" border="0">
    <tr><td> 18.Which of the following is associated with Enumeration ? </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q18 " ID="q18">
		Variable  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q18 " ID="q18">
    			Hashmap  <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q18 " ID="q18">	
			Hashtable <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q18 " ID="q18">
     			SortedSet
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p>  
   <table width="1180" border="0">
    <tr><td> 19.Where does the object get created? </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="1" NAME="q19 " ID="q19">
	Class  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q19 " ID="q19">
    			Constructor <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q19 " ID="q19">	
		Destructor <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q19 " ID="q19">
     			Attributes
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
  <table width="1180" border="0">
    <tr><td> 20.Pick out the other definition of objects.? </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q20 " ID="q20">
	Member of the class  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q20" ID="q20">
    				Associate of the class <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q20" ID="q20">	
			Attribute of the class <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="1" NAME="q20" ID="q20">
     				Instance of the class
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
  <table width="1180" border="0">
    <tr><td> 21.To where does the program control transfers when exception is arised? </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q21" ID="q21">
	Catch  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q21" ID="q21">
    				Handlers <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q21" ID="q21">	
			Throw<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q21" ID=" q21">
     				None
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
  <table width="1180" border="0">
    <tr><td> 22.Which value cannot be assigned to reference? </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q22" ID="q22">
	Integer  <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q22" ID="q22">
    				Floating <BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q22" ID="q22">	
			Unsigned<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="1" NAME="q22" ID="q22">
     				Null
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
  <table width="1180" border="0">
    <tr><td> 23.Find the output: <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int main()<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int a = 9;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int & aref = a;<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a++;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout << "The value of a is " << aref;<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
 </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q23" ID="q23">
	9  <BR>
</td>
     <td width="287"><p>
       <INPUT TYPE="RADIO" VALUE="1" NAME="q23" ID=" q23">
    				10 <BR>
       </p>
      </td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q23" ID="q23">	
			Error<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q23" ID="q23">
     				11
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
  <table width="1180" border="0">
    <tr><td> 24.Which version of PHP was added with Exception handling? </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q24" ID="q24">
	PHP 4 <BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q24" ID="q24">
    				PHP 5<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q24" ID="q24">	
			PHP 5.3<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q24" ID="q24">
     				PHP 6
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
  <table width="1180" border="0">
    <tr><td> 25.What does SPL stand for? </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="1" NAME="q25" ID="q25">
		Standard PHP Library<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q25" ID="q25">
    					Source PHP Library<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q25" ID="q25">	
				Standard PHP List<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q25" ID="q25">
     					Source PHP List
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
  <table width="1180" border="0">
    <tr><td> 26. You can extend the exception base class, but you cannot override any of the preceeding methods because they are declared as </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q26" ID="q26">
		Protected<BR>
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q26" ID="q26">
    					Final<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q26" ID="q26">	
				Static<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q26" ID="q26">
     					Private
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
  <table width="1180" border="0">
    <tr><td> 27.Which function is used to split a string into a series of substrings, with each string boundary is determined by a specific separator?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q27" ID="q27">
	Break()
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q27" ID="q27">
    					Divide()<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q27" ID="q27">	
				Explode()<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q27" ID="q27">
     					Md5()
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
  <table width="1180" border="0">
    <tr><td> 28.Which is the most powerful authentication method among the four?</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q28" ID="q28">
	Hard-coding a login pair directly into the script
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="0" NAME="q28" ID="q28">
    						File-based authentication<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="1" NAME="q28" ID="q28">	
					Data-based authentication<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q28" ID="q28">
     						PEAR'S HTTP authentication
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
  
  
  <table width="1180" border="0">
    <tr><td> 29. Pictorial representation of an expression is called:</td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q29" ID="q29">
		Expression tree
</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q29" ID="q29">
    							Operator tree<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q29" ID="q29">	
						Expression flow<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q29" ID="q29">
     							Expression chart
   <BR></td>
    </tr>
  </table>
  <p>&nbsp;</p> 
 
  <table width="1180" border="0">
    <tr><td> 30. Choose the correct HTML code to create an email link? </td></tr>
    </table>
    <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE="0" NAME="q30" ID="q30">
	  A HREF = "ganesh@ghumti.com&quot;</td>
     <td width="287"><INPUT TYPE="RADIO" VALUE="1" NAME="q30" ID="q30">
    A HREF = "mailto:ganesh@ghumti.com"<BR></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE="0" NAME="q30" ID="q30">	
	MAIL: ganesh@ghumti.com<BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE="0" NAME="q30" ID="q30">
   	A MAILHREF = "ganesh@ghumti.com"
   <BR></td>
    </tr>
  </table>
 <p>&nbsp;</p>
 <p>
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
	var txtQuestion1 = getRadioVal( document.getElementById('reverseform'), 'q1' );
	var txtQuestion2 = getRadioVal( document.getElementById('reverseform'), 'q2' );
	var txtQuestion3 = getRadioVal( document.getElementById('reverseform'), 'q3' );
	var txtQuestion4 = getRadioVal( document.getElementById('reverseform'), 'q4' );
	var txtQuestion5 = getRadioVal( document.getElementById('reverseform'), 'q5' );
	var txtQuestion6 = getRadioVal( document.getElementById('reverseform'), 'q6' );
	var txtQuestion7 = getRadioVal( document.getElementById('reverseform'), 'q7' );
	var txtQuestion8 = getRadioVal( document.getElementById('reverseform'), 'q8' );
	var txtQuestion9 = getRadioVal( document.getElementById('reverseform'), 'q9' );
	var txtQuestion10 = getRadioVal( document.getElementById('reverseform'),'q10' );
	var txtQuestion11= getRadioVal( document.getElementById('reverseform'), 'q11' );
	var txtQuestion12= getRadioVal( document.getElementById('reverseform'), 'q12' );
	var txtQuestion13= getRadioVal( document.getElementById('reverseform'), 'q13' );
	var txtQuestion14= getRadioVal( document.getElementById('reverseform'), 'q14' );
	var txtQuestion15= getRadioVal( document.getElementById('reverseform'), 'q15' );
	var txtQuestion16= getRadioVal( document.getElementById('reverseform'), 'q16' );
	var txtQuestion17= getRadioVal( document.getElementById('reverseform'), 'q17' );
	var txtQuestion18= getRadioVal( document.getElementById('reverseform'), 'q18' );
	var txtQuestion19= getRadioVal( document.getElementById('reverseform'), 'q19' );
	var txtQuestion20= getRadioVal( document.getElementById('reverseform'), 'q20' );
	var txtQuestion21= getRadioVal( document.getElementById('reverseform'), 'q21' );
	var txtQuestion22= getRadioVal( document.getElementById('reverseform'), 'q22' );
	var txtQuestion23= getRadioVal( document.getElementById('reverseform'), 'q23' );
	var txtQuestion24= getRadioVal( document.getElementById('reverseform'), 'q24' );
	var txtQuestion25= getRadioVal( document.getElementById('reverseform'), 'q25' );
	var txtQuestion26= getRadioVal( document.getElementById('reverseform'), 'q26' );
	var txtQuestion27= getRadioVal( document.getElementById('reverseform'), 'q27' );
	var txtQuestion28= getRadioVal( document.getElementById('reverseform'), 'q28' );
	var txtQuestion29= getRadioVal( document.getElementById('reverseform'), 'q29' );
	var txtQuestion30 = getRadioVal( document.getElementById('reverseform'), 'q30' );
	
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
   
 </p>
</form>
