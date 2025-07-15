<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponseBody\metricTotalModel;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponseBody\metricTotalModel\metricModelList\dataPoints;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponseBody\metricTotalModel\metricModelList\processLastInfos;
use AlibabaCloud\Tea\Model;

class metricModelList extends Model
{
    /**
     * @var dataPoints[]
     */
    public $dataPoints;

    /**
     * @example cpu_utilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @var processLastInfos[]
     */
    public $processLastInfos;
    protected $_name = [
        'dataPoints' => 'DataPoints',
        'metricName' => 'MetricName',
        'processLastInfos' => 'ProcessLastInfos',
    ];

    public function validate() {}

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
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->processLastInfos) {
            $res['ProcessLastInfos'] = [];
            if (null !== $this->processLastInfos && \is_array($this->processLastInfos)) {
                $n = 0;
                foreach ($this->processLastInfos as $item) {
                    $res['ProcessLastInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPoints'])) {
            if (!empty($map['DataPoints'])) {
                $model->dataPoints = [];
                $n = 0;
                foreach ($map['DataPoints'] as $item) {
                    $model->dataPoints[$n++] = null !== $item ? dataPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['ProcessLastInfos'])) {
            if (!empty($map['ProcessLastInfos'])) {
                $model->processLastInfos = [];
                $n = 0;
                foreach ($map['ProcessLastInfos'] as $item) {
                    $model->processLastInfos[$n++] = null !== $item ? processLastInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
