<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeTrailDeliveryMetricDataResponseBody\metricList;

class DescribeTrailDeliveryMetricDataResponseBody extends Model
{
    /**
     * @var metricList[]
     */
    public $metricList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricList' => 'MetricList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->metricList)) {
            Model::validateArray($this->metricList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricList) {
            if (\is_array($this->metricList)) {
                $res['MetricList'] = [];
                $n1 = 0;
                foreach ($this->metricList as $item1) {
                    $res['MetricList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MetricList'])) {
            if (!empty($map['MetricList'])) {
                $model->metricList = [];
                $n1 = 0;
                foreach ($map['MetricList'] as $item1) {
                    $model->metricList[$n1] = metricList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
