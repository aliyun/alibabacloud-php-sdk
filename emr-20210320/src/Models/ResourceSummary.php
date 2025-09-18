<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (null !== $this->inefficientTaskRate) {
            $this->inefficientTaskRate->validate();
        }
        if (null !== $this->memoryUtilizationRate) {
            $this->memoryUtilizationRate->validate();
        }
        if (null !== $this->originalTotalVcore) {
            $this->originalTotalVcore->validate();
        }
        if (null !== $this->vcoreUtilizationRate) {
            $this->vcoreUtilizationRate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inefficientTaskRate) {
            $res['InefficientTaskRate'] = null !== $this->inefficientTaskRate ? $this->inefficientTaskRate->toArray($noStream) : $this->inefficientTaskRate;
        }

        if (null !== $this->memoryUtilizationRate) {
            $res['MemoryUtilizationRate'] = null !== $this->memoryUtilizationRate ? $this->memoryUtilizationRate->toArray($noStream) : $this->memoryUtilizationRate;
        }

        if (null !== $this->originalTotalVcore) {
            $res['OriginalTotalVcore'] = null !== $this->originalTotalVcore ? $this->originalTotalVcore->toArray($noStream) : $this->originalTotalVcore;
        }

        if (null !== $this->vcoreUtilizationRate) {
            $res['VcoreUtilizationRate'] = null !== $this->vcoreUtilizationRate ? $this->vcoreUtilizationRate->toArray($noStream) : $this->vcoreUtilizationRate;
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
