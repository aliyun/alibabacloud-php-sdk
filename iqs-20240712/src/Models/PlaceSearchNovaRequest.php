<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Dara\Model;

class PlaceSearchNovaRequest extends Model
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
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $types;
    protected $_name = [
        'cityLimit' => 'cityLimit',
        'keywords' => 'keywords',
        'page' => 'page',
        'region' => 'region',
        'size' => 'size',
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

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['types'])) {
            $model->types = $map['types'];
        }

        return $model;
    }
}
