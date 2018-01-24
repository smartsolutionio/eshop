<?php

// -----------------------------------------------------------------------------

namespace AppBundle\Controller;

// -----------------------------------------------------------------------------

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Product;
use AppBundle\Form\ProductForm;

// -----------------------------------------------------------------------------

class ProductController extends Controller
{
    /**
     * @Route("/products", name="products_show")
     */
    public function showAllAction()
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products = $repository->findAll();

        return $this->render('@App\Product\products.html.twig', array(
            'products' => $products,
        ));
    }

    /**
     * Add new product.
     *
     * @Route("/product/add", name="product_add")
     */
    public function addAction(Request $request)
    {
        // create new product
        $product = new Product();

        // create the form for creating new product
        $form = $this->createForm(ProductForm::class, $product);
        $form->handleRequest($request);

        // check if the form is submitted and valid
        if ($form->isSubmitted() && $form->isValid())
        {
            // get the form data (key - value pairs)
            $product = $form->getData();

            // save new product to the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            // display message
            $this->addFlash('notice', 'New product saved: product_id='.$product->getId());
        }

        // return response
        return $this->render('@App/Product/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/product/{slug}", name="product_show")
     */
    public function showAction($slug)
    {
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }



}