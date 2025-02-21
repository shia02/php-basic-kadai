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
       $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
       foreach ($user_names as $index => $value) {
         echo "{$index}：{$value}<br>";
       }
       ?>
   </p>
</body>

</html>