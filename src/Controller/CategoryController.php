<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category', name: 'category_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categorys = $categoryRepository->findALl();
        return $this->render('category/index.html.twig', [
            'categorys' => $categorys,
        ]);
    }
    #[Route('/show/{id}', methods: ['GET'], name: 'show')]
    public function show(string $categoryName)
    {
        $category = $categoryName->findOneBy([]);
        return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }
}
