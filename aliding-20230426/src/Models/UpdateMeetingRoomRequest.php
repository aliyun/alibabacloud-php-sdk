<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest\roomLocation;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class UpdateMeetingRoomRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $groupId;

    /**
     * @example xxxIsvRoomId
     *
     * @var string
     */
    public $isvRoomId;

    /**
     * @example 100
     *
     * @var int
     */
    public $roomCapacity;

    /**
     * @example 0ffbxxxxx
     *
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
     * @example https://static.dingtalk.com/media/lADPxxxxx.jpg
     *
     * @var string
     */
    public $roomPicture;

    /**
     * @example 1
     *
     * @var int
     */
    public $roomStatus;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'groupId'       => 'GroupId',
        'isvRoomId'     => 'IsvRoomId',
        'roomCapacity'  => 'RoomCapacity',
        'roomId'        => 'RoomId',
        'roomLabelIds'  => 'RoomLabelIds',
        'roomLocation'  => 'RoomLocation',
        'roomName'      => 'RoomName',
        'roomPicture'   => 'RoomPicture',
        'roomStatus'    => 'RoomStatus',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->isvRoomId) {
            $res['IsvRoomId'] = $this->isvRoomId;
        }
        if (null !== $this->roomCapacity) {
            $res['RoomCapacity'] = $this->roomCapacity;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->roomLabelIds) {
            $res['RoomLabelIds'] = $this->roomLabelIds;
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
        if (null !== $this->roomStatus) {
            $res['RoomStatus'] = $this->roomStatus;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMeetingRoomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IsvRoomId'])) {
            $model->isvRoomId = $map['IsvRoomId'];
        }
        if (isset($map['RoomCapacity'])) {
            $model->roomCapacity = $map['RoomCapacity'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['RoomLabelIds'])) {
            if (!empty($map['RoomLabelIds'])) {
                $model->roomLabelIds = $map['RoomLabelIds'];
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
