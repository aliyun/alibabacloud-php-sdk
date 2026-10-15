<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ContentPlanGenerationTask\analysis;

class ContentPlanGenerationTask extends Model
{
    /**
     * @var analysis
     */
    public $analysis;

    /**
     * @var string
     */
    public $analysisTaskId;

    /**
     * @var int
     */
    public $configRevision;

    /**
     * @var string
     */
    public $diagnosisTaskId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $reportConfigRevision;

    /**
     * @var bool
     */
    public $staleConfig;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $submittedAt;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'analysis' => 'Analysis',
        'analysisTaskId' => 'AnalysisTaskId',
        'configRevision' => 'ConfigRevision',
        'diagnosisTaskId' => 'DiagnosisTaskId',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'planId' => 'PlanId',
        'progress' => 'Progress',
        'projectId' => 'ProjectId',
        'reportConfigRevision' => 'ReportConfigRevision',
        'staleConfig' => 'StaleConfig',
        'status' => 'Status',
        'submittedAt' => 'SubmittedAt',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        if (null !== $this->analysis) {
            $this->analysis->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['Analysis'] = null !== $this->analysis ? $this->analysis->toArray($noStream) : $this->analysis;
        }

        if (null !== $this->analysisTaskId) {
            $res['AnalysisTaskId'] = $this->analysisTaskId;
        }

        if (null !== $this->configRevision) {
            $res['ConfigRevision'] = $this->configRevision;
        }

        if (null !== $this->diagnosisTaskId) {
            $res['DiagnosisTaskId'] = $this->diagnosisTaskId;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->reportConfigRevision) {
            $res['ReportConfigRevision'] = $this->reportConfigRevision;
        }

        if (null !== $this->staleConfig) {
            $res['StaleConfig'] = $this->staleConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submittedAt) {
            $res['SubmittedAt'] = $this->submittedAt;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['Analysis'])) {
            $model->analysis = analysis::fromMap($map['Analysis']);
        }

        if (isset($map['AnalysisTaskId'])) {
            $model->analysisTaskId = $map['AnalysisTaskId'];
        }

        if (isset($map['ConfigRevision'])) {
            $model->configRevision = $map['ConfigRevision'];
        }

        if (isset($map['DiagnosisTaskId'])) {
            $model->diagnosisTaskId = $map['DiagnosisTaskId'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ReportConfigRevision'])) {
            $model->reportConfigRevision = $map['ReportConfigRevision'];
        }

        if (isset($map['StaleConfig'])) {
            $model->staleConfig = $map['StaleConfig'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubmittedAt'])) {
            $model->submittedAt = $map['SubmittedAt'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
