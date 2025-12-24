<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveValueResponseBody\predictiveValues;

class QueryPredictiveValueResponseBody extends Model
{
    /**
     * @var predictiveValues
     */
    public $predictiveValues;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'predictiveValues' => 'PredictiveValues',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->predictiveValues) {
            $this->predictiveValues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->predictiveValues) {
            $res['PredictiveValues'] = null !== $this->predictiveValues ? $this->predictiveValues->toArray($noStream) : $this->predictiveValues;
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
        if (isset($map['PredictiveValues'])) {
            $model->predictiveValues = predictiveValues::fromMap($map['PredictiveValues']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
