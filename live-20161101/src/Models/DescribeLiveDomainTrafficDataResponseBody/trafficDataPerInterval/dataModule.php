<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTrafficDataResponseBody\trafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The traffic over HTTP. Unit: bytes.
     *
     * @example 0
     *
     * @var string
     */
    public $httpTrafficValue;

    /**
     * @description The traffic over HTTPS. Unit: bytes.
     *
     * @example 454680793
     *
     * @var string
     */
    public $httpsTrafficValue;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2017-12-10T15:00:05Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The total traffic. Unit: bytes.
     *
     * @example 454680793
     *
     * @var string
     */
    public $trafficValue;
    protected $_name = [
        'httpTrafficValue' => 'HttpTrafficValue',
        'httpsTrafficValue' => 'HttpsTrafficValue',
        'timeStamp' => 'TimeStamp',
        'trafficValue' => 'TrafficValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpTrafficValue) {
            $res['HttpTrafficValue'] = $this->httpTrafficValue;
        }
        if (null !== $this->httpsTrafficValue) {
            $res['HttpsTrafficValue'] = $this->httpsTrafficValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
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
        if (isset($map['HttpTrafficValue'])) {
            $model->httpTrafficValue = $map['HttpTrafficValue'];
        }
        if (isset($map['HttpsTrafficValue'])) {
            $model->httpsTrafficValue = $map['HttpsTrafficValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TrafficValue'])) {
            $model->trafficValue = $map['TrafficValue'];
        }

        return $model;
    }
}
