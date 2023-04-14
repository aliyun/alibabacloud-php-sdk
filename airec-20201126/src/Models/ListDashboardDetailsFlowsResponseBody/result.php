<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardDetailsFlowsResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardDetailsFlowsResponseBody\result\metricData;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var metricData[]
     */
    public $metricData;

    /**
     * @example USERACTIONUV_COUNT
     *
     * @var string
     */
    public $metricType;
    protected $_name = [
        'metricData' => 'metricData',
        'metricType' => 'metricType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricData) {
            $res['metricData'] = [];
            if (null !== $this->metricData && \is_array($this->metricData)) {
                $n = 0;
                foreach ($this->metricData as $item) {
                    $res['metricData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
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
        if (isset($map['metricData'])) {
            if (!empty($map['metricData'])) {
                $model->metricData = [];
                $n                 = 0;
                foreach ($map['metricData'] as $item) {
                    $model->metricData[$n++] = null !== $item ? metricData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }

        return $model;
    }
}
