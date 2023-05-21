  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #8a8a8a;
        }
    </style>
  </head>
  <body>
    <header>
        bonjour
    </header>
    <section>
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus enim deleniti, accusamus asperiores molestias eum veritatis, cupiditate incidunt sit ab explicabo obcaecati perferendis tempora dolor assumenda rem cum soluta nihil?
        </div>
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus enim deleniti, accusamus asperiores molestias eum veritatis, cupiditate incidunt sit ab explicabo obcaecati perferendis tempora dolor assumenda rem cum soluta nihil?
        </div>
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus enim deleniti, accusamus asperiores molestias eum veritatis, cupiditate incidunt sit ab explicabo obcaecati perferendis tempora dolor assumenda rem cum soluta nihil?
        </div>
    </section>
    <form action="" method="post">
        <label for="name"> Nom:</label>
        <input type="text" placeholder="nom" id="name" name="name" required>
        <label for="genre"> Genre:</label>
        <input type="text" placeholder="F or M" id="genre" name="genre" required>
        <input type="submit" value="Envoyer">
    </form>

  </body>
  </html>
  <?php
    echo '<p>hello</p>';
    if(strtolower($_POST['genre']) == 'm'){
        echo 'Hello mon pote '. $_POST['name'];
    }elseif (strtolower($_POST['genre']) == 'f') {
        echo 'Hello ma camarade ' . $_POST['name'];
    }else {
        echo 'Hello ' . $_POST['name'];

    }
    
  ?>