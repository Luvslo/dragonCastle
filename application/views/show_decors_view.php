<legend id="master">
	<?php
		$url="http://static.itiw-webdev.com/iphone/images/dragonzoofacebook/utfonlinedecor1.xml";
		$xml= simplexml_load_file($url);
		$decorurl= array();
		$i=0;
		foreach($xml->children() as $rows)
		{
			$decorId; $decorName; $buy_bucks; $buy_coins; $sell_coins;
			$flag = false;
			foreach($rows->children() as $child)
			{
				switch ($child->getName())
				{
					case "decorid":
						$decorId = $child;
						break;
					case "name":
						$decorName=$child;
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
					case "category":
						if($child=="plant") $flag=true;
						break;
				}
			}
			if($flag == true)
			{
				$decorurl[$i]="http://static.itiw-webdev.com/iphone/images/dragonzootappocket/decor/d".$decorId.".png";
				echo "<div id='decor'><div id='decorImage'><img src=".$decorurl[$i]."></div>";
				echo "<div id='decorText' style='font-size:94%'>".$decorName."<br/>Bucks: ".$buy_bucks."<br/>Coins: ".$buy_coins."<br/> Sell Coins:".$sell_coins."</div><div>".anchor("buy/decor_buyer?decor=$decorId&decorName=$decorName&buy_coins=$buy_coins&buy_bucks=$buy_bucks&sell_coins=$sell_coins","Buy")."</div></div>";
				//echo anchor("buy/buyer/$decorId","zz");
				$i++;
				$flag=false;
			}

		}

	?>
</legend>