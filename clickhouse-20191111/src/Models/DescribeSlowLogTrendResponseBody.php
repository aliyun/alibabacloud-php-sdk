<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponseBody\slowLogTrend;

class DescribeSlowLogTrendResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slowLogTrend
     */
    public $slowLogTrend;
    protected $_name = [
        'requestId' => 'RequestId',
        'slowLogTrend' => 'SlowLogTrend',
    ];

    public function validate()
    {
        if (null !== $this->slowLogTrend) {
            $this->slowLogTrend->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slowLogTrend) {
            $res['SlowLogTrend'] = null !== $this->slowLogTrend ? $this->slowLogTrend->toArray($noStream) : $this->slowLogTrend;
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

        if (isset($map['SlowLogTrend'])) {
            $model->slowLogTrend = slowLogTrend::fromMap($map['SlowLogTrend']);
        }

        return $model;
    }
}
