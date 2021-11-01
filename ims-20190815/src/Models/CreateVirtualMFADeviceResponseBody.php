<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateVirtualMFADeviceResponseBody\virtualMFADevice;
use AlibabaCloud\Tea\Model;

class CreateVirtualMFADeviceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var virtualMFADevice
     */
    public $virtualMFADevice;
    protected $_name = [
        'requestId'        => 'RequestId',
        'virtualMFADevice' => 'VirtualMFADevice',
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
        if (null !== $this->virtualMFADevice) {
            $res['VirtualMFADevice'] = null !== $this->virtualMFADevice ? $this->virtualMFADevice->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualMFADeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VirtualMFADevice'])) {
            $model->virtualMFADevice = virtualMFADevice::fromMap($map['VirtualMFADevice']);
        }

        return $model;
    }
}
