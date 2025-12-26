<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\ecsSpec\computingInstanceConfig;

class ecsSpec extends Model
{
    /**
     * @var int
     */
    public $CPU;

    /**
     * @var computingInstanceConfig
     */
    public $computingInstanceConfig;

    /**
     * @var int
     */
    public $extraEphemeralStorage;

    /**
     * @var int
     */
    public $GPU;

    /**
     * @var int
     */
    public $GPUCorePercentage;

    /**
     * @var int
     */
    public $GPUMemory;

    /**
     * @var string
     */
    public $GPUType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $podCount;

    /**
     * @var string
     */
    public $quotaId;

    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var bool
     */
    public $resourceBurstable;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $sharedMemory;
    protected $_name = [
        'CPU' => 'CPU',
        'computingInstanceConfig' => 'ComputingInstanceConfig',
        'extraEphemeralStorage' => 'ExtraEphemeralStorage',
        'GPU' => 'GPU',
        'GPUCorePercentage' => 'GPUCorePercentage',
        'GPUMemory' => 'GPUMemory',
        'GPUType' => 'GPUType',
        'instanceType' => 'InstanceType',
        'memory' => 'Memory',
        'podCount' => 'PodCount',
        'quotaId' => 'QuotaId',
        'quotaType' => 'QuotaType',
        'resourceBurstable' => 'ResourceBurstable',
        'resourceId' => 'ResourceId',
        'sharedMemory' => 'SharedMemory',
    ];

    public function validate()
    {
        if (null !== $this->computingInstanceConfig) {
            $this->computingInstanceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }

        if (null !== $this->computingInstanceConfig) {
            $res['ComputingInstanceConfig'] = null !== $this->computingInstanceConfig ? $this->computingInstanceConfig->toArray($noStream) : $this->computingInstanceConfig;
        }

        if (null !== $this->extraEphemeralStorage) {
            $res['ExtraEphemeralStorage'] = $this->extraEphemeralStorage;
        }

        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }

        if (null !== $this->GPUCorePercentage) {
            $res['GPUCorePercentage'] = $this->GPUCorePercentage;
        }

        if (null !== $this->GPUMemory) {
            $res['GPUMemory'] = $this->GPUMemory;
        }

        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }

        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }

        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }

        if (null !== $this->resourceBurstable) {
            $res['ResourceBurstable'] = $this->resourceBurstable;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->sharedMemory) {
            $res['SharedMemory'] = $this->sharedMemory;
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
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }

        if (isset($map['ComputingInstanceConfig'])) {
            $model->computingInstanceConfig = computingInstanceConfig::fromMap($map['ComputingInstanceConfig']);
        }

        if (isset($map['ExtraEphemeralStorage'])) {
            $model->extraEphemeralStorage = $map['ExtraEphemeralStorage'];
        }

        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }

        if (isset($map['GPUCorePercentage'])) {
            $model->GPUCorePercentage = $map['GPUCorePercentage'];
        }

        if (isset($map['GPUMemory'])) {
            $model->GPUMemory = $map['GPUMemory'];
        }

        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }

        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }

        if (isset($map['ResourceBurstable'])) {
            $model->resourceBurstable = $map['ResourceBurstable'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['SharedMemory'])) {
            $model->sharedMemory = $map['SharedMemory'];
        }

        return $model;
    }
}
