<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\DailyWeatherQueryResponseBody\result;

use AlibabaCloud\Tea\Model;

class location extends Model
{
    /**
     * @description 纬度
     *
     * @var float
     */
    public $latitude;

    /**
     * @description 经度
     *
     * @var float
     */
    public $longitude;
    protected $_name = [
        'latitude'  => 'latitude',
        'longitude' => 'longitude',
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
        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }
        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }

        return $model;
    }
}
