<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody\deployments\config;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody\deployments\outputs;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody\deployments\parameters;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody\deployments\planOutputs;

class deployments extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $configVersion;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deploymentName;

    /**
     * @var string
     */
    public $deploymentNo;

    /**
     * @var string
     */
    public $deploymentVersion;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var string
     */
    public $executeType;

    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var outputs[]
     */
    public $outputs;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var planOutputs[]
     */
    public $planOutputs;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'config' => 'config',
        'configVersion' => 'configVersion',
        'createTime' => 'createTime',
        'deploymentName' => 'deploymentName',
        'deploymentNo' => 'deploymentNo',
        'deploymentVersion' => 'deploymentVersion',
        'elapsedTime' => 'elapsedTime',
        'executeType' => 'executeType',
        'failedReason' => 'failedReason',
        'jobId' => 'jobId',
        'outputs' => 'outputs',
        'parameters' => 'parameters',
        'planOutputs' => 'planOutputs',
        'status' => 'status',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->planOutputs)) {
            Model::validateArray($this->planOutputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->configVersion) {
            $res['configVersion'] = $this->configVersion;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->deploymentName) {
            $res['deploymentName'] = $this->deploymentName;
        }

        if (null !== $this->deploymentNo) {
            $res['deploymentNo'] = $this->deploymentNo;
        }

        if (null !== $this->deploymentVersion) {
            $res['deploymentVersion'] = $this->deploymentVersion;
        }

        if (null !== $this->elapsedTime) {
            $res['elapsedTime'] = $this->elapsedTime;
        }

        if (null !== $this->executeType) {
            $res['executeType'] = $this->executeType;
        }

        if (null !== $this->failedReason) {
            $res['failedReason'] = $this->failedReason;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['outputs'] = [];
                $n1 = 0;
                foreach ($this->outputs as $item1) {
                    $res['outputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['parameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->planOutputs) {
            if (\is_array($this->planOutputs)) {
                $res['planOutputs'] = [];
                $n1 = 0;
                foreach ($this->planOutputs as $item1) {
                    $res['planOutputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['configVersion'])) {
            $model->configVersion = $map['configVersion'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['deploymentName'])) {
            $model->deploymentName = $map['deploymentName'];
        }

        if (isset($map['deploymentNo'])) {
            $model->deploymentNo = $map['deploymentNo'];
        }

        if (isset($map['deploymentVersion'])) {
            $model->deploymentVersion = $map['deploymentVersion'];
        }

        if (isset($map['elapsedTime'])) {
            $model->elapsedTime = $map['elapsedTime'];
        }

        if (isset($map['executeType'])) {
            $model->executeType = $map['executeType'];
        }

        if (isset($map['failedReason'])) {
            $model->failedReason = $map['failedReason'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['outputs'])) {
            if (!empty($map['outputs'])) {
                $model->outputs = [];
                $n1 = 0;
                foreach ($map['outputs'] as $item1) {
                    $model->outputs[$n1] = outputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['parameters'] as $item1) {
                    $model->parameters[$n1] = parameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['planOutputs'])) {
            if (!empty($map['planOutputs'])) {
                $model->planOutputs = [];
                $n1 = 0;
                foreach ($map['planOutputs'] as $item1) {
                    $model->planOutputs[$n1] = planOutputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
