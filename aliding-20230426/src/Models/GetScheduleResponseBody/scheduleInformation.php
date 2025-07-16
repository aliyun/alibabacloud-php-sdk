<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody\scheduleInformation\scheduleItems;
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
     * @var scheduleItems[]
     */
    public $scheduleItems;

    /**
     * @example 012345
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'error' => 'Error',
        'scheduleItems' => 'ScheduleItems',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ScheduleItems'])) {
            if (!empty($map['ScheduleItems'])) {
                $model->scheduleItems = [];
                $n = 0;
                foreach ($map['ScheduleItems'] as $item) {
                    $model->scheduleItems[$n++] = null !== $item ? scheduleItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
