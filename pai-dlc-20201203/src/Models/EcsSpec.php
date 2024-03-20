<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class EcsSpec extends Model
{
    /**
     * @example GPU
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @example 12
     *
     * @var int
     */
    public $cpu;

    /**
     * @example 470.199.02
     *
     * @var string
     */
    public $defaultGPUDriver;

    /**
     * @example 1
     *
     * @var int
     */
    public $gpu;

    /**
     * @example NVIDIA v100
     *
     * @var string
     */
    public $gpuType;

    /**
     * @example ecs.gn6e-c12g1.3xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAvailable;

    /**
     * @example 92
     *
     * @var int
     */
    public $memory;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $nonProtectSpotDiscount;

    /**
     * @var string[]
     */
    public $paymentTypes;

    /**
     * @example ECS
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example WithStock
     *
     * @var string
     */
    public $spotStockStatus;

    /**
     * @var string[]
     */
    public $supportedGPUDrivers;
    protected $_name = [
        'acceleratorType'        => 'AcceleratorType',
        'cpu'                    => 'Cpu',
        'defaultGPUDriver'       => 'DefaultGPUDriver',
        'gpu'                    => 'Gpu',
        'gpuType'                => 'GpuType',
        'instanceType'           => 'InstanceType',
        'isAvailable'            => 'IsAvailable',
        'memory'                 => 'Memory',
        'nonProtectSpotDiscount' => 'NonProtectSpotDiscount',
        'paymentTypes'           => 'PaymentTypes',
        'resourceType'           => 'ResourceType',
        'spotStockStatus'        => 'SpotStockStatus',
        'supportedGPUDrivers'    => 'SupportedGPUDrivers',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['PaymentTypes'] = $this->paymentTypes;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->spotStockStatus) {
            $res['SpotStockStatus'] = $this->spotStockStatus;
        }
        if (null !== $this->supportedGPUDrivers) {
            $res['SupportedGPUDrivers'] = $this->supportedGPUDrivers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EcsSpec
     */
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
                $model->paymentTypes = $map['PaymentTypes'];
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
                $model->supportedGPUDrivers = $map['SupportedGPUDrivers'];
            }
        }

        return $model;
    }
}
