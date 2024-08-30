<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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
        'GPUCount'        => 'GPUCount',
        'GPUMetrics'      => 'GPUMetrics',
        'GPUType'         => 'GPUType',
        'memoryUtil'      => 'MemoryUtil',
        'nodeId'          => 'NodeId',
        'nodeType'        => 'NodeType',
        'totalMemory'     => 'TotalMemory',
        'usedMemory'      => 'UsedMemory',
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
        if (null !== $this->GPUCount) {
            $res['GPUCount'] = $this->GPUCount;
        }
        if (null !== $this->GPUMetrics) {
            $res['GPUMetrics'] = [];
            if (null !== $this->GPUMetrics && \is_array($this->GPUMetrics)) {
                $n = 0;
                foreach ($this->GPUMetrics as $item) {
                    $res['GPUMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return NodeGPUMetric
     */
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
                $n                 = 0;
                foreach ($map['GPUMetrics'] as $item) {
                    $model->GPUMetrics[$n++] = null !== $item ? GPUMetric::fromMap($item) : $item;
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
