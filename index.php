<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>この文章はHTMLで出力しています。</p>
   <p>
       <?php
       function say_hello(string $num): string {
         echo $num . '<br>';
         return $num;
       }

       function greet_user(string $user_name): string {
         if ($user_name == '') {
            return 'こんにちは、ゲストさん！';
         } else {
            return 'こんにちは、' . $user_name .'さん!';
         }
       }

       class Event {
         private $name;
         private $date;
         private $location;
         public function __construct(string $name, $date, string $location) {
            $this->name = $name;
            $this->date = new DateTime($date);
            $this->location = $location;
         }
       }

       echo greet_user('');
       echo greet_user('sano');
       ?>
   </p>
</body>

</html>