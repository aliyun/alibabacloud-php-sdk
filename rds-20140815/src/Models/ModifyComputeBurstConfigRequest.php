<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyComputeBurstConfigRequest extends Model
{
    /**
     * @var string
     */
    public $burstStatus;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cpuEnlargeThreshold;

    /**
     * @var string
     */
    public $cpuShrinkThreshold;

    /**
     * @var string
     */
    public $crontabJobId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $memoryEnlargeThreshold;

    /**
     * @var string
     */
    public $memoryShrinkThreshold;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $scaleMaxCpus;

    /**
     * @var string
     */
    public $scaleMaxMemory;

    /**
     * @var string
     */
    public $switchTime;

    /**
     * @var string
     */
    public $switchTimeMode;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'burstStatus' => 'BurstStatus',
        'clientToken' => 'ClientToken',
        'cpuEnlargeThreshold' => 'CpuEnlargeThreshold',
        'cpuShrinkThreshold' => 'CpuShrinkThreshold',
        'crontabJobId' => 'CrontabJobId',
        'DBInstanceId' => 'DBInstanceId',
        'memoryEnlargeThreshold' => 'MemoryEnlargeThreshold',
        'memoryShrinkThreshold' => 'MemoryShrinkThreshold',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scaleMaxCpus' => 'ScaleMaxCpus',
        'scaleMaxMemory' => 'ScaleMaxMemory',
        'switchTime' => 'SwitchTime',
        'switchTimeMode' => 'SwitchTimeMode',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->burstStatus) {
            $res['BurstStatus'] = $this->burstStatus;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->cpuEnlargeThreshold) {
            $res['CpuEnlargeThreshold'] = $this->cpuEnlargeThreshold;
        }

        if (null !== $this->cpuShrinkThreshold) {
            $res['CpuShrinkThreshold'] = $this->cpuShrinkThreshold;
        }

        if (null !== $this->crontabJobId) {
            $res['CrontabJobId'] = $this->crontabJobId;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->memoryEnlargeThreshold) {
            $res['MemoryEnlargeThreshold'] = $this->memoryEnlargeThreshold;
        }

        if (null !== $this->memoryShrinkThreshold) {
            $res['MemoryShrinkThreshold'] = $this->memoryShrinkThreshold;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->scaleMaxCpus) {
            $res['ScaleMaxCpus'] = $this->scaleMaxCpus;
        }

        if (null !== $this->scaleMaxMemory) {
            $res['ScaleMaxMemory'] = $this->scaleMaxMemory;
        }

        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['BurstStatus'])) {
            $model->burstStatus = $map['BurstStatus'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CpuEnlargeThreshold'])) {
            $model->cpuEnlargeThreshold = $map['CpuEnlargeThreshold'];
        }

        if (isset($map['CpuShrinkThreshold'])) {
            $model->cpuShrinkThreshold = $map['CpuShrinkThreshold'];
        }

        if (isset($map['CrontabJobId'])) {
            $model->crontabJobId = $map['CrontabJobId'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['MemoryEnlargeThreshold'])) {
            $model->memoryEnlargeThreshold = $map['MemoryEnlargeThreshold'];
        }

        if (isset($map['MemoryShrinkThreshold'])) {
            $model->memoryShrinkThreshold = $map['MemoryShrinkThreshold'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ScaleMaxCpus'])) {
            $model->scaleMaxCpus = $map['ScaleMaxCpus'];
        }

        if (isset($map['ScaleMaxMemory'])) {
            $model->scaleMaxMemory = $map['ScaleMaxMemory'];
        }

        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
