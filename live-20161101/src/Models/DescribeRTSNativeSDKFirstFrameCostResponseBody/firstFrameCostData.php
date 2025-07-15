<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameCostResponseBody;

use AlibabaCloud\Tea\Model;

class firstFrameCostData extends Model
{
    /**
     * @description The time elapsed from initialization to connection establishment.
     *
     * @example 100
     *
     * @var string
     */
    public $connected;

    /**
     * @description The time elapsed from connection establishment to subscription.
     *
     * @example 89
     *
     * @var string
     */
    public $finishGetStreamInfo;

    /**
     * @description The time elapsed from first packet processing to display of the first frame.
     *
     * @example 32
     *
     * @var string
     */
    public $firstFrameComplete;

    /**
     * @description The time elapsed from subscription to first packet processing.
     *
     * @example 132
     *
     * @var string
     */
    public $firstPacket;

    /**
     * @description The time consumed by initialization.
     *
     * @example 1100
     *
     * @var string
     */
    public $initialized;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2021-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'connected' => 'Connected',
        'finishGetStreamInfo' => 'FinishGetStreamInfo',
        'firstFrameComplete' => 'FirstFrameComplete',
        'firstPacket' => 'FirstPacket',
        'initialized' => 'Initialized',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connected) {
            $res['Connected'] = $this->connected;
        }
        if (null !== $this->finishGetStreamInfo) {
            $res['FinishGetStreamInfo'] = $this->finishGetStreamInfo;
        }
        if (null !== $this->firstFrameComplete) {
            $res['FirstFrameComplete'] = $this->firstFrameComplete;
        }
        if (null !== $this->firstPacket) {
            $res['FirstPacket'] = $this->firstPacket;
        }
        if (null !== $this->initialized) {
            $res['Initialized'] = $this->initialized;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return firstFrameCostData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connected'])) {
            $model->connected = $map['Connected'];
        }
        if (isset($map['FinishGetStreamInfo'])) {
            $model->finishGetStreamInfo = $map['FinishGetStreamInfo'];
        }
        if (isset($map['FirstFrameComplete'])) {
            $model->firstFrameComplete = $map['FirstFrameComplete'];
        }
        if (isset($map['FirstPacket'])) {
            $model->firstPacket = $map['FirstPacket'];
        }
        if (isset($map['Initialized'])) {
            $model->initialized = $map['Initialized'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
