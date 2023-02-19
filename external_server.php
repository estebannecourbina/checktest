<!-- external_server.php -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<html>	
  <body>		<h1>External Server</h1>		<h4>Ich habe diese Parameter bekommen</h4>		            	
    <form name="frm" name="form1" method="post" action="https://www.sofort.com/payment/accountcheck">     
   <!-- <form id="form1" name="form1" method="post" action="external_server.php"> Local Testen-->
      <fieldset id="form">                
          <legend> Nochmal Hallo</legend>           
           <OL>
            <li><label>User_id</label><input type="text" name="user_id" value="<?php echo $_POST["user_id"];?>" /></li>            
            <li><label>project_id</label><input type="text" name="project_id" value="<?php echo $_POST["project_id"];?>" /></li>
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
            <li><label>has Berechnung</label><input type="text" name="hash" value="<?php echo $_POST["hash"];?>" /></li>
            <input type= "SUBMIT" class ="btn" name="Boton" value="Senden"> 
            </UL>
           </fieldset>
      </div>	
    </form>        	
  </body>
</html>