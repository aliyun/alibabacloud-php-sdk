<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIMonitorMetricResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIMonitorMetricResponseBody\data\dataPoints;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dataPoints[]
     */
    public $dataPoints;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'dataPoints' => 'DataPoints',
        'metric'     => 'Metric',
        'tags'       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPoints) {
            $res['DataPoints'] = [];
            if (null !== $this->dataPoints && \is_array($this->dataPoints)) {
                $n = 0;
                foreach ($this->dataPoints as $item) {
                    $res['DataPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['DataPoints'])) {
            if (!empty($map['DataPoints'])) {
                $model->dataPoints = [];
                $n                 = 0;
                foreach ($map['DataPoints'] as $item) {
                    $model->dataPoints[$n++] = null !== $item ? dataPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
