Parameter Errors:
<?php foreach ($errors as $parameter => $error): ?>
    <?php echo $parameter; ?> - <?php echo $error; ?>
<?php endforeach; ?>


For more help on what the task does and usage details execute

    <?php echo $_SERVER['argv'][0]; ?> --task=<?php echo $task; ?> --help

