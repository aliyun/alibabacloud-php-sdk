<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePowerForecastJobRequest;

use AlibabaCloud\Dara\Model;

class location extends Model
{
    /**
     * @var float
     */
    public $altitude;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;
    protected $_name = [
        'altitude' => 'Altitude',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
