<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $likeCount;

    /**
     * @var string
     */
    public $liveId;

    /**
     * @var int
     */
    public $messageCount;

    /**
     * @var int
     */
    public $onlineCount;

    /**
     * @var int
     */
    public $pv;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $uv;

    /**
     * @var int
     */
    public $watchLiveTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'likeCount'     => 'LikeCount',
        'liveId'        => 'LiveId',
        'messageCount'  => 'MessageCount',
        'onlineCount'   => 'OnlineCount',
        'pv'            => 'Pv',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'uv'            => 'Uv',
        'watchLiveTime' => 'WatchLiveTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->likeCount) {
            $res['LikeCount'] = $this->likeCount;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->messageCount) {
            $res['MessageCount'] = $this->messageCount;
        }
        if (null !== $this->onlineCount) {
            $res['OnlineCount'] = $this->onlineCount;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uv) {
            $res['Uv'] = $this->uv;
        }
        if (null !== $this->watchLiveTime) {
            $res['WatchLiveTime'] = $this->watchLiveTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LikeCount'])) {
            $model->likeCount = $map['LikeCount'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['MessageCount'])) {
            $model->messageCount = $map['MessageCount'];
        }
        if (isset($map['OnlineCount'])) {
            $model->onlineCount = $map['OnlineCount'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uv'])) {
            $model->uv = $map['Uv'];
        }
        if (isset($map['WatchLiveTime'])) {
            $model->watchLiveTime = $map['WatchLiveTime'];
        }

        return $model;
    }
}
