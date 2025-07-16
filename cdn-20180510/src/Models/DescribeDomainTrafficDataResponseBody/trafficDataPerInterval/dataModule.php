<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTrafficDataResponseBody\trafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The amount of network traffic in the Chinese mainland.
     *
     * @example 0
     *
     * @var string
     */
    public $domesticValue;

    /**
     * @description The amount of HTTPS traffic on points of presence (POPs) in the Chinese mainland.
     *
     * @example 0
     *
     * @var string
     */
    public $httpsDomesticValue;

    /**
     * @description The amount of HTTPS traffic on POPs outside the Chinese mainland.
     *
     * @example 0
     *
     * @var string
     */
    public $httpsOverseasValue;

    /**
     * @description The total amount of HTTPS traffic on POPs.
     *
     * @example 423304182
     *
     * @var string
     */
    public $httpsValue;

    /**
     * @description The amount of network traffic outside the Chinese mainland.
     *
     * @example 0
     *
     * @var string
     */
    public $overseasValue;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The total volume of traffic.
     *
     * @example 423304182
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'domesticValue' => 'DomesticValue',
        'httpsDomesticValue' => 'HttpsDomesticValue',
        'httpsOverseasValue' => 'HttpsOverseasValue',
        'httpsValue' => 'HttpsValue',
        'overseasValue' => 'OverseasValue',
        'timeStamp' => 'TimeStamp',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domesticValue) {
            $res['DomesticValue'] = $this->domesticValue;
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
        if (isset($map['DomesticValue'])) {
            $model->domesticValue = $map['DomesticValue'];
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
