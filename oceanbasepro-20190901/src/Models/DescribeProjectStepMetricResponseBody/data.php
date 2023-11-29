<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectStepMetricResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectStepMetricResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example AVG
     *
     * @var string
     */
    public $aggregator;

    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @example null
     *
     * @var int
     */
    public $referenceValue;
    protected $_name = [
        'aggregator'     => 'Aggregator',
        'metrics'        => 'Metrics',
        'referenceValue' => 'ReferenceValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregator) {
            $res['Aggregator'] = $this->aggregator;
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
        if (null !== $this->referenceValue) {
            $res['ReferenceValue'] = $this->referenceValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregator'])) {
            $model->aggregator = $map['Aggregator'];
        }
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n              = 0;
                foreach ($map['Metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? metrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReferenceValue'])) {
            $model->referenceValue = $map['ReferenceValue'];
        }

        return $model;
    }
}
