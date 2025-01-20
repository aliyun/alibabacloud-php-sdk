<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody\aggregatorsResult;

class ListAggregatorsResponseBody extends Model
{
    /**
     * @var aggregatorsResult
     */
    public $aggregatorsResult;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregatorsResult' => 'AggregatorsResult',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->aggregatorsResult) {
            $this->aggregatorsResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregatorsResult) {
            $res['AggregatorsResult'] = null !== $this->aggregatorsResult ? $this->aggregatorsResult->toArray($noStream) : $this->aggregatorsResult;
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
        if (isset($map['AggregatorsResult'])) {
            $model->aggregatorsResult = aggregatorsResult::fromMap($map['AggregatorsResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
