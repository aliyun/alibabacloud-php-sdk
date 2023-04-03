<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponseBody\recoveryPlans;

use AlibabaCloud\Tea\Model;

class recoveryPlan extends Model
{
    /**
     * @description The time when the disaster recovery plan was created.
     *
     * @example 2019-08-11T06:45Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The UNIX timestamp that indicates when the disaster recovery plan was created.
     *
     * @example 1565499867000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The number of faulty address pools.
     *
     * @example 0
     *
     * @var int
     */
    public $faultAddrPoolNum;

    /**
     * @description The last time when the disaster recovery plan was executed.
     *
     * @example 2019-08-11T06:44Z
     *
     * @var string
     */
    public $lastExecuteTime;

    /**
     * @description The UNIX timestamp that indicates the last time when the disaster recovery plan was executed.
     *
     * @example 1565505898000
     *
     * @var int
     */
    public $lastExecuteTimestamp;

    /**
     * @description The last time when the disaster recovery plan was rolled back.
     *
     * @example 2019-08-11T06:45Z
     *
     * @var string
     */
    public $lastRollbackTime;

    /**
     * @description The UNIX timestamp that indicates the last time when the disaster recovery plan was rolled back.
     *
     * @example 1565505919000
     *
     * @var int
     */
    public $lastRollbackTimestamp;

    /**
     * @description The name of the disaster recovery plan.
     *
     * @example name-example
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the disaster recovery plan.
     *
     * @example 55
     *
     * @var int
     */
    public $recoveryPlanId;

    /**
     * @description The remarks about the disaster recovery plan.
     *
     * @example remark-example
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the disaster recovery plan. Valid values:
     *
     *   **UNEXECUTED**: The plan is not executed.
     *   **EXECUTED**: The plan is executed.
     *   **ROLLED_BACK**: The plan is rolled back.
     *
     * @example UNEXECUTED
     *
     * @var string
     */
    public $status;

    /**
     * @description The last time when the disaster recovery plan was updated.
     *
     * @example 2019-08-11T06:45Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The UNIX timestamp that indicates the last time when the disaster recovery plan was updated.
     *
     * @example 1565505919000
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'createTimestamp'       => 'CreateTimestamp',
        'faultAddrPoolNum'      => 'FaultAddrPoolNum',
        'lastExecuteTime'       => 'LastExecuteTime',
        'lastExecuteTimestamp'  => 'LastExecuteTimestamp',
        'lastRollbackTime'      => 'LastRollbackTime',
        'lastRollbackTimestamp' => 'LastRollbackTimestamp',
        'name'                  => 'Name',
        'recoveryPlanId'        => 'RecoveryPlanId',
        'remark'                => 'Remark',
        'status'                => 'Status',
        'updateTime'            => 'UpdateTime',
        'updateTimestamp'       => 'UpdateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->faultAddrPoolNum) {
            $res['FaultAddrPoolNum'] = $this->faultAddrPoolNum;
        }
        if (null !== $this->lastExecuteTime) {
            $res['LastExecuteTime'] = $this->lastExecuteTime;
        }
        if (null !== $this->lastExecuteTimestamp) {
            $res['LastExecuteTimestamp'] = $this->lastExecuteTimestamp;
        }
        if (null !== $this->lastRollbackTime) {
            $res['LastRollbackTime'] = $this->lastRollbackTime;
        }
        if (null !== $this->lastRollbackTimestamp) {
            $res['LastRollbackTimestamp'] = $this->lastRollbackTimestamp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recoveryPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['FaultAddrPoolNum'])) {
            $model->faultAddrPoolNum = $map['FaultAddrPoolNum'];
        }
        if (isset($map['LastExecuteTime'])) {
            $model->lastExecuteTime = $map['LastExecuteTime'];
        }
        if (isset($map['LastExecuteTimestamp'])) {
            $model->lastExecuteTimestamp = $map['LastExecuteTimestamp'];
        }
        if (isset($map['LastRollbackTime'])) {
            $model->lastRollbackTime = $map['LastRollbackTime'];
        }
        if (isset($map['LastRollbackTimestamp'])) {
            $model->lastRollbackTimestamp = $map['LastRollbackTimestamp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
