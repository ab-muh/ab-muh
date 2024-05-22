<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
?>
<?php include 'header.php'; ?>
<span style="color:blue; margin-bottom:10px; font-size:25px;"> <b>Add New Advocate</b> <br>
	</span>
<form action="add_new_advocate_save.php" method="POST"> 	
	<table>
			
		<tr>
			<td><div style="float: left">Advocate Name :</div>
			</td>
			
			<td><script language="javascript" required>
            		CreateHindiTextBox("yachikakarta_name");
        		</script>
			</td>
		
		</tr>
					
		<tr>
			<td>
				
			</td>
				
			<td>
				<input type="submit" name="जमा करें" required>				
			</td>
			</td>
		</tr>
	</table>
	</form>
	</div>
	</center>
	</body>
	</html>