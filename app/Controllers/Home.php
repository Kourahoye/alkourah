<?php

namespace App\Controllers;
use TCPDF;


class Home extends BaseController
{
    public function index(): string
    {
        $datas =[
            [
               'jour' => 'Mardi',
                'Heures' => [
                        [
                            'heure' => '8h-12h',
                            'matiere' => 'Info Mobile',
                            'professeur' => 'Alpha YAYA diallo',
                            'salle' => 'sall 5 bloc A'
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
                        'heure' => '8h-12h',
                        'matiere' => 'Blablabla',
                        'professeur' => 'Doumbouya',
                        'salle' => 'sall 4 bloc A'
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
                        'salle' => 'sall 5 bloc A'
                    ],
                    [
                        'heure' => '12h-16h',
                        'matiere' => 'Supervision des reseaux informatique',
                        'professeur' => 'John doe',
                        'salle' => 'sall 5 bloc A'
                    ]
                ]
            ]
        ];
        return view('welcome_message',['datas'=>$datas]);
    }
    public function pdf()
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
        $this->response->setContentType('application/pdf');
            $pdf->writeHTML($page);
            $pdf->Output('emploi.pdf','I');
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
                            'salle' => 'sall 5 bloc A'
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
                        'heure' => '8h-12h',
                        'matiere' => 'Blablabla',
                        'professeur' => 'Doumbouya',
                        'salle' => 'sall 4 bloc A'
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
                        'salle' => 'sall 5 bloc A'
                    ],
                    [
                        'heure' => '12h-16h',
                        'matiere' => 'Supervision des reseaux informatique',
                        'professeur' => 'John doe',
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
        $page ='<div style="display:flex;justify-content: center;margin:0px;padding:0px;">';
        // <h2 style="text-align:center;font-weight:normal;flex-grow:1; ">UNIVERSITE PAYE-PAYE <br/>FACULTE DES SCIENCES ET TECHNIQUES</h2>
        // </div>
        $page .='<h2 style="text-align:center;font-weight:normal;">UNIVERSITE PAYE-PAYE <br/>FACULTE DES SCIENCES ET TECHNIQUES</h2>
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
        <div style="text-align:right;">
        Le chef de Departement <br/> <br/> Mr Bah Mamadou Tidiane
        </div>
        ';
        //return $page; // page html test
        $this->response->setContentType('application/pdf');
        $pdf->writeHTML($page);
        $pdf->Output('emploi.pdf','I');
    }
}
