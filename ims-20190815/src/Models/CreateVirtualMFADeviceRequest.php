<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateVirtualMFADeviceRequest extends Model
{
    /**
     * @var string
     */
    public $virtualMFADeviceName;
    protected $_name = [
        'virtualMFADeviceName' => 'VirtualMFADeviceName',
    ];

    public function validate()
    {
        Model::validateRequired('virtualMFADeviceName', $this->virtualMFADeviceName, true);
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
