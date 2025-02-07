<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->virtualMFADeviceName) {
            $res['VirtualMFADeviceName'] = $this->virtualMFADeviceName;
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
        if (isset($map['VirtualMFADeviceName'])) {
            $model->virtualMFADeviceName = $map['VirtualMFADeviceName'];
        }

        return $model;
    }
}
