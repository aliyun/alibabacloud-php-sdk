<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20210928\Models\GridQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example FORECAST（预报数据）
     *
     * @var string
     */
    public $dataType;

    /**
     * @example RADAR_CR（雷达组合反射率） 、PRECIPITATION（降水） 、RELATIVE_HUMIDITY（相对湿度） 、TEMPERATURE（气温） 、WIND_U（U风） 、WIND_V（V风）
     *
     * @var string
     */
    public $element;

    /**
     * @example dBZ（雷达组合反射率） 、mm（降水） 、%（相对湿度） 、°C（气温） 、m/s（U风/V风）
     *
     * @var string
     */
    public $elementUnit;

    /**
     * @example UTC+8时区，格式为yyyyMMdd_HHmmss
     *
     * @var string
     */
    public $forecastTimestamp;

    /**
     * @example 37.5
     *
     * @var float
     */
    public $latitude;

    /**
     * @example 113
     *
     * @var float
     */
    public $longitude;

    /**
     * @example UTC+8时区，格式为yyyyMMdd_HHmmss
     *
     * @var string
     */
    public $reportTimestamp;

    /**
     * @example 11.04
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'dataType'          => 'dataType',
        'element'           => 'element',
        'elementUnit'       => 'elementUnit',
        'forecastTimestamp' => 'forecastTimestamp',
        'latitude'          => 'latitude',
        'longitude'         => 'longitude',
        'reportTimestamp'   => 'reportTimestamp',
        'value'             => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }
        if (null !== $this->element) {
            $res['element'] = $this->element;
        }
        if (null !== $this->elementUnit) {
            $res['elementUnit'] = $this->elementUnit;
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
        if (null !== $this->reportTimestamp) {
            $res['reportTimestamp'] = $this->reportTimestamp;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }
        if (isset($map['element'])) {
            $model->element = $map['element'];
        }
        if (isset($map['elementUnit'])) {
            $model->elementUnit = $map['elementUnit'];
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
        if (isset($map['reportTimestamp'])) {
            $model->reportTimestamp = $map['reportTimestamp'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
