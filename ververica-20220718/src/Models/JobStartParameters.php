<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class JobStartParameters extends Model
{
    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var LocalVariable[]
     */
    public $localVariables;

    /**
     * @var string
     */
    public $resourceQueueName;

    /**
     * @var DeploymentRestoreStrategy
     */
    public $restoreStrategy;
    protected $_name = [
        'deploymentId' => 'deploymentId',
        'jobId' => 'jobId',
        'localVariables' => 'localVariables',
        'resourceQueueName' => 'resourceQueueName',
        'restoreStrategy' => 'restoreStrategy',
    ];

    public function validate()
    {
        if (\is_array($this->localVariables)) {
            Model::validateArray($this->localVariables);
        }
        if (null !== $this->restoreStrategy) {
            $this->restoreStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->localVariables) {
            if (\is_array($this->localVariables)) {
                $res['localVariables'] = [];
                $n1 = 0;
                foreach ($this->localVariables as $item1) {
                    $res['localVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceQueueName) {
            $res['resourceQueueName'] = $this->resourceQueueName;
        }

        if (null !== $this->restoreStrategy) {
            $res['restoreStrategy'] = null !== $this->restoreStrategy ? $this->restoreStrategy->toArray($noStream) : $this->restoreStrategy;
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
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['localVariables'])) {
            if (!empty($map['localVariables'])) {
                $model->localVariables = [];
                $n1 = 0;
                foreach ($map['localVariables'] as $item1) {
                    $model->localVariables[$n1] = LocalVariable::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceQueueName'])) {
            $model->resourceQueueName = $map['resourceQueueName'];
        }

        if (isset($map['restoreStrategy'])) {
            $model->restoreStrategy = DeploymentRestoreStrategy::fromMap($map['restoreStrategy']);
        }

        return $model;
    }
}
