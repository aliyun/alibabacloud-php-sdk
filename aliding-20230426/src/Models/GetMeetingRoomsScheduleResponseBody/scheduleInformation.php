<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody\scheduleInformation\scheduleItems;

class scheduleInformation extends Model
{
    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var scheduleItems[]
     */
    public $scheduleItems;
    protected $_name = [
        'error' => 'Error',
        'roomId' => 'RoomId',
        'scheduleItems' => 'ScheduleItems',
    ];

    public function validate()
    {
        if (\is_array($this->scheduleItems)) {
            Model::validateArray($this->scheduleItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }

        if (null !== $this->scheduleItems) {
            if (\is_array($this->scheduleItems)) {
                $res['ScheduleItems'] = [];
                $n1 = 0;
                foreach ($this->scheduleItems as $item1) {
                    $res['ScheduleItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }

        if (isset($map['ScheduleItems'])) {
            if (!empty($map['ScheduleItems'])) {
                $model->scheduleItems = [];
                $n1 = 0;
                foreach ($map['ScheduleItems'] as $item1) {
                    $model->scheduleItems[$n1++] = scheduleItems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
