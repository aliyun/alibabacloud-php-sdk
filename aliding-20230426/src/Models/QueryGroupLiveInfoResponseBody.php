<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class QueryGroupLiveInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $coverUrl;
    /**
     * @var int
     */
    public $duration;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $introduction;
    /**
     * @var string
     */
    public $liveId;
    /**
     * @var string
     */
    public $livePlayUrl;
    /**
     * @var int
     */
    public $liveStatus;
    /**
     * @var int
     */
    public $playbackDuration;
    /**
     * @var string
     */
    public $replayUrl;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $staffId;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var int
     */
    public $subscribeCount;
    /**
     * @var string
     */
    public $title;
    /**
     * @var int
     */
    public $uv;
    /**
     * @var string
     */
    public $vendorRequestId;
    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'coverUrl'         => 'coverUrl',
        'duration'         => 'duration',
        'endTime'          => 'endTime',
        'introduction'     => 'introduction',
        'liveId'           => 'liveId',
        'livePlayUrl'      => 'livePlayUrl',
        'liveStatus'       => 'liveStatus',
        'playbackDuration' => 'playbackDuration',
        'replayUrl'        => 'replayUrl',
        'requestId'        => 'requestId',
        'staffId'          => 'staffId',
        'startTime'        => 'startTime',
        'subscribeCount'   => 'subscribeCount',
        'title'            => 'title',
        'uv'               => 'uv',
        'vendorRequestId'  => 'vendorRequestId',
        'vendorType'       => 'vendorType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverUrl) {
            $res['coverUrl'] = $this->coverUrl;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->introduction) {
            $res['introduction'] = $this->introduction;
        }

        if (null !== $this->liveId) {
            $res['liveId'] = $this->liveId;
        }

        if (null !== $this->livePlayUrl) {
            $res['livePlayUrl'] = $this->livePlayUrl;
        }

        if (null !== $this->liveStatus) {
            $res['liveStatus'] = $this->liveStatus;
        }

        if (null !== $this->playbackDuration) {
            $res['playbackDuration'] = $this->playbackDuration;
        }

        if (null !== $this->replayUrl) {
            $res['replayUrl'] = $this->replayUrl;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->staffId) {
            $res['staffId'] = $this->staffId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->subscribeCount) {
            $res['subscribeCount'] = $this->subscribeCount;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->uv) {
            $res['uv'] = $this->uv;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['coverUrl'])) {
            $model->coverUrl = $map['coverUrl'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['introduction'])) {
            $model->introduction = $map['introduction'];
        }

        if (isset($map['liveId'])) {
            $model->liveId = $map['liveId'];
        }

        if (isset($map['livePlayUrl'])) {
            $model->livePlayUrl = $map['livePlayUrl'];
        }

        if (isset($map['liveStatus'])) {
            $model->liveStatus = $map['liveStatus'];
        }

        if (isset($map['playbackDuration'])) {
            $model->playbackDuration = $map['playbackDuration'];
        }

        if (isset($map['replayUrl'])) {
            $model->replayUrl = $map['replayUrl'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['staffId'])) {
            $model->staffId = $map['staffId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['subscribeCount'])) {
            $model->subscribeCount = $map['subscribeCount'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['uv'])) {
            $model->uv = $map['uv'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
