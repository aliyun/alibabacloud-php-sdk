<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GetVehicleTrackResponseBody;

use AlibabaCloud\Tea\Model;

class points extends Model
{
    /**
     * @var float
     */
    public $longitude;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $altitude;

    /**
     * @var int
     */
    public $speed;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'longitude'  => 'Longitude',
        'latitude'   => 'Latitude',
        'altitude'   => 'Altitude',
        'speed'      => 'Speed',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
