<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetPropertyScheduleConfigResponseBody;

use AlibabaCloud\Tea\Model;

class propertyScheduleConfig extends Model
{
    /**
     * @example 1671630647018
     *
     * @var int
     */
    public $nextScheduleTime;

    /**
     * @example 3
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @example scheduler_account_period
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'nextScheduleTime' => 'NextScheduleTime',
        'scheduleTime'     => 'ScheduleTime',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextScheduleTime) {
            $res['NextScheduleTime'] = $this->nextScheduleTime;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyScheduleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextScheduleTime'])) {
            $model->nextScheduleTime = $map['NextScheduleTime'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
