<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices\virtualMFADevice\user;

class virtualMFADevice extends Model
{
    /**
     * @var string
     */
    public $activateDate;
    /**
     * @var string
     */
    public $serialNumber;
    /**
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
        if (null !== $this->user) {
            $this->user->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activateDate) {
            $res['ActivateDate'] = $this->activateDate;
        }

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toArray($noStream) : $this->user;
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
