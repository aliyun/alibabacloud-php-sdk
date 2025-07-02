<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class AdviseSummary extends Model
{
    /**
     * @var DoubleMetric
     */
    public $memoryUtilizationRate;

    /**
     * @var DoubleMetric
     */
    public $vcoreUtilizationRate;
    protected $_name = [
        'memoryUtilizationRate' => 'MemoryUtilizationRate',
        'vcoreUtilizationRate' => 'VcoreUtilizationRate',
    ];

    public function validate()
    {
        if (null !== $this->memoryUtilizationRate) {
            $this->memoryUtilizationRate->validate();
        }
        if (null !== $this->vcoreUtilizationRate) {
            $this->vcoreUtilizationRate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memoryUtilizationRate) {
            $res['MemoryUtilizationRate'] = null !== $this->memoryUtilizationRate ? $this->memoryUtilizationRate->toArray($noStream) : $this->memoryUtilizationRate;
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
        if (isset($map['MemoryUtilizationRate'])) {
            $model->memoryUtilizationRate = DoubleMetric::fromMap($map['MemoryUtilizationRate']);
        }

        if (isset($map['VcoreUtilizationRate'])) {
            $model->vcoreUtilizationRate = DoubleMetric::fromMap($map['VcoreUtilizationRate']);
        }

        return $model;
    }
}
