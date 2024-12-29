<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListApsOptimizationTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $computeUnit;

    /**
     * @example 2022-01-23T02:18Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example amv-*******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2022-09-30T00:15Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example StrategyValue
     *
     * @var string
     */
    public $strategyType;

    /**
     * @example test
     *
     * @var string
     */
    public $taskDesc;

    /**
     * @example 1000
     *
     * @var int
     */
    public $taskDuration;

    /**
     * @example sj-hz******
     *
     * @var string
     */
    public $taskId;

    /**
     * @example -
     *
     * @var string
     */
    public $taskMessage;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'computeUnit'  => 'ComputeUnit',
        'createdTime'  => 'CreatedTime',
        'DBClusterId'  => 'DBClusterId',
        'modifiedTime' => 'ModifiedTime',
        'strategyType' => 'StrategyType',
        'taskDesc'     => 'TaskDesc',
        'taskDuration' => 'TaskDuration',
        'taskId'       => 'TaskId',
        'taskMessage'  => 'TaskMessage',
        'taskStatus'   => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeUnit) {
            $res['ComputeUnit'] = $this->computeUnit;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }
        if (null !== $this->taskDesc) {
            $res['TaskDesc'] = $this->taskDesc;
        }
        if (null !== $this->taskDuration) {
            $res['TaskDuration'] = $this->taskDuration;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskMessage) {
            $res['TaskMessage'] = $this->taskMessage;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeUnit'])) {
            $model->computeUnit = $map['ComputeUnit'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }
        if (isset($map['TaskDesc'])) {
            $model->taskDesc = $map['TaskDesc'];
        }
        if (isset($map['TaskDuration'])) {
            $model->taskDuration = $map['TaskDuration'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskMessage'])) {
            $model->taskMessage = $map['TaskMessage'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
