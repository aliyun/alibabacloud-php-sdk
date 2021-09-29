<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GetCommercialVehicleTrackResponseBody;

use AlibabaCloud\Tea\Model;

class points extends Model
{
    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $altitude;

    /**
     * @var int
     */
    public $speed;

    /**
     * @var int
     */
    public $direction;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'longitude' => 'Longitude',
        'latitude'  => 'Latitude',
        'altitude'  => 'Altitude',
        'speed'     => 'Speed',
        'direction' => 'Direction',
        'time'      => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->altitude) {
            $res['Altitude'] = $this->altitude;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return points
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Altitude'])) {
            $model->altitude = $map['Altitude'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
