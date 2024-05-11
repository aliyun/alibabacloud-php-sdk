<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\Tea\Model;

class CreateMetricGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $metricGroupId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricGroupId' => 'MetricGroupId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricGroupId) {
            $res['MetricGroupId'] = $this->metricGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMetricGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricGroupId'])) {
            $model->metricGroupId = $map['MetricGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
