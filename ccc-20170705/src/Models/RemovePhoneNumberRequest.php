<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class RemovePhoneNumberRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $phoneNumberId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'phoneNumberId' => 'PhoneNumberId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->phoneNumberId) {
            $res['PhoneNumberId'] = $this->phoneNumberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemovePhoneNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PhoneNumberId'])) {
            $model->phoneNumberId = $map['PhoneNumberId'];
        }

        return $model;
    }
}
