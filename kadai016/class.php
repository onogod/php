<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        class Food {
        private $name;
        private $price;

        public function set_price(int $price) {
            $this->price =$price;
        }
        public function show_price(){
            echo $this->price .'<br>';
        }

        
        
        public function __construct(string $name, int $price) {
            $this->name = $name ;
            $this->price =$price;
        }
       
    }
        $food = new Food('potato',250);
        print_r($food);
        

        class Animal{
            private $name;
            private $height;
            private $weight;

            public function set_height(int $height){

                $this->height =$height;
            } 
            public function show_height(){
                echo $this->height . '<br>' ;
        
            }
        
       
        public function __construct(string $name,int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight =$weight;
    }
    
    
        }
    $animal = new Animal('dog',60,5000);
    print_r($animal);
    

    
    

    $food->show_price(250);
    $animal->show_height(60);


   
        ?>
    </p>
</body>
</html>