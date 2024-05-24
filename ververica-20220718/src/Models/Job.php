<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
     * @example 27846363877456****
     *
     * @var string
     */
    public $creator;

    /**
     * @example ****@streamcompute.onaliyun.com
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example 354dde66-a3ae-463e-967a-0b4107fd****
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example flinktest
     *
     * @var string
     */
    public $deploymentName;

    /**
     * @example 1660277235
     *
     * @var int
     */
    public $endTime;

    /**
     * @example vvr-4.0.14-flink-1.13
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example BATCH
     *
     * @var string
     */
    public $executionMode;

    /**
     * @var mixed[]
     */
    public $flinkConf;

    /**
     * @example 354dde66-a3ae-463e-967a-0b4107fd****
     *
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
     * @example 27846363877456****
     *
     * @var string
     */
    public $modifier;

    /**
     * @example ****@streamcompute.onaliyun.com
     *
     * @var string
     */
    public $modifierName;

    /**
     * @example namespacetest
     *
     * @var string
     */
    public $namespace;

    /**
     * @var DeploymentRestoreStrategy
     */
    public $restoreStrategy;

    /**
     * @example preview
     *
     * @var string
     */
    public $sessionClusterName;

    /**
     * @example 1660190835
     *
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
     * @example edcef******b4f
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'artifact'                 => 'artifact',
        'batchResourceSetting'     => 'batchResourceSetting',
        'createdAt'                => 'createdAt',
        'creator'                  => 'creator',
        'creatorName'              => 'creatorName',
        'deploymentId'             => 'deploymentId',
        'deploymentName'           => 'deploymentName',
        'endTime'                  => 'endTime',
        'engineVersion'            => 'engineVersion',
        'executionMode'            => 'executionMode',
        'flinkConf'                => 'flinkConf',
        'jobId'                    => 'jobId',
        'localVariables'           => 'localVariables',
        'logging'                  => 'logging',
        'metric'                   => 'metric',
        'modifiedAt'               => 'modifiedAt',
        'modifier'                 => 'modifier',
        'modifierName'             => 'modifierName',
        'namespace'                => 'namespace',
        'restoreStrategy'          => 'restoreStrategy',
        'sessionClusterName'       => 'sessionClusterName',
        'startTime'                => 'startTime',
        'status'                   => 'status',
        'streamingResourceSetting' => 'streamingResourceSetting',
        'userFlinkConf'            => 'userFlinkConf',
        'workspace'                => 'workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifact) {
            $res['artifact'] = null !== $this->artifact ? $this->artifact->toMap() : null;
        }
        if (null !== $this->batchResourceSetting) {
            $res['batchResourceSetting'] = null !== $this->batchResourceSetting ? $this->batchResourceSetting->toMap() : null;
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
            $res['flinkConf'] = $this->flinkConf;
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
        if (null !== $this->logging) {
            $res['logging'] = null !== $this->logging ? $this->logging->toMap() : null;
        }
        if (null !== $this->metric) {
            $res['metric'] = null !== $this->metric ? $this->metric->toMap() : null;
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
            $res['restoreStrategy'] = null !== $this->restoreStrategy ? $this->restoreStrategy->toMap() : null;
        }
        if (null !== $this->sessionClusterName) {
            $res['sessionClusterName'] = $this->sessionClusterName;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->streamingResourceSetting) {
            $res['streamingResourceSetting'] = null !== $this->streamingResourceSetting ? $this->streamingResourceSetting->toMap() : null;
        }
        if (null !== $this->userFlinkConf) {
            $res['userFlinkConf'] = $this->userFlinkConf;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Job
     */
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
            $model->flinkConf = $map['flinkConf'];
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
            $model->userFlinkConf = $map['userFlinkConf'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
