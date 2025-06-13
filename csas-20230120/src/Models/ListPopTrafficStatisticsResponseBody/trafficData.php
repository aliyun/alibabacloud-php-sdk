<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPopTrafficStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPopTrafficStatisticsResponseBody\trafficData\datapoints;

class trafficData extends Model
{
    /**
     * @var datapoints[]
     */
    public $datapoints;

    /**
     * @var string
     */
    public $metricName;
    protected $_name = [
        'datapoints' => 'Datapoints',
        'metricName' => 'MetricName',
    ];

    public function validate()
    {
        if (\is_array($this->datapoints)) {
            Model::validateArray($this->datapoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datapoints) {
            if (\is_array($this->datapoints)) {
                $res['Datapoints'] = [];
                $n1 = 0;
                foreach ($this->datapoints as $item1) {
                    $res['Datapoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Datapoints'])) {
            if (!empty($map['Datapoints'])) {
                $model->datapoints = [];
                $n1 = 0;
                foreach ($map['Datapoints'] as $item1) {
                    $model->datapoints[$n1] = datapoints::fromMap($item1);
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
