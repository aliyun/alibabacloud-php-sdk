<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class TaskExec extends Model
{
    /**
     * @var Context
     */
    public $context;

    /**
     * @var string
     */
    public $name;

    /**
     * @var RunAfter[]
     */
    public $runAfters;

    /**
     * @var string
     */
    public $taskTemplate;
    protected $_name = [
        'context' => 'context',
        'name' => 'name',
        'runAfters' => 'runAfters',
        'taskTemplate' => 'taskTemplate',
    ];

    public function validate()
    {
        if (null !== $this->context) {
            $this->context->validate();
        }
        if (\is_array($this->runAfters)) {
            Model::validateArray($this->runAfters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->runAfters) {
            if (\is_array($this->runAfters)) {
                $res['runAfters'] = [];
                $n1 = 0;
                foreach ($this->runAfters as $item1) {
                    $res['runAfters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskTemplate) {
            $res['taskTemplate'] = $this->taskTemplate;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['runAfters'])) {
            if (!empty($map['runAfters'])) {
                $model->runAfters = [];
                $n1 = 0;
                foreach ($map['runAfters'] as $item1) {
                    $model->runAfters[$n1] = RunAfter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taskTemplate'])) {
            $model->taskTemplate = $map['taskTemplate'];
        }

        return $model;
    }
}
