<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponseBody\metricTotalModel;
use AlibabaCloud\Tea\Model;

class DescribeMetricLastResponseBody extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @var metricTotalModel[]
     */
    public $metricTotalModel;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kU+SQXzm0H9mu/FiSc****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 2B9E6946-0E2A-5D2B-B275-361DF81F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count' => 'Count',
        'metricTotalModel' => 'MetricTotalModel',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->metricTotalModel) {
            $res['MetricTotalModel'] = [];
            if (null !== $this->metricTotalModel && \is_array($this->metricTotalModel)) {
                $n = 0;
                foreach ($this->metricTotalModel as $item) {
                    $res['MetricTotalModel'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeMetricLastResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['MetricTotalModel'])) {
            if (!empty($map['MetricTotalModel'])) {
                $model->metricTotalModel = [];
                $n = 0;
                foreach ($map['MetricTotalModel'] as $item) {
                    $model->metricTotalModel[$n++] = null !== $item ? metricTotalModel::fromMap($item) : $item;
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
