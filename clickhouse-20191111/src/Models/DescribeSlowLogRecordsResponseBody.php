<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponseBody\slowLogRecords;

class DescribeSlowLogRecordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slowLogRecords
     */
    public $slowLogRecords;
    protected $_name = [
        'requestId' => 'RequestId',
        'slowLogRecords' => 'SlowLogRecords',
    ];

    public function validate()
    {
        if (null !== $this->slowLogRecords) {
            $this->slowLogRecords->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slowLogRecords) {
            $res['SlowLogRecords'] = null !== $this->slowLogRecords ? $this->slowLogRecords->toArray($noStream) : $this->slowLogRecords;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlowLogRecords'])) {
            $model->slowLogRecords = slowLogRecords::fromMap($map['SlowLogRecords']);
        }

        return $model;
    }
}
