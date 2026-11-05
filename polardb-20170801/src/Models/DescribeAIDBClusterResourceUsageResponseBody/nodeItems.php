<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterResourceUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterResourceUsageResponseBody\nodeItems\podItems;

class nodeItems extends Model
{
    /**
     * @var string
     */
    public $CPU;

    /**
     * @var string
     */
    public $CPUUsed;

    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var string
     */
    public $GPU;

    /**
     * @var string
     */
    public $GPUModel;

    /**
     * @var string
     */
    public $GPUUsed;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $memoryUsed;

    /**
     * @var podItems[]
     */
    public $podItems;

    /**
     * @var string
     */
    public $VNodeId;
    protected $_name = [
        'CPU' => 'CPU',
        'CPUUsed' => 'CPUUsed',
        'DBNodeId' => 'DBNodeId',
        'GPU' => 'GPU',
        'GPUModel' => 'GPUModel',
        'GPUUsed' => 'GPUUsed',
        'memory' => 'Memory',
        'memoryUsed' => 'MemoryUsed',
        'podItems' => 'PodItems',
        'VNodeId' => 'VNodeId',
    ];

    public function validate()
    {
        if (\is_array($this->podItems)) {
            Model::validateArray($this->podItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }

        if (null !== $this->CPUUsed) {
            $res['CPUUsed'] = $this->CPUUsed;
        }

        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }

        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }

        if (null !== $this->GPUModel) {
            $res['GPUModel'] = $this->GPUModel;
        }

        if (null !== $this->GPUUsed) {
            $res['GPUUsed'] = $this->GPUUsed;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->memoryUsed) {
            $res['MemoryUsed'] = $this->memoryUsed;
        }

        if (null !== $this->podItems) {
            if (\is_array($this->podItems)) {
                $res['PodItems'] = [];
                $n1 = 0;
                foreach ($this->podItems as $item1) {
                    $res['PodItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->VNodeId) {
            $res['VNodeId'] = $this->VNodeId;
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

        if (isset($map['CPUUsed'])) {
            $model->CPUUsed = $map['CPUUsed'];
        }

        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }

        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }

        if (isset($map['GPUModel'])) {
            $model->GPUModel = $map['GPUModel'];
        }

        if (isset($map['GPUUsed'])) {
            $model->GPUUsed = $map['GPUUsed'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['MemoryUsed'])) {
            $model->memoryUsed = $map['MemoryUsed'];
        }

        if (isset($map['PodItems'])) {
            if (!empty($map['PodItems'])) {
                $model->podItems = [];
                $n1 = 0;
                foreach ($map['PodItems'] as $item1) {
                    $model->podItems[$n1] = podItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VNodeId'])) {
            $model->VNodeId = $map['VNodeId'];
        }

        return $model;
    }
}
