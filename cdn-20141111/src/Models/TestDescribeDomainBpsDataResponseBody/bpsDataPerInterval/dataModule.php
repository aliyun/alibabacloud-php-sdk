<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models\TestDescribeDomainBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $domesticL2Value;

    /**
     * @var string
     */
    public $domesticValue;

    /**
     * @var string
     */
    public $dynamicDomesticValue;

    /**
     * @var string
     */
    public $dynamicOverseasValue;

    /**
     * @var string
     */
    public $dynamicValue;

    /**
     * @var string
     */
    public $l2Value;

    /**
     * @var string
     */
    public $overseasL2Value;

    /**
     * @var string
     */
    public $overseasValue;

    /**
     * @var string
     */
    public $staticDomesticValue;

    /**
     * @var string
     */
    public $staticOverseasValue;

    /**
     * @var string
     */
    public $staticValue;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'domesticL2Value'      => 'DomesticL2Value',
        'domesticValue'        => 'DomesticValue',
        'dynamicDomesticValue' => 'DynamicDomesticValue',
        'dynamicOverseasValue' => 'DynamicOverseasValue',
        'dynamicValue'         => 'DynamicValue',
        'l2Value'              => 'L2Value',
        'overseasL2Value'      => 'OverseasL2Value',
        'overseasValue'        => 'OverseasValue',
        'staticDomesticValue'  => 'StaticDomesticValue',
        'staticOverseasValue'  => 'StaticOverseasValue',
        'staticValue'          => 'StaticValue',
        'timeStamp'            => 'TimeStamp',
        'value'                => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domesticL2Value) {
            $res['DomesticL2Value'] = $this->domesticL2Value;
        }
        if (null !== $this->domesticValue) {
            $res['DomesticValue'] = $this->domesticValue;
        }
        if (null !== $this->dynamicDomesticValue) {
            $res['DynamicDomesticValue'] = $this->dynamicDomesticValue;
        }
        if (null !== $this->dynamicOverseasValue) {
            $res['DynamicOverseasValue'] = $this->dynamicOverseasValue;
        }
        if (null !== $this->dynamicValue) {
            $res['DynamicValue'] = $this->dynamicValue;
        }
        if (null !== $this->l2Value) {
            $res['L2Value'] = $this->l2Value;
        }
        if (null !== $this->overseasL2Value) {
            $res['OverseasL2Value'] = $this->overseasL2Value;
        }
        if (null !== $this->overseasValue) {
            $res['OverseasValue'] = $this->overseasValue;
        }
        if (null !== $this->staticDomesticValue) {
            $res['StaticDomesticValue'] = $this->staticDomesticValue;
        }
        if (null !== $this->staticOverseasValue) {
            $res['StaticOverseasValue'] = $this->staticOverseasValue;
        }
        if (null !== $this->staticValue) {
            $res['StaticValue'] = $this->staticValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['DomesticL2Value'])) {
            $model->domesticL2Value = $map['DomesticL2Value'];
        }
        if (isset($map['DomesticValue'])) {
            $model->domesticValue = $map['DomesticValue'];
        }
        if (isset($map['DynamicDomesticValue'])) {
            $model->dynamicDomesticValue = $map['DynamicDomesticValue'];
        }
        if (isset($map['DynamicOverseasValue'])) {
            $model->dynamicOverseasValue = $map['DynamicOverseasValue'];
        }
        if (isset($map['DynamicValue'])) {
            $model->dynamicValue = $map['DynamicValue'];
        }
        if (isset($map['L2Value'])) {
            $model->l2Value = $map['L2Value'];
        }
        if (isset($map['OverseasL2Value'])) {
            $model->overseasL2Value = $map['OverseasL2Value'];
        }
        if (isset($map['OverseasValue'])) {
            $model->overseasValue = $map['OverseasValue'];
        }
        if (isset($map['StaticDomesticValue'])) {
            $model->staticDomesticValue = $map['StaticDomesticValue'];
        }
        if (isset($map['StaticOverseasValue'])) {
            $model->staticOverseasValue = $map['StaticOverseasValue'];
        }
        if (isset($map['StaticValue'])) {
            $model->staticValue = $map['StaticValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
