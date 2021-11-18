<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceShutdownTimerRequest extends Model
{
    /**
     * @description 定时关机时间（GMT）
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @description 多少毫秒后定时关机（如果设定可以覆盖ScheduleTime）
     *
     * @var int
     */
    public $ttlInMillis;
    protected $_name = [
        'scheduleTime' => 'ScheduleTime',
        'ttlInMillis'  => 'TtlInMillis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->ttlInMillis) {
            $res['TtlInMillis'] = $this->ttlInMillis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceShutdownTimerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['TtlInMillis'])) {
            $model->ttlInMillis = $map['TtlInMillis'];
        }

        return $model;
    }
}
