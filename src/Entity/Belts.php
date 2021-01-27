<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\BeltsRepository;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints\Image;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * @ORM\Entity(repositoryClass=BeltsRepository::class)
 * @Vich\Uploadable()
 */
class Belts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */

    private $image;

    /**
     * @var File|null
     * @Assert\Image(mimeTypes={"image/jpeg", "image/jpg", "image/png", ""image/gif})
     * @Vich\UploadableField(mapping="upload", fileNameProperty="image")
     *
     */
    private $imageFile;
    public function getId(): ?int
    {
        return $this->id;
    }
    
}
