<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class EncryptPhoneNumRequest extends Model
{
    /**
     * @example ccc_xp_pre***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 130****0000
     *
     * @var string
     */
    public $phoneNum;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'phoneNum'   => 'PhoneNum',
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
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncryptPhoneNumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }

        return $model;
    }
}
