<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorDataListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorDataListResponseBody\timeSeries\labels;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorDataListResponseBody\timeSeries\values;
use AlibabaCloud\Tea\Model;

class timeSeries extends Model
{
    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var values[]
     */
    public $values;
    protected $_name = [
        'labels'     => 'Labels',
        'metricName' => 'MetricName',
        'values'     => 'Values',
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
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->values) {
            $res['Values'] = [];
            if (null !== $this->values && \is_array($this->values)) {
                $n = 0;
                foreach ($this->values as $item) {
                    $res['Values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeSeries
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
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n             = 0;
                foreach ($map['Values'] as $item) {
                    $model->values[$n++] = null !== $item ? values::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
