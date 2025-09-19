<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetPropertyScheduleConfigResponseBody;

use AlibabaCloud\Dara\Model;

class propertyScheduleConfig extends Model
{
    /**
     * @var int
     */
    public $nextScheduleTime;

    /**
     * @var string
     */
    public $scheduleTime;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'nextScheduleTime' => 'NextScheduleTime',
        'scheduleTime' => 'ScheduleTime',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
