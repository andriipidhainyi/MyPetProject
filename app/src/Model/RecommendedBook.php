<?php

declare(strict_types=1);


namespace App\Model;

class RecommendedBook
{
    private int $id;
    private string $title;

    private string $slug;
    private string $image;
    private string $shortDescription;



    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): RecommendedBook
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): RecommendedBook
    {
        $this->title = $title;
        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): RecommendedBook
    {
        $this->slug = $slug;
        return $this;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): RecommendedBook
    {
        $this->image = $image;
        return $this;
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): RecommendedBook
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

}
