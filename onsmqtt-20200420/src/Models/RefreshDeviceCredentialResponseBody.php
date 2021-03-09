<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RefreshDeviceCredentialResponseBody\deviceCredential;
use AlibabaCloud\Tea\Model;

class RefreshDeviceCredentialResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceCredential
     */
    public $deviceCredential;
    protected $_name = [
        'requestId'        => 'RequestId',
        'deviceCredential' => 'DeviceCredential',
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
        if (null !== $this->deviceCredential) {
            $res['DeviceCredential'] = null !== $this->deviceCredential ? $this->deviceCredential->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshDeviceCredentialResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceCredential'])) {
            $model->deviceCredential = deviceCredential::fromMap($map['DeviceCredential']);
        }

        return $model;
    }
}
