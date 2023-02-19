<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
  <head>    
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />    
    <title>Ejemplo de estilos CSS en un archivo externo     
    </title>    
    <link href="css/style.css" rel="stylesheet" type="text/css" />  
  </head>  
  <!-- input.php -->  
  <html>	     
    <body>
    <!-- <form id="form1" name="form1" method="post" action="https://www.sofort.com/payment/accountcheck"> -->
     <form name="frm" method="post" action="verification.php">             
        <fieldset id="form">                
          <legend>This is a TesSofortCheck</legend>
          <OL> 
            <li><label>User_id</label><input type="text" name="user_id" value="" /></li>            
            <li><label>project_id</label><input type="text" name="project_id" value="" /></li>
            <li><label>country_id</label><input type="text" name="country_id" value="" /></li>
            <li><label>bank_code</label><input type="text" name="bank_code" value="" /></li>
            <li><label>holder</label><input type="text" name="holder" value="" /></li>
            <li><label>account_number</label><input type="text" name="account_number" value="" /></li>
            <li><label>user_variable_0</label><input type="text" name="user_variable_0" value="" /></li>
            <li><label>user_variable_1</label><input type="text" name="user_variable_1" value="" /></li>
            <li><label>user_variable_2</label><input type="text" name="user_variable_2" value="" /></li>
            <li><label>user_variable_3</label><input type="text" name="user_variable_3" value="" /></li>
            <li><label>user_variable_4</label><input type="text" name="user_variable_4" value="" /></li>
            <li><label>user_variable_5</label><input type="text" name="user_variable_5" value="" /></li>
            <li><label>project_password</label><input type="text" name="project_password" value="" /></li>            
            <input type= "SUBMIT" class ="btn" name="Boton" value="Senden">
          </UL>             
        </fieldset>	       
      </form>	     
    </body>  
  </html>