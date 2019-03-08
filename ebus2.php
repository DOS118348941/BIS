<?php


session_start();
$fullNameValue = "";
$totalValue2 = "";

/* create a session variable for the mobile number
 *
 */
$totalValue = $_POST['txtTotal'];
        $_SESSION['txtName'] = $fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2;
       
        /*
         * alloate the session variable to a textbox
         *
         */
       
        ?>
       
        <!DOCTYPE html>
        <html>
           
            <head>
                <title>eBusiness2</title>
                <link rel="stylesheet" type="text/css" href="Ebus2.css">
            </head>
        <body background ="cal_back.jpeg">>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
               
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value=""/></td>
                        </tr>
                         <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNnum" value=""/></td>
                        </tr>
                         <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value=""/></td>
                        </tr>
                         <tr>
                           
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                       
                    </table>
                </center>
                <center>
                   
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                <a href="ebus1.php" class="previous">&laquo; Back</a>



            </form>
               
        </html>     









(ebus 3)





<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Ebus3.css">   
    </head>
    <body>
       
        <!-- //strating the session to get the session variable from last page -->
       
   
   


<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is :".$fullNameValue.".";
echo "<br></br>";
echo "The total value is : ".$totalValue2.".";
?>
        <div>
        <br>
        <a href="Ebus2.php" class="previous">&laquo; Back</a>
        </div>


</body>
</html