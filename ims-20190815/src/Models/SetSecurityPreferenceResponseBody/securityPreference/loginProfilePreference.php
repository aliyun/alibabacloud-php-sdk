<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Tea\Model;

class loginProfilePreference extends Model
{
    /**
     * @description Indicates whether RAM users can change their passwords.
     *
     * @example true
     *
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @description Allow direct login using passkey.
     *
     * - false
     * @var bool
     */
    public $allowUserToLoginWithPasskey;

    /**
     * @description Indicates whether RAM users can remember the MFA devices for seven days.
     *
     * @example false
     *
     * @var bool
     */
    public $enableSaveMFATicket;

    /**
     * @description The subnet mask.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $loginNetworkMasks;

    /**
     * @description The validity period of the logon session of RAM users.
     *
     * @example 6
     *
     * @var int
     */
    public $loginSessionDuration;

    /**
     * @description Indicates whether MFA is required for all RAM users when they log on to the Alibaba Cloud Management Console.
     *
     * @example adaptive
     *
     * @var string
     */
    public $MFAOperationForLogin;

    /**
     * @description Indicates whether to enable MFA for RAM users who initiated unusual logons.
     *
     * @example autonomous
     *
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
    }

    public function toMap()
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
