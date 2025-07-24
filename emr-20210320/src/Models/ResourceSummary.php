<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ResourceSummary extends Model
{
    /**
     * @var DoubleMetric
     */
    public $inefficientTaskRate;

    /**
     * @var DoubleMetric
     */
    public $memoryUtilizationRate;

    /**
     * @var IntegerMetric
     */
    public $originalTotalVcore;

    /**
     * @var DoubleMetric
     */
    public $vcoreUtilizationRate;
    protected $_name = [
        'inefficientTaskRate' => 'InefficientTaskRate',
        'memoryUtilizationRate' => 'MemoryUtilizationRate',
        'originalTotalVcore' => 'OriginalTotalVcore',
        'vcoreUtilizationRate' => 'VcoreUtilizationRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inefficientTaskRate) {
            $res['InefficientTaskRate'] = null !== $this->inefficientTaskRate ? $this->inefficientTaskRate->toMap() : null;
        }
        if (null !== $this->memoryUtilizationRate) {
            $res['MemoryUtilizationRate'] = null !== $this->memoryUtilizationRate ? $this->memoryUtilizationRate->toMap() : null;
        }
        if (null !== $this->originalTotalVcore) {
            $res['OriginalTotalVcore'] = null !== $this->originalTotalVcore ? $this->originalTotalVcore->toMap() : null;
        }
        if (null !== $this->vcoreUtilizationRate) {
            $res['VcoreUtilizationRate'] = null !== $this->vcoreUtilizationRate ? $this->vcoreUtilizationRate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InefficientTaskRate'])) {
            $model->inefficientTaskRate = DoubleMetric::fromMap($map['InefficientTaskRate']);
        }
        if (isset($map['MemoryUtilizationRate'])) {
            $model->memoryUtilizationRate = DoubleMetric::fromMap($map['MemoryUtilizationRate']);
        }
        if (isset($map['OriginalTotalVcore'])) {
            $model->originalTotalVcore = IntegerMetric::fromMap($map['OriginalTotalVcore']);
        }
        if (isset($map['VcoreUtilizationRate'])) {
            $model->vcoreUtilizationRate = DoubleMetric::fromMap($map['VcoreUtilizationRate']);
        }

        return $model;
    }
}
