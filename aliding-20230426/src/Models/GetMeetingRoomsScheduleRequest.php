<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetMeetingRoomsScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $roomIds;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'roomIds' => 'RoomIds',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->roomIds)) {
            Model::validateArray($this->roomIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->roomIds) {
            if (\is_array($this->roomIds)) {
                $res['RoomIds'] = [];
                $n1 = 0;
                foreach ($this->roomIds as $item1) {
                    $res['RoomIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['RoomIds'])) {
                $model->roomIds = [];
                $n1 = 0;
                foreach ($map['RoomIds'] as $item1) {
                    $model->roomIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
