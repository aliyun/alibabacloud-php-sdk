<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomListResponseBody;

use AlibabaCloud\Tea\Model;

class roomList extends Model
{
    /**
     * @var string
     */
    public $anchorId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $forbidStream;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var int
     */
    public $roomStatus;
    protected $_name = [
        'anchorId'     => 'AnchorId',
        'createTime'   => 'CreateTime',
        'forbidStream' => 'ForbidStream',
        'roomId'       => 'RoomId',
        'roomStatus'   => 'RoomStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorId) {
            $res['AnchorId'] = $this->anchorId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->forbidStream) {
            $res['ForbidStream'] = $this->forbidStream;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->roomStatus) {
            $res['RoomStatus'] = $this->roomStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ForbidStream'])) {
            $model->forbidStream = $map['ForbidStream'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['RoomStatus'])) {
            $model->roomStatus = $map['RoomStatus'];
        }

        return $model;
    }
}
