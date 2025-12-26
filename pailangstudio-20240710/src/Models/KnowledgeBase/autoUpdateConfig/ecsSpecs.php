<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase\autoUpdateConfig;

use AlibabaCloud\Dara\Model;

class ecsSpecs extends Model
{
    /**
     * @var int
     */
    public $CPU;

    /**
     * @var string
     */
    public $driver;

    /**
     * @var int
     */
    public $GPU;

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
     * @var int
     */
    public $sharedMemory;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'CPU' => 'CPU',
        'driver' => 'Driver',
        'GPU' => 'GPU',
        'GPUType' => 'GPUType',
        'instanceType' => 'InstanceType',
        'memory' => 'Memory',
        'podCount' => 'PodCount',
        'sharedMemory' => 'SharedMemory',
        'type' => 'Type',
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

        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }

        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
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

        if (null !== $this->sharedMemory) {
            $res['SharedMemory'] = $this->sharedMemory;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }

        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
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

        if (isset($map['SharedMemory'])) {
            $model->sharedMemory = $map['SharedMemory'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
