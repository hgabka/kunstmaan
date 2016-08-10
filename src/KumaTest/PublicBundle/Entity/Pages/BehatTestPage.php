<?php

namespace KumaTest\PublicBundle\Entity\Pages;

use KumaTest\PublicBundle\Form\Pages\BehatTestPageAdminType;

use Doctrine\ORM\Mapping as ORM;
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
        return array(
            array(
                'name'  => 'HomePage',
                'class' => 'KumaTest\PublicBundle\Entity\Pages\HomePage'
            ),
            array(
                'name'  => 'ContentPage',
                'class' => 'KumaTest\PublicBundle\Entity\Pages\ContentPage'
            ),
        );
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array();
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array('KumaTestPublicBundle:behat-test-page');
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return '';
    }
}