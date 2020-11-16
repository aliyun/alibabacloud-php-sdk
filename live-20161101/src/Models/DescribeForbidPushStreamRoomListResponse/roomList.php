<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeForbidPushStreamRoomListResponse;

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
     * @var string
     */
    public $opStartTime;

    /**
     * @var string
     */
    public $opEndTime;
    protected $_name = [
        'roomId'      => 'RoomId',
        'anchorId'    => 'AnchorId',
        'opStartTime' => 'OpStartTime',
        'opEndTime'   => 'OpEndTime',
    ];

    public function validate()
    {
        Model::validateRequired('roomId', $this->roomId, true);
        Model::validateRequired('anchorId', $this->anchorId, true);
        Model::validateRequired('opStartTime', $this->opStartTime, true);
        Model::validateRequired('opEndTime', $this->opEndTime, true);
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
        if (null !== $this->opStartTime) {
            $res['OpStartTime'] = $this->opStartTime;
        }
        if (null !== $this->opEndTime) {
            $res['OpEndTime'] = $this->opEndTime;
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
        if (isset($map['OpStartTime'])) {
            $model->opStartTime = $map['OpStartTime'];
        }
        if (isset($map['OpEndTime'])) {
            $model->opEndTime = $map['OpEndTime'];
        }

        return $model;
    }
}
