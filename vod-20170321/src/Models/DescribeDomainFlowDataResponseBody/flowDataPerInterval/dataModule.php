<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeDomainFlowDataResponseBody\flowDataPerInterval;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
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
        'domesticValue' => 'DomesticValue',
        'dynamicDomesticValue' => 'DynamicDomesticValue',
        'dynamicOverseasValue' => 'DynamicOverseasValue',
        'dynamicValue' => 'DynamicValue',
        'overseasValue' => 'OverseasValue',
        'staticDomesticValue' => 'StaticDomesticValue',
        'staticOverseasValue' => 'StaticOverseasValue',
        'staticValue' => 'StaticValue',
        'timeStamp' => 'TimeStamp',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
