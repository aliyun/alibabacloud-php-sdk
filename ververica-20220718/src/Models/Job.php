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
    protected $_name = [
        'artifact'                 => 'artifact',
        'batchResourceSetting'     => 'batchResourceSetting',
        'deploymentId'             => 'deploymentId',
        'deploymentName'           => 'deploymentName',
        'endTime'                  => 'endTime',
        'engineVersion'            => 'engineVersion',
        'executionMode'            => 'executionMode',
        'flinkConf'                => 'flinkConf',
        'jobId'                    => 'jobId',
        'logging'                  => 'logging',
        'metric'                   => 'metric',
        'namespace'                => 'namespace',
        'restoreStrategy'          => 'restoreStrategy',
        'sessionClusterName'       => 'sessionClusterName',
        'startTime'                => 'startTime',
        'status'                   => 'status',
        'streamingResourceSetting' => 'streamingResourceSetting',
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
        if (null !== $this->logging) {
            $res['logging'] = null !== $this->logging ? $this->logging->toMap() : null;
        }
        if (null !== $this->metric) {
            $res['metric'] = null !== $this->metric ? $this->metric->toMap() : null;
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
        if (isset($map['logging'])) {
            $model->logging = Logging::fromMap($map['logging']);
        }
        if (isset($map['metric'])) {
            $model->metric = JobMetric::fromMap($map['metric']);
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

        return $model;
    }
}
