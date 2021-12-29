<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class UpdateRoomShrinkRequest extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 拓展字段，按需传递，需要额外记录的房间属性。
     *
     * @var string
     */
    public $extensionShrink;

    /**
     * @description 房间公告，支持中英文，最大长度256位。
     *
     * @var string
     */
    public $notice;

    /**
     * @description 房间唯一标识。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 房主用户id，仅支持英文和数字，最大长度36位。
     *
     * @var string
     */
    public $roomOwnerId;

    /**
     * @description 房间标题，支持中英文，最大长度32位。
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'appId'           => 'AppId',
        'extensionShrink' => 'Extension',
        'notice'          => 'Notice',
        'roomId'          => 'RoomId',
        'roomOwnerId'     => 'RoomOwnerId',
        'title'           => 'Title',
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
        if (null !== $this->extensionShrink) {
            $res['Extension'] = $this->extensionShrink;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->roomOwnerId) {
            $res['RoomOwnerId'] = $this->roomOwnerId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRoomShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Extension'])) {
            $model->extensionShrink = $map['Extension'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['RoomOwnerId'])) {
            $model->roomOwnerId = $map['RoomOwnerId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
