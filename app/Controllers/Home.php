<?php

namespace App\Controllers;
use TCPDF;


class Home extends BaseController
{
    public function index(): string
    {
        $classe = [
            "faculte" => "FACULTE DES SCIENCES ET TECHNIQUES",
            "departement" => "MIAGE",
            "licence" => "LICENCE 4 PDW/GENIE LOGICIEL",
            "semestre" => "SEMESTRE 8",
            "chef-dept" => "Mr Bah Mamadou Tidiane"

        ];
        $datas =[
            [
               'jour' => 'Mardi',
                'Heures' => [
                        [
                            'heure' => '8h-12h',
                            'matiere' => 'Info Mobile',
                            'professeur' => 'Alpha YAYA diallo',
                            'salle' => 'sall 4 bloc C'
                        ],
                        [
                            'heure' => '12h-16h',
                            'matiere' => 'Supervision des reseaux informatique',
                            'professeur' => 'Mamadou rafiou bah',
                            'salle' => 'sall 4 bloc C'
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
                        'heure' => '8h-12h',
                        'matiere' => 'Blablabla',
                        'professeur' => 'Doumbouya',
                        'salle' => 'sall 4 bloc C'
                    ],
                    [
                        'heure' => '12-16h',
                        'matiere' => 'Security',
                        'professeur' => 'Doumbouya',
                        'salle' => 'sall 4 bloc A'
                    ],
                ]
                    ],
           [
                'jour' => 'samedi',
                'Heures' => [
                    [
                        'heure' => '8h-12h',
                        'matiere' => 'CCNA network security',
                        'professeur' => 'John doe',
                        'salle' => 'sall 5 bloc C'
                    ],
                    [
                        'heure' => '12h-16h',
                        'matiere' => 'Supervision des reseaux informatique',
                        'professeur' => 'Jane doe',
                        'salle' => 'sall 5 bloc B'
                    ]
                ]
            ]
        ];
        return view('welcome_message',['datas'=>$datas,'classe'=>$classe]);
    }
    public function betterPdf()
    {
        // un emploi du temps complet
        $datas =[
            //un tableau represente un jour
            [
                //le jour
               'jour' => 'Mardi',
               'Heures' => [
                    //represente une ligne d'un jour
                        [
                            'heure' => '8h-12h',
                            'matiere' => 'Info Mobile',
                            'professeur' => 'Alpha YAYA diallo',
                            'salle' => 'sall 5 bloc C'
                        ],
                        [
                            'heure' => '12h-16h',
                            'matiere' => 'Supervision des reseaux informatique',
                            'professeur' => 'Mamadou rafiou bah',
                            'salle' => 'sall 4 bloc C'
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
                        'heure' => '8h-12h',
                        'matiere' => 'Blablabla',
                        'professeur' => 'Doumbouya',
                        'salle' => 'sall 4 bloc A'
                    ],
                    [
                        'heure' => '12-16h',
                        'matiere' => 'Security',
                        'professeur' => 'Doumbouya',
                        'salle' => 'sall 4 bloc B'
                    ],
                ]
                    ],
           [
                'jour' => 'samedi',
                'Heures' => [
                    [
                        'heure' => '8h-12h',
                        'matiere' => 'CCNA network security',
                        'professeur' => 'John doe',
                        'salle' => 'sall 5 bloc C'
                    ],
                    [
                        'heure' => '12h-16h',
                        'matiere' => 'Supervision des reseaux informatique',
                        'professeur' => 'Jane doe',
                        'salle' => 'sall 5 bloc B'
                    ]
                ]
            ]
        ];
        // une classe
        $classe = [
            "faculte" => "FACULTE DES SCIENCES ET TECHNIQUES",
            "departement" => "MIAGE",
            "licence" => "LICENCE 4 PDW/GENIE LOGICIEL",
            "semestre" => "SEMESTRE 8",
            "chef-dept" => "Mr Bah Mamadou Tidiane"

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
        //$pdf->ima
        $pdf->AddPage();
        $page ='<table style="width:100%;" cellpadding="3px">
        <tr style="margin:5px;">
        <td rowspan="4" style="width:20%;vertical-align:middle;">
        <img src="'.base_url('/public/assets/images/obama.jfif').'" width="100" height="80">
        </td>
        <td style="text-align:center;font-weight:bold;width:60%; vertical-align:middle;">
         UNIVERSITE BARACK OBAMA <br/>'.$classe['faculte'].'
        </td>
        <td rowspan="4" style="width:20%"></td>
         </tr>
         <tr style="margin:5px;">
         <td style="text-align:center;font-weight:bold;">DEPARTEMENT:'.$classe['departement'].'</td>
         </tr>
         <tr style="margin:5px;">
        <td style="text-align:center;font-weight:bold;">Niveau:'.$classe['licence'].'</td>
        </tr>
        </table>
        <h3 style="text-align:center;margin:2em;">'.$classe['semestre'].'</h3>
        ';
        $page .= '<table border="1" cellpadding="3" style="font-weight:semibold;border-collapse:collapse;" width=100%>
        <thead>
            <tr>
            <th style="font-weight:bold;text-align:center;">Heures</th>
            <th style="font-weight:bold;text-align:center;">Jours</th>
                <th style="font-weight:bold;text-align:center;">Matiere</th>
                <th style="font-weight:bold;text-align:center;">Professeur</th>
                <th style="font-weight:bold;text-align:center;">Salle</th>
                </tr>
                </thead>
                <tbody>';
                foreach ($datas as $data):
                $uniqueProfPrinted = false;
                $uniqueSallePrinted = false;
                $i = 0; foreach ($data['Heures'] as $heure ):
                    $page .= '<tr>';
                    //handle fusion jour; embeche multiple affichages
                    if ($i == 0):
                        $page .= '<td style="text-align:center;" rowspan="'.sizeof($data['Heures']).'">'. $data['jour'] .'</td>';
                        $i=1;
                    endif;
                       $nbProf = 0;
                       $nbsalle = 0;
                       $profCible = $heure['professeur'];
                       $salleCible = $heure['salle'];
                     //compter pour nbprof
                    foreach ($data['Heures'] as $key1 => $val)
                    {
                        foreach ($val as $key => $value) {
                            if ($key == 'professeur') {
                               //  print_r($value);
                               if ($value == $profCible) {
                                    $nbProf++;
                                }
                             }
                         }
                    }
                     //compter pour nbsalle
                    foreach ($data['Heures'] as $key1 => $val)
                    {
                        foreach ($val as $key => $value) {
                            if ($key == 'salle') {
                               if ($value == $salleCible) {
                                    $nbsalle++;
                                }
                             }
                         }
                    }
                        //heure jamais de fusion
                        $page .= '<td style="text-align:center;">'.$heure['heure'].'</td>';
                        //on verifie si il faut fusionner ou pas
                        if ($nbProf == sizeof($data['Heures']) || $nbsalle == sizeof($data['Heures']) ) {
                            $page .= '<td style="text-align:center;">'.$heure['matiere'].'</td>';
                            //verifie si nbprof  = nbmatiere alors on fusione de nbprof
                            if ($nbProf == sizeof($data['Heures'])){
                                //empeche d'afficher a nouveau si il ya fusion
                                if (!$uniqueProfPrinted) {
                                    $page .= '<td style="text-align:center;" rowspan="'. $nbProf .'">'.$heure['professeur'].'</td>';
                                    $uniqueProfPrinted = true;
                                }
                            }else{
                                $page .= '<td style="text-align:center;">'.$heure['professeur'].'</td>';
                            }
                            //verifie si nbsalle  = nbmatiere alors on fusione de nbsalle
                            if ($nbsalle == sizeof($data['Heures'])) {
                                //empeche d'afficher a nouveau si il ya fusion
                                if (!$uniqueSallePrinted) {
                                    $page .= '<td style="text-align:center;" rowspan="'. $nbsalle .'">'.$heure['salle'].'</td>';
                                    $uniqueSallePrinted = true;
                                }
                            }else{
                                $page .= '<td style="text-align:center;">'.$heure['salle'].'</td>';
                            }
                        }else{
                            // pas de fusion a faire
                            $page .= '<td style="text-align:center;">'.$heure['matiere'].'</td>';
                            $page .= '<td style="text-align:center;">'.$heure['professeur'].'</td>';
                            $page .= '<td style="text-align:center;">'.$heure['salle'].'</td>';
                        }
                $page .= '</tr>';
            endforeach;
        endforeach;
        $page .= '</tbody></table>
        <p style="text-align:right;margin-top:5px;font-weight:bold;">
        Le chef de Departement <br/><br/><br/>'.$classe['chef-dept'].'
        </p>';
        //return $page; // page html test
        $this->response->setContentType('application/pdf');
        $pdf->writeHTML($page);
        $pdf->Output('emploi.pdf','I');
    }
    public function pdf()
    {
        {
            // un emploi du temps complet
            $datas =[
                //un ligne represente un jour
                'Lundi' =>
                [
                    //represente une ligne une heure
                    [
                        'heure' => '8h-12h',
                        'matiere' => 'Info Mobile',
                        'professeur' => 'Alpha YAYA diallo',
                        'salle' => 'sall 5 bloc C'
                    ],
                    [
                        'heure' => '12h-16h',
                        'matiere' => 'Supervision des reseaux informatique',
                        'professeur' => 'Mamadou rafiou bah',
                        'salle' => 'sall 4 bloc C'
                    ]
                ],
                
                'Mardi' =>
                [
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
               ],
               'jeudi' =>
               [
                        [
                            'heure' => '8h-12h',
                            'matiere' => 'Blablabla',
                            'professeur' => 'Doumbouya',
                            'salle' => 'sall 4 bloc A'
                        ],
                        [
                            'heure' => '12-16h',
                            'matiere' => 'Security',
                            'professeur' => 'Doumbouya',
                            'salle' => 'sall 4 bloc B'
                        ],
                ],
                'samedi' =>
               [
                        [
                            'heure' => '8h-12h',
                            'matiere' => 'CCNA network security',
                            'professeur' => 'John doe',
                            'salle' => 'sall 5 bloc C'
                        ],
                        [
                            'heure' => '12h-16h',
                            'matiere' => 'Supervision des reseaux informatique',
                            'professeur' => 'Jane doe',
                            'salle' => 'sall 5 bloc B'
                        ]
                ]
            ];
            // une classe
            $classe = [
                "faculte" => "FACULTE DES SCIENCES ET TECHNIQUES",
                "departement" => "MIAGE",
                "licence" => "LICENCE 4 PDW/GENIE LOGICIEL",
                "semestre" => "SEMESTRE 8",
                "chef-dept" => "Mr Bah Mamadou Tidiane"
    
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
            //$pdf->ima
            $pdf->AddPage();
            $page ='<table style="width:100%;" cellpadding="3px">
            <tr style="margin:5px;">
            <td rowspan="4" style="width:20%;vertical-align:middle;">
            <img src="'.base_url('/public/assets/images/obama.jfif').'" width="100" height="80">
            </td>
            <td style="text-align:center;font-weight:bold;width:60%; vertical-align:middle;">
             UNIVERSITE BARACK OBAMA <br/>'.$classe['faculte'].'
            </td>
            <td rowspan="4" style="width:20%"></td>
             </tr>
             <tr style="margin:5px;">
             <td style="text-align:center;font-weight:bold;">DEPARTEMENT:'.$classe['departement'].'</td>
             </tr>
             <tr style="margin:5px;">
            <td style="text-align:center;font-weight:bold;">Niveau:'.$classe['licence'].'</td>
            </tr>
            </table>
            <h3 style="text-align:center;margin:2em;">'.$classe['semestre'].'</h3>
            ';
            $page .= '<table border="1" cellpadding="3" style="font-weight:semibold;border-collapse:collapse;" width=100%>
            <thead>
                <tr>
                <th style="font-weight:bold;text-align:center;">Heures</th>
                <th style="font-weight:bold;text-align:center;">Jours</th>
                    <th style="font-weight:bold;text-align:center;">Matiere</th>
                    <th style="font-weight:bold;text-align:center;">Professeur</th>
                    <th style="font-weight:bold;text-align:center;">Salle</th>
                    </tr>
                    </thead>
                    <tbody>';
                    // foreach ($datas as $data):
                    foreach ($datas as $key => $data):
                    $uniqueProfPrinted = false;
                    $uniqueSallePrinted = false;
                    $i = 0;
                    // foreach ($data['Heures'] as $heure ):
                        foreach ($data as $key2 => $heure):
                        $page .= '<tr>';
                        //handle fusion jour; embeche multiple affichages
                        if ($i == 0):
                            $page .= '<td style="text-align:center;" rowspan="'.sizeof($data).'">'. $key .'</td>';
                            $i=1;
                        endif;
                           $nbProf = 0;
                           $nbsalle = 0;
                           $profCible = $heure['professeur'];
                           $salleCible = $heure['salle'];
                         //compter pour nbprof
                        foreach ($data as $key1 => $val)
                        {
                            foreach ($val as $key => $value) {
                                if ($key == 'professeur') {
                                   //  print_r($value);
                                   if ($value == $profCible) {
                                        $nbProf++;
                                    }
                                 }
                             }
                        }
                         //compter pour nbsalle
                        foreach ($data as $key1 => $val)
                        {
                            foreach ($val as $key => $value) {
                                if ($key == 'salle') {
                                   if ($value == $salleCible) {
                                        $nbsalle++;
                                    }
                                 }
                             }
                        }
                            //heure jamais de fusion
                            $page .= '<td style="text-align:center;">'.$key2.'</td>';
                            //on verifie si il faut fusionner ou pas
                            if ($nbProf == sizeof($data) || $nbsalle == sizeof($data) ) {
                                $page .= '<td style="text-align:center;">'.$heure['matiere'].'</td>';
                                //verifie si nbprof  = nbmatiere alors on fusione de nbprof
                                if ($nbProf == sizeof($data)){
                                    //empeche d'afficher a nouveau si il ya fusion
                                    if (!$uniqueProfPrinted) {
                                        $page .= '<td style="text-align:center;" rowspan="'. $nbProf .'">'.$heure['professeur'].'</td>';
                                        $uniqueProfPrinted = true;
                                    }
                                }else{
                                    $page .= '<td style="text-align:center;">'.$heure['professeur'].'</td>';
                                }
                                //verifie si nbsalle  = nbmatiere alors on fusione de nbsalle
                                if ($nbsalle == sizeof($data)) {
                                    //empeche d'afficher a nouveau si il ya fusion
                                    if (!$uniqueSallePrinted) {
                                        $page .= '<td style="text-align:center;" rowspan="'. $nbsalle .'">'.$heure['salle'].'</td>';
                                        $uniqueSallePrinted = true;
                                    }
                                }else{
                                    $page .= '<td style="text-align:center;">'.$heure['salle'].'</td>';
                                }
                            }else{
                                // pas de fusion a faire
                                $page .= '<td style="text-align:center;">'.$heure['matiere'].'</td>';
                                $page .= '<td style="text-align:center;">'.$heure['professeur'].'</td>';
                                $page .= '<td style="text-align:center;">'.$heure['salle'].'</td>';
                            }
                    $page .= '</tr>';
                endforeach;
            endforeach;
            $page .= '</tbody></table>
            <p style="text-align:right;margin-top:5px;font-weight:bold;">
            Le chef de Departement <br/><br/><br/>'.$classe['chef-dept'].'
            </p>';
            //return $page; // page html test
            $this->response->setContentType('application/pdf');
            $pdf->writeHTML($page);
            $pdf->Output('emploi.pdf','I');
        } 
    }
    public function pdf2()
    {
        {
            // un emploi du temps complet
            $datas =
            [
                //une ligne represente un jour
                'Lundi' =>
                [
                    //une ligne represente une ligne un cour
                    '8h-12h' =>
                    [
                        'matiere' => 'Info Mobile',
                        'professeur' => 'Alpha YAYA diallo',
                        'salle' => 'sall 5 bloc C'
                    ],
                    '12h-16' =>
                    [
                        'matiere' => 'Supervision des reseaux informatique',
                        'professeur' => 'Mamadou rafiou bah',
                        'salle' => 'sall 4 bloc C'
                    ]
                ],
                'Mardi' =>
                [
                    '8h-12h' =>
                        [
                            'matiere' => 'Technologie huawei',
                            'professeur' => 'Mamadou rafiou bah',
                            'salle' => 'sall 8 bloc B'
                        ],
                        '12h-16h' =>
                        [
                            'matiere' => 'Supervision des reseaux informatique',
                            'professeur' => 'Mamadou rafiou bah',
                            'salle' => 'sall 8 bloc B'
                        ],
               ],
               'Jeudi' =>
               [
                   '8h-12h' =>
                        [
                            'matiere' => 'Blablabla',
                            'professeur' => 'Doumbouya',
                            'salle' => 'sall 4 bloc A'
                        ],
                        '12-16h' =>
                        [
                            'matiere' => 'Security',
                            'professeur' => 'Doumbouya',
                            'salle' => 'sall 4 bloc B'
                        ],
                ],
                'Samedi' =>
               [
                   '8h-12h' =>
                        [
                            'matiere' => 'CCNA network security',
                            'professeur' => 'John doe',
                            'salle' => 'sall 5 bloc C'
                        ],
                    '12h-16h' =>
                        [
                            'matiere' => 'Supervision des reseaux informatique',
                            'professeur' => 'Jane doe',
                            'salle' => 'sall 5 bloc B'
                        ]
                ]
            ];
            // une classe
            $classe = [
                "faculte" => "FACULTE DES SCIENCES ET TECHNIQUES",
                "departement" => "MIAGE",
                "licence" => "LICENCE 4 PDW/GENIE LOGICIEL",
                "semestre" => "SEMESTRE 8",
                "chef-dept" => "Mr Bah Mamadou Tidiane"

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
            //$pdf->ima
            $pdf->AddPage();
            $page ='<table style="width:100%;" cellpadding="3px">
            <tr style="margin:5px;">
            <td rowspan="4" style="width:20%;vertical-align:middle;">
            <img src="'.base_url('/public/assets/images/obama.jfif').'" width="100" height="80">
            </td>
            <td style="text-align:center;font-weight:bold;width:60%; vertical-align:middle;">
             UNIVERSITE BARACK OBAMA <br/>'.$classe['faculte'].'
            </td>
            <td rowspan="4" style="width:20%"></td>
             </tr>
             <tr style="margin:5px;">
             <td style="text-align:center;font-weight:bold;">DEPARTEMENT:'.$classe['departement'].'</td>
             </tr>
             <tr style="margin:5px;">
            <td style="text-align:center;font-weight:bold;">Niveau:'.$classe['licence'].'</td>
            </tr>
            </table>
            <h3 style="text-align:center;margin:2em;">'.$classe['semestre'].'</h3>
            ';
            $page .= '<table border="1" cellpadding="3" style="font-weight:semibold;border-collapse:collapse;" width=100%>
            <thead>
                <tr>
                <th style="font-weight:bold;text-align:center;">Heures</th>
                <th style="font-weight:bold;text-align:center;">Jours</th>
                    <th style="font-weight:bold;text-align:center;">Matiere</th>
                    <th style="font-weight:bold;text-align:center;">Professeur</th>
                    <th style="font-weight:bold;text-align:center;">Salle</th>
                    </tr>
                    </thead>
                    <tbody>';
                    // foreach ($datas as $data):
                    foreach ($datas as $key => $data):
                    $uniqueProfPrinted = false;
                    $uniqueSallePrinted = false;
                    $i = 0;
                    // foreach ($data['Heures'] as $heure ):
                        foreach ($data as $key2 => $heure):
                        $page .= '<tr>';
                        //handle fusion jour; embeche multiple affichages
                        if ($i == 0):
                            $page .= '<td style="text-align:center;" rowspan="'.sizeof($data).'">'. $key .'</td>';
                            $i=1;
                        endif;
                           $nbProf = 0;
                           $nbsalle = 0;
                           $profCible = $heure['professeur'];
                           $salleCible = $heure['salle'];
                         //compter pour nbprof
                        foreach ($data as $key1 => $val)
                        {
                            foreach ($val as $key => $value) {
                                if ($key == 'professeur') {
                                   //  print_r($value);
                                   if ($value == $profCible) {
                                        $nbProf++;
                                    }
                                 }
                             }
                        }
                         //compter pour nbsalle
                        foreach ($data as $key1 => $val)
                        {
                            foreach ($val as $key => $value) {
                                if ($key == 'salle') {
                                   if ($value == $salleCible) {
                                        $nbsalle++;
                                    }
                                 }
                             }
                        }
                            //heure jamais de fusion
                            $page .= '<td style="text-align:center;">'.$key2.'</td>';
                            //on verifie si il faut fusionner ou pas
                            if ($nbProf == sizeof($data) || $nbsalle == sizeof($data) ) {
                                $page .= '<td style="text-align:center;">'.$heure['matiere'].'</td>';
                                //verifie si nbprof  = nbmatiere alors on fusione de nbprof
                                if ($nbProf == sizeof($data)){
                                    //empeche d'afficher a nouveau si il ya fusion
                                    if (!$uniqueProfPrinted) {
                                        $page .= '<td style="text-align:center;" rowspan="'. $nbProf .'">'.$heure['professeur'].'</td>';
                                        $uniqueProfPrinted = true;
                                    }
                                }else{
                                    $page .= '<td style="text-align:center;">'.$heure['professeur'].'</td>';
                                }
                                //verifie si nbsalle  = nbmatiere alors on fusione de nbsalle
                                if ($nbsalle == sizeof($data)) {
                                    //empeche d'afficher a nouveau si il ya fusion
                                    if (!$uniqueSallePrinted) {
                                        $page .= '<td style="text-align:center;" rowspan="'. $nbsalle .'">'.$heure['salle'].'</td>';
                                        $uniqueSallePrinted = true;
                                    }
                                }else{
                                    $page .= '<td style="text-align:center;">'.$heure['salle'].'</td>';
                                }
                            }else{
                                // pas de fusion a faire
                                $page .= '<td style="text-align:center;">'.$heure['matiere'].'</td>';
                                $page .= '<td style="text-align:center;">'.$heure['professeur'].'</td>';
                                $page .= '<td style="text-align:center;">'.$heure['salle'].'</td>';
                            }
                    $page .= '</tr>';
                endforeach;
            endforeach;
            $page .= '</tbody></table>
            <p style="text-align:right;margin-top:5px;font-weight:bold;">
            Le chef de Departement <br/><br/><br/>'.$classe['chef-dept'].'
            </p>';
            //return $page; // page html test
            $this->response->setContentType('application/pdf');
            $pdf->writeHTML($page);
            $pdf->Output('emploi.pdf','I');
        }
    }
}
