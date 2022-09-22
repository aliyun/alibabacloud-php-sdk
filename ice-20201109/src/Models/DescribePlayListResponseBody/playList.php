<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayListResponseBody;

use AlibabaCloud\Tea\Model;

class playList extends Model
{
    /**
     * @var string
     */
    public $firstFrameDuration;

    /**
     * @var string
     */
    public $playDuration;

    /**
     * @var string
     */
    public $playTs;

    /**
     * @var string
     */
    public $playType;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stuckDuration;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $videoDuration;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'firstFrameDuration' => 'FirstFrameDuration',
        'playDuration'       => 'PlayDuration',
        'playTs'             => 'PlayTs',
        'playType'           => 'PlayType',
        'sessionId'          => 'SessionId',
        'status'             => 'Status',
        'stuckDuration'      => 'StuckDuration',
        'traceId'            => 'TraceId',
        'videoDuration'      => 'VideoDuration',
        'videoId'            => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstFrameDuration) {
            $res['FirstFrameDuration'] = $this->firstFrameDuration;
        }
        if (null !== $this->playDuration) {
            $res['PlayDuration'] = $this->playDuration;
        }
        if (null !== $this->playTs) {
            $res['PlayTs'] = $this->playTs;
        }
        if (null !== $this->playType) {
            $res['PlayType'] = $this->playType;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stuckDuration) {
            $res['StuckDuration'] = $this->stuckDuration;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->videoDuration) {
            $res['VideoDuration'] = $this->videoDuration;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirstFrameDuration'])) {
            $model->firstFrameDuration = $map['FirstFrameDuration'];
        }
        if (isset($map['PlayDuration'])) {
            $model->playDuration = $map['PlayDuration'];
        }
        if (isset($map['PlayTs'])) {
            $model->playTs = $map['PlayTs'];
        }
        if (isset($map['PlayType'])) {
            $model->playType = $map['PlayType'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StuckDuration'])) {
            $model->stuckDuration = $map['StuckDuration'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['VideoDuration'])) {
            $model->videoDuration = $map['VideoDuration'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
