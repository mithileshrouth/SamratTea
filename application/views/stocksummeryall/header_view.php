<script src="<?php echo base_url(); ?>application/assets/js/stocksummeryall.js"></script> 


<h1 style="font-size:26px;"><font color="#5cb85c">Logical Stock (included which is not in warehouse)</font></h1>

 <div id="adddiv">
     <form id="frmStock" method="post" action="<?php echo base_url(); ?>stocksummeryall/getStockpdf"  target="_blank">
  <section id="loginBox" style="width:600px;">
      <table border="0" width="100%">
          <tr>
              <td>Group:</td>
              <td> 
                  <select id="group_code" name="group_code"  class="form-control">
                        <option value="0">All Groups</option>
                        <?php if($bodycontent["teagrouplist"]){
                              foreach ($bodycontent["teagrouplist"] as $row){
                        ?>
                         <option value="<?php echo($row->id);?>" > <?php echo($row->group_code); ?> </option>
                        <?php 
                            }
                          }
                         ?>
                   </select>
              </td>
          </tr>
           <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
          </tr>
          <!-- to date  added by Abhik 16/06/2017-->
          <tr>
              <td>As on</td>              
              <td><input type="text" class="form-control" value="" style="width: 150px; " name="toDate" id="toDate" readonly=""/> </td>

          </tr>
          <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
          </tr>
          
          <tr>
              <td>Price Range</td>
              <td>
                  <input type="text" name="fromPrice" id="fromPrice" value="" style="width:100px;" onkeyup="checkNumeric(this);"/> to <input type="text" name="toPrice" id="toPrice" value="" style="width:100px;" onkeyup="checkNumeric(this);"/>
              </td>
          </tr>
      </table>
      <br/>    
     <span class="buttondiv"><div class="save" id="stkreport" align="center"> Show </div></span>
  <br/>
  
  <span class="buttondiv"><div class="save" id="stkreportPrint" align="center"> Print </div></span>
  
  
  <br>

  
  
  </section>
         </form>
  
 </div>
 

 
<div >
   <img src="<?php echo base_url(); ?>application/assets/images/loading.gif" id='loader' style=" position: absolute;
    margin: auto;
    top: 15%;
    left: 0;
    right: 0;
    bottom: 0;display:none;z-index:999;"/>
    
 <div id="popupdiv"  style="display:none; width:100%;height:100%;" title="Detail">

 </div>

</div>

  
 