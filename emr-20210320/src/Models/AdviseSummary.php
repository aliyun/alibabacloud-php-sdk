<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->memoryUtilizationRate) {
            $res['MemoryUtilizationRate'] = null !== $this->memoryUtilizationRate ? $this->memoryUtilizationRate->toMap() : null;
        }
        if (null !== $this->vcoreUtilizationRate) {
            $res['VcoreUtilizationRate'] = null !== $this->vcoreUtilizationRate ? $this->vcoreUtilizationRate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdviseSummary
     */
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
