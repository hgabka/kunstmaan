<?php

namespace KumaTest\PublicBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinePagePart
 *
 * @ORM\Table(name="kumatest_publicbundle_line_page_parts")
 * @ORM\Entity
 */
class LinePagePart extends AbstractPagePart
{
    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'KumaTestPublicBundle:PageParts:LinePagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \KumaTest\PublicBundle\Form\PageParts\LinePagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new \KumaTest\PublicBundle\Form\PageParts\LinePagePartAdminType();
    }
}
