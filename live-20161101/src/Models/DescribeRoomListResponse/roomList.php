<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomListResponse;

use AlibabaCloud\Tea\Model;

class roomList extends Model
{
    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $anchorId;

    /**
     * @var int
     */
    public $roomStatus;

    /**
     * @var string
     */
    public $forbidStream;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'roomId'       => 'RoomId',
        'anchorId'     => 'AnchorId',
        'roomStatus'   => 'RoomStatus',
        'forbidStream' => 'ForbidStream',
        'createTime'   => 'CreateTime',
    ];

    public function validate()
    {
        Model::validateRequired('roomId', $this->roomId, true);
        Model::validateRequired('anchorId', $this->anchorId, true);
        Model::validateRequired('roomStatus', $this->roomStatus, true);
        Model::validateRequired('forbidStream', $this->forbidStream, true);
        Model::validateRequired('createTime', $this->createTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->anchorId) {
            $res['AnchorId'] = $this->anchorId;
        }
        if (null !== $this->roomStatus) {
            $res['RoomStatus'] = $this->roomStatus;
        }
        if (null !== $this->forbidStream) {
            $res['ForbidStream'] = $this->forbidStream;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['RoomStatus'])) {
            $model->roomStatus = $map['RoomStatus'];
        }
        if (isset($map['ForbidStream'])) {
            $model->forbidStream = $map['ForbidStream'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
