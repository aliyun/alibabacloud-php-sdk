<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookMetricsResponseBody\metrics;
use AlibabaCloud\Tea\Model;

class DescribePlaybookMetricsResponseBody extends Model
{
    /**
     * @description The details of the playbook.
     *
     * @var metrics
     */
    public $metrics;

    /**
     * @description The request ID.
     *
     * @example 567D3D0B-2153-5860-BF9A-F9DEED55FB73
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
     * @return DescribePlaybookMetricsResponseBody
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
