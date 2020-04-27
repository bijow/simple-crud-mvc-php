<?php $render('header'); ?>

<a href="<?=$base;?>/novo"> <img src="<?=$base?>/assets/images/plus.png" width="20" alt="Icone de adicionar"> Novo usuário</a>

<table border="1" width="100%" >
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['name'] ?></td>
            <td><?= $usuario['email'] ?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?= $usuario['id'] ?>/editar"><img src="<?=$base?>/assets/images/document.png" width="20" alt="Icone de Editar"></a>
                <a href="<?=$base;?>/usuario/<?= $usuario['id'] ?>/excluir" onclick="return confirm('Tem Certeza que deseja EXCLUIR?')"><img src="<?=$base?>/assets/images/trash.png" width="20" alt="Icone de excluir"></a>

            </td>

        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>