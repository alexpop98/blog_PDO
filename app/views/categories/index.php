<h1>Elenco categorie</h1>



<?php if (isset($data['messaggio'])) : ?>

    <p><?= $data['messaggio'] ?></p>

<?php endif; ?>
<table class="table table-striped">
    <?php foreach ($data['categorie'] as $cat) : ?>
        <tr>
        <td class="nomecat"><?= $cat ?></td>
        <td><p><a href="?url=categories/delete/<?= $cat->id ?>" class="btn btn-danger">elimina</a></p></td>
        </tr>
    <?php endforeach; ?>
</table>
