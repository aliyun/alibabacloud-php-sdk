<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterMonitorResponseBody extends Model
{
    /**
     * @description The interval at which monitoring data is collected. Unit: seconds.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The request ID.
     *
     * @example 593AE1C5-B70C-463F-9207-074639******
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
     * @return DescribeDBClusterMonitorResponseBody
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
