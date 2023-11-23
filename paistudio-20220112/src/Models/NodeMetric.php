<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class NodeMetric extends Model
{
    /**
     * @var string
     */
    public $GPUType;

    /**
     * @example 23000
     *
     * @var Metric[]
     */
    public $metrics;

    /**
     * @example -i121212node
     *
     * @var string
     */
    public $nodeID;
    protected $_name = [
        'GPUType' => 'GPUType',
        'metrics' => 'Metrics',
        'nodeID'  => 'NodeID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = [];
            if (null !== $this->metrics && \is_array($this->metrics)) {
                $n = 0;
                foreach ($this->metrics as $item) {
                    $res['Metrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeID) {
            $res['NodeID'] = $this->nodeID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NodeMetric
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n              = 0;
                foreach ($map['Metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? Metric::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeID'])) {
            $model->nodeID = $map['NodeID'];
        }

        return $model;
    }
}
