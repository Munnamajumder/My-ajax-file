<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}
public function checkUserName($username){
	$query =  "SELECT * FROM tbl_user WHERE username = '$username'";
	$getuser = $this->db->select($query);

	if ($username == "") {
		echo "<span class='error'>please enter username !</span>";
		exit();
	}elseif ($getuser) {
		echo "<span class='error'><b>$username</b> not available !</span>";
		exit();
	}else{
		echo "<span class='error'><b>$username</b> available !</span>";
		exit();

	}

}

public function autoComplete($skill){

	$query =  "SELECT * FROM tbl_skill WHERE skill LIKE '%$skill%'";
	$getskill = $this->db->select($query);
	$result = '';
	$result .= '<div class="skill"><ul>';

	if ($getskill) {
		while ($data = $getskill->fetch_assoc()) {
			$result .='<li>'.$data['skill'].'</li>';
		}
	}else{
		$result .='<li>No result found !</li>';
	}
        $result .='</ul></div>';
        echo "$result";

}

public function autoRefresh($body){
	$query = "INSERT INTO tbl_refresh(body) VALUES('$body')";
	$data = $this->db->insert($query);
}

public function getRefresh(){
	$query =  "SELECT * FROM tbl_refresh ORDER BY id DESC";
	$getcontent = $this->db->select($query);
	$result = '';
	$result .= '<div class="data"><ul>';

	if ($getcontent) {
		while ($data = $getcontent->fetch_assoc()) {
			$result .='<li>'.$data['body'].'</li>';
		}
	}else{
		$result .='<li>No result found !</li>';
	}
        $result .='</ul></div>';
        echo "$result";

}

public function livesearch($search){
	$query =  "SELECT * FROM tbl_search WHERE username LIKE '%$search%'";
	$getdata = $this->db->select($query);
	if ($getdata) {
		$data = '';
		$data .= '<table class="tblone"><tr>
		<th>username</td>
		<th>user</td>
		<th>email</td>
		</tr>';
		while ($result = $getdata->fetch_assoc() ) {
			$data .= '<tr>
						<td>' .$result["username"]. '</td>
						<td>' .$result["name"]. '</td>
						<td>' .$result["email"]. '</td>


			</tr>';
		}
			echo "$data";
		
	}else{
		echo "data not found !";
	}
}

	
}
?>