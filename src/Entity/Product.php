<?php

namespace App\Entity;

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product.
 *
 * @author Majid Mvulle <majid@bayzat.com>
 *
 * @ORM\Entity
 * @ORM\Table(name="product")
 *
 * @ApiResource()
 */
class Product
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    public $name;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    public $price;

    /**
     * @ORM\Column(type="text")
     */
    public $description;
}
