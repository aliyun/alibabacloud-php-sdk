<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RegisterDeviceCredentialResponseBody\deviceCredential;

class RegisterDeviceCredentialResponseBody extends Model
{
    /**
     * @var deviceCredential
     */
    public $deviceCredential;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceCredential' => 'DeviceCredential',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->deviceCredential) {
            $this->deviceCredential->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceCredential) {
            $res['DeviceCredential'] = null !== $this->deviceCredential ? $this->deviceCredential->toArray($noStream) : $this->deviceCredential;
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
        if (isset($map['DeviceCredential'])) {
            $model->deviceCredential = deviceCredential::fromMap($map['DeviceCredential']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
