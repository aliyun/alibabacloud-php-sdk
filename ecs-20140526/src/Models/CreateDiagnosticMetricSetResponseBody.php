<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class CreateDiagnosticMetricSetResponseBody extends Model
{
    /**
     * @var string
     */
    public $metricSetId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricSetId' => 'MetricSetId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricSetId) {
            $res['MetricSetId'] = $this->metricSetId;
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
        if (isset($map['MetricSetId'])) {
            $model->metricSetId = $map['MetricSetId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
