<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserMFAInfoResponseBody\MFADevice;
use AlibabaCloud\Tea\Model;

class GetUserMFAInfoResponseBody extends Model
{
    /**
     * @description The information about the MFA device that is attached to the RAM user.
     *
     * @var MFADevice
     */
    public $MFADevice;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'MFADevice' => 'MFADevice',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->MFADevice) {
            $res['MFADevice'] = null !== $this->MFADevice ? $this->MFADevice->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserMFAInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MFADevice'])) {
            $model->MFADevice = MFADevice::fromMap($map['MFADevice']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
