<?php

namespace KumaTest\PublicBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * TocPagePart
 *
 * @ORM\Table(name="kumatest_publicbundle_toc_page_parts")
 * @ORM\Entity
 */
class TocPagePart extends AbstractPagePart
{
    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'KumaTestPublicBundle:PageParts:TocPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \KumaTest\PublicBundle\Form\PageParts\TocPagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new \KumaTest\PublicBundle\Form\PageParts\TocPagePartAdminType();
    }
}
