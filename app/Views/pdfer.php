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
<!-- pdf v1 -->
<div class="container border p-3 border-black">

  <h1>Pdf V1</h1>
  <img src="<?= base_url('/public/assets/images/tangy.jpg')?>">
  <h2 style="text-align:center;font-weight:normal;">UNIVERSITE PAYE-PAYE <br/>FACULTE DES SCIENCES ET TECHNIQUES</h2>
  <h4 style="text-align:center;">DEPARTEMENT:MIAGE</h4>
        <h4 style="text-align:center;">Niveau:LICENCE 4 PDW/GENIE LOGICIEL</h4>
        <h3 style="text-align:center;">SEMESTRE 8</h3>';
        <table style="border: 2px solid; border-collapse:collapse;font-weight:semibold;" width=100%>
    <thead>
        <tr style="border: 1px solid; padding:2px">
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
</div>
<?php
function pdf() 
    {
        $datas =[
            [
               'jour' => 'Mardi',
                'Heures' => [
                        [
                            'heure' => '8h-12h',
                            'matiere' => 'Info Mobile',
                            'professeur' => 'Alpha YAYA diallo',
                            'salle' => 'sall 7 bloc B'
                        ],
                        [
                            'heure' => '12h-16h',
                            'matiere' => 'Supervision des reseaux informatique',
                            'professeur' => 'Mamadou rafiou bah',
                            'salle' => 'sall 5 bloc A'
                        ]
                    ]
            ],
            [
                'jour' => 'Mercredi',
                'Heures' => [
                    [
                        'heure' => '8h-12h',
                        'matiere' => 'Technologie huawei',
                        'professeur' => 'Mamadou rafiou bah',
                        'salle' => 'sall 8 bloc B'
                    ],
                    [
                        'heure' => '12h-16h',
                        'matiere' => 'Supervision des reseaux informatique',
                        'professeur' => 'Mamadou rafiou bah',
                        'salle' => 'sall 8 bloc B'
                    ],
                ]
           ],
           [
                'jour' => 'jeudi',
                'Heures' => [
                    [
                        'heure1' => '8h-12h',
                        'matiere' => 'CCNA network security',
                        'professeur' => 'Mamadou bilo doumbouya',
                        'salle' => 'sall 8 bloc B'
                    ]
                ]
                    ],
           [
                'jour' => 'samedi',
                'Heures' => [
                    [
                        'heure1' => '8h-12h',
                        'matiere' => 'CCNA network security',
                        'professeur' => 'Mamadou bilo doumbouya',
                        'salle' => 'sall 8 bloc C'
                    ],
                    [
                        'heure' => '12h-16h',
                        'matiere' => 'Supervision des reseaux informatique',
                        'professeur' => 'Mamadou rafiou bah',
                        'salle' => 'sall 5 bloc A'
                    ]
                ]
            ]
        ];
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
        $pdf->setCreator(PDF_CREATOR);
        $pdf->setAuthor('kourahoye');
        $pdf->setTitle('pdf');
        $pdf->setSubject('un pdf');
        $pdf->setKeywords('TCPDF,PDF,exemple,test,guide');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        //$pdf->setMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP,PDF_MARGIN_RIGHT);
        $pdf->setFont('times', '', 14, '', true);
        $pdf->setPageOrientation('L');
        $pdf->AddPage();
        //$page = view('pdfer',['datas'=>$datas]);
        $page ='<h2 style="text-align:center;font-weight:normal;">UNIVERSITE PAYE-PAYE <br/>FACULTE DES SCIENCES ET TECHNIQUES</h2>
        <h4 style="text-align:center;">DEPARTEMENT:MIAGE</h4>
        <h4 style="text-align:center;">Niveau:LICENCE 4 PDW/GENIE LOGICIEL</h4>
        <h3 style="text-align:center;">SEMESTRE 8</h3>';
        $page .= '<table border="1" cellpadding="3" style="font-weight:semibold;border-collapse:collapse;margin:0;" width=100%>
        <thead>
            <tr>
                <th style="font-weight:bold;">Jours</th>
                <th style="font-weight:bold;">Heures</th>
                <th style="font-weight:bold;">Matiere</th>
                <th style="font-weight:bold;">Professeur</th>
                <th style="font-weight:bold;">Salle</th>
        </tr>
        </thead>
        <tbody>';
        foreach ($datas as $data):
            //$page .= '<tr style="border: 3px solid;">';
                $i = 0; foreach ($data['Heures'] as $heure ):
                $page .= '<tr>';
                if ($i == 0):
                    $page .= '<td style="text-align:center;" rowspan="'.sizeof($data['Heures']).'">'. $data['jour'] .'</td>';
                    $i=1;
                endif;
                foreach ($heure as $value):
                    $page .= '<td style="text-align:center;">'.$value.'</td>';
                endforeach;
                $page .= '</tr>';
            endforeach;
        // $page .= '</tr>';
        endforeach;
        $page .= '</tbody></table>
        <div style="text-align:right;">
        Le chef de Departement <br/> <br/> Mr Bah Mamadou Tidiane
        </div>
        ';
             // return $page;
       // $this->response->setContentType('application/pdf');
            $pdf->writeHTML($page);
            $pdf->Output('emploi.pdf','I');
    }
?>
<!-- </body>
</html> -->