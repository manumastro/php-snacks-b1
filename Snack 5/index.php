<!-- 
  Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. 
-->

<?php

$paragrafo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur sequi minima eos! Unde ea eaque, quis nostrum hic modi nulla animi ad nisi sed velit omnis reprehenderit repellat sequi sint, provident aperiam a porro quidem debitis nesciunt earum eligendi aut accusantium! Et amet culpa commodi omnis quibusdam quisquam ullam inventore nisi praesentium asperiores accusantium quam numquam, nemo assumenda eveniet unde voluptate nulla accusamus, esse maxime quod totam porro optio. Ea assumenda, ullam facere temporibus corrupti aut nihil aliquid incidunt earum ratione harum dolore id velit, repudiandae tenetur exercitationem reprehenderit adipisci ducimus dolores amet magnam consequatur. Animi quod optio modi est id nam, sint error necessitatibus maiores quo autem aliquid aperiam quasi fugiat corrupti molestiae expedita cumque ad aut nihil pariatur corporis! Soluta consectetur sit odio, ducimus debitis ratione quam necessitatibus facilis perspiciatis quod omnis, praesentium accusamus labore. Non minima eum nostrum sint, omnis quis, repudiandae quo molestiae optio eveniet unde ab laborum neque voluptatem fuga consequatur doloremque ducimus. Ratione mollitia dolorem ad deleniti soluta non reiciendis iste commodi! Doloribus repellendus, at quos quia illo, soluta quo ullam excepturi quam eos delectus quaerat odio ad, laudantium officiis consequuntur necessitatibus optio ipsum? Delectus sit beatae laboriosam aperiam, quae, ducimus iure ipsam officiis doloremque veritatis sequi ex debitis ipsa eaque nostrum. Dolores repellat temporibus iste debitis! Architecto, nesciunt officia iure laborum consectetur omnis cum enim eaque odio unde cumque minima adipisci eius facere doloremque necessitatibus mollitia ratione ipsa eligendi. Aspernatur, quis. Porro, debitis? Eum sit voluptate consectetur, eius perspiciatis modi pariatur molestias tenetur omnis dicta ab, quas numquam! Voluptatum impedit id aliquam, velit iste delectus. Provident laudantium omnis quibusdam dignissimos sit accusamus eligendi dolore ad illum placeat. Corrupti sunt fugiat repellendus quasi ipsum hic, esse soluta nisi velit nihil, similique vel, eius dolore aliquam voluptatibus beatae doloribus asperiores deleniti. Ea ratione, nesciunt ut veniam cumque et? Explicabo neque unde porro vitae harum adipisci laborum. Dolor voluptatum possimus obcaecati nesciunt sit beatae a facilis quae mollitia consectetur. Error, repellat voluptates! Perspiciatis consectetur ut nobis excepturi nesciunt iusto dolorem, ipsam sit perferendis, corrupti, dolorum odit ab? Blanditiis sint sed inventore natus illum distinctio iste corporis dolorum molestias, quae, atque saepe nesciunt quisquam voluptates expedita ipsa possimus consequuntur cupiditate, illo soluta dicta ullam veniam. Iure sed repellendus eveniet architecto rem. Obcaecati assumenda consectetur est ipsam facere dolores nihil nemo hic voluptatibus, commodi corporis molestias mollitia adipisci deleniti nulla accusamus voluptates modi fugit reiciendis illo expedita. Voluptatibus laudantium aut cupiditate quod, nemo eligendi atque provident, architecto libero reprehenderit inventore harum unde quae, earum odit impedit molestiae beatae soluta! Sed cupiditate voluptatum corrupti aperiam nostrum, quisquam atque mollitia neque nemo molestiae temporibus deserunt esse. Cum illum maiores dolorem, labore voluptates deserunt odio! Qui dolores recusandae eveniet saepe soluta eligendi eaque non? Facere mollitia nostrum accusamus, ut culpa sed, asperiores minima quasi, laborum totam sunt fuga. Sint excepturi commodi provident! Corporis eveniet veritatis sit praesentium est placeat architecto consequuntur error ab cupiditate atque, commodi non aliquid nostrum recusandae minus corrupti, dolore esse. Assumenda alias et adipisci modi praesentium magni.";

$array = explode(".", $paragrafo);
var_dump($array);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack_2</title>
</head>
<body>
  <?php
    for($i = 0; $i < count($array); $i++): ?>
      <p><?php echo $array[$i]?></p> <br>
  <?php endfor ?>
</body>
</html>