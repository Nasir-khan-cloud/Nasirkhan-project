
<?php include 'head.php'; ?>

<hr>
        <div class="row">
            <table class="table table-bordered table-striped table-hover  dataTable" id="example" style="width: 100%;">
                  <thead>
                    <tr>
                      <th class="center">#</th>
                      <th>House Name</th>
                      <th>Owner Name</th>
                      <th>Area</th>
                      <th>Block</th>
                      <th>Zip Code</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sn=0;
                    $house_query="SELECT* FROM house";
                    $houses=mysqli_query($connect,$house_query);
                    foreach($houses as $house): ?>
                                            
                      <tr>
                        <td><?php  echo ++$sn;?></td>         
                        
                        <td><?php echo $house['name'];?></td>
                        <td><?php echo $house['owner_name'];?></td>
                        <td><?php echo $house['area'];?></td>
                        <td><?php echo $house['block'];?></td>
                        <td><?php echo $house['zip'];?></td>

                        <td>
                          
                            <?php if ($house['status']==0) {
                              ?>
                            Not Varifield
                            <?php } else{ ?>
                              Verified
                            <?php } ?>
                        </td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
        </div>




       <?php include 'footer.php'; ?>
