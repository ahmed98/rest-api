<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilmRepository")
 */
class Film
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=30)
     */
    private $video;

    /**
     * @var int
     *
     * @ORM\Column(name="vote_count", type="integer")
     */
    private $voteCount;

    /**
     * @var int
     *
     * @ORM\Column(name="vote_average", type="integer")
     */
    private $voteAverage;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="popularity", type="integer")
     */
    private $popularity;

    /**
     * @var string
     *
     * @ORM\Column(name="poster_path", type="string", length=255)
     */
    private $posterPath;

    /**
     * @var string
     *
     * @ORM\Column(name="original_language", type="string", length=255)
     */
    private $originalLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="original_title", type="string", length=255)
     */
    private $originalTitle;

    /**
     * @var int
     *
     * @ORM\Column(name="genre_ids0", type="integer")
     */
    private $genreIds0;

    /**
     * @var int
     *
     * @ORM\Column(name="genre_ids1", type="integer")
     */
    private $genreIds1;

    /**
     * @var int
     *
     * @ORM\Column(name="genre_ids2", type="integer")
     */
    private $genreIds2;

    /**
     * @var string
     *
     * @ORM\Column(name="backdrop_path", type="string", length=255)
     */
    private $backdropPath;

    /**
     * @var string
     *
     * @ORM\Column(name="adult", type="string", length=255)
     */
    private $adult;

    /**
     * @var string
     *
     * @ORM\Column(name="overview", type="string", length=888)
     */
    private $overview;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="release_date", type="datetime")
     */
    private $releaseDate;

    /**
     * @var int
     *
     * @ORM\Column(name="genre_ids3", type="integer")
     */
    private $genreIds3;

    /**
     * @var int
     *
     * @ORM\Column(name="genre_ids4", type="integer")
     */
    private $genreIds4;

    /**
     * @var int
     *
     * @ORM\Column(name="genre_ids5", type="integer")
     */
    private $genreIds5;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Film
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set voteCount
     *
     * @param integer $voteCount
     *
     * @return Film
     */
    public function setVoteCount($voteCount)
    {
        $this->voteCount = $voteCount;

        return $this;
    }

    /**
     * Get voteCount
     *
     * @return int
     */
    public function getVoteCount()
    {
        return $this->voteCount;
    }

    /**
     * Set voteAverage
     *
     * @param integer $voteAverage
     *
     * @return Film
     */
    public function setVoteAverage($voteAverage)
    {
        $this->voteAverage = $voteAverage;

        return $this;
    }

    /**
     * Get voteAverage
     *
     * @return int
     */
    public function getVoteAverage()
    {
        return $this->voteAverage;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Film
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set popularity
     *
     * @param integer $popularity
     *
     * @return Film
     */
    public function setPopularity($popularity)
    {
        $this->popularity = $popularity;

        return $this;
    }

    /**
     * Get popularity
     *
     * @return int
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * Set posterPath
     *
     * @param string $posterPath
     *
     * @return Film
     */
    public function setPosterPath($posterPath)
    {
        $this->posterPath = $posterPath;

        return $this;
    }

    /**
     * Get posterPath
     *
     * @return string
     */
    public function getPosterPath()
    {
        return $this->posterPath;
    }

    /**
     * Set originalLanguage
     *
     * @param string $originalLanguage
     *
     * @return Film
     */
    public function setOriginalLanguage($originalLanguage)
    {
        $this->originalLanguage = $originalLanguage;

        return $this;
    }

    /**
     * Get originalLanguage
     *
     * @return string
     */
    public function getOriginalLanguage()
    {
        return $this->originalLanguage;
    }

    /**
     * Set originalTitle
     *
     * @param string $originalTitle
     *
     * @return Film
     */
    public function setOriginalTitle($originalTitle)
    {
        $this->originalTitle = $originalTitle;

        return $this;
    }

    /**
     * Get originalTitle
     *
     * @return string
     */
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }

    /**
     * Set genreIds0
     *
     * @param integer $genreIds0
     *
     * @return Film
     */
    public function setGenreIds0($genreIds0)
    {
        $this->genreIds0 = $genreIds0;

        return $this;
    }

    /**
     * Get genreIds0
     *
     * @return int
     */
    public function getGenreIds0()
    {
        return $this->genreIds0;
    }

    /**
     * Set genreIds1
     *
     * @param integer $genreIds1
     *
     * @return Film
     */
    public function setGenreIds1($genreIds1)
    {
        $this->genreIds1 = $genreIds1;

        return $this;
    }

    /**
     * Get genreIds1
     *
     * @return int
     */
    public function getGenreIds1()
    {
        return $this->genreIds1;
    }

    /**
     * Set genreIds2
     *
     * @param integer $genreIds2
     *
     * @return Film
     */
    public function setGenreIds2($genreIds2)
    {
        $this->genreIds2 = $genreIds2;

        return $this;
    }

    /**
     * Get genreIds2
     *
     * @return int
     */
    public function getGenreIds2()
    {
        return $this->genreIds2;
    }

    /**
     * Set backdropPath
     *
     * @param string $backdropPath
     *
     * @return Film
     */
    public function setBackdropPath($backdropPath)
    {
        $this->backdropPath = $backdropPath;

        return $this;
    }

    /**
     * Get backdropPath
     *
     * @return string
     */
    public function getBackdropPath()
    {
        return $this->backdropPath;
    }

    /**
     * Set adult
     *
     * @param string $adult
     *
     * @return Film
     */
    public function setAdult($adult)
    {
        $this->adult = $adult;

        return $this;
    }

    /**
     * Get adult
     *
     * @return string
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Set overview
     *
     * @param string $overview
     *
     * @return Film
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;

        return $this;
    }

    /**
     * Get overview
     *
     * @return string
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     *
     * @return Film
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set genreIds3
     *
     * @param integer $genreIds3
     *
     * @return Film
     */
    public function setGenreIds3($genreIds3)
    {
        $this->genreIds3 = $genreIds3;

        return $this;
    }

    /**
     * Get genreIds3
     *
     * @return int
     */
    public function getGenreIds3()
    {
        return $this->genreIds3;
    }

    /**
     * Set genreIds4
     *
     * @param integer $genreIds4
     *
     * @return Film
     */
    public function setGenreIds4($genreIds4)
    {
        $this->genreIds4 = $genreIds4;

        return $this;
    }

    /**
     * Get genreIds4
     *
     * @return int
     */
    public function getGenreIds4()
    {
        return $this->genreIds4;
    }

    /**
     * Set genreIds5
     *
     * @param integer $genreIds5
     *
     * @return Film
     */
    public function setGenreIds5($genreIds5)
    {
        $this->genreIds5 = $genreIds5;

        return $this;
    }

    /**
     * Get genreIds5
     *
     * @return int
     */
    public function getGenreIds5()
    {
        return $this->genreIds5;
    }
}

