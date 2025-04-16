<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponseBody\device;

class GetUserDeviceResponseBody extends Model
{
    /**
     * @var device
     */
    public $device;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'device' => 'Device',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->device) {
            $this->device->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = null !== $this->device ? $this->device->toArray($noStream) : $this->device;
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
        if (isset($map['Device'])) {
            $model->device = device::fromMap($map['Device']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
