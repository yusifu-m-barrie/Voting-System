<?php include 'includes/session.php'; ?>

<body>

<div id="wrapper">

<!-- Navigation -->

<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            
            
        </div>
        
        
        
        
        <hr/>
        
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class = "alert alert-success">Canvassing Report</h4>	
                </div>

                <div class="panel-body">
                            
						
                            <table class="table table-striped table-bordered table-hover ">
                                    <thead>
                                        <td style = "width:600px;" class = "alert alert-success">Candidate for President</td>
                                        <td style = "width:200px;"class = "alert alert-success">Image</td>
                                        <td class = "alert alert-success">Total</td>
                                    
                                    </thead>
<?php
        require 'conn.php';
        $query = $conn->query("SELECT * FROM candidate WHERE position = 'President'");
    while($fetch = $query->fetch_array())
    {
        $id = $fetch['candidate_id'];
        $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
        $fetch1 = $query1->fetch_assoc();
        
?>
    <tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
	</tbody>
					
					
			                </table>	
			
			
					</div>		
            

</body>




