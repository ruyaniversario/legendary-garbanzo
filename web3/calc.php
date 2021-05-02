<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        # test if input is_numeric
        if(isset($_POST['val1'], $_POST['val2'])){
            $val1=$_POST['val1'];
            $val2=$_POST['val2'];
            # test if calc is not null
            if(is_numeric($val1 & $val2)){
                # switch statement for value of calc
                switch($_POST['calc']){
                    case "add";
                    echo "Calculation result: " , $val1 + $val2;
                    break;
                    case "sub";
                    echo "Calculation result: " , $val1 - $val2;
                    break;
                    case "mul";
                    echo "Calculation result: " , $val1 * $val2;
                    break;
                    case "div";
                    echo "Calculation result: " , $val1 / $val2;
                    break;   
                    
                    default;
                        echo "Calculation result: $result";
                }
            } else{ echo "Invalid entry - please retry"; 
            }
        }
    ?>
</body>
</html>