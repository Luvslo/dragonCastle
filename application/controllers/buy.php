<?php
    class Buy extends CI_Controller
    {
        function dragon_buyer()
        {
            echo "ddddd".$this->uri->segment(3);
        }
        
        function decor_buyer_controller()
        {
            //echo $this->uri->segment(3);
            echo $_GET['decor'].$_GET['decorName'];
            
            //decor=$decorId&decorName=$decorName&buy_coins=$buy_coins&buy_bucks=$buy_bucks&sell_coins=$sell_coins
            
            /*$this->load->model("decor_buyer_model");
            $this->decor_buyer_model->*/
            
        }
        
    }
    
?>