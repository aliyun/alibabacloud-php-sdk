<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryHistoricalMetricResponseBody\historicalMetrics;

class QueryHistoricalMetricResponseBody extends Model
{
    /**
     * @var historicalMetrics
     */
    public $historicalMetrics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'historicalMetrics' => 'HistoricalMetrics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->historicalMetrics) {
            $this->historicalMetrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->historicalMetrics) {
            $res['HistoricalMetrics'] = null !== $this->historicalMetrics ? $this->historicalMetrics->toArray($noStream) : $this->historicalMetrics;
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
        if (isset($map['HistoricalMetrics'])) {
            $model->historicalMetrics = historicalMetrics::fromMap($map['HistoricalMetrics']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
