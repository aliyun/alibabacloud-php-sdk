<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The bandwidth in mainland China. Unit: bit/s. When the bandwidth data is queried by ISP, no value is returned.
     *
     * @example 11286111
     *
     * @var string
     */
    public $domesticValue;

    /**
     * @description The HTTPS bandwidth on L1 nodes in mainland China. Unit: bit/s. When the bandwidth data is queried by ISP, no value is returned.
     *
     * @example 11286111
     *
     * @var string
     */
    public $httpsDomesticValue;

    /**
     * @description The HTTPS bandwidth on L1 nodes outside mainland China. Unit: bit/s. When the bandwidth data is queried by ISP, no value is returned.
     *
     * @example 2000
     *
     * @var string
     */
    public $httpsOverseasValue;

    /**
     * @description The total HTTPS bandwidth on L1 nodes. Unit: bit/s.
     *
     * @example 11288111
     *
     * @var string
     */
    public $httpsValue;

    /**
     * @description The bandwidth outside mainland China. Unit: bit/s. When the bandwidth data is queried by ISP, no value is returned.
     *
     * @example 2000
     *
     * @var string
     */
    public $overseasValue;

    /**
     * @description The timestamp of the returned data. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2015-12-10T13:00:00Z
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
