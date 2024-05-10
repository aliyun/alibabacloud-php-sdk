<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetMeetingRoomsScheduleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example ["4002xxxxx"]
     *
     * @var string[]
     */
    public $roomIds;

    /**
     * @description This parameter is required.
     *
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'roomIds'   => 'RoomIds',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->roomIds) {
            $res['RoomIds'] = $this->roomIds;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMeetingRoomsScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RoomIds'])) {
            if (!empty($map['RoomIds'])) {
                $model->roomIds = $map['RoomIds'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
