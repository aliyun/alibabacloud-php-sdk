<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarStrategyTasksResponseBody;

use AlibabaCloud\Tea\Model;

class soarStrategyTasks extends Model
{
    /**
     * @description The number of execution failures.
     *
     * @example 20
     *
     * @var int
     */
    public $failedNum;

    /**
     * @description The timestamp when the policy task was created. Unit: milliseconds.
     *
     * @example 1708481235000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The timestamp when the policy task was complete. Unit: milliseconds.
     *
     * @example 1586739841000
     *
     * @var int
     */
    public $gmtFinish;

    /**
     * @description The timestamp when the policy task was modified. Unit: milliseconds.
     *
     * @example 1669869436000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the policy task.
     *
     * @example 5374
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the policy task.
     *
     * @example strategy_name01
     *
     * @var string
     */
    public $name;

    /**
     * @description The execution mode. Valid values:
     *
     *   runmode_TRIGGER_BY_USER: manually executed
     *
     * @example runmode_TRIGGER_BY_USER
     *
     * @var string
     */
    public $runMode;

    /**
     * @description The status of the policy task. Valid values:
     *
     *   \\-1: waiting
     *   0: starting
     *   1: running
     *   2: finished
     *   3: schedule
     *   4: pause
     *
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the policy.
     *
     * @example 8000
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The number of successful executions.
     *
     * @example 20
     *
     * @var int
     */
    public $successNum;

    /**
     * @description The total number of executions.
     *
     * @example 20
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'failedNum'   => 'FailedNum',
        'gmtCreate'   => 'GmtCreate',
        'gmtFinish'   => 'GmtFinish',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'name'        => 'Name',
        'runMode'     => 'RunMode',
        'status'      => 'Status',
        'strategyId'  => 'StrategyId',
        'successNum'  => 'SuccessNum',
        'totalNum'    => 'TotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedNum) {
            $res['FailedNum'] = $this->failedNum;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtFinish) {
            $res['GmtFinish'] = $this->gmtFinish;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->successNum) {
            $res['SuccessNum'] = $this->successNum;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return soarStrategyTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedNum'])) {
            $model->failedNum = $map['FailedNum'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtFinish'])) {
            $model->gmtFinish = $map['GmtFinish'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['SuccessNum'])) {
            $model->successNum = $map['SuccessNum'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
