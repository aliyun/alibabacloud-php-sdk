<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListCityMapAoisRequest extends Model
{
    /**
     * @var int
     */
    public $radius;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;
    protected $_name = [
        'radius'    => 'Radius',
        'latitude'  => 'Latitude',
        'longitude' => 'Longitude',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->radius) {
            $res['Radius'] = $this->radius;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
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
        if (isset($map['Radius'])) {
            $model->radius = $map['Radius'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }

        return $model;
    }
}
