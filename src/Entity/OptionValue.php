<?php

namespace App\Entity;

use App\Repository\OptionValueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionValueRepository::class)]
class OptionValue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $value = null;

    #[ORM\Column(nullable: true)]
    private ?float $additional_price = null;

    #[ORM\ManyToOne(inversedBy: 'optionValues')]
    private ?Option $optiona = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getAdditionalPrice(): ?float
    {
        return $this->additional_price;
    }

    public function setAdditionalPrice(?float $additional_price): static
    {
        $this->additional_price = $additional_price;

        return $this;
    }

    public function getOptiona(): ?Option
    {
        return $this->optiona;
    }

    public function setOptiona(?Option $optiona): static
    {
        $this->optiona = $optiona;

        return $this;
    }
}
