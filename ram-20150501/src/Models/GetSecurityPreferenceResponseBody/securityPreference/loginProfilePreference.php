<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Tea\Model;

class loginProfilePreference extends Model
{
    /**
     * @description Indicates whether RAM users can change their passwords. Valid values:
     *
     *   true: RAM users can change their passwords.
     *   false: RAM users cannot change their passwords.
     *
     * @example true
     *
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @description Indicates whether RAM users can save security codes for multi-factor authentication (MFA) during logon. Each security code is valid for seven days. Valid values:
     *
     *   true: RAM users can save MFA security codes during logon.
     *   false: RAM users cannot save MFA security codes during logon.
     *
     * @example false
     *
     * @var bool
     */
    public $enableSaveMFATicket;

    /**
     * @description The subnet mask that indicates the IP addresses from which logon to the Alibaba Cloud Management Console is allowed. This parameter applies to password-based logon and single sign-on (SSO). However, this parameter does not apply to API calls that are authenticated based on AccessKey pairs.
     *
     *   If a subnet mask is specified, RAM users can log on to the Alibaba Cloud Management Console only by using the IP addresses in the subnetwork.
     *   If no subnet mask is specified, RAM users can log on to the Alibaba Cloud Management Console by using all IP addresses.
     *
     * If more than one subnet mask is specified, the masks are separated with semicolons (;), for example, 192.168.0.0/16;10.0.0.0/8.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $loginNetworkMasks;

    /**
     * @description The validity period of a logon session of a RAM user. Unit: hours.
     *
     * @example 6
     *
     * @var int
     */
    public $loginSessionDuration;
    protected $_name = [
        'allowUserToChangePassword' => 'AllowUserToChangePassword',
        'enableSaveMFATicket'       => 'EnableSaveMFATicket',
        'loginNetworkMasks'         => 'LoginNetworkMasks',
        'loginSessionDuration'      => 'LoginSessionDuration',
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

        return $model;
    }
}
