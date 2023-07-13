<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\prometheus;

use AlibabaCloud\Tea\Model;

class annotations extends Model
{
    /**
     * @description The level of the alert. Valid values:
     *
     *   Critical
     *   Warn
     *   Info
     *
     * @example summary
     *
     * @var string
     */
    public $key;

    /**
     * @description The consecutive number of times for which the metric value meets the trigger condition before an Info-level alert is triggered.
     *
     * >  You must select at least one of the Critical, Warn, and Info alert levels and specify the Statistics, ComparisonOperator, Threshold, and Times parameters for the selected alert level.
     * @example {{ $labels.instance }} CPU usage above 10% {current value: {{ humanizePercentage $value }} }
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
