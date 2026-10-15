<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class ContentPlan extends Model
{
    /**
     * @var string
     */
    public $additionalRequirements;

    /**
     * @var string
     */
    public $analysisTaskId;

    /**
     * @var int
     */
    public $configRevision;

    /**
     * @var int
     */
    public $diagnosisCompletedAt;

    /**
     * @var string
     */
    public $diagnosisTaskId;

    /**
     * @var string
     */
    public $diagnosisType;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $generationTaskId;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $publishFrequency;

    /**
     * @var int
     */
    public $reportConfigRevision;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $supersededBy;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var int[]
     */
    public $weekdays;
    protected $_name = [
        'additionalRequirements' => 'AdditionalRequirements',
        'analysisTaskId' => 'AnalysisTaskId',
        'configRevision' => 'ConfigRevision',
        'diagnosisCompletedAt' => 'DiagnosisCompletedAt',
        'diagnosisTaskId' => 'DiagnosisTaskId',
        'diagnosisType' => 'DiagnosisType',
        'endDate' => 'EndDate',
        'generationTaskId' => 'GenerationTaskId',
        'planId' => 'PlanId',
        'projectId' => 'ProjectId',
        'publishFrequency' => 'PublishFrequency',
        'reportConfigRevision' => 'ReportConfigRevision',
        'startDate' => 'StartDate',
        'status' => 'Status',
        'summary' => 'Summary',
        'supersededBy' => 'SupersededBy',
        'timezone' => 'Timezone',
        'weekdays' => 'Weekdays',
    ];

    public function validate()
    {
        if (\is_array($this->weekdays)) {
            Model::validateArray($this->weekdays);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalRequirements) {
            $res['AdditionalRequirements'] = $this->additionalRequirements;
        }

        if (null !== $this->analysisTaskId) {
            $res['AnalysisTaskId'] = $this->analysisTaskId;
        }

        if (null !== $this->configRevision) {
            $res['ConfigRevision'] = $this->configRevision;
        }

        if (null !== $this->diagnosisCompletedAt) {
            $res['DiagnosisCompletedAt'] = $this->diagnosisCompletedAt;
        }

        if (null !== $this->diagnosisTaskId) {
            $res['DiagnosisTaskId'] = $this->diagnosisTaskId;
        }

        if (null !== $this->diagnosisType) {
            $res['DiagnosisType'] = $this->diagnosisType;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->generationTaskId) {
            $res['GenerationTaskId'] = $this->generationTaskId;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->publishFrequency) {
            $res['PublishFrequency'] = $this->publishFrequency;
        }

        if (null !== $this->reportConfigRevision) {
            $res['ReportConfigRevision'] = $this->reportConfigRevision;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->supersededBy) {
            $res['SupersededBy'] = $this->supersededBy;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        if (null !== $this->weekdays) {
            if (\is_array($this->weekdays)) {
                $res['Weekdays'] = [];
                $n1 = 0;
                foreach ($this->weekdays as $item1) {
                    $res['Weekdays'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AdditionalRequirements'])) {
            $model->additionalRequirements = $map['AdditionalRequirements'];
        }

        if (isset($map['AnalysisTaskId'])) {
            $model->analysisTaskId = $map['AnalysisTaskId'];
        }

        if (isset($map['ConfigRevision'])) {
            $model->configRevision = $map['ConfigRevision'];
        }

        if (isset($map['DiagnosisCompletedAt'])) {
            $model->diagnosisCompletedAt = $map['DiagnosisCompletedAt'];
        }

        if (isset($map['DiagnosisTaskId'])) {
            $model->diagnosisTaskId = $map['DiagnosisTaskId'];
        }

        if (isset($map['DiagnosisType'])) {
            $model->diagnosisType = $map['DiagnosisType'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['GenerationTaskId'])) {
            $model->generationTaskId = $map['GenerationTaskId'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['PublishFrequency'])) {
            $model->publishFrequency = $map['PublishFrequency'];
        }

        if (isset($map['ReportConfigRevision'])) {
            $model->reportConfigRevision = $map['ReportConfigRevision'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['SupersededBy'])) {
            $model->supersededBy = $map['SupersededBy'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        if (isset($map['Weekdays'])) {
            if (!empty($map['Weekdays'])) {
                $model->weekdays = [];
                $n1 = 0;
                foreach ($map['Weekdays'] as $item1) {
                    $model->weekdays[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
