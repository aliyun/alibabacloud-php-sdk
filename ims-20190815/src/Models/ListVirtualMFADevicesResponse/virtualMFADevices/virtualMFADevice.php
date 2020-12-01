<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponse\virtualMFADevices;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponse\virtualMFADevices\virtualMFADevice\user;
use AlibabaCloud\Tea\Model;

class virtualMFADevice extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $activateDate;

    /**
     * @var user
     */
    public $user;
    protected $_name = [
        'serialNumber' => 'SerialNumber',
        'activateDate' => 'ActivateDate',
        'user'         => 'User',
    ];

    public function validate()
    {
        Model::validateRequired('serialNumber', $this->serialNumber, true);
        Model::validateRequired('activateDate', $this->activateDate, true);
        Model::validateRequired('user', $this->user, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->activateDate) {
            $res['ActivateDate'] = $this->activateDate;
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
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['ActivateDate'])) {
            $model->activateDate = $map['ActivateDate'];
        }
        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }

        return $model;
    }
}
