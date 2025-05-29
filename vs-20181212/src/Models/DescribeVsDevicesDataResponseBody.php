<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDevicesDataResponseBody\devicesDataPerInterval;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->devicesDataPerInterval) {
            $this->devicesDataPerInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devicesDataPerInterval) {
            $res['DevicesDataPerInterval'] = null !== $this->devicesDataPerInterval ? $this->devicesDataPerInterval->toArray($noStream) : $this->devicesDataPerInterval;
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
        if (isset($map['DevicesDataPerInterval'])) {
            $model->devicesDataPerInterval = devicesDataPerInterval::fromMap($map['DevicesDataPerInterval']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
