<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 直播结束时间，单位：毫秒。
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 点赞数。
     *
     * @var int
     */
    public $likeCount;

    /**
     * @description 直播ID。
     *
     * @var string
     */
    public $liveId;

    /**
     * @description 互动消息数。
     *
     * @var int
     */
    public $messageCount;

    /**
     * @description 在线用户数。
     *
     * @var int
     */
    public $onlineCount;

    /**
     * @description 访问用户人次。
     *
     * @var int
     */
    public $pv;

    /**
     * @description 直播开始时间，单位：毫秒。
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 直播状态，0-已创建 1-直播中 2-已关闭。
     *
     * @var int
     */
    public $status;

    /**
     * @description 访问用户数。
     *
     * @var int
     */
    public $uv;

    /**
     * @description 总观看时长，单位：毫秒。
     *
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
