<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Tea\Model;

class CircleTrafficStatusRequest extends Model
{
    /**
     * @example 39.98641364
     *
     * @var string
     */
    public $latitude;

    /**
     * @example 116.3057764
     *
     * @var string
     */
    public $longitude;

    /**
     * @example 1000
     *
     * @var string
     */
    public $radius;

    /**
     * @example HIGHWAY
     *
     * @var string
     */
    public $roadLevel;
    protected $_name = [
        'latitude'  => 'latitude',
        'longitude' => 'longitude',
        'radius'    => 'radius',
        'roadLevel' => 'roadLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->radius) {
            $res['radius'] = $this->radius;
        }
        if (null !== $this->roadLevel) {
            $res['roadLevel'] = $this->roadLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CircleTrafficStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }
        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }
        if (isset($map['radius'])) {
            $model->radius = $map['radius'];
        }
        if (isset($map['roadLevel'])) {
            $model->roadLevel = $map['roadLevel'];
        }

        return $model;
    }
}
