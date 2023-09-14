<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class TriggerCondition extends Model
{
    /**
     * @description 比较符。取值范围：
     * - LE:小于等于。
     * @example LT
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description 指标名称。指标名称需要在 ListAutoScalingMetrics 接口返回的指标名称列表中。
     *
     * @example yarn_resourcemanager_root_availablememoryusage
     *
     * @var string
     */
    public $metricName;

    /**
     * @description 统计量名称。取值范围：
     * - AVG：平均值。
     * @example AVG
     *
     * @var string
     */
    public $statistics;

    /**
     * @description 指标Tag。
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description 阈值。
     *
     * @example 12.5
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'metricName'         => 'MetricName',
        'statistics'         => 'Statistics',
        'tags'               => 'Tags',
        'threshold'          => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
