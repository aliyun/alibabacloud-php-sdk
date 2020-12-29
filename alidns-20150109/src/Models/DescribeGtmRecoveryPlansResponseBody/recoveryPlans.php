<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponseBody;

use AlibabaCloud\Tea\Model;

class recoveryPlans extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $lastRollbackTimestamp;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $recoveryPlanId;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var int
     */
    public $lastExecuteTimestamp;

    /**
     * @var string
     */
    public $lastExecuteTime;

    /**
     * @var string
     */
    public $lastRollbackTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $faultAddrPoolNum;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'status'                => 'Status',
        'lastRollbackTimestamp' => 'LastRollbackTimestamp',
        'updateTime'            => 'UpdateTime',
        'remark'                => 'Remark',
        'createTime'            => 'CreateTime',
        'recoveryPlanId'        => 'RecoveryPlanId',
        'updateTimestamp'       => 'UpdateTimestamp',
        'lastExecuteTimestamp'  => 'LastExecuteTimestamp',
        'lastExecuteTime'       => 'LastExecuteTime',
        'lastRollbackTime'      => 'LastRollbackTime',
        'name'                  => 'Name',
        'faultAddrPoolNum'      => 'FaultAddrPoolNum',
        'createTimestamp'       => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->lastRollbackTimestamp) {
            $res['LastRollbackTimestamp'] = $this->lastRollbackTimestamp;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->lastExecuteTimestamp) {
            $res['LastExecuteTimestamp'] = $this->lastExecuteTimestamp;
        }
        if (null !== $this->lastExecuteTime) {
            $res['LastExecuteTime'] = $this->lastExecuteTime;
        }
        if (null !== $this->lastRollbackTime) {
            $res['LastRollbackTime'] = $this->lastRollbackTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->faultAddrPoolNum) {
            $res['FaultAddrPoolNum'] = $this->faultAddrPoolNum;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recoveryPlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LastRollbackTimestamp'])) {
            $model->lastRollbackTimestamp = $map['LastRollbackTimestamp'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['LastExecuteTimestamp'])) {
            $model->lastExecuteTimestamp = $map['LastExecuteTimestamp'];
        }
        if (isset($map['LastExecuteTime'])) {
            $model->lastExecuteTime = $map['LastExecuteTime'];
        }
        if (isset($map['LastRollbackTime'])) {
            $model->lastRollbackTime = $map['LastRollbackTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['FaultAddrPoolNum'])) {
            $model->faultAddrPoolNum = $map['FaultAddrPoolNum'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
