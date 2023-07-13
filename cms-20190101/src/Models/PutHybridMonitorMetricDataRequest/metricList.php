<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataRequest\metricList\labels;
use AlibabaCloud\Tea\Model;

class metricList extends Model
{
    /**
     * @example app、ip、hostName等标识信息
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @description The operation that you want to perform. Set the value to **PutHybridMonitorMetricData**.
     *
     * @example CPU_Usage
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the metric.
     *
     * The value is an integer or a floating-point number.
     * @example 1640776119473
     *
     * @var int
     */
    public $TS;

    /**
     * @description The tag key of the metric.
     *
     * >  You must specify a key and a value for a tag at the same time.
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
