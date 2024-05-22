<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index(Request $request)
    {
        $data = [
            array('name' => 'taro','age' =>37,'mail' => 'taro@gmail.com'),
            array('name' => 'hanako','age' =>22,'mail' => 'hanako@gmail.com'),
            array('name' => 'sachiko','age' =>28,'mail' => 'sachiko@gmail.com'),
            array('name' => 'jiro','age' =>19,'mail' => 'jiro@gmail.com'),
        ];
        return $this->render('hello/index.html.twig', [
            'title' => 'Hello',
            'data' => $data
        ]);
    }
}
