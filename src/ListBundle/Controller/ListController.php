<?php

namespace ListBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ListBundle\Model\HabitList;
use ListBundle\Model\TodoList;
use ListBundle\Model\DailyList;

class ListController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('ListBundle:main:index.html.twig', 
            [
            ]);
    }
}
