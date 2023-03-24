<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\UnbindMFADeviceResponseBody;

use AlibabaCloud\Tea\Model;

class MFADevice extends Model
{
    /**
     * @description The serial number of the MFA device.
     *
     * @example acs:ram::151298381312****:mfa/device001
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
     * @return MFADevice
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
