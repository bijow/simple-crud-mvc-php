<?php $render('header'); ?>

<h2>Etidar Usuário</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="<?=$usuario['name'];?>" />
    <br/>
    <br/>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?=$usuario['email'];?>"/>
    <br/>
    <br/>
    <input type="submit" value="Salvar" />
</form>

<?php $render('footer'); ?>