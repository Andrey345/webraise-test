 <?php

/* @var $this yii\web\View */

?>

<div class="site-index">
    Настройка <a href="/author">авторов</a> / <a href="/book">книг</a>
    <?php if($authors):?>
    <h4>Список авторов</h4>

    <table class="table">
        <tr><th>Авторы</th><th>Количество книг</th></tr>
        <?php foreach($authors as $author):?>
            <tr>
                <td><?=$author->name?></td>
                <td><?=count($author->books)?></td>
            </tr>
        <?php endforeach;?>
    </table>
    <?php endif;?>
    <?php if($books):?>
    <h4>Список книг</h4>
    <table class="table">
        <tr><th>Название книги</th><th>Автор</th></tr>
        <?php foreach($books as $book):?>
            <tr>
                <td><?=$book->name?></td>
                <td><?=$book->author->name?></td>
            </tr>
        <?php endforeach;?>
    </table>
    <?php endif;?>
</div>
