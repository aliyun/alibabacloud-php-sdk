<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The bandwidth. Unit: bit/s.
     *
     * @example 11288111
     *
     * @var string
     */
    public $bpsValue;

    /**
     * @description The bandwidth over HTTP. Unit: bit/s.
     *
     * @example 11286111
     *
     * @var string
     */
    public $httpBpsValue;

    /**
     * @description The bandwidth over HTTPS. Unit: bit/s.
     *
     * @example 2000
     *
     * @var string
     */
    public $httpsBpsValue;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2017-12-10T08:00:05Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bpsValue' => 'BpsValue',
        'httpBpsValue' => 'HttpBpsValue',
        'httpsBpsValue' => 'HttpsBpsValue',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpsValue) {
            $res['BpsValue'] = $this->bpsValue;
        }
        if (null !== $this->httpBpsValue) {
            $res['HttpBpsValue'] = $this->httpBpsValue;
        }
        if (null !== $this->httpsBpsValue) {
            $res['HttpsBpsValue'] = $this->httpsBpsValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['BpsValue'])) {
            $model->bpsValue = $map['BpsValue'];
        }
        if (isset($map['HttpBpsValue'])) {
            $model->httpBpsValue = $map['HttpBpsValue'];
        }
        if (isset($map['HttpsBpsValue'])) {
            $model->httpsBpsValue = $map['HttpsBpsValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
