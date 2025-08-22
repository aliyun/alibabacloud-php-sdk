<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupMachineGroupResponseBody\tags;

class GetResourceGroupMachineGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $allocatableCpu;

    /**
     * @var string
     */
    public $allocatableMemory;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $defaultDriver;

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
     * @var string
     */
    public $gpu;

    /**
     * @var string
     */
    public $gpuType;

    /**
     * @var string
     */
    public $machineGroupID;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

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
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportedDrivers;

    /**
     * @var string
     */
    public $systemReservedCpu;

    /**
     * @var string
     */
    public $systemReservedMemory;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'allocatableCpu' => 'AllocatableCpu',
        'allocatableMemory' => 'AllocatableMemory',
        'cpu' => 'Cpu',
        'defaultDriver' => 'DefaultDriver',
        'ecsCount' => 'EcsCount',
        'ecsSpec' => 'EcsSpec',
        'gmtCreatedTime' => 'GmtCreatedTime',
        'gmtExpiredTime' => 'GmtExpiredTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtStartedTime' => 'GmtStartedTime',
        'gpu' => 'Gpu',
        'gpuType' => 'GpuType',
        'machineGroupID' => 'MachineGroupID',
        'memory' => 'Memory',
        'name' => 'Name',
        'paymentDuration' => 'PaymentDuration',
        'paymentDurationUnit' => 'PaymentDurationUnit',
        'paymentType' => 'PaymentType',
        'requestId' => 'RequestId',
        'resourceGroupID' => 'ResourceGroupID',
        'status' => 'Status',
        'supportedDrivers' => 'SupportedDrivers',
        'systemReservedCpu' => 'SystemReservedCpu',
        'systemReservedMemory' => 'SystemReservedMemory',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->supportedDrivers)) {
            Model::validateArray($this->supportedDrivers);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocatableCpu) {
            $res['AllocatableCpu'] = $this->allocatableCpu;
        }

        if (null !== $this->allocatableMemory) {
            $res['AllocatableMemory'] = $this->allocatableMemory;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->defaultDriver) {
            $res['DefaultDriver'] = $this->defaultDriver;
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

        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
        }

        if (null !== $this->machineGroupID) {
            $res['MachineGroupID'] = $this->machineGroupID;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportedDrivers) {
            if (\is_array($this->supportedDrivers)) {
                $res['SupportedDrivers'] = [];
                $n1 = 0;
                foreach ($this->supportedDrivers as $item1) {
                    $res['SupportedDrivers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemReservedCpu) {
            $res['SystemReservedCpu'] = $this->systemReservedCpu;
        }

        if (null !== $this->systemReservedMemory) {
            $res['SystemReservedMemory'] = $this->systemReservedMemory;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AllocatableCpu'])) {
            $model->allocatableCpu = $map['AllocatableCpu'];
        }

        if (isset($map['AllocatableMemory'])) {
            $model->allocatableMemory = $map['AllocatableMemory'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DefaultDriver'])) {
            $model->defaultDriver = $map['DefaultDriver'];
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

        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
        }

        if (isset($map['MachineGroupID'])) {
            $model->machineGroupID = $map['MachineGroupID'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportedDrivers'])) {
            if (!empty($map['SupportedDrivers'])) {
                $model->supportedDrivers = [];
                $n1 = 0;
                foreach ($map['SupportedDrivers'] as $item1) {
                    $model->supportedDrivers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SystemReservedCpu'])) {
            $model->systemReservedCpu = $map['SystemReservedCpu'];
        }

        if (isset($map['SystemReservedMemory'])) {
            $model->systemReservedMemory = $map['SystemReservedMemory'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
