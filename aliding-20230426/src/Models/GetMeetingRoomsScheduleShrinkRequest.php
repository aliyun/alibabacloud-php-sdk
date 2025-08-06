<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetMeetingRoomsScheduleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $roomIdsShrink;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'roomIdsShrink' => 'RoomIds',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
