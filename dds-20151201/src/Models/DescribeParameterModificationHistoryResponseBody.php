<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterModificationHistoryResponseBody\historicalParameters;

class DescribeParameterModificationHistoryResponseBody extends Model
{
    /**
     * @var historicalParameters
     */
    public $historicalParameters;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'historicalParameters' => 'HistoricalParameters',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->historicalParameters) {
            $this->historicalParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->historicalParameters) {
            $res['HistoricalParameters'] = null !== $this->historicalParameters ? $this->historicalParameters->toArray($noStream) : $this->historicalParameters;
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
        if (isset($map['HistoricalParameters'])) {
            $model->historicalParameters = historicalParameters::fromMap($map['HistoricalParameters']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
