<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody\result\currentMeteorology\temperature;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody\result\currentMeteorology\weather;

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
        'weather' => 'Weather',
    ];

    public function validate()
    {
        if (null !== $this->temperature) {
            $this->temperature->validate();
        }
        if (null !== $this->weather) {
            $this->weather->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->temperature) {
            $res['Temperature'] = null !== $this->temperature ? $this->temperature->toArray($noStream) : $this->temperature;
        }

        if (null !== $this->weather) {
            $res['Weather'] = null !== $this->weather ? $this->weather->toArray($noStream) : $this->weather;
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
        if (isset($map['Temperature'])) {
            $model->temperature = temperature::fromMap($map['Temperature']);
        }

        if (isset($map['Weather'])) {
            $model->weather = weather::fromMap($map['Weather']);
        }

        return $model;
    }
}
