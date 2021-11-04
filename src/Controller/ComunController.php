<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\UtilRegExp;
use App\Services\UtilArrays;

/**
 * Controller ComunController
 */
class ComunController extends AbstractController
{
    /**
     * @param UtilRegExp $utilRegExp
     * @param UtilArrays $utilArrays
     */
    #[Route('/comun', name: 'comun')]
    public function comun(UtilRegExp $utilRegExp, UtilArrays $utilArrays)
    {
        //dd($utilRegExp->getIdsNum('Hola @[Franklin](user-gpe-1071) avisa a @[Ludmina](user-gpe-1061)'));
        //dd($utilRegExp->replaceIdfor('Hola @[Franklin](user-gpe-1071) avisa a @[Ludmina](user-gpe-1061)', '@NameUser'));
        $array = [
            ['user' => 'Oscar', 'age' => 18, 'scoring' => 40],
            ['user' => 'Mario', 'age' => 45, 'scoring' => 10],
            ['user' => 'Zulueta', 'age' => 33, 'scoring' => -78],
            ['user' => 'Mario', 'age' => 45, 'scoring' => 78],
            ['user' => 'Patricio', 'age' => 22, 'scoring' => 9],
        ];
        $sortCriterion = ['age' => 'DESC', 'scoring' => 'DESC'];
        dd($utilArrays->sortArrayByCriterion($array, $sortCriterion));
    }
}