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
       print_r($user_names);
       echo '<br>';
       echo $user_names[2];
       $personal_data1 = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性', 'address' => '東京都', 'phone_number' => '070-0809-1160'];
       echo '<br>';
       $personal_data1['test'] = 'test';
       echo $personal_data1['name'];
       echo '<br>';
       print_r($personal_data1);
       ?>
   </p>
</body>

</html>