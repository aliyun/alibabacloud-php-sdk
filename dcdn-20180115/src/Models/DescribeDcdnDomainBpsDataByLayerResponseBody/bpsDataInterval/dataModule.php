<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataByLayerResponseBody\bpsDataInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $dynamicTrafficValue;

    /**
     * @var string
     */
    public $dynamicValue;

    /**
     * @var string
     */
    public $staticTrafficValue;

    /**
     * @var string
     */
    public $staticValue;

    /**
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example 331
     *
     * @var string
     */
    public $trafficValue;

    /**
     * @example 0.56
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'dynamicTrafficValue' => 'DynamicTrafficValue',
        'dynamicValue'        => 'DynamicValue',
        'staticTrafficValue'  => 'StaticTrafficValue',
        'staticValue'         => 'StaticValue',
        'timeStamp'           => 'TimeStamp',
        'trafficValue'        => 'TrafficValue',
        'value'               => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicTrafficValue) {
            $res['DynamicTrafficValue'] = $this->dynamicTrafficValue;
        }
        if (null !== $this->dynamicValue) {
            $res['DynamicValue'] = $this->dynamicValue;
        }
        if (null !== $this->staticTrafficValue) {
            $res['StaticTrafficValue'] = $this->staticTrafficValue;
        }
        if (null !== $this->staticValue) {
            $res['StaticValue'] = $this->staticValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicTrafficValue'])) {
            $model->dynamicTrafficValue = $map['DynamicTrafficValue'];
        }
        if (isset($map['DynamicValue'])) {
            $model->dynamicValue = $map['DynamicValue'];
        }
        if (isset($map['StaticTrafficValue'])) {
            $model->staticTrafficValue = $map['StaticTrafficValue'];
        }
        if (isset($map['StaticValue'])) {
            $model->staticValue = $map['StaticValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TrafficValue'])) {
            $model->trafficValue = $map['TrafficValue'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
