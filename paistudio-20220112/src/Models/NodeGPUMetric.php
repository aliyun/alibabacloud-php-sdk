<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class NodeGPUMetric extends Model
{
    /**
     * @var string
     */
    public $acceleratorType;

    /**
     * @var int
     */
    public $GPUCount;

    /**
     * @var GPUMetric[]
     */
    public $GPUMetrics;

    /**
     * @var string
     */
    public $GPUType;

    /**
     * @var float
     */
    public $memoryUtil;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var float
     */
    public $totalMemory;

    /**
     * @var float
     */
    public $usedMemory;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'GPUCount' => 'GPUCount',
        'GPUMetrics' => 'GPUMetrics',
        'GPUType' => 'GPUType',
        'memoryUtil' => 'MemoryUtil',
        'nodeId' => 'NodeId',
        'nodeType' => 'NodeType',
        'totalMemory' => 'TotalMemory',
        'usedMemory' => 'UsedMemory',
    ];

    public function validate()
    {
        if (\is_array($this->GPUMetrics)) {
            Model::validateArray($this->GPUMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }

        if (null !== $this->GPUCount) {
            $res['GPUCount'] = $this->GPUCount;
        }

        if (null !== $this->GPUMetrics) {
            if (\is_array($this->GPUMetrics)) {
                $res['GPUMetrics'] = [];
                $n1 = 0;
                foreach ($this->GPUMetrics as $item1) {
                    $res['GPUMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }

        if (null !== $this->memoryUtil) {
            $res['MemoryUtil'] = $this->memoryUtil;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }

        if (null !== $this->usedMemory) {
            $res['UsedMemory'] = $this->usedMemory;
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

        if (isset($map['GPUCount'])) {
            $model->GPUCount = $map['GPUCount'];
        }

        if (isset($map['GPUMetrics'])) {
            if (!empty($map['GPUMetrics'])) {
                $model->GPUMetrics = [];
                $n1 = 0;
                foreach ($map['GPUMetrics'] as $item1) {
                    $model->GPUMetrics[$n1] = GPUMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }

        if (isset($map['MemoryUtil'])) {
            $model->memoryUtil = $map['MemoryUtil'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }

        if (isset($map['UsedMemory'])) {
            $model->usedMemory = $map['UsedMemory'];
        }

        return $model;
    }
}
