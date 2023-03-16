<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data;

use AlibabaCloud\Tea\Model;

class runs extends Model
{
    /**
     * @description The timestamp obtained by adding the predicted time when the instance started to run to the historical average running duration of the instance.
     *
     * @example 1553531402000
     *
     * @var int
     */
    public $absTime;

    /**
     * @description The timestamp of the predicted time when the instance started to run.
     *
     * @example 1553531686000
     *
     * @var int
     */
    public $beginCast;

    /**
     * @description The timestamp of the actual time when the instance started to run.
     *
     * @example 1553531401000
     *
     * @var int
     */
    public $beginRunningTime;

    /**
     * @description The timestamp when the instance started to wait for resources.
     *
     * @example 1553531401000
     *
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @description The timestamp when the instance started to wait for the scheduling time.
     *
     * @example 1553531400000
     *
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @description The timestamp of the predicted time when the instance finished running.
     *
     * @example 1553531687000
     *
     * @var int
     */
    public $endCast;

    /**
     * @description The timestamp of the actual time when the instance finished running.
     *
     * @example 1553531401000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The status of the instance. Valid values: NOT_RUN, WAIT_TIME, WAIT_RESOURCE, RUNNING, CHECKING, CHECKING_CONDITION, FAILURE, and SUCCESS. The value NOT_RUN indicates that the instance is not run. The value WAIT_TIME indicates that the instance is waiting to be run. The value WAIT_RESOURCE indicates that the instance is waiting for resources. The value RUNNING indicates that the instance is running. The value CHECKING indicates that data quality is being checked for the instance. The value CHECKING_CONDITION indicates that branch conditions are being checked for the instance. The value FAILURE indicates that the instance fails to run. The value SUCCESS indicates that the instance is run.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'absTime'           => 'AbsTime',
        'beginCast'         => 'BeginCast',
        'beginRunningTime'  => 'BeginRunningTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'endCast'           => 'EndCast',
        'finishTime'        => 'FinishTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->absTime) {
            $res['AbsTime'] = $this->absTime;
        }
        if (null !== $this->beginCast) {
            $res['BeginCast'] = $this->beginCast;
        }
        if (null !== $this->beginRunningTime) {
            $res['BeginRunningTime'] = $this->beginRunningTime;
        }
        if (null !== $this->beginWaitResTime) {
            $res['BeginWaitResTime'] = $this->beginWaitResTime;
        }
        if (null !== $this->beginWaitTimeTime) {
            $res['BeginWaitTimeTime'] = $this->beginWaitTimeTime;
        }
        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbsTime'])) {
            $model->absTime = $map['AbsTime'];
        }
        if (isset($map['BeginCast'])) {
            $model->beginCast = $map['BeginCast'];
        }
        if (isset($map['BeginRunningTime'])) {
            $model->beginRunningTime = $map['BeginRunningTime'];
        }
        if (isset($map['BeginWaitResTime'])) {
            $model->beginWaitResTime = $map['BeginWaitResTime'];
        }
        if (isset($map['BeginWaitTimeTime'])) {
            $model->beginWaitTimeTime = $map['BeginWaitTimeTime'];
        }
        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
