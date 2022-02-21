<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDevicesDataResponseBody\devicesDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVsDevicesDataResponseBody extends Model
{
    /**
     * @var devicesDataPerInterval
     */
    public $devicesDataPerInterval;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'devicesDataPerInterval' => 'DevicesDataPerInterval',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devicesDataPerInterval) {
            $res['DevicesDataPerInterval'] = null !== $this->devicesDataPerInterval ? $this->devicesDataPerInterval->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsDevicesDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DevicesDataPerInterval'])) {
            $model->devicesDataPerInterval = devicesDataPerInterval::fromMap($map['DevicesDataPerInterval']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
