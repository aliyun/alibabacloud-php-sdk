<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainQpsDataResponseBody\qpsDataInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $accValue;

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
    public $httpsValue;

    /**
     * @var string
     */
    public $httpsOverseasValue;

    /**
     * @var string
     */
    public $domesticValue;

    /**
     * @var string
     */
    public $httpsAccOverseasValue;

    /**
     * @var string
     */
    public $httpsDomesticValue;

    /**
     * @var string
     */
    public $httpsAccValue;

    /**
     * @var string
     */
    public $value;

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
    public $httpsAccDomesticValue;
    protected $_name = [
        'accValue'              => 'AccValue',
        'accDomesticValue'      => 'AccDomesticValue',
        'accOverseasValue'      => 'AccOverseasValue',
        'httpsValue'            => 'HttpsValue',
        'httpsOverseasValue'    => 'HttpsOverseasValue',
        'domesticValue'         => 'DomesticValue',
        'httpsAccOverseasValue' => 'HttpsAccOverseasValue',
        'httpsDomesticValue'    => 'HttpsDomesticValue',
        'httpsAccValue'         => 'HttpsAccValue',
        'value'                 => 'Value',
        'overseasValue'         => 'OverseasValue',
        'timeStamp'             => 'TimeStamp',
        'httpsAccDomesticValue' => 'HttpsAccDomesticValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accValue) {
            $res['AccValue'] = $this->accValue;
        }
        if (null !== $this->accDomesticValue) {
            $res['AccDomesticValue'] = $this->accDomesticValue;
        }
        if (null !== $this->accOverseasValue) {
            $res['AccOverseasValue'] = $this->accOverseasValue;
        }
        if (null !== $this->httpsValue) {
            $res['HttpsValue'] = $this->httpsValue;
        }
        if (null !== $this->httpsOverseasValue) {
            $res['HttpsOverseasValue'] = $this->httpsOverseasValue;
        }
        if (null !== $this->domesticValue) {
            $res['DomesticValue'] = $this->domesticValue;
        }
        if (null !== $this->httpsAccOverseasValue) {
            $res['HttpsAccOverseasValue'] = $this->httpsAccOverseasValue;
        }
        if (null !== $this->httpsDomesticValue) {
            $res['HttpsDomesticValue'] = $this->httpsDomesticValue;
        }
        if (null !== $this->httpsAccValue) {
            $res['HttpsAccValue'] = $this->httpsAccValue;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->overseasValue) {
            $res['OverseasValue'] = $this->overseasValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->httpsAccDomesticValue) {
            $res['HttpsAccDomesticValue'] = $this->httpsAccDomesticValue;
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
        if (isset($map['AccValue'])) {
            $model->accValue = $map['AccValue'];
        }
        if (isset($map['AccDomesticValue'])) {
            $model->accDomesticValue = $map['AccDomesticValue'];
        }
        if (isset($map['AccOverseasValue'])) {
            $model->accOverseasValue = $map['AccOverseasValue'];
        }
        if (isset($map['HttpsValue'])) {
            $model->httpsValue = $map['HttpsValue'];
        }
        if (isset($map['HttpsOverseasValue'])) {
            $model->httpsOverseasValue = $map['HttpsOverseasValue'];
        }
        if (isset($map['DomesticValue'])) {
            $model->domesticValue = $map['DomesticValue'];
        }
        if (isset($map['HttpsAccOverseasValue'])) {
            $model->httpsAccOverseasValue = $map['HttpsAccOverseasValue'];
        }
        if (isset($map['HttpsDomesticValue'])) {
            $model->httpsDomesticValue = $map['HttpsDomesticValue'];
        }
        if (isset($map['HttpsAccValue'])) {
            $model->httpsAccValue = $map['HttpsAccValue'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['OverseasValue'])) {
            $model->overseasValue = $map['OverseasValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['HttpsAccDomesticValue'])) {
            $model->httpsAccDomesticValue = $map['HttpsAccDomesticValue'];
        }

        return $model;
    }
}
