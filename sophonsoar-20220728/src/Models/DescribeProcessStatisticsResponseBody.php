<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessStatisticsResponseBody\metrics;

class DescribeProcessStatisticsResponseBody extends Model
{
    /**
     * @var metrics
     */
    public $metrics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metrics' => 'Metrics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->metrics) {
            $this->metrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toArray($noStream) : $this->metrics;
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
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
