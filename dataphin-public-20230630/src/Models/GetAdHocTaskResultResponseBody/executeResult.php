<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAdHocTaskResultResponseBody;

use AlibabaCloud\Dara\Model;

class executeResult extends Model
{
    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $scheduleTaskId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'result' => 'Result',
        'scheduleTaskId' => 'ScheduleTaskId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->scheduleTaskId) {
            $res['ScheduleTaskId'] = $this->scheduleTaskId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['ScheduleTaskId'])) {
            $model->scheduleTaskId = $map['ScheduleTaskId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
