<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreatePublicAccountWithKeyPairAutoCreationRequest extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $recoverPassword;
    protected $_name = [
        'account'         => 'Account',
        'bizid'           => 'Bizid',
        'password'        => 'Password',
        'recoverPassword' => 'RecoverPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->recoverPassword) {
            $res['RecoverPassword'] = $this->recoverPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePublicAccountWithKeyPairAutoCreationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RecoverPassword'])) {
            $model->recoverPassword = $map['RecoverPassword'];
        }

        return $model;
    }
}
