<html>
<head><title>Your Favorite</title></head>
<body>
    <?php

        if(isset($_POST['username'])){
            $username = $_POST['username'];

            if (empty($username)) {
                echo 'Please enter username.';
            }

            else {
                echo "Thanks for your selection $username";
            }    
        }
        
        echo '<br>';

        if(isset($_POST['dish'])){
            $dish = $_POST['dish'];

            if (empty($dish)) {
                echo 'Please enter dish.';
            }

            else {
                echo "You really enjoyed $dish";
            }    
        }

        echo '<br>';

        if(isset($_POST['color'])){
            $color = $_POST['color'];

            if(empty($color)){
                echo 'Please select wine.';
            } else {
                echo "- especially with a nice $color wine";
            }
        }

    ?>

</body>
</html>