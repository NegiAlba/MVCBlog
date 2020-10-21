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
        $article=$articles->fetch();
            ?>
    <div>
        <h2><?= $article->title ; ?>
        </h2>
        <p><?= $article->content ; ?>
        </p>
        <p><?= $article->author ; ?>
        </p>
        <p><?= $article->createdAt ; ?>
        </p>
    </div>
    <?php
        $articles->closeCursor();
    ?>
    <a href="../public/index.php">Retour à l'accueil</a>
    <div id="comments">
        <h3>Commentaires</h3>
        <?php
            while ($comment = $comments->fetch()) {
                ?>
        <h4><?= $comment->id_user ?>
        </h4>
        <p><?= $comment->content ?>
        </p>
        <p><?= $comment->createdAt ?>
        </p>
        <?php
            }
            $comments->closeCursor();
        ?>
    </div>
</body>

</html>