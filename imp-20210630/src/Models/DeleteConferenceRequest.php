<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class DeleteConferenceRequest extends Model
{
    /**
     * @description 租户名
     *
     * @var string
     */
    public $appId;

    /**
     * @description 会议资源的唯一标识ID
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description 房间ID，最大长度36位
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 创建会议用户ID
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'        => 'AppId',
        'conferenceId' => 'ConferenceId',
        'regionId'     => 'RegionId',
        'roomId'       => 'RoomId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConferenceRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
