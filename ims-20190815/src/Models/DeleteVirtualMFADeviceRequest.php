<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class DeleteVirtualMFADeviceRequest extends Model
{
    /**
     * @description The serial number of the MFA device.
     *
     * This parameter is required.
     * @example acs:ram::123456789012****:mfa/device002
     *
     * @var string
     */
    public $serialNumber;
    protected $_name = [
        'serialNumber' => 'SerialNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVirtualMFADeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        return $model;
    }
}
