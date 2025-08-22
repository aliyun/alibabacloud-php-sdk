<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class NodeType extends Model
{
    /**
     * @var string
     */
    public $acceleratorType;

    /**
     * @var string
     */
    public $allocatableCPU;

    /**
     * @var string
     */
    public $allocatableMemory;

    /**
     * @var string
     */
    public $CPU;

    /**
     * @var string
     */
    public $GPU;

    /**
     * @var string
     */
    public $GPUMemory;

    /**
     * @var string
     */
    public $GPUType;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $systemReservedCPU;

    /**
     * @var string
     */
    public $systemReservedMemory;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'allocatableCPU' => 'AllocatableCPU',
        'allocatableMemory' => 'AllocatableMemory',
        'CPU' => 'CPU',
        'GPU' => 'GPU',
        'GPUMemory' => 'GPUMemory',
        'GPUType' => 'GPUType',
        'memory' => 'Memory',
        'nodeType' => 'NodeType',
        'systemReservedCPU' => 'SystemReservedCPU',
        'systemReservedMemory' => 'SystemReservedMemory',
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

        if (null !== $this->allocatableCPU) {
            $res['AllocatableCPU'] = $this->allocatableCPU;
        }

        if (null !== $this->allocatableMemory) {
            $res['AllocatableMemory'] = $this->allocatableMemory;
        }

        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }

        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }

        if (null !== $this->GPUMemory) {
            $res['GPUMemory'] = $this->GPUMemory;
        }

        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->systemReservedCPU) {
            $res['SystemReservedCPU'] = $this->systemReservedCPU;
        }

        if (null !== $this->systemReservedMemory) {
            $res['SystemReservedMemory'] = $this->systemReservedMemory;
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

        if (isset($map['AllocatableCPU'])) {
            $model->allocatableCPU = $map['AllocatableCPU'];
        }

        if (isset($map['AllocatableMemory'])) {
            $model->allocatableMemory = $map['AllocatableMemory'];
        }

        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }

        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }

        if (isset($map['GPUMemory'])) {
            $model->GPUMemory = $map['GPUMemory'];
        }

        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['SystemReservedCPU'])) {
            $model->systemReservedCPU = $map['SystemReservedCPU'];
        }

        if (isset($map['SystemReservedMemory'])) {
            $model->systemReservedMemory = $map['SystemReservedMemory'];
        }

        return $model;
    }
}
