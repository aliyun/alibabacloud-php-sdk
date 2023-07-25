<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataByLayerResponseBody\bpsDataInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The traffic that is used to deliver dynamic content. Unit: bytes.
     *
     * @var string
     */
    public $dynamicTrafficValue;

    /**
     * @description The bandwidth that is used to deliver dynamic content. Unit: bit/s.
     *
     * @var string
     */
    public $dynamicValue;

    /**
     * @description The traffic that is used to deliver static content. Unit: bytes.
     *
     * @var string
     */
    public $staticTrafficValue;

    /**
     * @description The bandwidth that is used to deliver static content. Unit: bit/s.
     *
     * @var string
     */
    public $staticValue;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The total traffic. Unit: bytes.
     *
     * @example 331
     *
     * @var string
     */
    public $trafficValue;

    /**
     * @description The total bandwidth. Unit: bit/s.
     *
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
