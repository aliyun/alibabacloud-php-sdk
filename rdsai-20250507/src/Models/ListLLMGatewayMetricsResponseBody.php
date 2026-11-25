<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListLLMGatewayMetricsResponseBody\metricItems;

class ListLLMGatewayMetricsResponseBody extends Model
{
    /**
     * @var string
     */
    public $granularity;

    /**
     * @var metricItems[]
     */
    public $metricItems;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'granularity' => 'Granularity',
        'metricItems' => 'MetricItems',
        'metricType' => 'MetricType',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->metricItems)) {
            Model::validateArray($this->metricItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }

        if (null !== $this->metricItems) {
            if (\is_array($this->metricItems)) {
                $res['MetricItems'] = [];
                $n1 = 0;
                foreach ($this->metricItems as $item1) {
                    $res['MetricItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
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
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }

        if (isset($map['MetricItems'])) {
            if (!empty($map['MetricItems'])) {
                $model->metricItems = [];
                $n1 = 0;
                foreach ($map['MetricItems'] as $item1) {
                    $model->metricItems[$n1] = metricItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
