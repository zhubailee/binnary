<?php
error_reporting(0);
/*
    AUTHOR: Zhu Bai Lee
    TEAM  : BLACK CODER CRUSH
*/
function bin($teks)
{
    for($x = 0; $x < strlen($teks); $x++)
    {
        $hasil .= str_pad(decbin(ord($teks[$x])), 8, "0", STR_PAD_LEFT). " ";
    }
    echo $hasil;
}


function unbin($binnary)
{
    $binnary = explode(" ",$binnary);
    $hasil = "";
    foreach($binnary as $biner)
    {
        $hasil .= pack("H*", dechex(bindec($biner)));
    }
    echo $hasil;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DNS LOOKUP | NoobGrammer</title>
        <script type="text/javascript">
        function copy() {
            document.getElementById("pilih").select();
            document.execCommand("copy");
        }
        </script>
        <style>
	    .text-area textarea{
	    background: #eeeeee;
	    color: #000000;
	    padding: 20px;
	    font-weight: normal;
	    margin-right: auto;
	    margin-left: auto;
	    border: 12px solid transparent;
	    border-bottom-color: #28d;
	    width: 500px;
	    height:200px;
	    }
        </style>
    <head>
    <header>
	<center>
	    <h1>Binnary Tools</h1>
	</center>
    </header>
    <body>
        <center>
	    <div class="text-area">
		<form action="" method="post">
		    <textarea name="biner" id="pilih"><?php
			if(isset($_POST['enc'])){
			    bin($_POST['biner']);
			}elseif(isset($_POST['dec']))
			{
			    unbin($_POST['biner']);
			}?></textarea>
		    <br>
		    <input type="submit" name="enc" value="text2bin">
		    <input type="submit" name="dec" value="bin2text">
		    <input type="submit" value="copy" onclick="copy()">
		</form>
	    </div>
        </center>
    </body>
<html>