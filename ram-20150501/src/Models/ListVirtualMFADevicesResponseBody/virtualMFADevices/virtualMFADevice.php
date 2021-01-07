<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices\virtualMFADevice\user;
use AlibabaCloud\Tea\Model;

class virtualMFADevice extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var user
     */
    public $user;

    /**
     * @var string
     */
    public $activateDate;
    protected $_name = [
        'serialNumber' => 'SerialNumber',
        'user'         => 'User',
        'activateDate' => 'ActivateDate',
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
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }
        if (null !== $this->activateDate) {
            $res['ActivateDate'] = $this->activateDate;
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
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }
        if (isset($map['ActivateDate'])) {
            $model->activateDate = $map['ActivateDate'];
        }

        return $model;
    }
}
