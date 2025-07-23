<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest;

use AlibabaCloud\Tea\Model;

class location extends Model
{
    /**
     * @example 10.123
     *
     * @var float
     */
    public $altitude;

    /**
     * @example 40.027
     *
     * @var float
     */
    public $latitude;

    /**
     * @example 120.042
     *
     * @var float
     */
    public $longitude;
    protected $_name = [
        'altitude' => 'Altitude',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->altitude) {
            $res['Altitude'] = $this->altitude;
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
     * @return location
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Altitude'])) {
            $model->altitude = $map['Altitude'];
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
