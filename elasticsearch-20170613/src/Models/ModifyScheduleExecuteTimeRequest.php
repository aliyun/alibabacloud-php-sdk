<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ModifyScheduleExecuteTimeRequest extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $scheduleExecuteTime;
    protected $_name = [
        'eventId' => 'eventId',
        'scheduleExecuteTime' => 'scheduleExecuteTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }

        if (null !== $this->scheduleExecuteTime) {
            $res['scheduleExecuteTime'] = $this->scheduleExecuteTime;
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
        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }

        if (isset($map['scheduleExecuteTime'])) {
            $model->scheduleExecuteTime = $map['scheduleExecuteTime'];
        }

        return $model;
    }
}
