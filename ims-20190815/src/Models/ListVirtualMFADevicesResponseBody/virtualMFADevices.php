<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices\virtualMFADevice;
use AlibabaCloud\Tea\Model;

class virtualMFADevices extends Model
{
    /**
     * @var virtualMFADevice[]
     */
    public $virtualMFADevice;
    protected $_name = [
        'virtualMFADevice' => 'VirtualMFADevice',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->virtualMFADevice) {
            $res['VirtualMFADevice'] = [];
            if (null !== $this->virtualMFADevice && \is_array($this->virtualMFADevice)) {
                $n = 0;
                foreach ($this->virtualMFADevice as $item) {
                    $res['VirtualMFADevice'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualMFADevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VirtualMFADevice'])) {
            if (!empty($map['VirtualMFADevice'])) {
                $model->virtualMFADevice = [];
                $n = 0;
                foreach ($map['VirtualMFADevice'] as $item) {
                    $model->virtualMFADevice[$n++] = null !== $item ? virtualMFADevice::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
