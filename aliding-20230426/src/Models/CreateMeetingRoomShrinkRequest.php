<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateMeetingRoomShrinkRequest extends Model
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
     * @var string
     */
    public $reservationAuthorityShrink;

    /**
     * @var int
     */
    public $roomCapacity;

    /**
     * @var string
     */
    public $roomLabelIdsShrink;

    /**
     * @var string
     */
    public $roomLocationShrink;

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
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'enableCycleReservation' => 'EnableCycleReservation',
        'groupId' => 'GroupId',
        'isvRoomId' => 'IsvRoomId',
        'reservationAuthorityShrink' => 'ReservationAuthority',
        'roomCapacity' => 'RoomCapacity',
        'roomLabelIdsShrink' => 'RoomLabelIds',
        'roomLocationShrink' => 'RoomLocation',
        'roomName' => 'RoomName',
        'roomPicture' => 'RoomPicture',
        'roomStatus' => 'RoomStatus',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
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

        if (null !== $this->reservationAuthorityShrink) {
            $res['ReservationAuthority'] = $this->reservationAuthorityShrink;
        }

        if (null !== $this->roomCapacity) {
            $res['RoomCapacity'] = $this->roomCapacity;
        }

        if (null !== $this->roomLabelIdsShrink) {
            $res['RoomLabelIds'] = $this->roomLabelIdsShrink;
        }

        if (null !== $this->roomLocationShrink) {
            $res['RoomLocation'] = $this->roomLocationShrink;
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

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
            $model->reservationAuthorityShrink = $map['ReservationAuthority'];
        }

        if (isset($map['RoomCapacity'])) {
            $model->roomCapacity = $map['RoomCapacity'];
        }

        if (isset($map['RoomLabelIds'])) {
            $model->roomLabelIdsShrink = $map['RoomLabelIds'];
        }

        if (isset($map['RoomLocation'])) {
            $model->roomLocationShrink = $map['RoomLocation'];
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
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
