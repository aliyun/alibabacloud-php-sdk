<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingInfoResponseBody;

use AlibabaCloud\Tea\Model;

class MFAAuthenticationSettingInfo extends Model
{
    /**
     * @description The MFA policy of all users. Valid values:
     *
     *   Enabled: MFA is enabled for all users.
     *   Byuser: User-specific settings are applied. For more information about how to configure MFA for a single user, see [UpdateUserMFAAuthenticationSettings](~~450135~~).
     *   Disabled: MFA is disabled for all users.
     *   OnlyRiskyLogin: MFA is required only for unusual logons.
     *
     * @example OnlyRiskyLogin
     *
     * @var string
     */
    public $mfaAuthenticationAdvanceSettings;

    /**
     * @description The MFA policy for unusual logons. Valid values:
     *
     *   Autonomous: MFA is prompted for users who initiated unusual logons. However, the users are allowed to skip MFA. If an MFA device is bound to a user who initiated an unusual logon, the user must pass MFA.
     *   EnforceVerify: MFA is required. If no MFA devices are bound to a user who initiated an unusual logon, the user must bind an MFA device. If an MFA device is already bound to a user who initiated an unusual logon, the user must pass MFA.
     *
     * > This parameter is displayed only when Byuser or OnlyRiskyLogin is returned for the MfaAuthenticationAdvanceSettings parameter.
     * @example EnforceVerify
     *
     * @var string
     */
    public $operationForRiskLogin;
    protected $_name = [
        'mfaAuthenticationAdvanceSettings' => 'MfaAuthenticationAdvanceSettings',
        'operationForRiskLogin'            => 'OperationForRiskLogin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mfaAuthenticationAdvanceSettings) {
            $res['MfaAuthenticationAdvanceSettings'] = $this->mfaAuthenticationAdvanceSettings;
        }
        if (null !== $this->operationForRiskLogin) {
            $res['OperationForRiskLogin'] = $this->operationForRiskLogin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MFAAuthenticationSettingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MfaAuthenticationAdvanceSettings'])) {
            $model->mfaAuthenticationAdvanceSettings = $map['MfaAuthenticationAdvanceSettings'];
        }
        if (isset($map['OperationForRiskLogin'])) {
            $model->operationForRiskLogin = $map['OperationForRiskLogin'];
        }

        return $model;
    }
}
