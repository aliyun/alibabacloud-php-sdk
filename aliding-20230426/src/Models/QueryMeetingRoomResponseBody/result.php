<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result\reservationAuthority;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result\roomGroup;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result\roomLabels;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result\roomLocation;

class result extends Model
{
    /**
     * @var string
     */
    public $corpId;
    /**
     * @var string[]
     */
    public $deviceUnionIds;
    /**
     * @var bool
     */
    public $enableCycleReservation;
    /**
     * @var string
     */
    public $isvRoomId;
    /**
     * @var reservationAuthority
     */
    public $reservationAuthority;
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
    /**
     * @var string
     */
    public $roomUnionId;
    protected $_name = [
        'corpId'                 => 'CorpId',
        'deviceUnionIds'         => 'DeviceUnionIds',
        'enableCycleReservation' => 'EnableCycleReservation',
        'isvRoomId'              => 'IsvRoomId',
        'reservationAuthority'   => 'ReservationAuthority',
        'roomCapacity'           => 'RoomCapacity',
        'roomGroup'              => 'RoomGroup',
        'roomId'                 => 'RoomId',
        'roomLabels'             => 'RoomLabels',
        'roomLocation'           => 'RoomLocation',
        'roomName'               => 'RoomName',
        'roomPicture'            => 'RoomPicture',
        'roomStaffId'            => 'RoomStaffId',
        'roomStatus'             => 'RoomStatus',
        'roomUnionId'            => 'RoomUnionId',
    ];

    public function validate()
    {
        if (\is_array($this->deviceUnionIds)) {
            Model::validateArray($this->deviceUnionIds);
        }
        if (null !== $this->reservationAuthority) {
            $this->reservationAuthority->validate();
        }
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

        if (null !== $this->deviceUnionIds) {
            if (\is_array($this->deviceUnionIds)) {
                $res['DeviceUnionIds'] = [];
                $n1                    = 0;
                foreach ($this->deviceUnionIds as $item1) {
                    $res['DeviceUnionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->enableCycleReservation) {
            $res['EnableCycleReservation'] = $this->enableCycleReservation;
        }

        if (null !== $this->isvRoomId) {
            $res['IsvRoomId'] = $this->isvRoomId;
        }

        if (null !== $this->reservationAuthority) {
            $res['ReservationAuthority'] = null !== $this->reservationAuthority ? $this->reservationAuthority->toArray($noStream) : $this->reservationAuthority;
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
                $n1                = 0;
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

        if (null !== $this->roomUnionId) {
            $res['RoomUnionId'] = $this->roomUnionId;
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

        if (isset($map['DeviceUnionIds'])) {
            if (!empty($map['DeviceUnionIds'])) {
                $model->deviceUnionIds = [];
                $n1                    = 0;
                foreach ($map['DeviceUnionIds'] as $item1) {
                    $model->deviceUnionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EnableCycleReservation'])) {
            $model->enableCycleReservation = $map['EnableCycleReservation'];
        }

        if (isset($map['IsvRoomId'])) {
            $model->isvRoomId = $map['IsvRoomId'];
        }

        if (isset($map['ReservationAuthority'])) {
            $model->reservationAuthority = reservationAuthority::fromMap($map['ReservationAuthority']);
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
                $n1                = 0;
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

        if (isset($map['RoomUnionId'])) {
            $model->roomUnionId = $map['RoomUnionId'];
        }

        return $model;
    }
}
