<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainQpsDataResponseBody\qpsDataInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The number of requests in the Chinese mainland.
     *
     * @example 0
     *
     * @var string
     */
    public $accDomesticValue;

    /**
     * @description The number of requests outside the Chinese mainland.
     *
     * @example 0
     *
     * @var string
     */
    public $accOverseasValue;

    /**
     * @description The total number of requests.
     *
     * @example 0
     *
     * @var string
     */
    public $accValue;

    /**
     * @description The QPS data in the Chinese mainland.
     *
     * @example 0
     *
     * @var string
     */
    public $domesticValue;

    /**
     * @description The QPS that is calculated based on the HTTPS requests sent to POPs in the Chinese mainland.
     *
     * @example 1
     *
     * @var string
     */
    public $httpsAccDomesticValue;

    /**
     * @description The number of HTTPS requests sent to POPs outside the Chinese mainland.
     *
     * @example 1
     *
     * @var string
     */
    public $httpsAccOverseasValue;

    /**
     * @description The number of HTTPS requests sent to POPs.
     *
     * @example 1
     *
     * @var string
     */
    public $httpsAccValue;

    /**
     * @description The QPS that is calculated based on the HTTPS requests sent to POPs in the Chinese mainland.
     *
     * @example 1
     *
     * @var string
     */
    public $httpsDomesticValue;

    /**
     * @description The QPS that is calculated based on the HTTPS requests sent to POPs outside the Chinese mainland.
     *
     * @example 1
     *
     * @var string
     */
    public $httpsOverseasValue;

    /**
     * @description The QPS that is calculated based on the HTTPS requests sent to points of presence (POPs).
     *
     * @example 1
     *
     * @var string
     */
    public $httpsValue;

    /**
     * @description The QPS data outside the Chinese mainland.
     *
     * @example 0
     *
     * @var string
     */
    public $overseasValue;

    /**
     * @description The timestamp of the data returned. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-06-27 10:10:58
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The total QPS.
     *
     * @example 0
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'accDomesticValue'      => 'AccDomesticValue',
        'accOverseasValue'      => 'AccOverseasValue',
        'accValue'              => 'AccValue',
        'domesticValue'         => 'DomesticValue',
        'httpsAccDomesticValue' => 'HttpsAccDomesticValue',
        'httpsAccOverseasValue' => 'HttpsAccOverseasValue',
        'httpsAccValue'         => 'HttpsAccValue',
        'httpsDomesticValue'    => 'HttpsDomesticValue',
        'httpsOverseasValue'    => 'HttpsOverseasValue',
        'httpsValue'            => 'HttpsValue',
        'overseasValue'         => 'OverseasValue',
        'timeStamp'             => 'TimeStamp',
        'value'                 => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dataModule
     */
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
