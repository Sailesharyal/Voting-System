<?php 
    require_once("include/header.php");
    require_once("include/navigation.php");


    if(isset($_GET['homepage']))
    {
        require_once("include/homepage.php");
    }else if(isset($_GET['addElectionPage']))
    {
        require_once("include/add_elections.php");
    }else if(isset($_GET['addCandidatePage']))
    {
        require_once("include/add_candidates.php");
    }else if(isset($_GET['viewResult']))
    {
        require_once("include/viewResults.php");
    }

?>


<?php 
    require_once("include/footer.php");
?>