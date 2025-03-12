<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeResponseBody\data;

use AlibabaCloud\Tea\Model;

class businessAreas extends Model
{
    /**
     * @example 110108
     *
     * @var string
     */
    public $id;

    /**
     * @example 39.996850
     *
     * @var string
     */
    public $latitude;

    /**
     * @example 116.294214
     *
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'id'        => 'id',
        'latitude'  => 'latitude',
        'longitude' => 'longitude',
        'name'      => 'name',
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
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessAreas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }
        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
