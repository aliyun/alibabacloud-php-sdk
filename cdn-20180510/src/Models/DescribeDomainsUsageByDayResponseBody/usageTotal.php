<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody;

use AlibabaCloud\Tea\Model;

class usageTotal extends Model
{
    /**
     * @var string
     */
    public $maxSrcBpsTime;

    /**
     * @var string
     */
    public $requestHitRate;

    /**
     * @var string
     */
    public $maxBps;

    /**
     * @var string
     */
    public $totalAccess;

    /**
     * @var string
     */
    public $bytesHitRate;

    /**
     * @var string
     */
    public $totalTraffic;

    /**
     * @var string
     */
    public $maxBpsTime;

    /**
     * @var string
     */
    public $maxSrcBps;
    protected $_name = [
        'maxSrcBpsTime'  => 'MaxSrcBpsTime',
        'requestHitRate' => 'RequestHitRate',
        'maxBps'         => 'MaxBps',
        'totalAccess'    => 'TotalAccess',
        'bytesHitRate'   => 'BytesHitRate',
        'totalTraffic'   => 'TotalTraffic',
        'maxBpsTime'     => 'MaxBpsTime',
        'maxSrcBps'      => 'MaxSrcBps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxSrcBpsTime) {
            $res['MaxSrcBpsTime'] = $this->maxSrcBpsTime;
        }
        if (null !== $this->requestHitRate) {
            $res['RequestHitRate'] = $this->requestHitRate;
        }
        if (null !== $this->maxBps) {
            $res['MaxBps'] = $this->maxBps;
        }
        if (null !== $this->totalAccess) {
            $res['TotalAccess'] = $this->totalAccess;
        }
        if (null !== $this->bytesHitRate) {
            $res['BytesHitRate'] = $this->bytesHitRate;
        }
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }
        if (null !== $this->maxBpsTime) {
            $res['MaxBpsTime'] = $this->maxBpsTime;
        }
        if (null !== $this->maxSrcBps) {
            $res['MaxSrcBps'] = $this->maxSrcBps;
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
        if (isset($map['MaxSrcBpsTime'])) {
            $model->maxSrcBpsTime = $map['MaxSrcBpsTime'];
        }
        if (isset($map['RequestHitRate'])) {
            $model->requestHitRate = $map['RequestHitRate'];
        }
        if (isset($map['MaxBps'])) {
            $model->maxBps = $map['MaxBps'];
        }
        if (isset($map['TotalAccess'])) {
            $model->totalAccess = $map['TotalAccess'];
        }
        if (isset($map['BytesHitRate'])) {
            $model->bytesHitRate = $map['BytesHitRate'];
        }
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }
        if (isset($map['MaxBpsTime'])) {
            $model->maxBpsTime = $map['MaxBpsTime'];
        }
        if (isset($map['MaxSrcBps'])) {
            $model->maxSrcBps = $map['MaxSrcBps'];
        }

        return $model;
    }
}
