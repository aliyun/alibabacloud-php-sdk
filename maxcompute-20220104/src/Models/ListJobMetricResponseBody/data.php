<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobMetricResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobMetricResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The category of the metrics.
     *
     * @example job
     *
     * @var string
     */
    public $category;

    /**
     * @description Metric details.
     *
     * @var metrics[]
     */
    public $metrics;

    /**
     * @description The name of observation metric.
     *
     * @example num
     *
     * @var string
     */
    public $name;

    /**
     * @description The monitoring statistical period.Unit:Second(s).
     *
     * @example 3600
     *
     * @var int
     */
    public $period;
    protected $_name = [
        'category' => 'category',
        'metrics' => 'metrics',
        'name' => 'name',
        'period' => 'period',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->metrics) {
            $res['metrics'] = [];
            if (null !== $this->metrics && \is_array($this->metrics)) {
                $n = 0;
                foreach ($this->metrics as $item) {
                    $res['metrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['metrics'])) {
            if (!empty($map['metrics'])) {
                $model->metrics = [];
                $n = 0;
                foreach ($map['metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? metrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        return $model;
    }
}
