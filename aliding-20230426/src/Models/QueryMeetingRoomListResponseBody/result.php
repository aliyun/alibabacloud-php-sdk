<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListResponseBody\result\roomGroup;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListResponseBody\result\roomLabels;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListResponseBody\result\roomLocation;

class result extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $isvRoomId;

    /**
     * @var int
     */
    public $roomCapacity;

    /**
     * @var roomGroup
     */
    public $roomGroup;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var roomLabels[]
     */
    public $roomLabels;

    /**
     * @var roomLocation
     */
    public $roomLocation;

    /**
     * @var string
     */
    public $roomName;

    /**
     * @var string
     */
    public $roomPicture;

    /**
     * @var string
     */
    public $roomStaffId;

    /**
     * @var int
     */
    public $roomStatus;
    protected $_name = [
        'corpId' => 'CorpId',
        'isvRoomId' => 'IsvRoomId',
        'roomCapacity' => 'RoomCapacity',
        'roomGroup' => 'RoomGroup',
        'roomId' => 'RoomId',
        'roomLabels' => 'RoomLabels',
        'roomLocation' => 'RoomLocation',
        'roomName' => 'RoomName',
        'roomPicture' => 'RoomPicture',
        'roomStaffId' => 'RoomStaffId',
        'roomStatus' => 'RoomStatus',
    ];

    public function validate()
    {
        if (null !== $this->roomGroup) {
            $this->roomGroup->validate();
        }
        if (\is_array($this->roomLabels)) {
            Model::validateArray($this->roomLabels);
        }
        if (null !== $this->roomLocation) {
            $this->roomLocation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->isvRoomId) {
            $res['IsvRoomId'] = $this->isvRoomId;
        }

        if (null !== $this->roomCapacity) {
            $res['RoomCapacity'] = $this->roomCapacity;
        }

        if (null !== $this->roomGroup) {
            $res['RoomGroup'] = null !== $this->roomGroup ? $this->roomGroup->toArray($noStream) : $this->roomGroup;
        }

        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }

        if (null !== $this->roomLabels) {
            if (\is_array($this->roomLabels)) {
                $res['RoomLabels'] = [];
                $n1 = 0;
                foreach ($this->roomLabels as $item1) {
                    $res['RoomLabels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->roomLocation) {
            $res['RoomLocation'] = null !== $this->roomLocation ? $this->roomLocation->toArray($noStream) : $this->roomLocation;
        }

        if (null !== $this->roomName) {
            $res['RoomName'] = $this->roomName;
        }

        if (null !== $this->roomPicture) {
            $res['RoomPicture'] = $this->roomPicture;
        }

        if (null !== $this->roomStaffId) {
            $res['RoomStaffId'] = $this->roomStaffId;
        }

        if (null !== $this->roomStatus) {
            $res['RoomStatus'] = $this->roomStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['IsvRoomId'])) {
            $model->isvRoomId = $map['IsvRoomId'];
        }

        if (isset($map['RoomCapacity'])) {
            $model->roomCapacity = $map['RoomCapacity'];
        }

        if (isset($map['RoomGroup'])) {
            $model->roomGroup = roomGroup::fromMap($map['RoomGroup']);
        }

        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }

        if (isset($map['RoomLabels'])) {
            if (!empty($map['RoomLabels'])) {
                $model->roomLabels = [];
                $n1 = 0;
                foreach ($map['RoomLabels'] as $item1) {
                    $model->roomLabels[$n1++] = roomLabels::fromMap($item1);
                }
            }
        }

        if (isset($map['RoomLocation'])) {
            $model->roomLocation = roomLocation::fromMap($map['RoomLocation']);
        }

        if (isset($map['RoomName'])) {
            $model->roomName = $map['RoomName'];
        }

        if (isset($map['RoomPicture'])) {
            $model->roomPicture = $map['RoomPicture'];
        }

        if (isset($map['RoomStaffId'])) {
            $model->roomStaffId = $map['RoomStaffId'];
        }

        if (isset($map['RoomStatus'])) {
            $model->roomStatus = $map['RoomStatus'];
        }

        return $model;
    }
}
