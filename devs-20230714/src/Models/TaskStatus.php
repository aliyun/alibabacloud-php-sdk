<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $phase;

    /**
     * @var int
     */
    public $statusGeneration;
    protected $_name = [
        'executionDetails' => 'executionDetails',
        'invocations' => 'invocations',
        'latestExecError' => 'latestExecError',
        'phase' => 'phase',
        'statusGeneration' => 'statusGeneration',
    ];

    public function validate()
    {
        if (\is_array($this->executionDetails)) {
            Model::validateArray($this->executionDetails);
        }
        if (\is_array($this->invocations)) {
            Model::validateArray($this->invocations);
        }
        if (null !== $this->latestExecError) {
            $this->latestExecError->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionDetails) {
            if (\is_array($this->executionDetails)) {
                $res['executionDetails'] = [];
                $n1 = 0;
                foreach ($this->executionDetails as $item1) {
                    $res['executionDetails'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invocations) {
            if (\is_array($this->invocations)) {
                $res['invocations'] = [];
                $n1 = 0;
                foreach ($this->invocations as $item1) {
                    $res['invocations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->latestExecError) {
            $res['latestExecError'] = null !== $this->latestExecError ? $this->latestExecError->toArray($noStream) : $this->latestExecError;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->statusGeneration) {
            $res['statusGeneration'] = $this->statusGeneration;
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
        if (isset($map['executionDetails'])) {
            if (!empty($map['executionDetails'])) {
                $model->executionDetails = [];
                $n1 = 0;
                foreach ($map['executionDetails'] as $item1) {
                    $model->executionDetails[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['invocations'])) {
            if (!empty($map['invocations'])) {
                $model->invocations = [];
                $n1 = 0;
                foreach ($map['invocations'] as $item1) {
                    $model->invocations[$n1] = TaskInvocation::fromMap($item1);
                    ++$n1;
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
