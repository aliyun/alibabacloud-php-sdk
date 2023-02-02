<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data\steps\extraInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data\steps\stepInfo;
use AlibabaCloud\Tea\Model;

class steps extends Model
{
    /**
     * @description The estimated time remained.
     *
     * @example 100
     *
     * @var int
     */
    public $estimatedRemainingSeconds;

    /**
     * @description The additional information. The value is a JSON string.
     *
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @description The end time, in the format of "2020-05-22T17:04:18".
     *
     * @example 2020-05-22T17:04:18
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description Indicates whether the current step must be confirmed by the user, rather than scheduled in the backend.
     *
     * @example true
     *
     * @var bool
     */
    public $interactive;

    /**
     * @description The start time, in the format of "2020-05-22T17:04:18".
     *
     * @example 2020-05-22T17:04:18
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The description of the step, for example, schema migration, full migration, full verification, incremental log pull, incremental synchronization, or incremental verification.
     *
     * @example Schema migration
     *
     * @var string
     */
    public $stepDescription;

    /**
     * @description The step details. The value is a JSON string.
     *
     * @var stepInfo
     */
    public $stepInfo;

    /**
     * @description The step name. Valid values: struct_migration, full_migration, full_validation, incr_log_pull, incr_sync/incr_validation, PRE_CHECK, PREPARE, STRUCT_MIGRATION, INDEX_MIGRATION, STRUCT_SYNC, FULL_MIGRATION, APP_SWITCH, REVERSE_INCR_SYNC, FULL_VALIDATION, INCR_LOG_PULL, INCR_SYNC, INCR_VALIDATION, SYNC_PREPARE, SYNC_INCR_LOG_PULL, CONNECTOR_FULL_SYNC, or CONNECTOR_INCR_SYNC.
     *
     * @example structmigration
     *
     * @var string
     */
    public $stepName;

    /**
     * @description The sequence of steps.
     *
     * @example 1
     *
     * @var int
     */
    public $stepOrder;

    /**
     * @description The step progress.
     *
     * @example 10
     *
     * @var int
     */
    public $stepProgress;

    /**
     * @description The step status. Valid values: INIT, RUNNING, FAILED, FINISHED, SUSPEND, and MONITORING. The value MONITORING indicates the continuous monitoring of incremental synchronization and incremental verification.
     *
     * @example INT
     *
     * @var string
     */
    public $stepStatus;
    protected $_name = [
        'estimatedRemainingSeconds' => 'EstimatedRemainingSeconds',
        'extraInfo'                 => 'ExtraInfo',
        'finishTime'                => 'FinishTime',
        'interactive'               => 'Interactive',
        'startTime'                 => 'StartTime',
        'stepDescription'           => 'StepDescription',
        'stepInfo'                  => 'StepInfo',
        'stepName'                  => 'StepName',
        'stepOrder'                 => 'StepOrder',
        'stepProgress'              => 'StepProgress',
        'stepStatus'                => 'StepStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->estimatedRemainingSeconds) {
            $res['EstimatedRemainingSeconds'] = $this->estimatedRemainingSeconds;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toMap() : null;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->interactive) {
            $res['Interactive'] = $this->interactive;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stepDescription) {
            $res['StepDescription'] = $this->stepDescription;
        }
        if (null !== $this->stepInfo) {
            $res['StepInfo'] = null !== $this->stepInfo ? $this->stepInfo->toMap() : null;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->stepOrder) {
            $res['StepOrder'] = $this->stepOrder;
        }
        if (null !== $this->stepProgress) {
            $res['StepProgress'] = $this->stepProgress;
        }
        if (null !== $this->stepStatus) {
            $res['StepStatus'] = $this->stepStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return steps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EstimatedRemainingSeconds'])) {
            $model->estimatedRemainingSeconds = $map['EstimatedRemainingSeconds'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Interactive'])) {
            $model->interactive = $map['Interactive'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StepDescription'])) {
            $model->stepDescription = $map['StepDescription'];
        }
        if (isset($map['StepInfo'])) {
            $model->stepInfo = stepInfo::fromMap($map['StepInfo']);
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['StepOrder'])) {
            $model->stepOrder = $map['StepOrder'];
        }
        if (isset($map['StepProgress'])) {
            $model->stepProgress = $map['StepProgress'];
        }
        if (isset($map['StepStatus'])) {
            $model->stepStatus = $map['StepStatus'];
        }

        return $model;
    }
}
