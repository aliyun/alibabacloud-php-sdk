<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomListResponseBody\result;

use AlibabaCloud\Tea\Model;

class roomInfoList extends Model
{
    /**
     * @description 房间id
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 房间标题名字
     *
     * @var string
     */
    public $title;

    /**
     * @description 房主的用户id
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description 业务类型
     *
     * @var string
     */
    public $bizType;

    /**
     * @description 应用id，同appId
     *
     * @var string
     */
    public $domain;
    protected $_name = [
        'roomId'  => 'RoomId',
        'title'   => 'Title',
        'ownerId' => 'OwnerId',
        'bizType' => 'BizType',
        'domain'  => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
