<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricListResponseBody\metricTotalModel;

class DescribeMetricListResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var metricTotalModel[]
     */
    public $metricTotalModel;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count' => 'Count',
        'metricTotalModel' => 'MetricTotalModel',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->metricTotalModel)) {
            Model::validateArray($this->metricTotalModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->metricTotalModel) {
            if (\is_array($this->metricTotalModel)) {
                $res['MetricTotalModel'] = [];
                $n1 = 0;
                foreach ($this->metricTotalModel as $item1) {
                    $res['MetricTotalModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['MetricTotalModel'])) {
            if (!empty($map['MetricTotalModel'])) {
                $model->metricTotalModel = [];
                $n1 = 0;
                foreach ($map['MetricTotalModel'] as $item1) {
                    $model->metricTotalModel[$n1] = metricTotalModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
