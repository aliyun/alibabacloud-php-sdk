<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeForbidPushStreamRoomListResponseBody;

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
    public $opEndTime;

    /**
     * @var string
     */
    public $opStartTime;

    /**
     * @var string
     */
    public $roomId;
    protected $_name = [
        'anchorId'    => 'AnchorId',
        'opEndTime'   => 'OpEndTime',
        'opStartTime' => 'OpStartTime',
        'roomId'      => 'RoomId',
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
        if (null !== $this->opEndTime) {
            $res['OpEndTime'] = $this->opEndTime;
        }
        if (null !== $this->opStartTime) {
            $res['OpStartTime'] = $this->opStartTime;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
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
        if (isset($map['OpEndTime'])) {
            $model->opEndTime = $map['OpEndTime'];
        }
        if (isset($map['OpStartTime'])) {
            $model->opStartTime = $map['OpStartTime'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }

        return $model;
    }
}
