<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form method="POST" action="<?=$base;?>/novo">
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" />
    <br/>
    <br/>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" />
    <br/>
    <br/>
    <input type="submit" value="Adicionar" />
</form>

<?php $render('footer'); ?>