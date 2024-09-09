<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceAccountRequest extends Model
{
    /**
     * @example ENABLE
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @example test
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'accountStatus' => 'accountStatus',
        'password'      => 'password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['accountStatus'] = $this->accountStatus;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountStatus'])) {
            $model->accountStatus = $map['accountStatus'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        return $model;
    }
}
