<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskRequest\tenantContext;

class UpdateTodoTaskRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $done;

    /**
     * @var int
     */
    public $dueTime;

    /**
     * @var string[]
     */
    public $executorIds;

    /**
     * @var string[]
     */
    public $participantIds;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'description' => 'description',
        'done' => 'done',
        'dueTime' => 'dueTime',
        'executorIds' => 'executorIds',
        'participantIds' => 'participantIds',
        'subject' => 'subject',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->executorIds)) {
            Model::validateArray($this->executorIds);
        }
        if (\is_array($this->participantIds)) {
            Model::validateArray($this->participantIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->done) {
            $res['done'] = $this->done;
        }

        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }

        if (null !== $this->executorIds) {
            if (\is_array($this->executorIds)) {
                $res['executorIds'] = [];
                $n1 = 0;
                foreach ($this->executorIds as $item1) {
                    $res['executorIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->participantIds) {
            if (\is_array($this->participantIds)) {
                $res['participantIds'] = [];
                $n1 = 0;
                foreach ($this->participantIds as $item1) {
                    $res['participantIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['done'])) {
            $model->done = $map['done'];
        }

        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }

        if (isset($map['executorIds'])) {
            if (!empty($map['executorIds'])) {
                $model->executorIds = [];
                $n1 = 0;
                foreach ($map['executorIds'] as $item1) {
                    $model->executorIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['participantIds'])) {
            if (!empty($map['participantIds'])) {
                $model->participantIds = [];
                $n1 = 0;
                foreach ($map['participantIds'] as $item1) {
                    $model->participantIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
