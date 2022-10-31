<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameCostResponseBody;

use AlibabaCloud\Tea\Model;

class firstFrameCostData extends Model
{
    /**
     * @var string
     */
    public $connected;

    /**
     * @var string
     */
    public $finishGetStreamInfo;

    /**
     * @var string
     */
    public $firstFrameComplete;

    /**
     * @var string
     */
    public $firstPacket;

    /**
     * @var string
     */
    public $initialized;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'connected'           => 'Connected',
        'finishGetStreamInfo' => 'FinishGetStreamInfo',
        'firstFrameComplete'  => 'FirstFrameComplete',
        'firstPacket'         => 'FirstPacket',
        'initialized'         => 'Initialized',
        'timeStamp'           => 'TimeStamp',
    ];

    public function validate()
    {
    }

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
