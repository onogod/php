<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        
        function sort_2way($array, $order)
        {
            
                $nums = [15, 4, 18, 23, 10];
            $nums = $array
            if ($order) {
                echo '昇順にソートします' . '<br>';
                sort($nums);
            } else {
                echo '降順にソートします' . '<br>';
                rsort($nums);
            }
            foreach ($nums as $num) {
                echo $num . '<br>';
            }
        }
        
        
        sort_2way($nums, true);       
        sort_2way($nums,false);
                
        ?>
    </p>
</body>  
</html>
