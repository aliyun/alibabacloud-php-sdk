<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices\virtualMFADevice;

class virtualMFADevices extends Model
{
    /**
     * @var virtualMFADevice[]
     */
    public $virtualMFADevice;
    protected $_name = [
        'virtualMFADevice' => 'VirtualMFADevice',
    ];

    public function validate()
    {
        if (\is_array($this->virtualMFADevice)) {
            Model::validateArray($this->virtualMFADevice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->virtualMFADevice) {
            if (\is_array($this->virtualMFADevice)) {
                $res['VirtualMFADevice'] = [];
                $n1                      = 0;
                foreach ($this->virtualMFADevice as $item1) {
                    $res['VirtualMFADevice'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['VirtualMFADevice'])) {
            if (!empty($map['VirtualMFADevice'])) {
                $model->virtualMFADevice = [];
                $n1                      = 0;
                foreach ($map['VirtualMFADevice'] as $item1) {
                    $model->virtualMFADevice[$n1++] = virtualMFADevice::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
