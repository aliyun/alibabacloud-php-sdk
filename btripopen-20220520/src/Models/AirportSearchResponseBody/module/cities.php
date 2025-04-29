<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AirportSearchResponseBody\module;

use AlibabaCloud\Dara\Model;

class cities extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $distance;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $travelName;
    protected $_name = [
        'code' => 'code',
        'distance' => 'distance',
        'name' => 'name',
        'travelName' => 'travel_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->distance) {
            $res['distance'] = $this->distance;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->travelName) {
            $res['travel_name'] = $this->travelName;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['distance'])) {
            $model->distance = $map['distance'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['travel_name'])) {
            $model->travelName = $map['travel_name'];
        }

        return $model;
    }
}
