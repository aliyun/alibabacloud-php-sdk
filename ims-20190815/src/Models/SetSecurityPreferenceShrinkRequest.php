<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetSecurityPreferenceShrinkRequest extends Model
{
    /**
     * @description Specifies whether RAM users can change their passwords. Valid values:
     *
     *   true (default)
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @description Specifies whether RAM users can manage their AccessKey pairs. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $allowUserToManageAccessKeys;

    /**
     * @description Specifies whether RAM users can manage their MFA devices. Valid values:
     *
     *   true (default)
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $allowUserToManageMFADevices;

    /**
     * @description Specifies whether RAM users can manage their personal DingTalk accounts, such as binding and unbinding of the accounts. Valid values:
     *
     *   true (default)
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $allowUserToManagePersonalDingTalk;

    /**
     * @description Specifies whether RAM users can remember the MFA devices for seven days. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $enableSaveMFATicket;

    /**
     * @description The subnet mask that specifies the IP addresses from which you can log on to the Alibaba Cloud Management Console. This parameter takes effect on password-based logon and single sign-on (SSO). This parameter does not take effect on API calls that are authenticated by using AccessKey pairs.
     *
     *   If you specify a subnet mask, RAM users can use only the IP addresses in the subnet mask to log on to the Alibaba Cloud Management Console.
     *   If you do not specify a subnet mask, RAM users can use all IP addresses to log on to the Alibaba Cloud Management Console.
     *
     * You can specify up to 40 subnet masks. The total length of the subnet masks can be a maximum of 512 characters.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $loginNetworkMasks;

    /**
     * @description The validity period of the logon session of RAM users.
     *
     * Default value: 6.
     * @example 6
     *
     * @var int
     */
    public $loginSessionDuration;

    /**
     * @description Specifies whether MFA is required for all RAM users when they log on to the Alibaba Cloud Management Console. This parameter is used to replace EnforceMFAForLogin. EnforceMFAForLogin is still valid. However, we recommend that you use MFAOperationForLogin. Valid values:
     *
     *   mandatory: MFA is required for all RAM users. If you use EnforceMFAForLogin, set the value to true.
     *   independent (default): User-specific settings are applied. If you use EnforceMFAForLogin, set the value to false.
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
     *   autonomous (default): yes. MFA is prompted for RAM users who initiated unusual logons. However, the RAM users are allowed to skip MFA.
     *   enforceVerify: MFA is prompted for RAM users who initiated unusual logons and the RAM users cannot skip MFA.
     *
     * @example autonomous
     *
     * @var string
     */
    public $operationForRiskLogin;

    /**
     * @description The MFA methods.
     *
     * @var string
     */
    public $verificationTypesShrink;
    protected $_name = [
        'allowUserToChangePassword'         => 'AllowUserToChangePassword',
        'allowUserToManageAccessKeys'       => 'AllowUserToManageAccessKeys',
        'allowUserToManageMFADevices'       => 'AllowUserToManageMFADevices',
        'allowUserToManagePersonalDingTalk' => 'AllowUserToManagePersonalDingTalk',
        'enableSaveMFATicket'               => 'EnableSaveMFATicket',
        'loginNetworkMasks'                 => 'LoginNetworkMasks',
        'loginSessionDuration'              => 'LoginSessionDuration',
        'MFAOperationForLogin'              => 'MFAOperationForLogin',
        'operationForRiskLogin'             => 'OperationForRiskLogin',
        'verificationTypesShrink'           => 'VerificationTypes',
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
        if (null !== $this->allowUserToManageAccessKeys) {
            $res['AllowUserToManageAccessKeys'] = $this->allowUserToManageAccessKeys;
        }
        if (null !== $this->allowUserToManageMFADevices) {
            $res['AllowUserToManageMFADevices'] = $this->allowUserToManageMFADevices;
        }
        if (null !== $this->allowUserToManagePersonalDingTalk) {
            $res['AllowUserToManagePersonalDingTalk'] = $this->allowUserToManagePersonalDingTalk;
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
        if (null !== $this->verificationTypesShrink) {
            $res['VerificationTypes'] = $this->verificationTypesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSecurityPreferenceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowUserToChangePassword'])) {
            $model->allowUserToChangePassword = $map['AllowUserToChangePassword'];
        }
        if (isset($map['AllowUserToManageAccessKeys'])) {
            $model->allowUserToManageAccessKeys = $map['AllowUserToManageAccessKeys'];
        }
        if (isset($map['AllowUserToManageMFADevices'])) {
            $model->allowUserToManageMFADevices = $map['AllowUserToManageMFADevices'];
        }
        if (isset($map['AllowUserToManagePersonalDingTalk'])) {
            $model->allowUserToManagePersonalDingTalk = $map['AllowUserToManagePersonalDingTalk'];
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
        if (isset($map['VerificationTypes'])) {
            $model->verificationTypesShrink = $map['VerificationTypes'];
        }

        return $model;
    }
}
