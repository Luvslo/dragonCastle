<legend id="master">
   <?php
   //reading zip content
   
      $url="http://static.itiw-webdev.com/iphone/images/dragonzoofacebook/utfonlineproduct1.xml";
      $xml= simplexml_load_file($url);
      $dragonUrl= array();
      $i=0;
      foreach($xml->children() as $rows)
      {
	      $dragonId; $dragonName; $buy_bucks; $buy_coins; $sell_coins;
	      $flag = false;
	      foreach($rows->children() as $child)
	      {
		      switch ($child->getName())
		      {
			      case "productid":
				      $dragonId = $child;
				      break;
			      case "name":
				      $dragonName=$child;
				      break;
			      case "buy_bucks":
				      $buy_bucks=$child;
				      break;
			      case "buy_coins":
				      $buy_coins=$child;
				      break;
			      case "sell_coins":
				      $sell_coins=$child;
				      break;
			      case "categoryid":
				      if($child==2) $flag=true;
				      break;
		      }
	      }
	      if($flag == true)
	      {
		      $dragonUrl[$i]="http://static.itiw-webdev.com/iphone/images/dragonzoofacebook/product/".$dragonId.".zip";
		      //echo "<div id='decor'><div id='decorImage'><img src=".$decorurl[$i]."></div>";
		      //echo "<div id='decorText' style='font-size:94%'>".$decorName."<br/>Bucks: ".$buy_bucks."<br/>Coins: ".$buy_coins."<br/> Sell Coins:".$sell_coins."</div><div>".anchor("buy/buyer/$decorId","Buy")."</div></div>";
		      //echo anchor("buy/buyer/$decorId","zz");
		      
		      
		     if ($fp = fopen($dragonUrl[$i], 'r'))
		     {
			$dragonId=substr($dragonUrl[$i],-8,-4);
			$content = '';
			// keep reading until there's nothing left
			while ($line = fread($fp, 1024))
			{
			       $content .= $line;
			}
			
		     }
		     
		     
		     else
		     {
			echo "reading zip error";
		     }
		     
		     //creating a temp file in the tmp dir and dump the zip content
		     $temp_file = tempnam(sys_get_temp_dir(), 'boom'); //returns a absolute name in tmp dir
		     
		     $temp = fopen($temp_file,'w');
		     fwrite($temp, $content);
		     fflush($temp);
		     
		     
		     //unzipping
		     $zip = zip_open($temp_file);
		     $data;
		     if ($zip)
		     {
			while ($zip_entry = zip_read($zip))
			{
				//echo "Name:               " . zip_entry_name($zip_entry) . "n";
				//echo "Actual Filesize:    " . zip_entry_filesize($zip_entry) . "n";
				//echo "Compressed Size:    " . zip_entry_compressedsize($zip_entry) . "n";
				//echo "Compression Method: " . zip_entry_compressionmethod($zip_entry) . "n<br/>";
				
				if (zip_entry_open($zip, $zip_entry, "r")) {
				//echo "File Contents:n";
				$buf = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
				$dragonZipid= $dragonId."/i".$dragonId."@2x.png";
				if(zip_entry_name($zip_entry) ==   $dragonZipid){
					$data = $buf;
				}
				zip_entry_close($zip_entry);
				}
			}
		     }
		     
		     //closing zip file
		     zip_close($zip);
		     
		     //closing the temp file
		     fclose($temp);
		     
		     //image portions
		     $img = base64_encode($data);
		     //$img = "<img src= 'data:image/png;base64, {$img}' />";
		     //echo "<legend style='position:relative,top:150px,left:275px,width:800px'>"."<img src= 'data:image/png;base64, {$img}' />"."</legend>";
		     //echo "<div id='dragon'><div id='dragonImage'><img src= 'data:image/png;base64, {$img}' /></div></div>";
		     echo "<div id='decor'><div id='decorImage'><img src= 'data:image/png;base64, {$img}' /></div>";
				echo "<div id='decorText' style='font-size:94%'>".$dragonName."<br/>Bucks: ".$buy_bucks."<br/>Coins: ".$buy_coins."<br/> Sell Coins:".$sell_coins."</div><div id='anchor'>".anchor("buy/dragon_buyer/$dragonId","Buy")."</div></div>";
		     $i++;
		     $flag=false;  
	      }
      }

      
   ?>
</legend>