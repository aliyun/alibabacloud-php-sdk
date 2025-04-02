<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

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
    public $defaultGPUDriver;

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
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isAvailable;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var float
     */
    public $nonProtectSpotDiscount;

    /**
     * @var string[]
     */
    public $paymentTypes;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $spotStockStatus;

    /**
     * @var string[]
     */
    public $supportedGPUDrivers;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'cpu' => 'Cpu',
        'defaultGPUDriver' => 'DefaultGPUDriver',
        'gpu' => 'Gpu',
        'gpuMemory' => 'GpuMemory',
        'gpuType' => 'GpuType',
        'instanceType' => 'InstanceType',
        'isAvailable' => 'IsAvailable',
        'memory' => 'Memory',
        'nonProtectSpotDiscount' => 'NonProtectSpotDiscount',
        'paymentTypes' => 'PaymentTypes',
        'resourceType' => 'ResourceType',
        'spotStockStatus' => 'SpotStockStatus',
        'supportedGPUDrivers' => 'SupportedGPUDrivers',
    ];

    public function validate()
    {
        if (\is_array($this->paymentTypes)) {
            Model::validateArray($this->paymentTypes);
        }
        if (\is_array($this->supportedGPUDrivers)) {
            Model::validateArray($this->supportedGPUDrivers);
        }
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

        if (null !== $this->defaultGPUDriver) {
            $res['DefaultGPUDriver'] = $this->defaultGPUDriver;
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

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->nonProtectSpotDiscount) {
            $res['NonProtectSpotDiscount'] = $this->nonProtectSpotDiscount;
        }

        if (null !== $this->paymentTypes) {
            if (\is_array($this->paymentTypes)) {
                $res['PaymentTypes'] = [];
                $n1 = 0;
                foreach ($this->paymentTypes as $item1) {
                    $res['PaymentTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->spotStockStatus) {
            $res['SpotStockStatus'] = $this->spotStockStatus;
        }

        if (null !== $this->supportedGPUDrivers) {
            if (\is_array($this->supportedGPUDrivers)) {
                $res['SupportedGPUDrivers'] = [];
                $n1 = 0;
                foreach ($this->supportedGPUDrivers as $item1) {
                    $res['SupportedGPUDrivers'][$n1++] = $item1;
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
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DefaultGPUDriver'])) {
            $model->defaultGPUDriver = $map['DefaultGPUDriver'];
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

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NonProtectSpotDiscount'])) {
            $model->nonProtectSpotDiscount = $map['NonProtectSpotDiscount'];
        }

        if (isset($map['PaymentTypes'])) {
            if (!empty($map['PaymentTypes'])) {
                $model->paymentTypes = [];
                $n1 = 0;
                foreach ($map['PaymentTypes'] as $item1) {
                    $model->paymentTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SpotStockStatus'])) {
            $model->spotStockStatus = $map['SpotStockStatus'];
        }

        if (isset($map['SupportedGPUDrivers'])) {
            if (!empty($map['SupportedGPUDrivers'])) {
                $model->supportedGPUDrivers = [];
                $n1 = 0;
                foreach ($map['SupportedGPUDrivers'] as $item1) {
                    $model->supportedGPUDrivers[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
