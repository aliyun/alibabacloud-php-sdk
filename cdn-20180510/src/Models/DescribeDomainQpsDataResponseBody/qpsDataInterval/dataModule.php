<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainQpsDataResponseBody\qpsDataInterval;

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
    public $httpsAccDomesticValue;

    /**
     * @var string
     */
    public $httpsAccOverseasValue;

    /**
     * @var string
     */
    public $httpsAccValue;

    /**
     * @var string
     */
    public $httpsDomesticValue;

    /**
     * @var string
     */
    public $httpsOverseasValue;

    /**
     * @var string
     */
    public $httpsValue;

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
        'httpsAccDomesticValue' => 'HttpsAccDomesticValue',
        'httpsAccOverseasValue' => 'HttpsAccOverseasValue',
        'httpsAccValue' => 'HttpsAccValue',
        'httpsDomesticValue' => 'HttpsDomesticValue',
        'httpsOverseasValue' => 'HttpsOverseasValue',
        'httpsValue' => 'HttpsValue',
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

        if (null !== $this->httpsAccDomesticValue) {
            $res['HttpsAccDomesticValue'] = $this->httpsAccDomesticValue;
        }

        if (null !== $this->httpsAccOverseasValue) {
            $res['HttpsAccOverseasValue'] = $this->httpsAccOverseasValue;
        }

        if (null !== $this->httpsAccValue) {
            $res['HttpsAccValue'] = $this->httpsAccValue;
        }

        if (null !== $this->httpsDomesticValue) {
            $res['HttpsDomesticValue'] = $this->httpsDomesticValue;
        }

        if (null !== $this->httpsOverseasValue) {
            $res['HttpsOverseasValue'] = $this->httpsOverseasValue;
        }

        if (null !== $this->httpsValue) {
            $res['HttpsValue'] = $this->httpsValue;
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

        if (isset($map['HttpsAccDomesticValue'])) {
            $model->httpsAccDomesticValue = $map['HttpsAccDomesticValue'];
        }

        if (isset($map['HttpsAccOverseasValue'])) {
            $model->httpsAccOverseasValue = $map['HttpsAccOverseasValue'];
        }

        if (isset($map['HttpsAccValue'])) {
            $model->httpsAccValue = $map['HttpsAccValue'];
        }

        if (isset($map['HttpsDomesticValue'])) {
            $model->httpsDomesticValue = $map['HttpsDomesticValue'];
        }

        if (isset($map['HttpsOverseasValue'])) {
            $model->httpsOverseasValue = $map['HttpsOverseasValue'];
        }

        if (isset($map['HttpsValue'])) {
            $model->httpsValue = $map['HttpsValue'];
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
