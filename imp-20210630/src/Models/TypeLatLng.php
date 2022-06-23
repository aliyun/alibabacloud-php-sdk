<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class TypeLatLng extends Model
{
    /**
     * @description The latitude in degrees. It must be in the range [-90.0, +90.0].
     *
     * @var float
     */
    public $latitude;

    /**
     * @description The longitude in degrees. It must be in the range [-180.0, +180.0].
     *
     * @var float
     */
    public $longitude;
    protected $_name = [
        'latitude'  => 'Latitude',
        'longitude' => 'Longitude',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TypeLatLng
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

        return $model;
    }
}
