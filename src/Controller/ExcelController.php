<?php

namespace App\Controller;

use App\Entity\Equipement;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExcelController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {

        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('equipement_crud/index.html.twig', [
            'controller_name' => 'EquipementCrudController',
        ]);
    }

    private function getData(): array
    {
        /**
         * @var $equipement Equipement[]
         */
        $list = [];
        $equipements = $this->entityManager->getRepository(Equipement::class)->findAll();

        foreach ($equipements as $equipement) {
            $list[] = [
                $equipement->getNomOrdinateur(),
                $equipement->getNomUtilisateur(),
                $equipement->getPrenomUtilisateur(),
                $equipement->getRefQualite(),
                $equipement->getEmplacement(),
                $equipement->getServices(),
                $equipement->getAdresseIp(),
                $equipement->getReference(),
                $equipement->getReseauLan(),
                $equipement->getTypeMateriel(),
                $equipement->getNumeroSerie(),
                $equipement->getEnService(),
                $equipement->getSystemeExploitation(),
                $equipement->getMacAdresse(),
                $equipement->getDateAchat(),
                $equipement->getLoginAdminLocale(),
                $equipement->getLoginAdminDomaine(),
                $equipement->getLoginUser(),
                $equipement->getVpn()
            ];
        }
        return $list;
    }

    /**
     * @Route("/export",  name="export")
     */
    public function export()
    {
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle('Liste des Equipement');

        $sheet->getCell('A1')->setValue('Nom Ordinateur');
        $sheet->getCell('B1')->setValue('Nom Utilisateur');
        $sheet->getCell('C1')->setValue('Prenom Utilisateur');
        $sheet->getCell('D1')->setValue('Ref Qualite');
        $sheet->getCell('E1')->setValue('Emplacement');
        $sheet->getCell('F1')->setValue('Services');
        $sheet->getCell('G1')->setValue('Adresse Ip');
        $sheet->getCell('H1')->setValue('Reference');
        $sheet->getCell('I1')->setValue('Reseau Lan');
        $sheet->getCell('J1')->setValue('Type Materiel');
        $sheet->getCell('K1')->setValue('Numero Serie');
        $sheet->getCell('L1')->setValue('En Service');
        $sheet->getCell('M1')->setValue('Systeme Exploitation');
        $sheet->getCell('N1')->setValue('Mac Adresse');
        $sheet->getCell('O1')->setValue('Date Achat');
        $sheet->getCell('P1')->setValue('Login Admin Locale');
        $sheet->getCell('Q1')->setValue('Login Admin Domaine');
        $sheet->getCell('R1')->setValue('Login User');
        $sheet->getCell('S1')->setValue('Vpn');

        // Increase row cursor after header write
        $sheet->fromArray($this->getData(), null, 'A2', true);


        $writer = new Xlsx($spreadsheet);
        // Create a Temporary file in the system
        $fileName = 'Equipement.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        $writer->save($temp_file);

        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }
}
