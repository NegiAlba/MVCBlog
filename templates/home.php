<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevBlog Fullstack 2020</title>
</head>

<body>
    <div>
        <h1>DevBlog Fullstack 2020</h1>
        <h5>Engineered at Talis Business School</h5>
        <p>En construction</p>
    </div>
    <?php

        while ($article=$articles->fetch()) {
            ?>
    <div>
        <h2><a
                href="../public/index.php?route=article&articleId=<?= $article->id ; ?>"><?= $article->title ; ?></a></h2>
        <p><?= $article->content ; ?>
        </p>
        <p><?= $article->author ; ?>
        </p>
        <p><?= $article->createdAt ; ?>
        </p>
    </div>
    <?php
        }
    ?>
</body>

</html>