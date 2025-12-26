<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Runtime;

use AlibabaCloud\Dara\Model;

class ecsSpec extends Model
{
    /**
     * @var int
     */
    public $CPU;

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
     * @var int
     */
    public $sharedMemory;
    protected $_name = [
        'CPU' => 'CPU',
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
        'sharedMemory' => 'SharedMemory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
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

        if (isset($map['SharedMemory'])) {
            $model->sharedMemory = $map['SharedMemory'];
        }

        return $model;
    }
}
