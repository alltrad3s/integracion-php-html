<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ciclos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
  <h2>Las tablas de multiplicar:</h2>
  <div class="table-container">
  <table class="table is-bordered">
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
</div>
</body>

</html>