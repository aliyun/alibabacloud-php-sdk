<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ResourceGroupMetric extends Model
{
    /**
     * @var string
     */
    public $gpuType;

    /**
     * @example 23000
     *
     * @var Metric[]
     */
    public $metrics;

    /**
     * @example rg17tmvwiokhzaxg
     *
     * @var string
     */
    public $resourceGroupID;
    protected $_name = [
        'gpuType'         => 'GpuType',
        'metrics'         => 'Metrics',
        'resourceGroupID' => 'ResourceGroupID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
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
        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceGroupMetric
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
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
        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }

        return $model;
    }
}
