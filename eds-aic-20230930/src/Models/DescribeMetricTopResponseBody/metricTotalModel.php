<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricTopResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricTopResponseBody\metricTotalModel\metricModelList;

class metricTotalModel extends Model
{
    /**
     * @var string
     */
    public $androidInstanceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var metricModelList[]
     */
    public $metricModelList;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'instanceId' => 'InstanceId',
        'metricModelList' => 'MetricModelList',
    ];

    public function validate()
    {
        if (\is_array($this->metricModelList)) {
            Model::validateArray($this->metricModelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->metricModelList) {
            if (\is_array($this->metricModelList)) {
                $res['MetricModelList'] = [];
                $n1 = 0;
                foreach ($this->metricModelList as $item1) {
                    $res['MetricModelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MetricModelList'])) {
            if (!empty($map['MetricModelList'])) {
                $model->metricModelList = [];
                $n1 = 0;
                foreach ($map['MetricModelList'] as $item1) {
                    $model->metricModelList[$n1] = metricModelList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
