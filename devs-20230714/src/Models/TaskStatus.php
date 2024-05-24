<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class TaskStatus extends Model
{
    /**
     * @var string[]
     */
    public $executionDetails;

    /**
     * @var TaskInvocation[]
     */
    public $invocations;

    /**
     * @var TaskExecError
     */
    public $latestExecError;

    /**
     * @example Success
     *
     * @var string
     */
    public $phase;

    /**
     * @example 123
     *
     * @var int
     */
    public $statusGeneration;
    protected $_name = [
        'executionDetails' => 'executionDetails',
        'invocations'      => 'invocations',
        'latestExecError'  => 'latestExecError',
        'phase'            => 'phase',
        'statusGeneration' => 'statusGeneration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionDetails) {
            $res['executionDetails'] = $this->executionDetails;
        }
        if (null !== $this->invocations) {
            $res['invocations'] = [];
            if (null !== $this->invocations && \is_array($this->invocations)) {
                $n = 0;
                foreach ($this->invocations as $item) {
                    $res['invocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestExecError) {
            $res['latestExecError'] = null !== $this->latestExecError ? $this->latestExecError->toMap() : null;
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }
        if (null !== $this->statusGeneration) {
            $res['statusGeneration'] = $this->statusGeneration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['executionDetails'])) {
            if (!empty($map['executionDetails'])) {
                $model->executionDetails = $map['executionDetails'];
            }
        }
        if (isset($map['invocations'])) {
            if (!empty($map['invocations'])) {
                $model->invocations = [];
                $n                  = 0;
                foreach ($map['invocations'] as $item) {
                    $model->invocations[$n++] = null !== $item ? TaskInvocation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['latestExecError'])) {
            $model->latestExecError = TaskExecError::fromMap($map['latestExecError']);
        }
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }
        if (isset($map['statusGeneration'])) {
            $model->statusGeneration = $map['statusGeneration'];
        }

        return $model;
    }
}
