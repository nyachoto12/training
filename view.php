<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data</title>
  <!-- Cards Order -->
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="js/bootstrap.min.js"></script> 


    <link rel="stylesheet" href="css/datatable.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    


    <!-- <link rel="stylesheet" href="css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.jqueryui.min.css">

    <script src="js/buttons.bootstrap4.min.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/buttons.jqueryui.min.js"></script>
    <script src="js/buttons.print.min.js"></script> 
     -->
    
    
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
        <div class="card-header bg-dark">
                        <h4 class="text-white mt-2 text-center"style="font-style: bold">TRAINING REGISTRY DATA COLLECTION TOOL</h4>
                        <h6 class="text-success pt-3 text-center" style="font-style: italic">Health Proffessional</h6>
                        <h6 class="text-right text-success">Displaying Training Data</h6>
          </div>
          <div class="card-body">
               <?php
	              	$servername='localhost';
                  $username='root';
                  $password='';
                  $dbname = "training";
                  $conn=mysqli_connect($servername,$username,$password,$dbname);

	              	$result = mysqli_query($conn,"SELECT * FROM training");
                  ?>
          <div class="row">
          <div class="col-md-12 ">
            <a href="index.php"> 
            <input type="submit" class="btn btn-success mt-3 mb-3" name="submit" value ="Back" style="width: 10%">    
            </a>
          </div>
          <div class="col-md-6">

          </div>
          <div class="col-md-6"></div>
          </div>
         
            <?php

            ?>
            <table id="data" class="table  table-striped">
            
              <thead>
                <tr>
                  <th scope="col"> <span class="text-success" style="font-size: 12px">No.</span> </th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">NAME</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">DESIGNATION</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">PROVINCE</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">DISTRICT</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">AGE</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">GENDER</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">WHEN TRAINED</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">WHERE TRAINED</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">DURATION OF TRAINING</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">PLACE OF WORK</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">TRAINING TYPE</span></th>
                  <th scope="col"><span class="text-success" style="font-size: 12px">FUNDED / SUPPORTED BY</span></th>
               


                </tr>
              </thead>

              <tbody>
             <?php
	                 if(empty($result))
                   {
                    echo "<h4 class='text-success' style='text-align: center'>No data in the table !</h4>";
                   }else{
                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr class='table'>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" . $row['designation'] . "</td>";
                    echo "<td>" . $row['province'] . "</td>";
                    echo "<td>" . $row['district'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['when_trained'] . "</td>";
                    echo "<td>" . $row['where_trained'] . "</td>";
                    echo "<td>" . $row['duration'] . "</td>";
                    echo "<td>" . $row['place_of_work'] . "</td>";
                    echo "<td>" . $row['training_type'] . "</td>";
                    echo "<td>" . $row['funded_by'] . "</td>";
                    echo "</tr>";
                    }
                   }
                   
                   
	              	 ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery.min.js"></script> 
    <script src="js/datatable.min.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/buttons.print.min.js"></script>
    <script>
   
  $(document).ready( function () {
    $('#data').DataTable(
      {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
       
    }
    );
    $('.buttons-excel, .buttons-print, .buttons-pdf, .buttons-csv, .buttons-copy').each(function() {
   $(this).removeClass('btn-default').addClass('btn btn-success mt-3 mb-3');
});
  });
  
  </script>
</body>

</html>