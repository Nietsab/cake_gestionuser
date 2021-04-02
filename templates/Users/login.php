<h1>Se connecter</h1>

<?= $this->Form->create() ?>

    <?= $this->Form->control('login')?>
    <?= $this->Form->control('password')?>
    <?= $this->Form->button('Se connecter')?>

<?= $this->Form->end();
