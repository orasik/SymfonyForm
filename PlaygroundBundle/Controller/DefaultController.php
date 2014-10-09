<?php

namespace Oras\PlaygroundBundle\Controller;

use Oras\PlaygroundBundle\Entity\Answer;
use Oras\PlaygroundBundle\Form\AnswerType;
use Oras\PlaygroundBundle\OrasPlaygroundBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OrasPlaygroundBundle:Default:index.html.twig', array('name' => $name));
    }

    public function formAction(Request $request)
    {
        $answer =  new Answer();
        $question = $this->getDoctrine()->getRepository('OrasPlaygroundBundle:Question')->find(2);
        $answer->setQuestion($question);
        $answer->setValue('Hello?!');

        $form = $this->createForm(new AnswerType());
        $form->get('value')->setData($answer->getValue());
        $form->get('question')->setData($answer->getQuestion());

        if ($request->isMethod('POST')) {
            $form->submit($request);

            if ($form->isValid()) {
                // perform some action...
                $answer = $form->getData();
                $question = $this->getDoctrine()->getRepository('OrasPlaygroundBundle:Question')->find(2);
                $answer->setQuestion($question);
                echo $request->request->get('value');
            }
        }
        return $this->render(
            'OrasPlaygroundBundle:Default:form.html.twig',
            array('form' => $form->createView())
        );
    }
}
