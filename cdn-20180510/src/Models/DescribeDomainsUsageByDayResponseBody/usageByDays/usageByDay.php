<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody\usageByDays;

use AlibabaCloud\Tea\Model;

class usageByDay extends Model
{
    /**
     * @description The byte hit ratio. The byte hit ratio is measured in percentage.
     *
     * @example 97.46250599529726
     *
     * @var string
     */
    public $bytesHitRate;

    /**
     * @description The peak bandwidth value. Unit: bit/s.
     *
     * @example 306747.76
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
     * @description The number of queries per second (QPS).
     *
     * @example 7.466354166666667
     *
     * @var string
     */
    public $qps;

    /**
     * @description The cache hit ratio that is calculated based on requests. The cache hit ratio is measured in percentage.
     *
     * @example 70.24770071912111
     *
     * @var string
     */
    public $requestHitRate;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2019-12-22
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The total amount of requests.
     *
     * @example 645093
     *
     * @var string
     */
    public $totalAccess;

    /**
     * @description The total amount of network traffic. Unit: bytes.
     *
     * @example 564300099309
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
        'qps'            => 'Qps',
        'requestHitRate' => 'RequestHitRate',
        'timeStamp'      => 'TimeStamp',
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
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->requestHitRate) {
            $res['RequestHitRate'] = $this->requestHitRate;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
     * @return usageByDay
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
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['RequestHitRate'])) {
            $model->requestHitRate = $map['RequestHitRate'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
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
