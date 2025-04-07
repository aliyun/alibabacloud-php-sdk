<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Dara\Model;

class QueryRestaurantsResponseBody extends Model
{
    /**
     * @var QueryResult
     */
    public $queryResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryResult' => 'queryResult',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->queryResult) {
            $this->queryResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryResult) {
            $res['queryResult'] = null !== $this->queryResult ? $this->queryResult->toArray($noStream) : $this->queryResult;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['queryResult'])) {
            $model->queryResult = QueryResult::fromMap($map['queryResult']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
