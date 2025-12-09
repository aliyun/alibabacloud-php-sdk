<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class EcsSpec extends Model
{
    /**
     * @var string
     */
    public $acceleratorType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $ecsImageId;

    /**
     * @var int
     */
    public $eriQuantity;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var string
     */
    public $gpuGUSpec;

    /**
     * @var int
     */
    public $gpuMemory;

    /**
     * @var string
     */
    public $gpuType;

    /**
     * @var string
     */
    public $gpuTypeAlias;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $machineModel;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $networkMode;

    /**
     * @var int
     */
    public $plannedCpu;

    /**
     * @var int
     */
    public $plannedMemory;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var bool
     */
    public $supportGPUShare;

    /**
     * @var bool
     */
    public $supportRDMA;

    /**
     * @var bool
     */
    public $supportSetNetworkCardIndex;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'cpu' => 'Cpu',
        'ecsImageId' => 'EcsImageId',
        'eriQuantity' => 'EriQuantity',
        'gpu' => 'Gpu',
        'gpuGUSpec' => 'GpuGUSpec',
        'gpuMemory' => 'GpuMemory',
        'gpuType' => 'GpuType',
        'gpuTypeAlias' => 'GpuTypeAlias',
        'instanceType' => 'InstanceType',
        'machineModel' => 'MachineModel',
        'memory' => 'Memory',
        'networkMode' => 'NetworkMode',
        'plannedCpu' => 'PlannedCpu',
        'plannedMemory' => 'PlannedMemory',
        'resourceType' => 'ResourceType',
        'supportGPUShare' => 'SupportGPUShare',
        'supportRDMA' => 'SupportRDMA',
        'supportSetNetworkCardIndex' => 'SupportSetNetworkCardIndex',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->ecsImageId) {
            $res['EcsImageId'] = $this->ecsImageId;
        }

        if (null !== $this->eriQuantity) {
            $res['EriQuantity'] = $this->eriQuantity;
        }

        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }

        if (null !== $this->gpuGUSpec) {
            $res['GpuGUSpec'] = $this->gpuGUSpec;
        }

        if (null !== $this->gpuMemory) {
            $res['GpuMemory'] = $this->gpuMemory;
        }

        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
        }

        if (null !== $this->gpuTypeAlias) {
            $res['GpuTypeAlias'] = $this->gpuTypeAlias;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->machineModel) {
            $res['MachineModel'] = $this->machineModel;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }

        if (null !== $this->plannedCpu) {
            $res['PlannedCpu'] = $this->plannedCpu;
        }

        if (null !== $this->plannedMemory) {
            $res['PlannedMemory'] = $this->plannedMemory;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->supportGPUShare) {
            $res['SupportGPUShare'] = $this->supportGPUShare;
        }

        if (null !== $this->supportRDMA) {
            $res['SupportRDMA'] = $this->supportRDMA;
        }

        if (null !== $this->supportSetNetworkCardIndex) {
            $res['SupportSetNetworkCardIndex'] = $this->supportSetNetworkCardIndex;
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
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['EcsImageId'])) {
            $model->ecsImageId = $map['EcsImageId'];
        }

        if (isset($map['EriQuantity'])) {
            $model->eriQuantity = $map['EriQuantity'];
        }

        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }

        if (isset($map['GpuGUSpec'])) {
            $model->gpuGUSpec = $map['GpuGUSpec'];
        }

        if (isset($map['GpuMemory'])) {
            $model->gpuMemory = $map['GpuMemory'];
        }

        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
        }

        if (isset($map['GpuTypeAlias'])) {
            $model->gpuTypeAlias = $map['GpuTypeAlias'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MachineModel'])) {
            $model->machineModel = $map['MachineModel'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }

        if (isset($map['PlannedCpu'])) {
            $model->plannedCpu = $map['PlannedCpu'];
        }

        if (isset($map['PlannedMemory'])) {
            $model->plannedMemory = $map['PlannedMemory'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SupportGPUShare'])) {
            $model->supportGPUShare = $map['SupportGPUShare'];
        }

        if (isset($map['SupportRDMA'])) {
            $model->supportRDMA = $map['SupportRDMA'];
        }

        if (isset($map['SupportSetNetworkCardIndex'])) {
            $model->supportSetNetworkCardIndex = $map['SupportSetNetworkCardIndex'];
        }

        return $model;
    }
}
