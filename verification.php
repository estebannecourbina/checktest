<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Ejemplo de estilos CSS en un archivo externo
    </title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
<!-- verification.php -->
<?php
    $data = array(       $_POST["user_id"], // user_id --
                         $_POST["project_id"], // project_id --
                         $_POST["country_id"], // sender_country_id --
                         $_POST["bank_code"], // sender_bank_code --
                         $_POST["holder"], // sender_holder --
                         $_POST["account_number"], // sender_account_number --
                         $_POST["user_variable_0"], // user_variable_0
                         $_POST["user_variable_1"], // user_variable_1
                         $_POST["user_variable_2"], // user_variable_2
                         $_POST["user_variable_3"], // user_variable_3
                         $_POST["user_variable_4"], // user_variable_4
                         $_POST["user_variable_5"], // user_variable_5
                         $_POST["project_password"]// project_password
                       );
    echo $data_implode = implode('|', $data);
     $hash = sha1($data_implode);
     echo $hash . "</br></br>";
     //var_dump ($data);
     //var_dump ($hash);
?>

<html>
  <body>		<h1>Verifizierung</h1>
    <!-- <form id="form1" name="form1" method="post" action="https://www.sofort.com/payment/start"> -->
    <form name="frm" method="post" action="external_server.php">
      <fieldset id="form">
        <legend> Nochmal Hallo </legend>
        <OL>
            <li><label>User_id</label> <input type="text" name="user_id" value="<?php echo $_POST["user_id"];?>" /></li>
            <li><label>project_id</label> <input type="text" name="project_id" value="<?php echo $_POST["project_id"];?>" /></li>
            <li><label>sender_country_id</label><input type="text" name="country_id" value="<?php echo $_POST["country_id"];?>" /></li>
            <li><label>sender_bank_code</label><input type="text" name="bank_code" value="<?php echo $_POST["bank_code"];?>" /></li>
            <li><label>sender_holder</label><input type="text" name="holder" value="<?php echo $_POST["holder"];?>" /></li>
            <li><label>sender_account_number</label><input type="text" name="account_number" value="<?php echo $_POST["account_number"];?>" /></li>
            <li><label>user_variable_0</label><input type="text" name="user_variable_0" value="<?php echo $_POST["user_variable_0"];?>" /></li>
            <li><label>user_variable_1</label><input type="text" name="user_variable_1" value="<?php echo $_POST["user_variable_1"];?>" /></li>
            <li><label>user_variable_2</label><input type="text" name="user_variable_2" value="<?php echo $_POST["user_variable_2"];?>" /></li>
            <li><label>user_variable_3</label><input type="text" name="user_variable_3" value="<?php echo $_POST["user_variable_3"];?>" /></li>
            <li><label>user_variable_4</label><input type="text" name="user_variable_4" value="<?php echo $_POST["user_variable_4"];?>" /></li>
            <li><label>user_variable_5</label><input type="text" name="user_variable_5" value="<?php echo $_POST["user_variable_5"];?>" /></li>
            <li><input type="hidden" name="hash" value="<?php echo $hash;?>" /></li>
            <li><label>project_password</label>
            <li><input type="text" name="project_password" value="<?php echo $_POST["project_password"];?>" /></li>
            <input type= "SUBMIT" class ="btn" name="Boton" value="Senden">
        </UL>
      </fieldset>
    </form>
    </form>
  </body>
</html>
