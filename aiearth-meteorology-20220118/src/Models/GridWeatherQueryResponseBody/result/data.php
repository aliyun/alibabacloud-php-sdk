<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\GridWeatherQueryResponseBody\result;

use AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\GridWeatherQueryResponseBody\result\data\elements;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @description 预报时间
     *
     * @var string
     */
    public $forecastTimestamp;

    /**
     * @description 观测时间
     *
     * @var string
     */
    public $observationTimestamp;
    protected $_name = [
        'elements'             => 'elements',
        'forecastTimestamp'    => 'forecastTimestamp',
        'observationTimestamp' => 'observationTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elements) {
            $res['elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->forecastTimestamp) {
            $res['forecastTimestamp'] = $this->forecastTimestamp;
        }
        if (null !== $this->observationTimestamp) {
            $res['observationTimestamp'] = $this->observationTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['elements'])) {
            if (!empty($map['elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['forecastTimestamp'])) {
            $model->forecastTimestamp = $map['forecastTimestamp'];
        }
        if (isset($map['observationTimestamp'])) {
            $model->observationTimestamp = $map['observationTimestamp'];
        }

        return $model;
    }
}
