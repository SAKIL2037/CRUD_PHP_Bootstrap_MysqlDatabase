<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <title>CRUD Using PHP</title>
  </head>
  <body>

    <?php require_once 'dataCRUDdatabase.php'; ?>

    <div class="container">


          <?php
             $con = mysqli_connect("localhost","root","","bloodbank");
             $result = mysqli_query($con,"select * from donorinfo");

          ?>

          <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>BloodGroup</th>
              <th>Phone</th>
              <th>Age</th>
              <th>Last Donation Date</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>    
          <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr class="success">
              <td><?php echo $row['Name']; ?></td>
              <td><?php echo $row['BloodGroup']; ?></td>
              <td><?php echo $row['Phone']; ?></td>
              <td><?php echo $row['Age']; ?></td>
              <td><?php echo $row['Lastdate']; ?></td>
              <td> 
                  <a href="dataForm.php?edit=<?php echo $row['serial']; ?>" class="btn btn-success">Edit</a>
                  <a href="dataCRUDdatabase.php?delete=<?php echo $row['serial']; ?>"   class="btn btn-danger">Delete</a>
              </td>

            </tr>
          <?php endwhile; ?>

          </tbody>
        </table>


      <hr>
       <form class="form-horizontal" action="dataCRUDdatabase.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="name" value="<?php echo $name; ?>"  placeholder="Enter Name">
                  </div>
                </div>
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Blood Group</label>
                    </div>
                    <select class="custom-select" name="bloodGroup" >
                      <option  selected><?php echo $bloodGroup; ?></option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="O-">O-</option>
                      <option value="O+">O+</option>
                    </select>
                  </div>
                 <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="phone" value="<?php echo $phone; ?>"  placeholder="Enter Phone Number">
                  </div>
                </div>
                 <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Age</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="age" value="<?php echo $age; ?>" placeholder="Enter Age">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Last Donation Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" required name="date" value="<?php echo $date; ?>" >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <?php  if($update == true): ?>
                    <button type="submit" class="btn btn-info" name="update">UPDATE</button>
                    <?php else: ?>
                      <button type="submit" class="btn btn-primary" name="save">SAVE</button> 
                    <?php endif;  ?>
                  </div>
                </div>
              </form>

    </div>
  </body>
</html>