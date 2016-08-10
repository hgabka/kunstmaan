<?php

namespace KumaTest\PublicBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;
use KumaTest\PublicBundle\Form\Pages\BehatTestPageAdminType;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;

/**
 * BehatTestPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="kumatest_publicbundle_behat_test_pages")
 */
class BehatTestPage extends AbstractPage implements HasPageTemplateInterface
{

    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new BehatTestPageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return [
            [
                'name' => 'HomePage',
                'class' => 'KumaTest\PublicBundle\Entity\Pages\HomePage'
            ],
            [
                'name' => 'ContentPage',
                'class' => 'KumaTest\PublicBundle\Entity\Pages\ContentPage'
            ],
        ];
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return ['KumaTestPublicBundle:behat-test-page'];
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return '';
    }
}
