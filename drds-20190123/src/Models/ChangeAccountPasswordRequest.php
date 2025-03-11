<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ChangeAccountPasswordRequest extends Model
{
    /**
     * @description The name of the member account.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The ID of the DRDS instance.
     *
     * This parameter is required.
     * @example drds********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The new password.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'accountName'    => 'AccountName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'password'       => 'Password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeAccountPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
