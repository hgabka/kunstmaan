<?php

namespace KumaTest\PublicBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;
use KumaTest\PublicBundle\Form\Pages\ContentPageAdminType;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\NodeSearchBundle\Helper\SearchTypeInterface;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;

/**
 * ContentPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="kumatest_publicbundle_content_pages")
 */
class ContentPage extends AbstractPage implements HasPageTemplateInterface, SearchTypeInterface
{
    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new ContentPageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return  [
            [
                'name' => 'ContentPage',
                'class' => 'KumaTest\PublicBundle\Entity\Pages\ContentPage'
            ],
    ];
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchType()
    {
        return 'Page';
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return ['KumaTestPublicBundle:main'];
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return ['KumaTestPublicBundle:contentpage'];
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'KumaTestPublicBundle:Pages\ContentPage:view.html.twig';
    }
}
