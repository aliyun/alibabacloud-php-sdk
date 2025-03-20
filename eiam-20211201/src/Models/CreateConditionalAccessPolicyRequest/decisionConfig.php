<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateConditionalAccessPolicyRequest;

use AlibabaCloud\Tea\Model;

class decisionConfig extends Model
{
    /**
     * @description Whether to enable session reuse
     *
     * @example enabled
     *
     * @var string
     */
    public $activeSessionReuseStatus;

    /**
     * @description Decision action for the conditional access policy, with the following options:
     *
     * - allow: Allow.
     * - deny: Deny.
     *
     * @example allow or deny
     *
     * @var string
     */
    public $effect;

    /**
     * @description Re-authentication interval (in seconds) for the conditional access policy
     *
     * - Maximum MFA re-authentication interval: 86400
     * - Minimum MFA re-authentication interval: 300
     *
     * @example 500
     *
     * @var int
     */
    public $mfaAuthenticationIntervalSeconds;

    /**
     * @description Allowed MFA types for the conditional access policy, with the following options:
     * - ia_otp_sms: SMS verification code
     * - ia_otp_email: Email verification code
     * - ia_totp: OTP dynamic password
     * - ia_webauthn: WebAuthn
     *
     * @var string[]
     */
    public $mfaAuthenticationMethods;

    /**
     * @description MFA type for the conditional access policy, with the following options:
     *
     * - directly_access: Direct access
     * - mfa_required: MFA required
     *
     * @example directly_access
     *
     * @var string
     */
    public $mfaType;
    protected $_name = [
        'activeSessionReuseStatus' => 'ActiveSessionReuseStatus',
        'effect' => 'Effect',
        'mfaAuthenticationIntervalSeconds' => 'MfaAuthenticationIntervalSeconds',
        'mfaAuthenticationMethods' => 'MfaAuthenticationMethods',
        'mfaType' => 'MfaType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeSessionReuseStatus) {
            $res['ActiveSessionReuseStatus'] = $this->activeSessionReuseStatus;
        }
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->mfaAuthenticationIntervalSeconds) {
            $res['MfaAuthenticationIntervalSeconds'] = $this->mfaAuthenticationIntervalSeconds;
        }
        if (null !== $this->mfaAuthenticationMethods) {
            $res['MfaAuthenticationMethods'] = $this->mfaAuthenticationMethods;
        }
        if (null !== $this->mfaType) {
            $res['MfaType'] = $this->mfaType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return decisionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveSessionReuseStatus'])) {
            $model->activeSessionReuseStatus = $map['ActiveSessionReuseStatus'];
        }
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['MfaAuthenticationIntervalSeconds'])) {
            $model->mfaAuthenticationIntervalSeconds = $map['MfaAuthenticationIntervalSeconds'];
        }
        if (isset($map['MfaAuthenticationMethods'])) {
            if (!empty($map['MfaAuthenticationMethods'])) {
                $model->mfaAuthenticationMethods = $map['MfaAuthenticationMethods'];
            }
        }
        if (isset($map['MfaType'])) {
            $model->mfaType = $map['MfaType'];
        }

        return $model;
    }
}
