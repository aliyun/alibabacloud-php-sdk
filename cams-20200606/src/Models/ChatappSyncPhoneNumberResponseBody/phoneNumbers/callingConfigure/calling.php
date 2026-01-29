<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ChatappSyncPhoneNumberResponseBody\phoneNumbers\callingConfigure;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappSyncPhoneNumberResponseBody\phoneNumbers\callingConfigure\calling\callHours;

class calling extends Model
{
    /**
     * @var callHours
     */
    public $callHours;

    /**
     * @var string
     */
    public $callIconVisibility;

    /**
     * @var string
     */
    public $callbackPermissionStatus;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'callHours' => 'CallHours',
        'callIconVisibility' => 'CallIconVisibility',
        'callbackPermissionStatus' => 'CallbackPermissionStatus',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->callHours) {
            $this->callHours->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callHours) {
            $res['CallHours'] = null !== $this->callHours ? $this->callHours->toArray($noStream) : $this->callHours;
        }

        if (null !== $this->callIconVisibility) {
            $res['CallIconVisibility'] = $this->callIconVisibility;
        }

        if (null !== $this->callbackPermissionStatus) {
            $res['CallbackPermissionStatus'] = $this->callbackPermissionStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CallHours'])) {
            $model->callHours = callHours::fromMap($map['CallHours']);
        }

        if (isset($map['CallIconVisibility'])) {
            $model->callIconVisibility = $map['CallIconVisibility'];
        }

        if (isset($map['CallbackPermissionStatus'])) {
            $model->callbackPermissionStatus = $map['CallbackPermissionStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
