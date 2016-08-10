<?php

namespace KumaTest\PublicBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;
use KumaTest\PublicBundle\Form\Pages\HomePageAdminType;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\NodeBundle\Entity\HomePageInterface;
use Kunstmaan\NodeSearchBundle\Helper\SearchTypeInterface;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;

/**
 * HomePage
 *
 * @ORM\Entity()
 * @ORM\Table(name="kumatest_publicbundle_home_pages")
 */
class HomePage extends AbstractPage implements HasPageTemplateInterface, SearchTypeInterface, HomePageInterface
{
    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new HomePageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return [
            [
                'name' => 'ContentPage',
                'class' => 'KumaTest\PublicBundle\Entity\Pages\ContentPage'
            ],
            [
                'name' => 'BehatTestPage',
                'class' => 'KumaTest\PublicBundle\Entity\Pages\BehatTestPage'
            ]
        ];
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
        return ['KumaTestPublicBundle:homepage'];
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'KumaTestPublicBundle:Pages\HomePage:view.html.twig';
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchType()
    {
        return 'Home';
    }
}
