<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListCityMapAoisRequest extends Model
{
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
    public $radius;
    protected $_name = [
        'latitude'  => 'Latitude',
        'longitude' => 'Longitude',
        'radius'    => 'Radius',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->radius) {
            $res['Radius'] = $this->radius;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCityMapAoisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Radius'])) {
            $model->radius = $map['Radius'];
        }

        return $model;
    }
}
