<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ExecuteLogQueryResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $queryResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryResult' => 'QueryResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->queryResult)) {
            Model::validateArray($this->queryResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryResult) {
            if (\is_array($this->queryResult)) {
                $res['QueryResult'] = [];
                $n1 = 0;
                foreach ($this->queryResult as $item1) {
                    $res['QueryResult'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['QueryResult'])) {
            if (!empty($map['QueryResult'])) {
                $model->queryResult = [];
                $n1 = 0;
                foreach ($map['QueryResult'] as $item1) {
                    $model->queryResult[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
