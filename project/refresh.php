<?php include 'inc/header.php'; ?>
<h2>auto refresh</h2>
<div class="content">
<style type="">
	.data{background: #ddd; margin-left: 50px; padding: 6px 30px; width: 190px; margin-top: 30px}
	.data ul{margin: 0; padding: 0; list-style: none}
	.data ul li{cursor: pointer;}
</style>
 <form action ="" method="POST">
 	<table>
 		<tr>
 			<td>content</td>
 			<td>:</td>
 			<td>
 				<textarea name="body" id="body"></textarea>
 			</td>
 		</tr>

 		<tr>
 			<td></td>
 			<td>:</td>
 			<td>
 				<input type="submit" name="autosubmit" id="autosubmit" value="post"/>
 			</td>
 		</tr>
 	</table>
 	<div id="autostatus"></div>


 </form>
</div>
<?php include 'inc/footer.php'; ?>