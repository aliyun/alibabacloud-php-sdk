<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingHistoryResponseBody\data;

use AlibabaCloud\Tea\Model;

class specHistory extends Model
{
    /**
     * @description The error code returned by the scaling task. Valid values:
     *
     *   **Insufficient_Balance**: The account has insufficient balance or an unpaid order.
     *   **REACH_SPEC_UPPERBOUND**: The instance type reaches the upper limit.
     *   **Control_Error_Timeout_Msg**: The management task timed out.
     *   **Invoke_Rds_Api_Error_Msg**: Failed to call the ApsaraDB RDS API.
     *
     * @example Insufficient_Balance
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The original number of CPU cores of the instance.
     *
     * @example 4
     *
     * @var int
     */
    public $originCore;

    /**
     * @description The original instance type.
     *
     * @example mysql.n2.large.2c
     *
     * @var string
     */
    public $originInstanceClass;

    /**
     * @description The original memory size of the instance. Unit: GB.
     *
     * @example 8
     *
     * @var float
     */
    public $originMemory;

    /**
     * @description The type of the automatic performance scaling task. Valid values:
     *
     *   **SCALE_UP**: automatic instance type scale-up task.
     *   **SCALE_DOWN**: automatic instance type scale-down task.
     *
     * @example SCALE_UP
     *
     * @var string
     */
    public $scaleType;

    /**
     * @description The destination number of CPU cores of the instance.
     *
     * @example 8
     *
     * @var int
     */
    public $targetCore;

    /**
     * @description The destination instance type.
     *
     * @example mysql.n2.xlarge.2c
     *
     * @var string
     */
    public $targetInstanceClass;

    /**
     * @description The destination memory size of the instance. Unit: GB.
     *
     * @example 16
     *
     * @var float
     */
    public $targetMemory;

    /**
     * @description The status of the task. Valid values:
     *
     *   **true**: The task was successful.
     *   **false**: The task failed.
     *
     * @example true
     *
     * @var bool
     */
    public $taskExcuteStatus;

    /**
     * @description The time when the task was run. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1684830763000
     *
     * @var int
     */
    public $taskTime;
    protected $_name = [
        'errorCode'           => 'ErrorCode',
        'originCore'          => 'OriginCore',
        'originInstanceClass' => 'OriginInstanceClass',
        'originMemory'        => 'OriginMemory',
        'scaleType'           => 'ScaleType',
        'targetCore'          => 'TargetCore',
        'targetInstanceClass' => 'TargetInstanceClass',
        'targetMemory'        => 'TargetMemory',
        'taskExcuteStatus'    => 'TaskExcuteStatus',
        'taskTime'            => 'TaskTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->originCore) {
            $res['OriginCore'] = $this->originCore;
        }
        if (null !== $this->originInstanceClass) {
            $res['OriginInstanceClass'] = $this->originInstanceClass;
        }
        if (null !== $this->originMemory) {
            $res['OriginMemory'] = $this->originMemory;
        }
        if (null !== $this->scaleType) {
            $res['ScaleType'] = $this->scaleType;
        }
        if (null !== $this->targetCore) {
            $res['TargetCore'] = $this->targetCore;
        }
        if (null !== $this->targetInstanceClass) {
            $res['TargetInstanceClass'] = $this->targetInstanceClass;
        }
        if (null !== $this->targetMemory) {
            $res['TargetMemory'] = $this->targetMemory;
        }
        if (null !== $this->taskExcuteStatus) {
            $res['TaskExcuteStatus'] = $this->taskExcuteStatus;
        }
        if (null !== $this->taskTime) {
            $res['TaskTime'] = $this->taskTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['OriginCore'])) {
            $model->originCore = $map['OriginCore'];
        }
        if (isset($map['OriginInstanceClass'])) {
            $model->originInstanceClass = $map['OriginInstanceClass'];
        }
        if (isset($map['OriginMemory'])) {
            $model->originMemory = $map['OriginMemory'];
        }
        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }
        if (isset($map['TargetCore'])) {
            $model->targetCore = $map['TargetCore'];
        }
        if (isset($map['TargetInstanceClass'])) {
            $model->targetInstanceClass = $map['TargetInstanceClass'];
        }
        if (isset($map['TargetMemory'])) {
            $model->targetMemory = $map['TargetMemory'];
        }
        if (isset($map['TaskExcuteStatus'])) {
            $model->taskExcuteStatus = $map['TaskExcuteStatus'];
        }
        if (isset($map['TaskTime'])) {
            $model->taskTime = $map['TaskTime'];
        }

        return $model;
    }
}
