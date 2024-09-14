<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
     * @example default-queue
     *
     * @var string
     */
    public $resourceQueueName;

    /**
     * @var DeploymentRestoreStrategy
     */
    public $restoreStrategy;
    protected $_name = [
        'deploymentId'      => 'deploymentId',
        'jobId'             => 'jobId',
        'localVariables'    => 'localVariables',
        'resourceQueueName' => 'resourceQueueName',
        'restoreStrategy'   => 'restoreStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->localVariables) {
            $res['localVariables'] = [];
            if (null !== $this->localVariables && \is_array($this->localVariables)) {
                $n = 0;
                foreach ($this->localVariables as $item) {
                    $res['localVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceQueueName) {
            $res['resourceQueueName'] = $this->resourceQueueName;
        }
        if (null !== $this->restoreStrategy) {
            $res['restoreStrategy'] = null !== $this->restoreStrategy ? $this->restoreStrategy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobStartParameters
     */
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
                $n                     = 0;
                foreach ($map['localVariables'] as $item) {
                    $model->localVariables[$n++] = null !== $item ? LocalVariable::fromMap($item) : $item;
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
