<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetConferenceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 租户名
     *
     * @var string
     */
    public $appId;

    /**
     * @description 会议资源唯一标识。
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @description 会议创建时间戳，单位：毫秒。
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 录制回放地址，m3u8格式，会议结束后10秒才会生成。
     *
     * @var string
     */
    public $playbackUrl;

    /**
     * @description 房间ID。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 会议状态。
     *
     * @var string
     */
    public $status;

    /**
     * @description 会议标题。
     *
     * @var string
     */
    public $title;

    /**
     * @description 创建会议用户。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'        => 'AppId',
        'conferenceId' => 'ConferenceId',
        'createTime'   => 'CreateTime',
        'playbackUrl'  => 'PlaybackUrl',
        'roomId'       => 'RoomId',
        'status'       => 'Status',
        'title'        => 'Title',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->playbackUrl) {
            $res['PlaybackUrl'] = $this->playbackUrl;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PlaybackUrl'])) {
            $model->playbackUrl = $map['PlaybackUrl'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
