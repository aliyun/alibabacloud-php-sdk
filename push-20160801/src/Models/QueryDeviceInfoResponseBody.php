<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceInfoResponseBody\deviceInfo;

class QueryDeviceInfoResponseBody extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toArray($noStream) : $this->deviceInfo;
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
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
