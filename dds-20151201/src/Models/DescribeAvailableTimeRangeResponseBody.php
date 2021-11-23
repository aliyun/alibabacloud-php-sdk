<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableTimeRangeResponseBody\timeRange;
use AlibabaCloud\Tea\Model;

class DescribeAvailableTimeRangeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var timeRange
     */
    public $timeRange;
    protected $_name = [
        'requestId' => 'RequestId',
        'timeRange' => 'TimeRange',
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
        if (null !== $this->timeRange) {
            $res['TimeRange'] = null !== $this->timeRange ? $this->timeRange->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableTimeRangeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeRange'])) {
            $model->timeRange = timeRange::fromMap($map['TimeRange']);
        }

        return $model;
    }
}
