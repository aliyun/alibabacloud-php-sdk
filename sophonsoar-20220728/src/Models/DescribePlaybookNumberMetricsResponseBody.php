<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNumberMetricsResponseBody\metrics;
use AlibabaCloud\Tea\Model;

class DescribePlaybookNumberMetricsResponseBody extends Model
{
    /**
     * @description The statistics.
     *
     * @var metrics
     */
    public $metrics;

    /**
     * @description The request ID.
     *
     * @example D4CC979E-3D5B-5A6A-BC87-C93C9E861C7B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metrics'   => 'Metrics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlaybookNumberMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
