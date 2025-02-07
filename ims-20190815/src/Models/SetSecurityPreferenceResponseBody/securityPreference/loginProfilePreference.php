<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Dara\Model;

class loginProfilePreference extends Model
{
    /**
     * @var bool
     */
    public $allowUserToChangePassword;
    /**
     * @var bool
     */
    public $allowUserToLoginWithPasskey;
    /**
     * @var bool
     */
    public $enableSaveMFATicket;
    /**
     * @var string
     */
    public $loginNetworkMasks;
    /**
     * @var int
     */
    public $loginSessionDuration;
    /**
     * @var string
     */
    public $MFAOperationForLogin;
    /**
     * @var string
     */
    public $operationForRiskLogin;
    protected $_name = [
        'allowUserToChangePassword'   => 'AllowUserToChangePassword',
        'allowUserToLoginWithPasskey' => 'AllowUserToLoginWithPasskey',
        'enableSaveMFATicket'         => 'EnableSaveMFATicket',
        'loginNetworkMasks'           => 'LoginNetworkMasks',
        'loginSessionDuration'        => 'LoginSessionDuration',
        'MFAOperationForLogin'        => 'MFAOperationForLogin',
        'operationForRiskLogin'       => 'OperationForRiskLogin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUserToChangePassword) {
            $res['AllowUserToChangePassword'] = $this->allowUserToChangePassword;
        }

        if (null !== $this->allowUserToLoginWithPasskey) {
            $res['AllowUserToLoginWithPasskey'] = $this->allowUserToLoginWithPasskey;
        }

        if (null !== $this->enableSaveMFATicket) {
            $res['EnableSaveMFATicket'] = $this->enableSaveMFATicket;
        }

        if (null !== $this->loginNetworkMasks) {
            $res['LoginNetworkMasks'] = $this->loginNetworkMasks;
        }

        if (null !== $this->loginSessionDuration) {
            $res['LoginSessionDuration'] = $this->loginSessionDuration;
        }

        if (null !== $this->MFAOperationForLogin) {
            $res['MFAOperationForLogin'] = $this->MFAOperationForLogin;
        }

        if (null !== $this->operationForRiskLogin) {
            $res['OperationForRiskLogin'] = $this->operationForRiskLogin;
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
        if (isset($map['AllowUserToChangePassword'])) {
            $model->allowUserToChangePassword = $map['AllowUserToChangePassword'];
        }

        if (isset($map['AllowUserToLoginWithPasskey'])) {
            $model->allowUserToLoginWithPasskey = $map['AllowUserToLoginWithPasskey'];
        }

        if (isset($map['EnableSaveMFATicket'])) {
            $model->enableSaveMFATicket = $map['EnableSaveMFATicket'];
        }

        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }

        if (isset($map['LoginSessionDuration'])) {
            $model->loginSessionDuration = $map['LoginSessionDuration'];
        }

        if (isset($map['MFAOperationForLogin'])) {
            $model->MFAOperationForLogin = $map['MFAOperationForLogin'];
        }

        if (isset($map['OperationForRiskLogin'])) {
            $model->operationForRiskLogin = $map['OperationForRiskLogin'];
        }

        return $model;
    }
}
