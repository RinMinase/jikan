<?php

namespace Jikan\Request;

/**
 * Class MangaGenre
 *
 * @package Jikan\Request
 */
class MangaGenre implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $page;

    /**
     * Genre constructor.
     *
     * @param int $id
     * @param int $page
     *
     */
    public function __construct(int $id, int $page = 1)
    {
        $this->id = $id;
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf('https://myanimelist.net/manga/genre/%s?page=%s', $this->id, $this->page);
    }
}
