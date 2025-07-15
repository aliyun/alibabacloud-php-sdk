<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMetricDetailDataResponseBody\streamDetailData;

use AlibabaCloud\Tea\Model;

class streamData extends Model
{
    /**
     * @description The name of the application.
     *
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The total bandwidth consumed by the stream per minute. Unit: bit/s.
     *
     * @example 423304182.66
     *
     * @var float
     */
    public $bps;

    /**
     * @description The total number of online viewers for the stream per minute.
     *
     * @example 423304182
     *
     * @var int
     */
    public $count;

    /**
     * @description The bandwidth over the Flash Video (FLV) protocol. Unit: bit/s.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 454
     *
     * @var float
     */
    public $flvBps;

    /**
     * @description The number of online viewers over the FLV protocol.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 32
     *
     * @var int
     */
    public $flvCount;

    /**
     * @description The amount of traffic over the FLV protocol. Unit: bytes.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 1254
     *
     * @var int
     */
    public $flvTraffic;

    /**
     * @description The bandwidth over the HTTP Live Streaming (HLS) protocol. Unit: bit/s.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 4456
     *
     * @var float
     */
    public $hlsBps;

    /**
     * @description The number of online viewers over the HLS protocol.
     *
     * >  Currently, this parameter is not supported.
     *
     * @example 56
     *
     * @var int
     */
    public $hlsCount;

    /**
     * @description The amount of traffic over the HLS protocol. Unit: bytes.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 568
     *
     * @var int
     */
    public $hlsTraffic;

    /**
     * @description Number of new connections established per minute.
     *
     * @example 450
     *
     * @var string
     */
    public $newConns;

    /**
     * @description The bandwidth over the P2P protocol. Unit: bit/s.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 6845
     *
     * @var float
     */
    public $p2pBps;

    /**
     * @description The number of online viewers over the P2P protocol.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 78
     *
     * @var int
     */
    public $p2pCount;

    /**
     * @description The amount of traffic over the peer-to-peer (P2P) protocol. Unit: bytes.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 4102
     *
     * @var int
     */
    public $p2pTraffic;

    /**
     * @description The bandwidth over the Real-Time Messaging Protocol (RTMP) protocol. Unit: bit/s.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 3323
     *
     * @var float
     */
    public $rtmpBps;

    /**
     * @description The number of online viewers over the RTMP protocol.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 63
     *
     * @var int
     */
    public $rtmpCount;

    /**
     * @description The amount of traffic over the RTMP protocol. Unit: bytes.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 5568
     *
     * @var int
     */
    public $rtmpTraffic;

    /**
     * @description The bandwidth over the RTS protocol. Unit: bit/s.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 2361
     *
     * @var float
     */
    public $rtsBps;

    /**
     * @description The number of online viewers over the Real-Time Streaming (RTS) protocol.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 89
     *
     * @var int
     */
    public $rtsCount;

    /**
     * @description The amount of traffic over the RTS protocol. Unit: bytes.
     *
     * >  This parameter is not returned if no traffic is generated over the protocol.
     *
     * @example 2322
     *
     * @var int
     */
    public $rtsTraffic;

    /**
     * @description The name of the stream.
     *
     * @example test.flv
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The total amount of traffic consumed by the stream per minute. Unit: bytes.
     *
     * @example 423304182
     *
     * @var int
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
