<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponseBody\data\scheduledTaskInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponseBody\data\scheduledTaskInfo\tasks\activeRun;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponseBody\data\scheduledTaskInfo\tasks\lastCompletedRun;

class tasks extends Model
{
    /**
     * @var activeRun
     */
    public $activeRun;

    /**
     * @var lastCompletedRun
     */
    public $lastCompletedRun;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextRunAt;

    /**
     * @var string
     */
    public $scheduleDescription;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'activeRun' => 'ActiveRun',
        'lastCompletedRun' => 'LastCompletedRun',
        'name' => 'Name',
        'nextRunAt' => 'NextRunAt',
        'scheduleDescription' => 'ScheduleDescription',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->activeRun) {
            $this->activeRun->validate();
        }
        if (null !== $this->lastCompletedRun) {
            $this->lastCompletedRun->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeRun) {
            $res['ActiveRun'] = null !== $this->activeRun ? $this->activeRun->toArray($noStream) : $this->activeRun;
        }

        if (null !== $this->lastCompletedRun) {
            $res['LastCompletedRun'] = null !== $this->lastCompletedRun ? $this->lastCompletedRun->toArray($noStream) : $this->lastCompletedRun;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextRunAt) {
            $res['NextRunAt'] = $this->nextRunAt;
        }

        if (null !== $this->scheduleDescription) {
            $res['ScheduleDescription'] = $this->scheduleDescription;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ActiveRun'])) {
            $model->activeRun = activeRun::fromMap($map['ActiveRun']);
        }

        if (isset($map['LastCompletedRun'])) {
            $model->lastCompletedRun = lastCompletedRun::fromMap($map['LastCompletedRun']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextRunAt'])) {
            $model->nextRunAt = $map['NextRunAt'];
        }

        if (isset($map['ScheduleDescription'])) {
            $model->scheduleDescription = $map['ScheduleDescription'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
