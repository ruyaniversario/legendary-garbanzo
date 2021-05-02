<?php
    session_start();
    if(isset($_SESSION['views'])){
        
        $num_visits = $_SESSION['views'];
        $_SESSION['views'] = $_SESSION['views'] + 1;
    } else{
       $num_visits = $_SESSION['views'] = 0;
    }
?>

<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>

<?php
    if($num_visits == 5) {
        echo 'Thank you for visiting the page a lot!.';
    }
        if($num_visits != 10){

        }
        else{
            header('Location: congratulations.php');
        }
        