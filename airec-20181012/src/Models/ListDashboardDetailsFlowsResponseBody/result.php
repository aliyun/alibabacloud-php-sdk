<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardDetailsFlowsResponseBody;

use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardDetailsFlowsResponseBody\result\metricData;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var metricData[]
     */
    public $metricData;

    /**
     * @var string
     */
    public $metricType;
    protected $_name = [
        'metricData' => 'MetricData',
        'metricType' => 'MetricType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricData) {
            $res['MetricData'] = [];
            if (null !== $this->metricData && \is_array($this->metricData)) {
                $n = 0;
                foreach ($this->metricData as $item) {
                    $res['MetricData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricData'])) {
            if (!empty($map['MetricData'])) {
                $model->metricData = [];
                $n                 = 0;
                foreach ($map['MetricData'] as $item) {
                    $model->metricData[$n++] = null !== $item ? metricData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        return $model;
    }
}
