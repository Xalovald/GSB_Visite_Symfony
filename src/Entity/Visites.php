<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\VisitesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VisitesRepository::class)
 * @ApiResource
 */
class Visites
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateVisite;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $vst_commentaire;

    /**
     * @ORM\ManyToOne(targetEntity=Praticien::class, inversedBy="pra_visites")
     */
    private $vst_praticien;

    /**
     * @ORM\ManyToOne(targetEntity=Motif::class, inversedBy="mot_visites")
     */
    private $vst_motif;

    /**
     * @ORM\ManyToOne(targetEntity=Visiteur::class, inversedBy="vis_visites")
     */
    private $vst_visiteurs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateVisite(): ?\DateTimeInterface
    {
        return $this->dateVisite;
    }

    public function setDateVisite(?\DateTimeInterface $dateVisite): self
    {
        $this->dateVisite = $dateVisite;

        return $this;
    }

    public function getVstCommentaire(): ?string
    {
        return $this->vst_commentaire;
    }

    public function setVstCommentaire(?string $vst_commentaire): self
    {
        $this->vst_commentaire = $vst_commentaire;

        return $this;
    }

    public function getVstPraticien(): ?praticien
    {
        return $this->vst_praticien;
    }

    public function setVstPraticien(?praticien $vst_praticien): self
    {
        $this->vst_praticien = $vst_praticien;

        return $this;
    }

    public function getVstMotif(): ?motif
    {
        return $this->vst_motif;
    }

    public function setVstMotif(?motif $vst_motif): self
    {
        $this->vst_motif = $vst_motif;

        return $this;
    }

    public function getVstVisiteurs(): ?visiteur
    {
        return $this->vst_visiteurs;
    }

    public function setVstVisiteurs(?visiteur $vst_visiteurs): self
    {
        $this->vst_visiteurs = $vst_visiteurs;

        return $this;
    }
}
