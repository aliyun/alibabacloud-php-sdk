<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RefreshDeviceCredentialResponseBody\deviceCredential;
use AlibabaCloud\Tea\Model;

class RefreshDeviceCredentialResponseBody extends Model
{
    /**
     * @description The access credential of the device.
     *
     * @var deviceCredential
     */
    public $deviceCredential;

    /**
     * @description The request ID. This parameter is a common parameter.
     *
     * @example E4581CCF-62AF-44D9-B5B4-D1DBDC0F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceCredential' => 'DeviceCredential',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCredential) {
            $res['DeviceCredential'] = null !== $this->deviceCredential ? $this->deviceCredential->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DeviceCredential'])) {
            $model->deviceCredential = deviceCredential::fromMap($map['DeviceCredential']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
