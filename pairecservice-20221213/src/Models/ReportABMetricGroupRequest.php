<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class ReportABMetricGroupRequest extends Model
{
    /**
     * @var string
     */
    public $baseExperimentId;

    /**
     * @var string
     */
    public $dimensionFields;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $experimentGroupId;

    /**
     * @var string
     */
    public $experimentIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $reportType;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $timeStatisticsMethod;
    protected $_name = [
        'baseExperimentId' => 'BaseExperimentId',
        'dimensionFields' => 'DimensionFields',
        'endDate' => 'EndDate',
        'experimentGroupId' => 'ExperimentGroupId',
        'experimentIds' => 'ExperimentIds',
        'instanceId' => 'InstanceId',
        'reportType' => 'ReportType',
        'sceneId' => 'SceneId',
        'startDate' => 'StartDate',
        'timeStatisticsMethod' => 'TimeStatisticsMethod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseExperimentId) {
            $res['BaseExperimentId'] = $this->baseExperimentId;
        }

        if (null !== $this->dimensionFields) {
            $res['DimensionFields'] = $this->dimensionFields;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->experimentGroupId) {
            $res['ExperimentGroupId'] = $this->experimentGroupId;
        }

        if (null !== $this->experimentIds) {
            $res['ExperimentIds'] = $this->experimentIds;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->timeStatisticsMethod) {
            $res['TimeStatisticsMethod'] = $this->timeStatisticsMethod;
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
        if (isset($map['BaseExperimentId'])) {
            $model->baseExperimentId = $map['BaseExperimentId'];
        }

        if (isset($map['DimensionFields'])) {
            $model->dimensionFields = $map['DimensionFields'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ExperimentGroupId'])) {
            $model->experimentGroupId = $map['ExperimentGroupId'];
        }

        if (isset($map['ExperimentIds'])) {
            $model->experimentIds = $map['ExperimentIds'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['TimeStatisticsMethod'])) {
            $model->timeStatisticsMethod = $map['TimeStatisticsMethod'];
        }

        return $model;
    }
}
