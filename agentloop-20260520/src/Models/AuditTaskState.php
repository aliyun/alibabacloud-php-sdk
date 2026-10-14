<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\AuditTaskState\runtimeError;

class AuditTaskState extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var runtimeError
     */
    public $runtimeError;

    /**
     * @var string
     */
    public $runtimeStatus;

    /**
     * @var string
     */
    public $runtimeStatusCheckedAt;

    /**
     * @var mixed[]
     */
    public $task;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'enabled' => 'enabled',
        'runtimeError' => 'runtimeError',
        'runtimeStatus' => 'runtimeStatus',
        'runtimeStatusCheckedAt' => 'runtimeStatusCheckedAt',
        'task' => 'task',
        'taskId' => 'taskId',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->runtimeError) {
            $this->runtimeError->validate();
        }
        if (\is_array($this->task)) {
            Model::validateArray($this->task);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->runtimeError) {
            $res['runtimeError'] = null !== $this->runtimeError ? $this->runtimeError->toArray($noStream) : $this->runtimeError;
        }

        if (null !== $this->runtimeStatus) {
            $res['runtimeStatus'] = $this->runtimeStatus;
        }

        if (null !== $this->runtimeStatusCheckedAt) {
            $res['runtimeStatusCheckedAt'] = $this->runtimeStatusCheckedAt;
        }

        if (null !== $this->task) {
            if (\is_array($this->task)) {
                $res['task'] = [];
                foreach ($this->task as $key1 => $value1) {
                    $res['task'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['runtimeError'])) {
            $model->runtimeError = runtimeError::fromMap($map['runtimeError']);
        }

        if (isset($map['runtimeStatus'])) {
            $model->runtimeStatus = $map['runtimeStatus'];
        }

        if (isset($map['runtimeStatusCheckedAt'])) {
            $model->runtimeStatusCheckedAt = $map['runtimeStatusCheckedAt'];
        }

        if (isset($map['task'])) {
            if (!empty($map['task'])) {
                $model->task = [];
                foreach ($map['task'] as $key1 => $value1) {
                    $model->task[$key1] = $value1;
                }
            }
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
