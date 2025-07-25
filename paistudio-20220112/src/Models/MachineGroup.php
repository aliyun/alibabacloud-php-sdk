<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class MachineGroup extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $creatorID;

    /**
     * @example 470.199.02
     *
     * @var string
     */
    public $defaultDriver;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var string
     */
    public $diskPL;

    /**
     * @var int
     */
    public $ecsCount;

    /**
     * @var string
     */
    public $ecsSpec;

    /**
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @var string
     */
    public $gmtExpiredTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $gmtStartedTime;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var int
     */
    public $gpuMemory;

    /**
     * @var string
     */
    public $gpuType;

    /**
     * @example mg1
     *
     * @var string
     */
    public $machineGroupID;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $orderInstanceId;

    /**
     * @var string
     */
    public $paymentDuration;

    /**
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportedDrivers;
    protected $_name = [
        'cpu' => 'Cpu',
        'creatorID' => 'CreatorID',
        'defaultDriver' => 'DefaultDriver',
        'diskCapacity' => 'DiskCapacity',
        'diskPL' => 'DiskPL',
        'ecsCount' => 'EcsCount',
        'ecsSpec' => 'EcsSpec',
        'gmtCreatedTime' => 'GmtCreatedTime',
        'gmtExpiredTime' => 'GmtExpiredTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtStartedTime' => 'GmtStartedTime',
        'gpu' => 'Gpu',
        'gpuMemory' => 'GpuMemory',
        'gpuType' => 'GpuType',
        'machineGroupID' => 'MachineGroupID',
        'memory' => 'Memory',
        'orderInstanceId' => 'OrderInstanceId',
        'paymentDuration' => 'PaymentDuration',
        'paymentDurationUnit' => 'PaymentDurationUnit',
        'paymentType' => 'PaymentType',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'resourceGroupID' => 'ResourceGroupID',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'supportedDrivers' => 'SupportedDrivers',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->creatorID) {
            $res['CreatorID'] = $this->creatorID;
        }
        if (null !== $this->defaultDriver) {
            $res['DefaultDriver'] = $this->defaultDriver;
        }
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->diskPL) {
            $res['DiskPL'] = $this->diskPL;
        }
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->gmtCreatedTime) {
            $res['GmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->gmtExpiredTime) {
            $res['GmtExpiredTime'] = $this->gmtExpiredTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->gmtStartedTime) {
            $res['GmtStartedTime'] = $this->gmtStartedTime;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->gpuMemory) {
            $res['GpuMemory'] = $this->gpuMemory;
        }
        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
        }
        if (null !== $this->machineGroupID) {
            $res['MachineGroupID'] = $this->machineGroupID;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportedDrivers) {
            $res['SupportedDrivers'] = $this->supportedDrivers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MachineGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreatorID'])) {
            $model->creatorID = $map['CreatorID'];
        }
        if (isset($map['DefaultDriver'])) {
            $model->defaultDriver = $map['DefaultDriver'];
        }
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['DiskPL'])) {
            $model->diskPL = $map['DiskPL'];
        }
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['GmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['GmtCreatedTime'];
        }
        if (isset($map['GmtExpiredTime'])) {
            $model->gmtExpiredTime = $map['GmtExpiredTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['GmtStartedTime'])) {
            $model->gmtStartedTime = $map['GmtStartedTime'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['GpuMemory'])) {
            $model->gpuMemory = $map['GpuMemory'];
        }
        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
        }
        if (isset($map['MachineGroupID'])) {
            $model->machineGroupID = $map['MachineGroupID'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportedDrivers'])) {
            if (!empty($map['SupportedDrivers'])) {
                $model->supportedDrivers = $map['SupportedDrivers'];
            }
        }

        return $model;
    }
}
