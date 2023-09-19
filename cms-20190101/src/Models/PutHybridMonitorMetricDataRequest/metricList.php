<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataRequest\metricList\labels;
use AlibabaCloud\Tea\Model;

class metricList extends Model
{
    /**
     * @description The tags of the metric.
     *
     * Valid values of N: 1 to 100.
     * @example app、ip、hostName等标识信息
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @description The metric name.
     *
     * The name can contain letters, digits, and underscores (\_). The name must start with a letter.
     * @example CPU_Usage
     *
     * @var string
     */
    public $name;

    /**
     * @description The timestamp when the monitoring data is imported.
     *
     * Unit: milliseconds. By default, the current timestamp is used.
     * @example 1640776119473
     *
     * @var int
     */
    public $TS;

    /**
     * @description The value of the metric.
     *
     * The value must be an integer or a floating-point number.
     * @example 90
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'labels' => 'Labels',
        'name'   => 'Name',
        'TS'     => 'TS',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->TS) {
            $res['TS'] = $this->TS;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TS'])) {
            $model->TS = $map['TS'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
