<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody\scheduleInformation\scheduleItems;
use AlibabaCloud\Tea\Model;

class scheduleInformation extends Model
{
    /**
     * @example 无权限
     *
     * @var string
     */
    public $error;

    /**
     * @example 4002f89xxxxx
     *
     * @var string
     */
    public $roomId;

    /**
     * @var scheduleItems[]
     */
    public $scheduleItems;
    protected $_name = [
        'error'         => 'Error',
        'roomId'        => 'RoomId',
        'scheduleItems' => 'ScheduleItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->scheduleItems) {
            $res['ScheduleItems'] = [];
            if (null !== $this->scheduleItems && \is_array($this->scheduleItems)) {
                $n = 0;
                foreach ($this->scheduleItems as $item) {
                    $res['ScheduleItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleInformation
     */
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
                $n                    = 0;
                foreach ($map['ScheduleItems'] as $item) {
                    $model->scheduleItems[$n++] = null !== $item ? scheduleItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
