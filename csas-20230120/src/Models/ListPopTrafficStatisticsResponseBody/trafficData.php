<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPopTrafficStatisticsResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPopTrafficStatisticsResponseBody\trafficData\datapoints;
use AlibabaCloud\Tea\Model;

class trafficData extends Model
{
    /**
     * @var datapoints[]
     */
    public $datapoints;

    /**
     * @example InternetTx
     *
     * @var string
     */
    public $metricName;
    protected $_name = [
        'datapoints' => 'Datapoints',
        'metricName' => 'MetricName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datapoints) {
            $res['Datapoints'] = [];
            if (null !== $this->datapoints && \is_array($this->datapoints)) {
                $n = 0;
                foreach ($this->datapoints as $item) {
                    $res['Datapoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datapoints'])) {
            if (!empty($map['Datapoints'])) {
                $model->datapoints = [];
                $n                 = 0;
                foreach ($map['Datapoints'] as $item) {
                    $model->datapoints[$n++] = null !== $item ? datapoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        return $model;
    }
}
