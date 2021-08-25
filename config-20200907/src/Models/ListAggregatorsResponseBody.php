<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody\aggregatorsResult;
use AlibabaCloud\Tea\Model;

class ListAggregatorsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var aggregatorsResult
     */
    public $aggregatorsResult;
    protected $_name = [
        'requestId'         => 'RequestId',
        'aggregatorsResult' => 'AggregatorsResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->aggregatorsResult) {
            $res['AggregatorsResult'] = null !== $this->aggregatorsResult ? $this->aggregatorsResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregatorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AggregatorsResult'])) {
            $model->aggregatorsResult = aggregatorsResult::fromMap($map['AggregatorsResult']);
        }

        return $model;
    }
}
