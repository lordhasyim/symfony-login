<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $question;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $body;

    /**
     * @ORM\Column(type="integer", options={"default": "0"})
     */
    private $views = 0;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $created;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of body
     */ 
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */ 
    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get the value of views
     */ 
    public function getViews(): ?int
    {
        return $this->views;
    }

    /**
     * Set the value of views
     *
     * @return  self
     */ 
    public function setViews(int $views): self
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get the value of created
     */ 
    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @return  self
     */ 
    public function setCreated(\DatetimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }
}
