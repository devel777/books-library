<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    }

    public function addAction()
    {
        $form = new AddBookForm();

        if ( $this->request->isPost() ) {
            $data = $this->request->getPost();

            if ( $form->isValid($data) ) {
                $books = new Books();

                $books->addBook($data);
            }
        }

        $this->view->setVar('form', $form);
    }

    public function showAction()
    {
        $books = new Books();

        $this->view->setVar('books', $books->getBooks());
    }
}
