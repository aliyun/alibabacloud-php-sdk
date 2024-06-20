<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CreateAntChainAccountWithKeyPairAutoCreationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example accountname
     *
     * @var string
     */
    public $account;

    /**
     * @description This parameter is required.
     *
     * @example 1q8B5R9p
     *
     * @var string
     */
    public $antChainId;

    /**
     * @description This parameter is required.
     *
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @description This parameter is required.
     *
     * @example ************
     *
     * @var string
     */
    public $recoverPassword;
    protected $_name = [
        'account'         => 'Account',
        'antChainId'      => 'AntChainId',
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
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
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
     * @return CreateAntChainAccountWithKeyPairAutoCreationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
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
