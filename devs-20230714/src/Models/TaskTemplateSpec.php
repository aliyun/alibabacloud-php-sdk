<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class TaskTemplateSpec extends Model
{
    /**
     * @var Context
     */
    public $context;

    /**
     * @var string
     */
    public $description;

    /**
     * @var Condition
     */
    public $executeCondition;

    /**
     * @var TaskWorker
     */
    public $worker;
    protected $_name = [
        'context' => 'context',
        'description' => 'description',
        'executeCondition' => 'executeCondition',
        'worker' => 'worker',
    ];

    public function validate()
    {
        if (null !== $this->context) {
            $this->context->validate();
        }
        if (null !== $this->executeCondition) {
            $this->executeCondition->validate();
        }
        if (null !== $this->worker) {
            $this->worker->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executeCondition) {
            $res['executeCondition'] = null !== $this->executeCondition ? $this->executeCondition->toArray($noStream) : $this->executeCondition;
        }

        if (null !== $this->worker) {
            $res['worker'] = null !== $this->worker ? $this->worker->toArray($noStream) : $this->worker;
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
        if (isset($map['context'])) {
            $model->context = Context::fromMap($map['context']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executeCondition'])) {
            $model->executeCondition = Condition::fromMap($map['executeCondition']);
        }

        if (isset($map['worker'])) {
            $model->worker = TaskWorker::fromMap($map['worker']);
        }

        return $model;
    }
}
