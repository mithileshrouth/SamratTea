 <script src="<?php echo base_url(); ?>application/assets/js/auctionareamaster.js"></script>
 <div style="display:none" id="adddiv">

   
      <section id="loginBox" style="width:500px;">
      <form role="form" method="post" name="addform" id="addgarden">
      			
		<lable for="err" id="err" style="color:#F30;font-weight: bold"></lable>
                  <br/>
                  <label for="AuctionArea">Area:
                  <br/>
                  <input type="text" id="AuctionArea" name="AuctionArea" />
                 </label>
                  <br/>
                  <br/>
				 <span class="buttondiv"></span>
         </form>
         </section>
        

  
 </div>

 <div class="stats">
 
    <p class="stat"><a href="#"><img src="<?php echo base_url(); ?>application/assets/images/add.jpg" hieght="30" width="30" onclick="openAuctionAreaAdd();"/></a></p>
     <p class="stat"><a href="#"><img src="<?php echo base_url(); ?>application/assets/images/edit.jpg" hieght="40" width="40" id="edit" style="visibility: hidden;"/></a></p>
     <p class="stat"><a href="#"><img src="<?php echo base_url(); ?>application/assets/images/delete.png" hieght="30" width="30" id="del" style="visibility: hidden;"/></a></p>
     <p class="stat"><a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>application/assets/images/home.jpg" hieght="30" width="30"/></a></p>
    
	</div>
 <h1><font color="#5cb85c">List of Auction Area</font></h1>

 


 

                    