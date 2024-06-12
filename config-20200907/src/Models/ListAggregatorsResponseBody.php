<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody\aggregatorsResult;
use AlibabaCloud\Tea\Model;

class ListAggregatorsResponseBody extends Model
{
    /**
     * @description The account groups.
     *
     * @var aggregatorsResult
     */
    public $aggregatorsResult;

    /**
     * @description The request ID.
     *
     * @example 20C8526D-12C5-4336-BC72-EBD5D1BA732F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregatorsResult' => 'AggregatorsResult',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorsResult) {
            $res['AggregatorsResult'] = null !== $this->aggregatorsResult ? $this->aggregatorsResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AggregatorsResult'])) {
            $model->aggregatorsResult = aggregatorsResult::fromMap($map['AggregatorsResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
