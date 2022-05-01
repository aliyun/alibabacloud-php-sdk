<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models;

use AlibabaCloud\Tea\Model;

class GridWeatherQueryRequest extends Model
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
     * @description 经度
     *
     * @var float
     */
    public $longitude;

    /**
     * @description 观测时间
     *
     * @var string
     */
    public $observationTimestamp;

    /**
     * @description 产品代号
     *
     * @var string
     */
    public $product;

    /**
     * @description 起报时间
     *
     * @var string
     */
    public $reportTimestamp;
    protected $_name = [
        'element'              => 'element',
        'forecastTimestamp'    => 'forecastTimestamp',
        'latitude'             => 'latitude',
        'longitude'            => 'longitude',
        'observationTimestamp' => 'observationTimestamp',
        'product'              => 'product',
        'reportTimestamp'      => 'reportTimestamp',
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
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->observationTimestamp) {
            $res['observationTimestamp'] = $this->observationTimestamp;
        }
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }
        if (null !== $this->reportTimestamp) {
            $res['reportTimestamp'] = $this->reportTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GridWeatherQueryRequest
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
        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }
        if (isset($map['observationTimestamp'])) {
            $model->observationTimestamp = $map['observationTimestamp'];
        }
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }
        if (isset($map['reportTimestamp'])) {
            $model->reportTimestamp = $map['reportTimestamp'];
        }

        return $model;
    }
}
