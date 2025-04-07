<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Dara\Model;

class NearbySearchNovaRequest extends Model
{
    /**
     * @var bool
     */
    public $cityLimit;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $radius;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $sortRule;

    /**
     * @var string
     */
    public $types;
    protected $_name = [
        'cityLimit' => 'cityLimit',
        'keywords' => 'keywords',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'page' => 'page',
        'radius' => 'radius',
        'size' => 'size',
        'sortRule' => 'sortRule',
        'types' => 'types',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cityLimit) {
            $res['cityLimit'] = $this->cityLimit;
        }

        if (null !== $this->keywords) {
            $res['keywords'] = $this->keywords;
        }

        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }

        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->radius) {
            $res['radius'] = $this->radius;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->sortRule) {
            $res['sortRule'] = $this->sortRule;
        }

        if (null !== $this->types) {
            $res['types'] = $this->types;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cityLimit'])) {
            $model->cityLimit = $map['cityLimit'];
        }

        if (isset($map['keywords'])) {
            $model->keywords = $map['keywords'];
        }

        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }

        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['radius'])) {
            $model->radius = $map['radius'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['sortRule'])) {
            $model->sortRule = $map['sortRule'];
        }

        if (isset($map['types'])) {
            $model->types = $map['types'];
        }

        return $model;
    }
}
