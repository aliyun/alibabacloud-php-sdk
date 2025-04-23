<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools;

class DescribeGtmRecoveryPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var int
     */
    public $faultAddrPoolNum;

    /**
     * @var faultAddrPools
     */
    public $faultAddrPools;

    /**
     * @var string
     */
    public $lastExecuteTime;

    /**
     * @var int
     */
    public $lastExecuteTimestamp;

    /**
     * @var string
     */
    public $lastRollbackTime;

    /**
     * @var int
     */
    public $lastRollbackTimestamp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $recoveryPlanId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'faultAddrPoolNum' => 'FaultAddrPoolNum',
        'faultAddrPools' => 'FaultAddrPools',
        'lastExecuteTime' => 'LastExecuteTime',
        'lastExecuteTimestamp' => 'LastExecuteTimestamp',
        'lastRollbackTime' => 'LastRollbackTime',
        'lastRollbackTimestamp' => 'LastRollbackTimestamp',
        'name' => 'Name',
        'recoveryPlanId' => 'RecoveryPlanId',
        'remark' => 'Remark',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->faultAddrPools) {
            $this->faultAddrPools->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->faultAddrPools) {
            $res['FaultAddrPools'] = null !== $this->faultAddrPools ? $this->faultAddrPools->toArray($noStream) : $this->faultAddrPools;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['FaultAddrPools'])) {
            $model->faultAddrPools = faultAddrPools::fromMap($map['FaultAddrPools']);
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
