<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <table style="border: 2px solid; border-collapse:collapse;font-weight:semibold;" width=100%>
    <thead>
        <tr>
            <th style="border: 1px solid; padding:2px">Jours</th>
            <th style="border: 1px solid; padding:2px">Heures</th>
            <th style="border: 1px solid; padding:2px">Matiere</th>
            <th style="border: 1px solid; padding:2px">Professeur</th>
            <th style="border: 1px solid; padding:2px">Salle</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($datas as $data):?>
            <!-- <tr style="border: 2px solid;"> -->
                <?php $i = 0; foreach ($data['Heures'] as $heure ): ?>
                    <tr style="border: 2px sodid;">
                        <?php if ($i == 0): ?>
                            <td style="border: 2px solid; padding:2px;" rowspan=<?= sizeof($data['Heures']) ?>>
                                <?php echo($data['jour']); ?>
                            </td>
                            <?php $i=1; endif;?>
                            <?php foreach ($heure as $value):?>
                                <td style="border: 2px solid; padding:2px;">
                                    <?= $value; ?>
                        </td>
                        <?php endforeach;?>
                    </td>
                </tr>
                        <?php endforeach; ?>
                <!-- </tr> -->
                    <?php endforeach;?>
                </tbody>
                </table>
<!-- </body>
</html> -->