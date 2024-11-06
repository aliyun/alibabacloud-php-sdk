<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus\buslines\arrivalStop;

use AlibabaCloud\Tea\Model;

class exit_ extends Model
{
    /**
     * @example 900000028907015
     *
     * @var string
     */
    public $id;

    /**
     * @example 116.468213,39.998876
     *
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'id'       => 'id',
        'location' => 'location',
        'name'     => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exit_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
