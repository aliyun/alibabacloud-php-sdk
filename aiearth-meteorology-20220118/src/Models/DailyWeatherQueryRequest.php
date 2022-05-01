<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models;

use AlibabaCloud\Tea\Model;

class DailyWeatherQueryRequest extends Model
{
    /**
     * @description 要素
     *
     * @var string
     */
    public $element;

    /**
     * @description 预报时间
     *
     * @var string
     */
    public $forecastTimestamp;

    /**
     * @description 纬度
     *
     * @var float
     */
    public $latitude;

    /**
     * @description 位置
     *
     * @var string
     */
    public $location;

    /**
     * @description 经度
     *
     * @var float
     */
    public $longitude;

    /**
     * @description 产品代号
     *
     * @var string
     */
    public $product;
    protected $_name = [
        'element'           => 'element',
        'forecastTimestamp' => 'forecastTimestamp',
        'latitude'          => 'latitude',
        'location'          => 'location',
        'longitude'         => 'longitude',
        'product'           => 'product',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->element) {
            $res['element'] = $this->element;
        }
        if (null !== $this->forecastTimestamp) {
            $res['forecastTimestamp'] = $this->forecastTimestamp;
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DailyWeatherQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['element'])) {
            $model->element = $map['element'];
        }
        if (isset($map['forecastTimestamp'])) {
            $model->forecastTimestamp = $map['forecastTimestamp'];
        }
        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        return $model;
    }
}
