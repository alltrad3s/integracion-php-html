<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ciclos</title>
</head>

<body>
  <h2>Las tablas de multiplicar:</h2>
  <table>
    <tr>
      <th>X</th>
      <?php for ($i = 1; $i <= 10; $i++) : ?>

        <th><?= $i ?></th>

      <?php endfor; ?>
    </tr>
    <?php for ($j = 1; $j <= 10; $j++) : ?>
      <tr>
        <td><b><?= $j ?></b></td>
        <?php for ($k = 1; $k <= 10; $k++) : ?>
          <td><?= $j *  $k ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
    <table>
</body>

</html>