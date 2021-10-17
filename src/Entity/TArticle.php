<?php

namespace App\Entity;

use App\Entity\base\TraitEntity;
use App\Repository\TArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TArticleRepository::class)
 */
class TArticle
{
    use TraitEntity;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=TCategorie::class, inversedBy="tArticles")
     */
    private $fk_categorie;

    /**
     * @ORM\ManyToOne(targetEntity=TUser::class, inversedBy="tArticles")
     */
    private $fk_user;

    /**
     * @ORM\OneToMany(targetEntity=TComment::class, mappedBy="fk_article")
     */
    private $tComments;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_save;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    public function __construct()
    {
        $this->tComments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getFkCategorie(): ?TCategorie
    {
        return $this->fk_categorie;
    }

    public function setFkCategorie(?TCategorie $fk_categorie): self
    {
        $this->fk_categorie = $fk_categorie;

        return $this;
    }

    public function getFkUser(): ?TUser
    {
        return $this->fk_user;
    }

    public function setFkUser(?TUser $fk_user): self
    {
        $this->fk_user = $fk_user;

        return $this;
    }

    /**
     * @return Collection|TComment[]
     */
    public function getTComments(): Collection
    {
        return $this->tComments;
    }

    public function addTComment(TComment $tComment): self
    {
        if (!$this->tComments->contains($tComment)) {
            $this->tComments[] = $tComment;
            $tComment->setFkArticle($this);
        }

        return $this;
    }

    public function removeTComment(TComment $tComment): self
    {
        if ($this->tComments->removeElement($tComment)) {
            // set the owning side to null (unless already changed)
            if ($tComment->getFkArticle() === $this) {
                $tComment->setFkArticle(null);
            }
        }

        return $this;
    }

    public function getDateSave(): ?\DateTimeInterface
    {
        return $this->date_save;
    }

    public function setDateSave(\DateTimeInterface $date_save): self
    {
        $this->date_save = $date_save;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
