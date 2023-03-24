<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\UnbindMFADeviceResponseBody\MFADevice;
use AlibabaCloud\Tea\Model;

class UnbindMFADeviceResponseBody extends Model
{
    /**
     * @description The information of the MFA device.
     *
     * @var MFADevice
     */
    public $MFADevice;

    /**
     * @description The ID of the request.
     *
     * @example A26CB3E9-1021-452A-AC57-3134B3BA0E4C
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
     * @return UnbindMFADeviceResponseBody
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
