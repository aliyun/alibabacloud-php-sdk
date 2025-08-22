<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainQpsDataByLayerResponseBody\qpsDataInterval;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $accDomesticValue;

    /**
     * @var string
     */
    public $accOverseasValue;

    /**
     * @var string
     */
    public $accValue;

    /**
     * @var string
     */
    public $domesticValue;

    /**
     * @var string
     */
    public $overseasValue;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'accDomesticValue' => 'AccDomesticValue',
        'accOverseasValue' => 'AccOverseasValue',
        'accValue' => 'AccValue',
        'domesticValue' => 'DomesticValue',
        'overseasValue' => 'OverseasValue',
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
        if (null !== $this->accDomesticValue) {
            $res['AccDomesticValue'] = $this->accDomesticValue;
        }

        if (null !== $this->accOverseasValue) {
            $res['AccOverseasValue'] = $this->accOverseasValue;
        }

        if (null !== $this->accValue) {
            $res['AccValue'] = $this->accValue;
        }

        if (null !== $this->domesticValue) {
            $res['DomesticValue'] = $this->domesticValue;
        }

        if (null !== $this->overseasValue) {
            $res['OverseasValue'] = $this->overseasValue;
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
        if (isset($map['AccDomesticValue'])) {
            $model->accDomesticValue = $map['AccDomesticValue'];
        }

        if (isset($map['AccOverseasValue'])) {
            $model->accOverseasValue = $map['AccOverseasValue'];
        }

        if (isset($map['AccValue'])) {
            $model->accValue = $map['AccValue'];
        }

        if (isset($map['DomesticValue'])) {
            $model->domesticValue = $map['DomesticValue'];
        }

        if (isset($map['OverseasValue'])) {
            $model->overseasValue = $map['OverseasValue'];
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
