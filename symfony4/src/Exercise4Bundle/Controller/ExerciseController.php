<?php

namespace Exercise4Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExerciseController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
