<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserStreamMetricDataResponseBody;

use AlibabaCloud\Tea\Model;

class streamDetailData extends Model
{
    /**
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 423304182.66
     *
     * @var float
     */
    public $bps;

    /**
     * @example 423304182
     *
     * @var int
     */
    public $count;

    /**
     * @example 454
     *
     * @var float
     */
    public $flvBps;

    /**
     * @example 32
     *
     * @var int
     */
    public $flvCount;

    /**
     * @example 1254
     *
     * @var float
     */
    public $flvTraffic;

    /**
     * @example 4456
     *
     * @var float
     */
    public $hlsBps;

    /**
     * @example 56
     *
     * @var int
     */
    public $hlsCount;

    /**
     * @example 568
     *
     * @var float
     */
    public $hlsTraffic;

    /**
     * @example 450
     *
     * @var int
     */
    public $newConns;

    /**
     * @example 6845
     *
     * @var float
     */
    public $p2pBps;

    /**
     * @example 78
     *
     * @var int
     */
    public $p2pCount;

    /**
     * @example 4102
     *
     * @var float
     */
    public $p2pTraffic;

    /**
     * @example 3323
     *
     * @var float
     */
    public $rtmpBps;

    /**
     * @example 63
     *
     * @var int
     */
    public $rtmpCount;

    /**
     * @example 5568
     *
     * @var float
     */
    public $rtmpTraffic;

    /**
     * @example 2361
     *
     * @var float
     */
    public $rtsBps;

    /**
     * @example 89
     *
     * @var int
     */
    public $rtsCount;

    /**
     * @example 2322
     *
     * @var float
     */
    public $rtsTraffic;

    /**
     * @example test.flv
     *
     * @var string
     */
    public $streamName;

    /**
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example 423304182
     *
     * @var float
     */
    public $traffic;
    protected $_name = [
        'appName' => 'AppName',
        'bps' => 'Bps',
        'count' => 'Count',
        'flvBps' => 'FlvBps',
        'flvCount' => 'FlvCount',
        'flvTraffic' => 'FlvTraffic',
        'hlsBps' => 'HlsBps',
        'hlsCount' => 'HlsCount',
        'hlsTraffic' => 'HlsTraffic',
        'newConns' => 'NewConns',
        'p2pBps' => 'P2pBps',
        'p2pCount' => 'P2pCount',
        'p2pTraffic' => 'P2pTraffic',
        'rtmpBps' => 'RtmpBps',
        'rtmpCount' => 'RtmpCount',
        'rtmpTraffic' => 'RtmpTraffic',
        'rtsBps' => 'RtsBps',
        'rtsCount' => 'RtsCount',
        'rtsTraffic' => 'RtsTraffic',
        'streamName' => 'StreamName',
        'timeStamp' => 'TimeStamp',
        'traffic' => 'Traffic',
    ];

    public function validate() {}

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
        if (null !== $this->newConns) {
            $res['NewConns'] = $this->newConns;
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
     * @return streamDetailData
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
        if (isset($map['NewConns'])) {
            $model->newConns = $map['NewConns'];
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
