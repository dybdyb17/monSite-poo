<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\EntityManager;
use App\Model\Product;

class ProductController extends Controller
{
    public function new()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product = new Product();

            $product->setTitle($_POST['title'])
                ->setDescription($_POST['description'])
                ->setPrice($_POST['price']);

            $entityManager = new EntityManager();
            $entityManager->persist($product);
            $entityManager->flush();

            $this->redirect('/product/new');
        }

        $this->render('product', [
            'title' => 'PRODUCTS'
        ]);
    }
}