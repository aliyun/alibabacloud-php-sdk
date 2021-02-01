<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponseBody\slowLogTrend;
use AlibabaCloud\Tea\Model;

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
        'requestId'    => 'RequestId',
        'slowLogTrend' => 'SlowLogTrend',
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
        if (null !== $this->slowLogTrend) {
            $res['SlowLogTrend'] = null !== $this->slowLogTrend ? $this->slowLogTrend->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowLogTrendResponseBody
     */
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
