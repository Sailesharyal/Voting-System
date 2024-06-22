
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elections</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles if needed */
        .table-responsive {
            margin-top: 20px;
        }
        .candidate_photo {
            width: 50px;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row my-3">  
        <div class="col-12">
            <h3>Elections</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Election Name</th>
                            <th scope="col"># Candidates</th>
                            <th scope="col">Starting Date</th>
                            <th scope="col">Ending Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $fetchingData = mysqli_query($db, "SELECT * FROM elections") or die(mysqli_error($db)); 
                            $isAnyElectionAdded = mysqli_num_rows($fetchingData);

                            if($isAnyElectionAdded > 0)
                            {
                                $sno = 1;
                                while($row = mysqli_fetch_assoc($fetchingData))
                                {
                                    $election_id = $row['id'];
                                    
                        ?>
                                    <tr>
                                        <td><?php echo $sno++; ?></td>
                                        <td><?php echo $row['election_topic']; ?></td>
                                        <td><?php echo $row['no_of_candidates']; ?></td>
                                        <td><?php echo $row['starting_date']; ?></td>
                                        <td><?php echo $row['ending_date']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td> 
                                            <a href="index.php?viewResult=<?php echo $election_id; ?>" class="btn btn-sm btn-danger"> View Results </a>
                                        </td>
                                    </tr>
                        <?php
                                }
                            }else {
                        ?>
                                    <tr> 
                                        <td colspan="7"> No any election is added yet. </td>
                                    </tr>
                        <?php
                            }
                        ?>
                    </tbody>    
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Bootstrap JS for additional features if needed -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>




