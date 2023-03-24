<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Tea\Model;

class loginProfilePreference extends Model
{
    /**
     * @description Specifies whether RAM users can change their passwords. Valid values:
     *
     *   true: yes
     *   false: no
     *
     * @example true
     *
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @description Specifies whether to remember the multi-factor authentication (MFA) devices for seven days. Valid values:
     *
     *   true: yes
     *   false: no
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
     * @description The validity period of the logon session of RAM users. Unit: hours.
     *
     * @example 6
     *
     * @var int
     */
    public $loginSessionDuration;

    /**
     * @description Specifies whether MFA is required for all RAM users when they log on to the Alibaba Cloud Management Console. This parameter is used to replace the EnforceMFAForLogin parameter. The EnforceMFAForLogin parameter is still valid. However, we recommend that you use the MFAOperationForLogin parameter. Valid values:
     *
     *   mandatory: MFA is required for all RAM users. If you use the EnforceMFAForLogin parameter, set the value to true.
     *   independent: User-specific settings are applied. This is the default value. If you use the EnforceMFAForLogin parameter, set the value to false.
     *   adaptive: MFA is required only for RAM users who initiated unusual logons.
     *
     * @example adaptive
     *
     * @var string
     */
    public $MFAOperationForLogin;

    /**
     * @description Specifies whether to enable MFA for RAM users who initiated unusual logons. Valid values:
     *
     *   autonomous: yes. MFA is prompted for RAM users who initiated unusual logons. However, the RAM users are allowed to skip MFA. This is the default value.
     *   enforceVerify: no.
     *
     * @example autonomous
     *
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
