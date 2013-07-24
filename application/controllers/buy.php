<?php
    class Buy extends CI_Controller
    {
        function dragon_buyer()
        {
            echo "ddddd".$this->uri->segment(3);
        }
        
        function decor_buyer()
        {
            //echo $this->uri->segment(3);
            echo $_GET['decor'].$_GET['decorName'];
        }
        
    }
    
?>