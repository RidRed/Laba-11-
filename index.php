<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание JS</title>
</head>
<body>

    <form action = "#" method = "POST">
        <input placeholder = "Напишите X" type = "text" name = "x">
        <input placeholder = "Напишите A" type = "text" name = "a">
        <input placeholder = "Напишите B" type = "text" name = "b">
        <input placeholder = "Напишите C" type = "text" name = "c">
        <button >Выполнить</button>
        
    </form>
    <?php
    class First
    {
        public $x;
        public $a;
        public $b;
        public $c;
       public function __construct($name_x,$name_a,$name_b,$name_c)
        {
            $this -> x = $name_x;
            $this -> a = $name_a;
            $this -> b = $name_b;
            $this -> c = $name_c;
        }
        public function chet()
        {
           if($_POST['x'] != NULL ) 
           {
            if($this -> x > 3)
            {
                $y = ($this -> x ** 3) + 6;
                

            }
            else
            {
                $y = ($this -> x ** 2) - (3 * $this -> x) + 9;
                
                
            }
            
            }
            else
            {
                $y = ($this -> a * $this -> b) + $this -> c;
                
            }
            echo $y;
        }
    }
        if($_POST['x'] != NULL)
        {
            $get = new First($_POST['x'],0,0,0);
            
            $get -> chet();

        }
        else
        {
            $get = new First(0,$_POST['a'],$_POST['b'],$_POST['c']);
            $get -> chet();
        }
            ?>
    
</body>
</html>