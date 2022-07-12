<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectionRecordsResponseBody\connectionRecords;
use AlibabaCloud\Tea\Model;

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
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionRecords) {
            $res['ConnectionRecords'] = [];
            if (null !== $this->connectionRecords && \is_array($this->connectionRecords)) {
                $n = 0;
                foreach ($this->connectionRecords as $item) {
                    $res['ConnectionRecords'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeUserConnectionRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionRecords'])) {
            if (!empty($map['ConnectionRecords'])) {
                $model->connectionRecords = [];
                $n                        = 0;
                foreach ($map['ConnectionRecords'] as $item) {
                    $model->connectionRecords[$n++] = null !== $item ? connectionRecords::fromMap($item) : $item;
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
