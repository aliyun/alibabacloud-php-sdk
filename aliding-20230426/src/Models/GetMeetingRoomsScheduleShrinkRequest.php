<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetMeetingRoomsScheduleShrinkRequest extends Model
{
    /**
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example ["4002xxxxx"]
     *
     * @var string
     */
    public $roomIdsShrink;

    /**
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'roomIdsShrink' => 'RoomIds',
        'startTime'     => 'StartTime',
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
        if (null !== $this->roomIdsShrink) {
            $res['RoomIds'] = $this->roomIdsShrink;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMeetingRoomsScheduleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RoomIds'])) {
            $model->roomIdsShrink = $map['RoomIds'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
