<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesResponseBody\conditionalAccessPolicies;

use AlibabaCloud\Tea\Model;

class decisionConfig extends Model
{
    /**
     * @description Whether to enable session reuse for secondary authentication
     *
     * @example disabled
     *
     * @var string
     */
    public $activeSessionReuseStatus;

    /**
     * @description Decision action of the conditional access policy:
     * deny  Deny
     * allow Allow
     *
     * @example deny
     *
     * @var string
     */
    public $effect;

    /**
     * @description Re-authentication interval for the conditional access policy (in seconds) 300-86400
     *
     * @example 300
     *
     * @var int
     */
    public $mfaAuthenticationIntervalSeconds;

    /**
     * @description MFA types allowed by the conditional access policy
     *
     * @var string[]
     */
    public $mfaAuthenticationMethods;

    /**
     * @description Conditional Access Policy Mfa Type
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
