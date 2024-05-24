<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class TaskExec extends Model
{
    /**
     * @var Context
     */
    public $context;

    /**
     * @example task-1
     *
     * @var string
     */
    public $name;

    /**
     * @var RunAfter[]
     */
    public $runAfters;

    /**
     * @example serverless-runner
     *
     * @var string
     */
    public $taskTemplate;
    protected $_name = [
        'context'      => 'context',
        'name'         => 'name',
        'runAfters'    => 'runAfters',
        'taskTemplate' => 'taskTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = null !== $this->context ? $this->context->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->runAfters) {
            $res['runAfters'] = [];
            if (null !== $this->runAfters && \is_array($this->runAfters)) {
                $n = 0;
                foreach ($this->runAfters as $item) {
                    $res['runAfters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskTemplate) {
            $res['taskTemplate'] = $this->taskTemplate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskExec
     */
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
                $n                = 0;
                foreach ($map['runAfters'] as $item) {
                    $model->runAfters[$n++] = null !== $item ? RunAfter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taskTemplate'])) {
            $model->taskTemplate = $map['taskTemplate'];
        }

        return $model;
    }
}
