<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceMonitorResponseBody extends Model
{
    /**
     * @description The monitoring frequency. Unit: seconds.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The ID of the request.
     *
     * @example 30829FD4-1A84-4C2A-A625-2EADECB95CA3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'period'    => 'Period',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
