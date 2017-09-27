<?php include 'inc/header.php'; ?>
<h2>autocomplete textbox.</h2>
<div class="content">
<style type="">
	.skill{background: #fba991; margin-left: 50px; padding: 6px 30px; width: 190px}
	.skill ul{margin: 0; padding: 0; list-style: none}
	.skill ul li{cursor: pointer;}
</style>
 <form action ="" method="POST">
 	<table>
 		<tr>
 			<td>skill</td>
 			<td>:</td>
 			<td>
 				<input type="text" name="skill" id="skill" placeholder="enter skill.........">
 			</td>
 		</tr>
 	</table>
 	<div id="statusskill"></div>


 </form>
</div>
<?php include 'inc/footer.php'; ?>