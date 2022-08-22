<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody\result;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody\result\currentMeteorology\temperature;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody\result\currentMeteorology\weather;
use AlibabaCloud\Tea\Model;

class currentMeteorology extends Model
{
    /**
     * @var temperature
     */
    public $temperature;

    /**
     * @var weather
     */
    public $weather;
    protected $_name = [
        'temperature' => 'Temperature',
        'weather'     => 'Weather',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->temperature) {
            $res['Temperature'] = null !== $this->temperature ? $this->temperature->toMap() : null;
        }
        if (null !== $this->weather) {
            $res['Weather'] = null !== $this->weather ? $this->weather->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return currentMeteorology
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Temperature'])) {
            $model->temperature = temperature::fromMap($map['Temperature']);
        }
        if (isset($map['Weather'])) {
            $model->weather = weather::fromMap($map['Weather']);
        }

        return $model;
    }
}
