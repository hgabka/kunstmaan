<?php

namespace KumaTest\PublicBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\MediaBundle\Entity\Media;

/**
 * DownloadPagePart
 *
 * @ORM\Entity
 * @ORM\Table(name="kumatest_publicbundle_download_page_parts")
 */
class DownloadPagePart extends AbstractPagePart
{
    /**
     * @ORM\ManyToOne(targetEntity="Kunstmaan\MediaBundle\Entity\Media")
     * @ORM\JoinColumn(name="media_id", referencedColumnName="id")
     */
    protected $media;

    /**
     * Get media
     *
     * @return Media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set media
     *
     * @param Media $media
     *
     * @return DownloadPagePart
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'KumaTestPublicBundle:PageParts/DownloadPagePart:view.html.twig';
    }

    /**
     * @return DownloadPagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new \KumaTest\PublicBundle\Form\PageParts\DownloadPagePartAdminType();
    }
}
