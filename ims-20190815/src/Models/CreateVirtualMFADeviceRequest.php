<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateVirtualMFADeviceRequest extends Model
{
    /**
     * @description The name of the MFA device.
     *
     * The name must be 1 to 64 characters in length and can contain letters, digits, and hyphens (-).
     * @example device001
     *
     * @var string
     */
    public $virtualMFADeviceName;
    protected $_name = [
        'virtualMFADeviceName' => 'VirtualMFADeviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->virtualMFADeviceName) {
            $res['VirtualMFADeviceName'] = $this->virtualMFADeviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualMFADeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VirtualMFADeviceName'])) {
            $model->virtualMFADeviceName = $map['VirtualMFADeviceName'];
        }

        return $model;
    }
}
