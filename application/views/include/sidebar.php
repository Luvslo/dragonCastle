<div id="leftbar">
    <form action="">
        <button class="btn btn-info" id="button">My Dragons</button>
    </form>
    <form action="">
        <button class="btn btn-info" id="button">My Decors</button>
    </form>
    <form action="">
        <button class="btn btn-info" id="button">My Farms</button>
    </form>
    <form action="">
        <button class="btn btn-info" id="button">My Labs</button>
    </form>
    <form action="">
        <button class="btn btn-info" id="button" onclick="test()">My Kingdom</button>
    </form>
</div>

<div id="rightbar">
    <form action="">
        <button class="btn btn-info" id="button">Quest</button>
    </form>
    <form action="">
        <button class="btn btn-info" id="button">Bucks/Coins</button>
    </form>
    <form action="#">
        <a href="" role="button" onclick="showMarket()" class="btn btn-info" data-toggle="modal">Market</a>
    </form>
</div>

<div id="mymodal">
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <h3 id="myModalLabel">Buy Your Things From Here</h3>
        </div>
        <div class="modal-body">
            <form action="">
                <button class="btn btn-info" id="button">Dragon</button>
            </form>
            
            <form action="<?php echo base_url();?>index.php/welcome/show_decors_controller">
                <button class="btn btn-info" id="button">Decor</button>
            </form>
            <form action="">
                <button class="btn btn-info" id="button">Farm</button>
            </form>
            
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
</div>