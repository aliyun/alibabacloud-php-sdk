<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectionRecordsResponseBody\connectionRecords;

class DescribeUserConnectionRecordsResponseBody extends Model
{
    /**
     * @var connectionRecords[]
     */
    public $connectionRecords;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connectionRecords' => 'ConnectionRecords',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->connectionRecords)) {
            Model::validateArray($this->connectionRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionRecords) {
            if (\is_array($this->connectionRecords)) {
                $res['ConnectionRecords'] = [];
                $n1 = 0;
                foreach ($this->connectionRecords as $item1) {
                    $res['ConnectionRecords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['ConnectionRecords'])) {
            if (!empty($map['ConnectionRecords'])) {
                $model->connectionRecords = [];
                $n1 = 0;
                foreach ($map['ConnectionRecords'] as $item1) {
                    $model->connectionRecords[$n1] = connectionRecords::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
