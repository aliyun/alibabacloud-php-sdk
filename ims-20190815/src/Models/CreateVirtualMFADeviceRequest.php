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

    /**
     * @var string
     */
    public $akProxySuffix;
    protected $_name = [
        'virtualMFADeviceName' => 'VirtualMFADeviceName',
        'akProxySuffix'        => 'AkProxySuffix',
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
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
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
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }

        return $model;
    }
}
