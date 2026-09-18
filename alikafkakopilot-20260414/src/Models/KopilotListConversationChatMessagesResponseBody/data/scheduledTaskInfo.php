<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponseBody\data\scheduledTaskInfo\tasks;

class scheduledTaskInfo extends Model
{
    /**
     * @var string
     */
    public $asOf;

    /**
     * @var int
     */
    public $enabledCount;

    /**
     * @var bool
     */
    public $hasMoreTasks;

    /**
     * @var bool
     */
    public $hasScheduledTask;

    /**
     * @var string
     */
    public $nextTaskCursor;

    /**
     * @var int
     */
    public $taskCount;

    /**
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'asOf' => 'AsOf',
        'enabledCount' => 'EnabledCount',
        'hasMoreTasks' => 'HasMoreTasks',
        'hasScheduledTask' => 'HasScheduledTask',
        'nextTaskCursor' => 'NextTaskCursor',
        'taskCount' => 'TaskCount',
        'tasks' => 'Tasks',
    ];

    public function validate()
    {
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asOf) {
            $res['AsOf'] = $this->asOf;
        }

        if (null !== $this->enabledCount) {
            $res['EnabledCount'] = $this->enabledCount;
        }

        if (null !== $this->hasMoreTasks) {
            $res['HasMoreTasks'] = $this->hasMoreTasks;
        }

        if (null !== $this->hasScheduledTask) {
            $res['HasScheduledTask'] = $this->hasScheduledTask;
        }

        if (null !== $this->nextTaskCursor) {
            $res['NextTaskCursor'] = $this->nextTaskCursor;
        }

        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
        }

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['Tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['Tasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AsOf'])) {
            $model->asOf = $map['AsOf'];
        }

        if (isset($map['EnabledCount'])) {
            $model->enabledCount = $map['EnabledCount'];
        }

        if (isset($map['HasMoreTasks'])) {
            $model->hasMoreTasks = $map['HasMoreTasks'];
        }

        if (isset($map['HasScheduledTask'])) {
            $model->hasScheduledTask = $map['HasScheduledTask'];
        }

        if (isset($map['NextTaskCursor'])) {
            $model->nextTaskCursor = $map['NextTaskCursor'];
        }

        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }

        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n1 = 0;
                foreach ($map['Tasks'] as $item1) {
                    $model->tasks[$n1] = tasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
