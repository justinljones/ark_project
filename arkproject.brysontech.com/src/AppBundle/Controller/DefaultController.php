<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Homepage/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route ("/login", name="login")
     */
    public function loginAction (Request $request)
    {
        return $this->render('Login/login.html.twig',[                
            'username' => isset($_POST['username'])   ?$_POST['username'] : false,
            'pwd'      => isset($_POST['pwd'])        ?$_POST['pwd'] :false
        ]);
    }
    
    /**
     * @Route ("/register", name="register")
     */
    public function registerAction (Request $request)
    {
        return $this->render('Register/register.html.twig',[
            'username' => isset($_POST['username'])   ?$_POST['username'] : false,
            'pwd'      => isset($_POST['pwd'])        ?$_POST['pwd']      : false,
            'Cpwd'     => isset($_POST['Cpwd'])       ?$_POST['Cpwd']     : false,
            'email'    => isset($_POST['email'])      ?$_POST['email']    : false
        ]);
    }
}
