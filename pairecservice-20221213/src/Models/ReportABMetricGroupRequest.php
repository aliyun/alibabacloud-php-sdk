<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class ReportABMetricGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $baseExperimentId;

    /**
     * @example {"gender":"man"}
     *
     * @var string
     */
    public $dimensionFields;

    /**
     * @example 2021-07-01
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 3
     *
     * @var string
     */
    public $experimentGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 3,4,5
     *
     * @var string
     */
    public $experimentIds;

    /**
     * @description This parameter is required.
     *
     * @example pairec-cn-test1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example Offline
     *
     * @var string
     */
    public $reportType;

    /**
     * @example 1
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example 2021-07-01
     *
     * @var string
     */
    public $startDate;

    /**
     * @example Hour
     *
     * @var string
     */
    public $timeStatisticsMethod;
    protected $_name = [
        'baseExperimentId'     => 'BaseExperimentId',
        'dimensionFields'      => 'DimensionFields',
        'endDate'              => 'EndDate',
        'experimentGroupId'    => 'ExperimentGroupId',
        'experimentIds'        => 'ExperimentIds',
        'instanceId'           => 'InstanceId',
        'reportType'           => 'ReportType',
        'sceneId'              => 'SceneId',
        'startDate'            => 'StartDate',
        'timeStatisticsMethod' => 'TimeStatisticsMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ReportABMetricGroupRequest
     */
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
