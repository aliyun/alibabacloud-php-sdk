<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonMetricsResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonMetricsResponseBody\data\metrics\labels;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description Metric description.
     *
     * @example The number of times a B-tree page of size PAGE_SIZE was successfully compressed.
     *
     * @var string
     */
    public $description;

    /**
     * @description Metric label collection.
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @description Metric name.
     *
     * @example mysql_exporter_collector_duration_seconds
     *
     * @var string
     */
    public $metric;

    /**
     * @description Metric type.
     *
     * @example GAUGE
     *
     * @var string
     */
    public $type;

    /**
     * @description Metric unit.
     *
     * @example bytes
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'description' => 'Description',
        'labels'      => 'Labels',
        'metric'      => 'Metric',
        'type'        => 'Type',
        'unit'        => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
