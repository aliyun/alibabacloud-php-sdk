<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result\reservationAuthority;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result\roomGroup;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result\roomLabels;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result\roomLocation;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example ding994axxxxx
     *
     * @var string
     */
    public $corpId;

    /**
     * @example [ "2iPOLbpxxxxuwggiiqiPwiEiF" ]
     *
     * @var string[]
     */
    public $deviceUnionIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableCycleReservation;

    /**
     * @example xxxIsvRoomId
     *
     * @var string
     */
    public $isvRoomId;

    /**
     * @var reservationAuthority
     */
    public $reservationAuthority;

    /**
     * @example 10
     *
     * @var int
     */
    public $roomCapacity;

    /**
     * @var roomGroup
     */
    public $roomGroup;

    /**
     * @example 0ffb7184xxxxx
     *
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
     * @example 测试会议室
     *
     * @var string
     */
    public $roomName;

    /**
     * @example https://static.dingtalk.com/media/lADxxxxx.jpg
     *
     * @var string
     */
    public $roomPicture;

    /**
     * @example 0122414
     *
     * @var string
     */
    public $roomStaffId;

    /**
     * @example 0
     *
     * @var int
     */
    public $roomStatus;

    /**
     * @var string
     */
    public $roomUnionId;
    protected $_name = [
        'corpId' => 'CorpId',
        'deviceUnionIds' => 'DeviceUnionIds',
        'enableCycleReservation' => 'EnableCycleReservation',
        'isvRoomId' => 'IsvRoomId',
        'reservationAuthority' => 'ReservationAuthority',
        'roomCapacity' => 'RoomCapacity',
        'roomGroup' => 'RoomGroup',
        'roomId' => 'RoomId',
        'roomLabels' => 'RoomLabels',
        'roomLocation' => 'RoomLocation',
        'roomName' => 'RoomName',
        'roomPicture' => 'RoomPicture',
        'roomStaffId' => 'RoomStaffId',
        'roomStatus' => 'RoomStatus',
        'roomUnionId' => 'RoomUnionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->deviceUnionIds) {
            $res['DeviceUnionIds'] = $this->deviceUnionIds;
        }
        if (null !== $this->enableCycleReservation) {
            $res['EnableCycleReservation'] = $this->enableCycleReservation;
        }
        if (null !== $this->isvRoomId) {
            $res['IsvRoomId'] = $this->isvRoomId;
        }
        if (null !== $this->reservationAuthority) {
            $res['ReservationAuthority'] = null !== $this->reservationAuthority ? $this->reservationAuthority->toMap() : null;
        }
        if (null !== $this->roomCapacity) {
            $res['RoomCapacity'] = $this->roomCapacity;
        }
        if (null !== $this->roomGroup) {
            $res['RoomGroup'] = null !== $this->roomGroup ? $this->roomGroup->toMap() : null;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->roomLabels) {
            $res['RoomLabels'] = [];
            if (null !== $this->roomLabels && \is_array($this->roomLabels)) {
                $n = 0;
                foreach ($this->roomLabels as $item) {
                    $res['RoomLabels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roomLocation) {
            $res['RoomLocation'] = null !== $this->roomLocation ? $this->roomLocation->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DeviceUnionIds'])) {
            if (!empty($map['DeviceUnionIds'])) {
                $model->deviceUnionIds = $map['DeviceUnionIds'];
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
                $n = 0;
                foreach ($map['RoomLabels'] as $item) {
                    $model->roomLabels[$n++] = null !== $item ? roomLabels::fromMap($item) : $item;
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
