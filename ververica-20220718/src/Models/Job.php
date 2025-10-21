<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Job extends Model
{
    /**
     * @var Artifact
     */
    public $artifact;

    /**
     * @var BatchResourceSetting
     */
    public $batchResourceSetting;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $deploymentName;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $executionMode;

    /**
     * @var mixed[]
     */
    public $flinkConf;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var LocalVariable[]
     */
    public $localVariables;

    /**
     * @var Logging
     */
    public $logging;

    /**
     * @var JobMetric
     */
    public $metric;

    /**
     * @var string
     */
    public $modifiedAt;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var DeploymentRestoreStrategy
     */
    public $restoreStrategy;

    /**
     * @var string
     */
    public $sessionClusterName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var JobStatus
     */
    public $status;

    /**
     * @var StreamingResourceSetting
     */
    public $streamingResourceSetting;

    /**
     * @var mixed[]
     */
    public $userFlinkConf;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'artifact' => 'artifact',
        'batchResourceSetting' => 'batchResourceSetting',
        'createdAt' => 'createdAt',
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'deploymentId' => 'deploymentId',
        'deploymentName' => 'deploymentName',
        'endTime' => 'endTime',
        'engineVersion' => 'engineVersion',
        'executionMode' => 'executionMode',
        'flinkConf' => 'flinkConf',
        'jobId' => 'jobId',
        'localVariables' => 'localVariables',
        'logging' => 'logging',
        'metric' => 'metric',
        'modifiedAt' => 'modifiedAt',
        'modifier' => 'modifier',
        'modifierName' => 'modifierName',
        'namespace' => 'namespace',
        'restoreStrategy' => 'restoreStrategy',
        'sessionClusterName' => 'sessionClusterName',
        'startTime' => 'startTime',
        'status' => 'status',
        'streamingResourceSetting' => 'streamingResourceSetting',
        'userFlinkConf' => 'userFlinkConf',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->artifact) {
            $this->artifact->validate();
        }
        if (null !== $this->batchResourceSetting) {
            $this->batchResourceSetting->validate();
        }
        if (\is_array($this->flinkConf)) {
            Model::validateArray($this->flinkConf);
        }
        if (\is_array($this->localVariables)) {
            Model::validateArray($this->localVariables);
        }
        if (null !== $this->logging) {
            $this->logging->validate();
        }
        if (null !== $this->metric) {
            $this->metric->validate();
        }
        if (null !== $this->restoreStrategy) {
            $this->restoreStrategy->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        if (null !== $this->streamingResourceSetting) {
            $this->streamingResourceSetting->validate();
        }
        if (\is_array($this->userFlinkConf)) {
            Model::validateArray($this->userFlinkConf);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifact) {
            $res['artifact'] = null !== $this->artifact ? $this->artifact->toArray($noStream) : $this->artifact;
        }

        if (null !== $this->batchResourceSetting) {
            $res['batchResourceSetting'] = null !== $this->batchResourceSetting ? $this->batchResourceSetting->toArray($noStream) : $this->batchResourceSetting;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }

        if (null !== $this->deploymentName) {
            $res['deploymentName'] = $this->deploymentName;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->engineVersion) {
            $res['engineVersion'] = $this->engineVersion;
        }

        if (null !== $this->executionMode) {
            $res['executionMode'] = $this->executionMode;
        }

        if (null !== $this->flinkConf) {
            if (\is_array($this->flinkConf)) {
                $res['flinkConf'] = [];
                foreach ($this->flinkConf as $key1 => $value1) {
                    $res['flinkConf'][$key1] = $value1;
                }
            }
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

        if (null !== $this->logging) {
            $res['logging'] = null !== $this->logging ? $this->logging->toArray($noStream) : $this->logging;
        }

        if (null !== $this->metric) {
            $res['metric'] = null !== $this->metric ? $this->metric->toArray($noStream) : $this->metric;
        }

        if (null !== $this->modifiedAt) {
            $res['modifiedAt'] = $this->modifiedAt;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->restoreStrategy) {
            $res['restoreStrategy'] = null !== $this->restoreStrategy ? $this->restoreStrategy->toArray($noStream) : $this->restoreStrategy;
        }

        if (null !== $this->sessionClusterName) {
            $res['sessionClusterName'] = $this->sessionClusterName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->streamingResourceSetting) {
            $res['streamingResourceSetting'] = null !== $this->streamingResourceSetting ? $this->streamingResourceSetting->toArray($noStream) : $this->streamingResourceSetting;
        }

        if (null !== $this->userFlinkConf) {
            if (\is_array($this->userFlinkConf)) {
                $res['userFlinkConf'] = [];
                foreach ($this->userFlinkConf as $key1 => $value1) {
                    $res['userFlinkConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['artifact'])) {
            $model->artifact = Artifact::fromMap($map['artifact']);
        }

        if (isset($map['batchResourceSetting'])) {
            $model->batchResourceSetting = BatchResourceSetting::fromMap($map['batchResourceSetting']);
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }

        if (isset($map['deploymentName'])) {
            $model->deploymentName = $map['deploymentName'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['engineVersion'])) {
            $model->engineVersion = $map['engineVersion'];
        }

        if (isset($map['executionMode'])) {
            $model->executionMode = $map['executionMode'];
        }

        if (isset($map['flinkConf'])) {
            if (!empty($map['flinkConf'])) {
                $model->flinkConf = [];
                foreach ($map['flinkConf'] as $key1 => $value1) {
                    $model->flinkConf[$key1] = $value1;
                }
            }
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

        if (isset($map['logging'])) {
            $model->logging = Logging::fromMap($map['logging']);
        }

        if (isset($map['metric'])) {
            $model->metric = JobMetric::fromMap($map['metric']);
        }

        if (isset($map['modifiedAt'])) {
            $model->modifiedAt = $map['modifiedAt'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['restoreStrategy'])) {
            $model->restoreStrategy = DeploymentRestoreStrategy::fromMap($map['restoreStrategy']);
        }

        if (isset($map['sessionClusterName'])) {
            $model->sessionClusterName = $map['sessionClusterName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = JobStatus::fromMap($map['status']);
        }

        if (isset($map['streamingResourceSetting'])) {
            $model->streamingResourceSetting = StreamingResourceSetting::fromMap($map['streamingResourceSetting']);
        }

        if (isset($map['userFlinkConf'])) {
            if (!empty($map['userFlinkConf'])) {
                $model->userFlinkConf = [];
                foreach ($map['userFlinkConf'] as $key1 => $value1) {
                    $model->userFlinkConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
