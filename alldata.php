<?php

?>

<!DOCTYPE html>

<head>
    <title>
        Playon24.com
    </title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css" />
<link rel="stylesheet" href="mystyle.css" />

<body>
    <!-- Navbar design HTML code  -->
    <div class="bg-light border-bottom-1 p-2">
        <div class="row">
            <div class="col-md-6 pl-5">
                <h3>Playon 24</h3>
            </div>
            <div class="col-md-6 pr-5 text-right">
                <a href="index.php" class="btn btn-primary">Home</a>
            </div>
        </div>
    </div>

    <!-- Body1 design HTML code    -->
    <div class="row" style="height: 100vh;width: 100%">

        <div class="container mt-4 col-md-9 mx-center">
            <h2 class="ml-3">All Details : </h2>
            <?php
            include("connect.php");
            $query = "select * from details";
            $result = mysqli_query($sqli, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-md-12">
                        <div class="card mt-3 p-2">
                            <div class="row">
                                <div class="title col-md-8">
                                    <p>Name : <?php echo "" . $rows['name'] ?></p>
                                    <p>Email : <?php echo "" . $rows['email'] ?></p>
                                    <p>Phone : <?php echo "" . $rows['number'] ?></p>
                                    <p>Address : <?php echo "" . $rows['address'] ?></p>
                                </div>
                                <div class="col-md-4 text-right">
                                      <a href="delete.php?userid=<?php echo $rows['id']; ?>" class="btn btn-primary mt-3">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }

            ?>
        </div>
    </div>
    <!-- End of body1    -->

    <!-- FOOTER  -->

    <!-- End of footer -->
</body>

<script type="text/javascript" src="mystyle.js" ></script>

<html>