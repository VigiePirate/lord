<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LordLitters
 *
 * @ORM\Table(name="lord_litters", indexes={@ORM\Index(name="fk_lord_portee_lord_rats1", columns={"rat_mother_id"}), @ORM\Index(name="fk_lord_portee_lord_rats2", columns={"rat_father_id"}), @ORM\Index(name="fk_lord_portee_lord_utilisateurs1", columns={"user_owner_id"})})
 * @ORM\Entity
 */
class LordLitter
{
    /**
     * @var int
     *
     * @ORM\Column(name="litter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $litterId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="litter_date_mating", type="date", nullable=true, options={"default"="NULL"})
     */
    private $litterDateMating;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="litter_date_birth", type="date", nullable=true, options={"default"="NULL"})
     */
    private $litterDateBirth;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="litter_number_pups", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $litterNumberPups;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="litter_number_pups_stillborn", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $litterNumberPupsStillborn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="litter_comments", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $litterComments;

    /**
     * @var \LordRat
     *
     * @ORM\ManyToOne(targetEntity="LordRat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rat_mother_id", referencedColumnName="rat_id")
     * })
     */
    private $ratMother;

    /**
     * @var \LordRat
     *
     * @ORM\ManyToOne(targetEntity="LordRat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rat_father_id", referencedColumnName="rat_id")
     * })
     */
    private $ratFather;

    /**
     * @var \LordUser
     *
     * @ORM\ManyToOne(targetEntity="LordUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_owner_id", referencedColumnName="id")
     * })
     */
    private $userOwner;

    public function getLitterId() : ? int
    {
        return $this->litterId;
    }

    public function getLitterDateMating() : ? \DateTimeInterface
    {
        return $this->litterDateMating;
    }

    public function setLitterDateMating(? \DateTimeInterface $litterDateMating) : self
    {
        $this->litterDateMating = $litterDateMating;

        return $this;
    }

    public function getLitterDateBirth() : ? \DateTimeInterface
    {
        return $this->litterDateBirth;
    }

    public function setLitterDateBirth(? \DateTimeInterface $litterDateBirth) : self
    {
        $this->litterDateBirth = $litterDateBirth;

        return $this;
    }

    public function getLitterNumberPups() : ? bool
    {
        return $this->litterNumberPups;
    }

    public function setLitterNumberPups(? bool $litterNumberPups) : self
    {
        $this->litterNumberPups = $litterNumberPups;

        return $this;
    }

    public function getLitterNumberPupsStillborn() : ? bool
    {
        return $this->litterNumberPupsStillborn;
    }

    public function setLitterNumberPupsStillborn(? bool $litterNumberPupsStillborn) : self
    {
        $this->litterNumberPupsStillborn = $litterNumberPupsStillborn;

        return $this;
    }

    public function getLitterComments() : ? string
    {
        return $this->litterComments;
    }

    public function setLitterComments(? string $litterComments) : self
    {
        $this->litterComments = $litterComments;

        return $this;
    }

    public function getRatMother() : ? LordRat
    {
        return $this->ratMother;
    }

    public function setRatMother(? LordRat $ratMother) : self
    {
        $this->ratMother = $ratMother;

        return $this;
    }

    public function getRatFather() : ? LordRat
    {
        return $this->ratFather;
    }

    public function setRatFather(? LordRat $ratFather) : self
    {
        $this->ratFather = $ratFather;

        return $this;
    }

    public function getUserOwner() : ? LordUser
    {
        return $this->userOwner;
    }

    public function setUserOwner(? LordUser $userOwner) : self
    {
        $this->userOwner = $userOwner;

        return $this;
    }


}
