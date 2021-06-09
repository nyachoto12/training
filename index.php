<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <!-- Cards Order -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header bg-dark">
                        <h4 class="text-white mt-2 text-center"style="font-style: bold">TRAINING REGISTRY DATA COLLECTION TOOL</h4>
                        <h6 class="text-success pt-3 text-center" style="font-style: italic">Health Proffessional</h6>
                        <h6 class="text-right text-success">Inserting Training Data</h6>
          </div>
                    <div class="card-body">

                        <?php
                         	$servername='localhost';
                         	$username='root';
                         	$password='';
                         	$dbname = "training";
                         	$conn=mysqli_connect($servername,$username,$password,$dbname);
                         
                             if(isset($_POST['submit']))
                             {    
                                  $fullname = $_POST['fullname'];
                                  $designation = $_POST['designation'];
                                  $age = $_POST['age'];
                                  $gender = $_POST['gender'];
                                  $when_trained = $_POST['when_trained'];
                                  $where_trained = $_POST['where_trained'];
                                  $duration = $_POST['duration'];
                                  $place_of_work = $_POST['place_of_work'];
                                  $training_type = $_POST['training_type'];
                                  $funded_by = $_POST['funded_by'];
                                  $province = $_POST['province'];
                                  $district = $_POST['district'];
                                  $thedate = $_POST['thedate'];
                         
                         
                                  $sql = "INSERT INTO training (fullname,designation,age,gender,when_trained,where_trained,duration,place_of_work,training_type,funded_by,province,district,thedate)
                                  VALUES ('$fullname','$designation','$age', '$gender','$when_trained','$where_trained','$duration','$place_of_work','$training_type','$funded_by','$province','$district','$thedate')";
                                  
                                  if (mysqli_query($conn, $sql)) {
                                     echo "<h1 class='text-success' style='text-align: center'>New record has been added successfully !</h1>";
                                  } else {
                                     echo "Error: " . $sql . ":-" . mysqli_error($conn);
                                  }
                                  mysqli_close($conn);
                             }
                         ?>
                        <div class="col-md-12 ">
                            <a href="view.php">
                               
                                    <input type="submit" class="btn btn-success mb-3 ml-5" name="submit" value="View Data" style="width: 10%">
                              
                            </a>
                        </div>
                        <form action="" method="POST" class="">
                            <div class="row ml-5 mr-5">
                                <div class="col-md-6">
                                    <h4>PROVINCE: <div class="form-group row">

                                            <div class="col-md-12">
                                                <select id="province" class="form-control text-success" name="province" required>
                                                    <option value="">Select Province</option>
                                                  <?php  
    $result = mysqli_query($conn,"SELECT distinct  province FROM facilities");


    while($row = mysqli_fetch_array($result))
    {
    echo "<option value='$row[0]'>$row[0]</option>";

    }

    ?>
    
    
                                                
                                                </select>
                                            </div>
                                        </div>
                                    </h4>
                                    <h4>DISTRICT &nbsp;:
                                        <div class="col-md-12">
                                            <select id="district" class="form-control text-success" name="district" required>
                                                <option value="">Select District</option>
                                               
                                            </select>
                                        </div>
                                    </h4>
                                </div>

                                <div class="col-md-6">
                                    <h4 class="">Date
                                        <div class="col-md-12">
                                            <input id="date" type="date" class="form-control" name="thedate" required>

                                        </div>
                                    </h4>
                                </div>

                            </div>

                            <div class="row row ml-5 mr-5">
                                <div class="col-md-6">

                                    <div class="form-group row">
                                        <label for="name" class="col-md-12 col-form-label text-success " style="font-weight: bold">NAME</label>
                                        <div class="col-md-12">
                                            <input id="name" type="text" class="form-control" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="designation" class="col-md-12 col-form-label text-success " style="font-weight: bold">DESIGNATION</label>
                                        <div class="col-md-12">
                                            <input id="designation" type="text" class="form-control" name="designation"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="age" class="col-md-12 col-form-label text-success " style="font-weight: bold">AGE</label>
                                        <div class="col-md-12">
                                            <input id="age" type="text" class="form-control" name="age" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-md-12 col-form-label text-success " style="font-weight: bold">GENDER</label>
                                        <div class="col-md-12">
                                            <input id="gender" type="text" class="form-control" name="gender" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="when_trained" class="col-md-12 col-form-label text-success " style="font-weight: bold">WHEN TRAINED</label>
                                        <div class="col-md-12">
                                        <input id="when_trained" type="date" class="form-control" name="when_trained" required>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="where_trained" class="col-md-12 col-form-label text-success " style="font-weight: bold">WHERE
                                            TRAINED</label>
                                        <div class="col-md-12">
                                            <input id="where_trained" type="text" class="form-control"
                                                name="where_trained" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="duration" class="col-md-12 col-form-label text-success " style="font-weight: bold">DURATION OF
                                            TRAINING</label>
                                        <div class="col-md-12">
                                            <input id="duration" type="text" class="form-control" name="duration"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="place_of_work" class="col-md-12 col-form-label text-success " style="font-weight: bold">PLACE OF
                                            WORK</label>
                                        <div class="col-md-12">
                                            <input id="place_of_work" type="text" class="form-control"
                                                name="place_of_work" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="training_type" class="col-md-12 col-form-label text-success " style="font-weight: bold">TYPE OF
                                            TRAINING..BASIC/TOT</label>
                                        <div class="col-md-12">
                                            <input id="training_type" type="text" class="form-control"
                                                name="training_type" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="funded_by" class="col-md-12 col-form-label text-success " style="font-weight: bold">FUNDED BY/ SUPPORTED
                                            BY</label>
                                        <div class="col-md-12">
                                            <input id="funded_by" type="text" class="form-control" name="funded_by"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0 mt-4">
                                    <div class="col-md-6 offset-md-4">
                                        <input type="submit" class="btn btn-success" name="submit" value="Save Data">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    <script type="text/javascript">
     
     $().ready(function() {
         
         $('#province').on('change', function()
                 {
                    
               var province = $('#province').val();

             
               
         
                 $.ajax ( {
                 type : "GET",
                 url : "districts.php",
                 data : {province:province},
                 success : function (data) {
                     
                 document.getElementById("district").innerHTML = data;
                 
                 
                 }                
                 });
         
     });
         
         
         
         
         
     
     });
     </script>
</body>

</html>