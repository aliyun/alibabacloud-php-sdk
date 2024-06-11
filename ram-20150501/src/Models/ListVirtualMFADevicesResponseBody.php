<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices;
use AlibabaCloud\Tea\Model;

class ListVirtualMFADevicesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of MFA devices.
     *
     * @var virtualMFADevices
     */
    public $virtualMFADevices;
    protected $_name = [
        'requestId'         => 'RequestId',
        'virtualMFADevices' => 'VirtualMFADevices',
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
        if (null !== $this->virtualMFADevices) {
            $res['VirtualMFADevices'] = null !== $this->virtualMFADevices ? $this->virtualMFADevices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirtualMFADevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VirtualMFADevices'])) {
            $model->virtualMFADevices = virtualMFADevices::fromMap($map['VirtualMFADevices']);
        }

        return $model;
    }
}
