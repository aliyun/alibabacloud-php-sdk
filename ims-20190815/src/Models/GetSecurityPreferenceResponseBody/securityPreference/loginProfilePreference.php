<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Tea\Model;

class loginProfilePreference extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableSaveMFATicket;

    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $loginNetworkMasks;

    /**
     * @example 6
     *
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
        'allowUserToChangePassword' => 'AllowUserToChangePassword',
        'enableSaveMFATicket'       => 'EnableSaveMFATicket',
        'loginNetworkMasks'         => 'LoginNetworkMasks',
        'loginSessionDuration'      => 'LoginSessionDuration',
        'MFAOperationForLogin'      => 'MFAOperationForLogin',
        'operationForRiskLogin'     => 'OperationForRiskLogin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowUserToChangePassword) {
            $res['AllowUserToChangePassword'] = $this->allowUserToChangePassword;
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

    /**
     * @param array $map
     *
     * @return loginProfilePreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowUserToChangePassword'])) {
            $model->allowUserToChangePassword = $map['AllowUserToChangePassword'];
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
