<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Tea\Model;

class QueryHotelsResponseBody extends Model
{
    /**
     * @var QueryResult
     */
    public $queryResult;

    /**
     * @description Id of the request
     *
     * @example 78032F8B-0157-53F9-B1A8-3BD86ADE38D0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryResult' => 'queryResult',
        'requestId'   => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryResult) {
            $res['queryResult'] = null !== $this->queryResult ? $this->queryResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryHotelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['queryResult'])) {
            $model->queryResult = QueryResult::fromMap($map['queryResult']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
