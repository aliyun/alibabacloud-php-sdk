<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools;
use AlibabaCloud\Tea\Model;

class DescribeGtmRecoveryPlanResponseBody extends Model
{
    /**
     * @description The time when the disaster recovery plan was created.
     *
     * @example 2019-08-11T05:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1565499867000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The number of faulty address pools.
     *
     * @example 2
     *
     * @var int
     */
    public $faultAddrPoolNum;

    /**
     * @description The list of faulty address pools.
     *
     * @var faultAddrPools
     */
    public $faultAddrPools;

    /**
     * @description The last time when the recovery plan was executed.
     *
     * @example 2019-08-11T05:04Z
     *
     * @var string
     */
    public $lastExecuteTime;

    /**
     * @description A timestamp that indicates the last time when the recovery plan was executed.
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
     * @description A timestamp that indicates the last time when the disaster recovery plan was rolled back.
     *
     * @example 1565505919000
     *
     * @var int
     */
    public $lastRollbackTimestamp;

    /**
     * @description The name of the disaster recovery plan queried.
     *
     * @example name-example
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the disaster recovery plan queried.
     *
     * @example 55
     *
     * @var int
     */
    public $recoveryPlanId;

    /**
     * @description The remarks on the disaster recovery plan.
     *
     * @example remark-example
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the request.
     *
     * @example 0A5F4315-D6E8-435E-82DF-24F4C97D6999
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the disaster recovery plan queried.
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
     * @description A timestamp that indicates the last time when the disaster recovery plan was updated.
     *
     * @example 1565499867000
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'createTimestamp'       => 'CreateTimestamp',
        'faultAddrPoolNum'      => 'FaultAddrPoolNum',
        'faultAddrPools'        => 'FaultAddrPools',
        'lastExecuteTime'       => 'LastExecuteTime',
        'lastExecuteTimestamp'  => 'LastExecuteTimestamp',
        'lastRollbackTime'      => 'LastRollbackTime',
        'lastRollbackTimestamp' => 'LastRollbackTimestamp',
        'name'                  => 'Name',
        'recoveryPlanId'        => 'RecoveryPlanId',
        'remark'                => 'Remark',
        'requestId'             => 'RequestId',
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
        if (null !== $this->faultAddrPools) {
            $res['FaultAddrPools'] = null !== $this->faultAddrPools ? $this->faultAddrPools->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeGtmRecoveryPlanResponseBody
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
