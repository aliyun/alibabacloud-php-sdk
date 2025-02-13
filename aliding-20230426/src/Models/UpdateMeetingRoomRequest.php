<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest\reservationAuthority;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest\roomLocation;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest\tenantContext;

class UpdateMeetingRoomRequest extends Model
{
    /**
     * @var bool
     */
    public $enableCycleReservation;
    /**
     * @var int
     */
    public $groupId;
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
     * @var string
     */
    public $roomId;
    /**
     * @var int[]
     */
    public $roomLabelIds;
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
     * @var int
     */
    public $roomStatus;
    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'enableCycleReservation' => 'EnableCycleReservation',
        'groupId'                => 'GroupId',
        'isvRoomId'              => 'IsvRoomId',
        'reservationAuthority'   => 'ReservationAuthority',
        'roomCapacity'           => 'RoomCapacity',
        'roomId'                 => 'RoomId',
        'roomLabelIds'           => 'RoomLabelIds',
        'roomLocation'           => 'RoomLocation',
        'roomName'               => 'RoomName',
        'roomPicture'            => 'RoomPicture',
        'roomStatus'             => 'RoomStatus',
        'tenantContext'          => 'TenantContext',
    ];

    public function validate()
    {
        if (null !== $this->reservationAuthority) {
            $this->reservationAuthority->validate();
        }
        if (\is_array($this->roomLabelIds)) {
            Model::validateArray($this->roomLabelIds);
        }
        if (null !== $this->roomLocation) {
            $this->roomLocation->validate();
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableCycleReservation) {
            $res['EnableCycleReservation'] = $this->enableCycleReservation;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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

        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }

        if (null !== $this->roomLabelIds) {
            if (\is_array($this->roomLabelIds)) {
                $res['RoomLabelIds'] = [];
                $n1                  = 0;
                foreach ($this->roomLabelIds as $item1) {
                    $res['RoomLabelIds'][$n1++] = $item1;
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

        if (null !== $this->roomStatus) {
            $res['RoomStatus'] = $this->roomStatus;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
        if (isset($map['EnableCycleReservation'])) {
            $model->enableCycleReservation = $map['EnableCycleReservation'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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

        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }

        if (isset($map['RoomLabelIds'])) {
            if (!empty($map['RoomLabelIds'])) {
                $model->roomLabelIds = [];
                $n1                  = 0;
                foreach ($map['RoomLabelIds'] as $item1) {
                    $model->roomLabelIds[$n1++] = $item1;
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

        if (isset($map['RoomStatus'])) {
            $model->roomStatus = $map['RoomStatus'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
