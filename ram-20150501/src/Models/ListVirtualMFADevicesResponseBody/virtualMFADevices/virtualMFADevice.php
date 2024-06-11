<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices\virtualMFADevice\user;
use AlibabaCloud\Tea\Model;

class virtualMFADevice extends Model
{
    /**
     * @description The time when the MFA device was enabled.
     *
     * @example 2015-02-18T17:22:08Z
     *
     * @var string
     */
    public $activateDate;

    /**
     * @description The serial number of the MFA device.
     *
     * @example acs:ram::123456789012****:mfa/device002
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The basic information of the RAM user to which the MFA device is attached.
     *
     * @var user
     */
    public $user;
    protected $_name = [
        'activateDate' => 'ActivateDate',
        'serialNumber' => 'SerialNumber',
        'user'         => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activateDate) {
            $res['ActivateDate'] = $this->activateDate;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualMFADevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivateDate'])) {
            $model->activateDate = $map['ActivateDate'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }

        return $model;
    }
}
