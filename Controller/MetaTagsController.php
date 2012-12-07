<?php

namespace Copiaincolla\MetaTagsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * MetaTag controller
 */
class MetaTagsController extends Controller
{

    /**
     * Render HTML metatags
     *
     * @Template()
     */
    public function renderAction()
    {
        $metatagsLoader = $this->container->get('ci_metatags.metatags_loader');
        
        return array(
            'metatags' => $metatagsLoader->getMetaTags($this->getRequest())
        );
    }

}