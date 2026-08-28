<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\ListPatrolReportsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListPatrolReportsResponseBody\data\items\scopeConfig;

class items extends Model
{
    /**
     * @var string
     */
    public $completedAt;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $inspectedJobs;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $problemDelayBackpressureCount;

    /**
     * @var int
     */
    public $problemUnhealthyCheckpointCount;

    /**
     * @var int
     */
    public $problemUnhealthyCount;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var int
     */
    public $riskCriticalCount;

    /**
     * @var int
     */
    public $riskInfoCount;

    /**
     * @var int
     */
    public $riskWarningCount;

    /**
     * @var scopeConfig
     */
    public $scopeConfig;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalJobs;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'completedAt' => 'completedAt',
        'createdAt' => 'createdAt',
        'errorMessage' => 'errorMessage',
        'inspectedJobs' => 'inspectedJobs',
        'namespace' => 'namespace',
        'problemDelayBackpressureCount' => 'problemDelayBackpressureCount',
        'problemUnhealthyCheckpointCount' => 'problemUnhealthyCheckpointCount',
        'problemUnhealthyCount' => 'problemUnhealthyCount',
        'reportId' => 'reportId',
        'riskCriticalCount' => 'riskCriticalCount',
        'riskInfoCount' => 'riskInfoCount',
        'riskWarningCount' => 'riskWarningCount',
        'scopeConfig' => 'scopeConfig',
        'scopeType' => 'scopeType',
        'startedAt' => 'startedAt',
        'status' => 'status',
        'totalJobs' => 'totalJobs',
        'triggerType' => 'triggerType',
        'updatedAt' => 'updatedAt',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->scopeConfig) {
            $this->scopeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->inspectedJobs) {
            $res['inspectedJobs'] = $this->inspectedJobs;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->problemDelayBackpressureCount) {
            $res['problemDelayBackpressureCount'] = $this->problemDelayBackpressureCount;
        }

        if (null !== $this->problemUnhealthyCheckpointCount) {
            $res['problemUnhealthyCheckpointCount'] = $this->problemUnhealthyCheckpointCount;
        }

        if (null !== $this->problemUnhealthyCount) {
            $res['problemUnhealthyCount'] = $this->problemUnhealthyCount;
        }

        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }

        if (null !== $this->riskCriticalCount) {
            $res['riskCriticalCount'] = $this->riskCriticalCount;
        }

        if (null !== $this->riskInfoCount) {
            $res['riskInfoCount'] = $this->riskInfoCount;
        }

        if (null !== $this->riskWarningCount) {
            $res['riskWarningCount'] = $this->riskWarningCount;
        }

        if (null !== $this->scopeConfig) {
            $res['scopeConfig'] = null !== $this->scopeConfig ? $this->scopeConfig->toArray($noStream) : $this->scopeConfig;
        }

        if (null !== $this->scopeType) {
            $res['scopeType'] = $this->scopeType;
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->totalJobs) {
            $res['totalJobs'] = $this->totalJobs;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['inspectedJobs'])) {
            $model->inspectedJobs = $map['inspectedJobs'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['problemDelayBackpressureCount'])) {
            $model->problemDelayBackpressureCount = $map['problemDelayBackpressureCount'];
        }

        if (isset($map['problemUnhealthyCheckpointCount'])) {
            $model->problemUnhealthyCheckpointCount = $map['problemUnhealthyCheckpointCount'];
        }

        if (isset($map['problemUnhealthyCount'])) {
            $model->problemUnhealthyCount = $map['problemUnhealthyCount'];
        }

        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        if (isset($map['riskCriticalCount'])) {
            $model->riskCriticalCount = $map['riskCriticalCount'];
        }

        if (isset($map['riskInfoCount'])) {
            $model->riskInfoCount = $map['riskInfoCount'];
        }

        if (isset($map['riskWarningCount'])) {
            $model->riskWarningCount = $map['riskWarningCount'];
        }

        if (isset($map['scopeConfig'])) {
            $model->scopeConfig = scopeConfig::fromMap($map['scopeConfig']);
        }

        if (isset($map['scopeType'])) {
            $model->scopeType = $map['scopeType'];
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['totalJobs'])) {
            $model->totalJobs = $map['totalJobs'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
