<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The bandwidth value in the Chinese mainland. When the bandwidth data is queried by ISP, this parameter is empty.
     *
     * @example 11286111
     *
     * @var string
     */
    public $domesticValue;

    /**
     * @description The bandwidth data for HTTPS requests in the Chinese mainland. When the bandwidth data is queried by ISP, this parameter is empty.
     *
     * @example 11286111
     *
     * @var string
     */
    public $httpsDomesticValue;

    /**
     * @description The bandwidth data for HTTPS requests in regions outside the Chinese mainland. When the bandwidth data is queried by ISP, this parameter is empty.
     *
     * @example 2000
     *
     * @var string
     */
    public $httpsOverseasValue;

    /**
     * @description The bandwidth value for HTTPS requests. Unit: bit/s.
     *
     * @example 11288111
     *
     * @var string
     */
    public $httpsValue;

    /**
     * @description The bandwidth data in regions outside the Chinese mainland. When the bandwidth data is queried by ISP, this parameter is empty.
     *
     * @example 2000
     *
     * @var string
     */
    public $overseasValue;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The bandwidth. Unit: bit/s.
     *
     * @example 11288111
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'domesticValue'      => 'DomesticValue',
        'httpsDomesticValue' => 'HttpsDomesticValue',
        'httpsOverseasValue' => 'HttpsOverseasValue',
        'httpsValue'         => 'HttpsValue',
        'overseasValue'      => 'OverseasValue',
        'timeStamp'          => 'TimeStamp',
        'value'              => 'Value',
    ];

    public function validate()
    {
    }

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
