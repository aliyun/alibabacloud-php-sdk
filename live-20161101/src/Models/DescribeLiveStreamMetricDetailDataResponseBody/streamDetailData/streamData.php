<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMetricDetailDataResponseBody\streamDetailData;

use AlibabaCloud\Tea\Model;

class streamData extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var float
     */
    public $bps;

    /**
     * @var int
     */
    public $count;

    /**
     * @var float
     */
    public $flvBps;

    /**
     * @var int
     */
    public $flvCount;

    /**
     * @var int
     */
    public $flvTraffic;

    /**
     * @var float
     */
    public $hlsBps;

    /**
     * @var int
     */
    public $hlsCount;

    /**
     * @var int
     */
    public $hlsTraffic;

    /**
     * @var float
     */
    public $p2pBps;

    /**
     * @var int
     */
    public $p2pCount;

    /**
     * @var int
     */
    public $p2pTraffic;

    /**
     * @var float
     */
    public $rtmpBps;

    /**
     * @var int
     */
    public $rtmpCount;

    /**
     * @var int
     */
    public $rtmpTraffic;

    /**
     * @var float
     */
    public $rtsBps;

    /**
     * @var int
     */
    public $rtsCount;

    /**
     * @var int
     */
    public $rtsTraffic;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $traffic;
    protected $_name = [
        'appName'     => 'AppName',
        'bps'         => 'Bps',
        'count'       => 'Count',
        'flvBps'      => 'FlvBps',
        'flvCount'    => 'FlvCount',
        'flvTraffic'  => 'FlvTraffic',
        'hlsBps'      => 'HlsBps',
        'hlsCount'    => 'HlsCount',
        'hlsTraffic'  => 'HlsTraffic',
        'p2pBps'      => 'P2pBps',
        'p2pCount'    => 'P2pCount',
        'p2pTraffic'  => 'P2pTraffic',
        'rtmpBps'     => 'RtmpBps',
        'rtmpCount'   => 'RtmpCount',
        'rtmpTraffic' => 'RtmpTraffic',
        'rtsBps'      => 'RtsBps',
        'rtsCount'    => 'RtsCount',
        'rtsTraffic'  => 'RtsTraffic',
        'streamName'  => 'StreamName',
        'timeStamp'   => 'TimeStamp',
        'traffic'     => 'Traffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->flvBps) {
            $res['FlvBps'] = $this->flvBps;
        }
        if (null !== $this->flvCount) {
            $res['FlvCount'] = $this->flvCount;
        }
        if (null !== $this->flvTraffic) {
            $res['FlvTraffic'] = $this->flvTraffic;
        }
        if (null !== $this->hlsBps) {
            $res['HlsBps'] = $this->hlsBps;
        }
        if (null !== $this->hlsCount) {
            $res['HlsCount'] = $this->hlsCount;
        }
        if (null !== $this->hlsTraffic) {
            $res['HlsTraffic'] = $this->hlsTraffic;
        }
        if (null !== $this->p2pBps) {
            $res['P2pBps'] = $this->p2pBps;
        }
        if (null !== $this->p2pCount) {
            $res['P2pCount'] = $this->p2pCount;
        }
        if (null !== $this->p2pTraffic) {
            $res['P2pTraffic'] = $this->p2pTraffic;
        }
        if (null !== $this->rtmpBps) {
            $res['RtmpBps'] = $this->rtmpBps;
        }
        if (null !== $this->rtmpCount) {
            $res['RtmpCount'] = $this->rtmpCount;
        }
        if (null !== $this->rtmpTraffic) {
            $res['RtmpTraffic'] = $this->rtmpTraffic;
        }
        if (null !== $this->rtsBps) {
            $res['RtsBps'] = $this->rtsBps;
        }
        if (null !== $this->rtsCount) {
            $res['RtsCount'] = $this->rtsCount;
        }
        if (null !== $this->rtsTraffic) {
            $res['RtsTraffic'] = $this->rtsTraffic;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FlvBps'])) {
            $model->flvBps = $map['FlvBps'];
        }
        if (isset($map['FlvCount'])) {
            $model->flvCount = $map['FlvCount'];
        }
        if (isset($map['FlvTraffic'])) {
            $model->flvTraffic = $map['FlvTraffic'];
        }
        if (isset($map['HlsBps'])) {
            $model->hlsBps = $map['HlsBps'];
        }
        if (isset($map['HlsCount'])) {
            $model->hlsCount = $map['HlsCount'];
        }
        if (isset($map['HlsTraffic'])) {
            $model->hlsTraffic = $map['HlsTraffic'];
        }
        if (isset($map['P2pBps'])) {
            $model->p2pBps = $map['P2pBps'];
        }
        if (isset($map['P2pCount'])) {
            $model->p2pCount = $map['P2pCount'];
        }
        if (isset($map['P2pTraffic'])) {
            $model->p2pTraffic = $map['P2pTraffic'];
        }
        if (isset($map['RtmpBps'])) {
            $model->rtmpBps = $map['RtmpBps'];
        }
        if (isset($map['RtmpCount'])) {
            $model->rtmpCount = $map['RtmpCount'];
        }
        if (isset($map['RtmpTraffic'])) {
            $model->rtmpTraffic = $map['RtmpTraffic'];
        }
        if (isset($map['RtsBps'])) {
            $model->rtsBps = $map['RtsBps'];
        }
        if (isset($map['RtsCount'])) {
            $model->rtsCount = $map['RtsCount'];
        }
        if (isset($map['RtsTraffic'])) {
            $model->rtsTraffic = $map['RtsTraffic'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
