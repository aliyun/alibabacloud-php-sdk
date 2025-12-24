<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveMetricResponseBody\predictiveMetrics;

class QueryPredictiveMetricResponseBody extends Model
{
    /**
     * @var predictiveMetrics
     */
    public $predictiveMetrics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'predictiveMetrics' => 'PredictiveMetrics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->predictiveMetrics) {
            $this->predictiveMetrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->predictiveMetrics) {
            $res['PredictiveMetrics'] = null !== $this->predictiveMetrics ? $this->predictiveMetrics->toArray($noStream) : $this->predictiveMetrics;
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
        if (isset($map['PredictiveMetrics'])) {
            $model->predictiveMetrics = predictiveMetrics::fromMap($map['PredictiveMetrics']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
