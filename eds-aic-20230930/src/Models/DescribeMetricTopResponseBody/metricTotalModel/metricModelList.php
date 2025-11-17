<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricTopResponseBody\metricTotalModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricTopResponseBody\metricTotalModel\metricModelList\dataPoints;

class metricModelList extends Model
{
    /**
     * @var dataPoints[]
     */
    public $dataPoints;

    /**
     * @var string
     */
    public $metricName;
    protected $_name = [
        'dataPoints' => 'DataPoints',
        'metricName' => 'MetricName',
    ];

    public function validate()
    {
        if (\is_array($this->dataPoints)) {
            Model::validateArray($this->dataPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPoints) {
            if (\is_array($this->dataPoints)) {
                $res['DataPoints'] = [];
                $n1 = 0;
                foreach ($this->dataPoints as $item1) {
                    $res['DataPoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPoints'])) {
            if (!empty($map['DataPoints'])) {
                $model->dataPoints = [];
                $n1 = 0;
                foreach ($map['DataPoints'] as $item1) {
                    $model->dataPoints[$n1] = dataPoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        return $model;
    }
}
