<?php

namespace App\Entity;

use App\Repository\ProgramRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProgramRepository::class)]
class Program
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Program = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProgram(): ?string
    {
        return $this->Program;
    }

    public function setProgram(string $Program): self
    {
        $this->Program = $Program;

        return $this;
    }
}
