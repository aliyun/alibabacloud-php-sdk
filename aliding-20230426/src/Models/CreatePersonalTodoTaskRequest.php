<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreatePersonalTodoTaskRequest\notifyConfigs;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreatePersonalTodoTaskRequest\tenantContext;

class CreatePersonalTodoTaskRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $dueTime;

    /**
     * @var string[]
     */
    public $executorIds;

    /**
     * @var notifyConfigs
     */
    public $notifyConfigs;

    /**
     * @var string[]
     */
    public $participantIds;

    /**
     * @var int
     */
    public $reminderTimeStamp;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'description' => 'Description',
        'dueTime' => 'DueTime',
        'executorIds' => 'ExecutorIds',
        'notifyConfigs' => 'NotifyConfigs',
        'participantIds' => 'ParticipantIds',
        'reminderTimeStamp' => 'ReminderTimeStamp',
        'subject' => 'Subject',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->executorIds)) {
            Model::validateArray($this->executorIds);
        }
        if (null !== $this->notifyConfigs) {
            $this->notifyConfigs->validate();
        }
        if (\is_array($this->participantIds)) {
            Model::validateArray($this->participantIds);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dueTime) {
            $res['DueTime'] = $this->dueTime;
        }

        if (null !== $this->executorIds) {
            if (\is_array($this->executorIds)) {
                $res['ExecutorIds'] = [];
                $n1 = 0;
                foreach ($this->executorIds as $item1) {
                    $res['ExecutorIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notifyConfigs) {
            $res['NotifyConfigs'] = null !== $this->notifyConfigs ? $this->notifyConfigs->toArray($noStream) : $this->notifyConfigs;
        }

        if (null !== $this->participantIds) {
            if (\is_array($this->participantIds)) {
                $res['ParticipantIds'] = [];
                $n1 = 0;
                foreach ($this->participantIds as $item1) {
                    $res['ParticipantIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reminderTimeStamp) {
            $res['ReminderTimeStamp'] = $this->reminderTimeStamp;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DueTime'])) {
            $model->dueTime = $map['DueTime'];
        }

        if (isset($map['ExecutorIds'])) {
            if (!empty($map['ExecutorIds'])) {
                $model->executorIds = [];
                $n1 = 0;
                foreach ($map['ExecutorIds'] as $item1) {
                    $model->executorIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NotifyConfigs'])) {
            $model->notifyConfigs = notifyConfigs::fromMap($map['NotifyConfigs']);
        }

        if (isset($map['ParticipantIds'])) {
            if (!empty($map['ParticipantIds'])) {
                $model->participantIds = [];
                $n1 = 0;
                foreach ($map['ParticipantIds'] as $item1) {
                    $model->participantIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReminderTimeStamp'])) {
            $model->reminderTimeStamp = $map['ReminderTimeStamp'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
