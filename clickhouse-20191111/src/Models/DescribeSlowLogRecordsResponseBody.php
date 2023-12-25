<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponseBody\slowLogRecords;
use AlibabaCloud\Tea\Model;

class DescribeSlowLogRecordsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example DF203CC8-5F68-5E3F-8050-3C77DD65731A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details about the slow query logs.
     *
     * @var slowLogRecords
     */
    public $slowLogRecords;
    protected $_name = [
        'requestId'      => 'RequestId',
        'slowLogRecords' => 'SlowLogRecords',
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
        if (null !== $this->slowLogRecords) {
            $res['SlowLogRecords'] = null !== $this->slowLogRecords ? $this->slowLogRecords->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowLogRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlowLogRecords'])) {
            $model->slowLogRecords = slowLogRecords::fromMap($map['SlowLogRecords']);
        }

        return $model;
    }
}
