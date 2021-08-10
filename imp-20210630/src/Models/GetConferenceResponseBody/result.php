<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetConferenceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 会议资源唯一标识。
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @description 会议标题。
     *
     * @var string
     */
    public $title;

    /**
     * @description 会议状态。
     *
     * @var string
     */
    public $status;

    /**
     * @description 房间ID。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 创建会议用户。
     *
     * @var string
     */
    public $userId;

    /**
     * @description 租户名
     *
     * @var string
     */
    public $appId;

    /**
     * @description 会议创建时间戳，单位：毫秒。
     *
     * @var int
     */
    public $createTime;
    protected $_name = [
        'conferenceId' => 'ConferenceId',
        'title'        => 'Title',
        'status'       => 'Status',
        'roomId'       => 'RoomId',
        'userId'       => 'UserId',
        'appId'        => 'AppId',
        'createTime'   => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
