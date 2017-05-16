<?php
/**
 * Created by PhpStorm.
 * User: Germen-laptop
 * Date: 20-4-2017
 * Time: 09:41
 */

namespace Integrated\Bundle\TrackBundle\Document\Entity;


use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use AppBundle\Controller\TrackController;
use Integrated\Common\Form\Mapping\Annotations as Type;
use Integrated\Bundle\ContentBundle\Document\Content\Relation\Relation;

use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MOngoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

/** @ODM\Document */
class Track
{

    /** @ODM\Id */
    private $id;

    /** @ODM\Field(type="string") */
    private $url;

    /** @ODM\Field(type="string") */
    private $cityName;


    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param mixed $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }
}
