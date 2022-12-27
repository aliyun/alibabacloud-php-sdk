<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody;

use AlibabaCloud\Tea\Model;

class usageTotal extends Model
{
    /**
     * @description The cache hit ratio that is calculated based on bytes. The cache hit ratio is measured in percentage.
     *
     * @example 97.03110726801242
     *
     * @var string
     */
    public $bytesHitRate;

    /**
     * @description The peak bandwidth value. Unit: bit/s.
     *
     * @example 1.0747912780000001E8
     *
     * @var string
     */
    public $maxBps;

    /**
     * @description The time when the bandwidth reached the peak value.
     *
     * @example 2019-12-23 10:55:00
     *
     * @var string
     */
    public $maxBpsTime;

    /**
     * @description The peak bandwidth value during back-to-origin routing. Unit: bit/s.
     *
     * @example 72584.072
     *
     * @var string
     */
    public $maxSrcBps;

    /**
     * @description The time when the bandwidth during back-to-origin routing reached the peak value.
     *
     * @example 2019-12-23 11:45:00
     *
     * @var string
     */
    public $maxSrcBpsTime;

    /**
     * @description The cache hit ratio that is calculated based on requests. The cache hit ratio is measured in percentage.
     *
     * @example 69.92610837438424
     *
     * @var string
     */
    public $requestHitRate;

    /**
     * @description The total number of requests.
     *
     * @example 1319500
     *
     * @var string
     */
    public $totalAccess;

    /**
     * @description The total amount of network traffic. Unit: bytes.
     *
     * @example 1117711832100
     *
     * @var string
     */
    public $totalTraffic;
    protected $_name = [
        'bytesHitRate'   => 'BytesHitRate',
        'maxBps'         => 'MaxBps',
        'maxBpsTime'     => 'MaxBpsTime',
        'maxSrcBps'      => 'MaxSrcBps',
        'maxSrcBpsTime'  => 'MaxSrcBpsTime',
        'requestHitRate' => 'RequestHitRate',
        'totalAccess'    => 'TotalAccess',
        'totalTraffic'   => 'TotalTraffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bytesHitRate) {
            $res['BytesHitRate'] = $this->bytesHitRate;
        }
        if (null !== $this->maxBps) {
            $res['MaxBps'] = $this->maxBps;
        }
        if (null !== $this->maxBpsTime) {
            $res['MaxBpsTime'] = $this->maxBpsTime;
        }
        if (null !== $this->maxSrcBps) {
            $res['MaxSrcBps'] = $this->maxSrcBps;
        }
        if (null !== $this->maxSrcBpsTime) {
            $res['MaxSrcBpsTime'] = $this->maxSrcBpsTime;
        }
        if (null !== $this->requestHitRate) {
            $res['RequestHitRate'] = $this->requestHitRate;
        }
        if (null !== $this->totalAccess) {
            $res['TotalAccess'] = $this->totalAccess;
        }
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageTotal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BytesHitRate'])) {
            $model->bytesHitRate = $map['BytesHitRate'];
        }
        if (isset($map['MaxBps'])) {
            $model->maxBps = $map['MaxBps'];
        }
        if (isset($map['MaxBpsTime'])) {
            $model->maxBpsTime = $map['MaxBpsTime'];
        }
        if (isset($map['MaxSrcBps'])) {
            $model->maxSrcBps = $map['MaxSrcBps'];
        }
        if (isset($map['MaxSrcBpsTime'])) {
            $model->maxSrcBpsTime = $map['MaxSrcBpsTime'];
        }
        if (isset($map['RequestHitRate'])) {
            $model->requestHitRate = $map['RequestHitRate'];
        }
        if (isset($map['TotalAccess'])) {
            $model->totalAccess = $map['TotalAccess'];
        }
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }

        return $model;
    }
}
