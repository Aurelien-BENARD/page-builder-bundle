<?php

namespace Spyrit\Bundle\SpyritPageBuilderBundle\Controller;

use Spyrit\Bundle\SpyritPageBuilderBundle\Model\PageInterface;
use Spyrit\Bundle\SpyritPageBuilderBundle\Manager\RenderManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditorController extends AbstractController
{
    private $renderManager;

    public function __construct(RenderManager $renderManager)
    {
        $this->renderManager = $renderManager;
    }

    public function editorAction(PageInterface $page, iterable $widgets)
    {
        return $this->render('@SpyritPageBuilder/editor/editor.html.twig', [
            'page' => $this->renderManager->renderPage($page, true),
            'widgets' => $widgets,
        ]);
    }
}