error_reporting(0);
if(isset($_GET['c'])){
    $c = $_GET['c'];
	if(is_numeric($c)){
		echo "no";
	}
    if(!preg_match("/flag|system|php/i", $c)){
        eval($c);
    }
    
}else{
    highlight_file(__FILE__);
}