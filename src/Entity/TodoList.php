<?php 

namespace App\Entity;


use DateTime;
use Symfony\Component\Validator\Constraints as Assert;

class TodoList {

    private int $id;

   #[Assert\NotBlank(
        message:"Le nom ne peut pas être vide"
   )]
    #[Assert\Length(
        min : 5,
        max : 70,
        minMessage: "Le nom est trop court",
        maxMessage:"Le nom est trop long"
    )]
     private string $name;

     #[Assert\NotBlank(
        message:"La couleur ne peut pas être vide"
   )]
    #[Assert\Length(
        min : 3,
        max : 30,
        minMessage: "Le nom est trop court",
        maxMessage:"Le nom est trop long"
    )]
    private string $color;
    private DateTime $createdAt;



    public function getCreatedAt()
    {
        return $this->createdAt;
    }


    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

 
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}