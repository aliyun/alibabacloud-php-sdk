<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class SetSecurityPreferenceRequest extends Model
{
    /**
     * @description Specifies whether RAM users can change their passwords. Valid values:
     *
     *   true: RAM users can change their passwords. This is the default value.
     *   false: RAM users cannot change their passwords.
     *
     * @example true
     *
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @description Specifies whether RAM users can manage their AccessKey pairs. Valid values:
     *
     *   true: RAM users can manage their AccessKey pairs.
     *   false: RAM users cannot manage their AccessKey pairs. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $allowUserToManageAccessKeys;

    /**
     * @description Specifies whether RAM users can manage their MFA devices. Valid values:
     *
     *   true: RAM users can manage their MFA devices. This is the default value.
     *   false: RAM users cannot manage their MFA devices.
     *
     * @example true
     *
     * @var bool
     */
    public $allowUserToManageMFADevices;

    /**
     * @description Specifies whether RAM users can manage their public keys. Valid values:
     *
     *   true: RAM users can manage their public keys.
     *   false: RAM users cannot manage their public keys. This is the default value.
     *
     * >  This parameter is valid only for the Japan site.
     * @example false
     *
     * @var bool
     */
    public $allowUserToManagePublicKeys;

    /**
     * @description Specifies whether to remember the multi-factor authentication (MFA) devices of Resource Access Management (RAM) users for seven days. Valid values:
     *
     *   true: remembers the MFA devices of RAM users for seven days.
     *   false: does not remember the MFA devices of RAM users for seven days.
     *
     * @example true
     *
     * @var bool
     */
    public $enableSaveMFATicket;

    /**
     * @description The subnet mask that specifies the IP addresses from which you can log on to the Alibaba Cloud Management Console. This parameter takes effect on password-based logon and single sign-on (SSO). However, this parameter does not take effect on API calls that are authenticated by using AccessKey pairs.
     *
     *   If you specify a subnet mask, RAM users can use only the IP addresses in the subnet mask to log on to the Alibaba Cloud Management Console.
     *   If you do not specify a subnet mask, RAM users can use all IP addresses to log on to the Alibaba Cloud Management Console.
     *
     * You can specify up to 25 subnet masks. The total length of the subnet masks can be a maximum of 512 characters.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $loginNetworkMasks;

    /**
     * @description The validity period of the logon session of RAM users.
     *
     * Valid values: 1 to 24. Default value: 6. Unit: hours.
     * @example 6
     *
     * @var int
     */
    public $loginSessionDuration;
    protected $_name = [
        'allowUserToChangePassword'   => 'AllowUserToChangePassword',
        'allowUserToManageAccessKeys' => 'AllowUserToManageAccessKeys',
        'allowUserToManageMFADevices' => 'AllowUserToManageMFADevices',
        'allowUserToManagePublicKeys' => 'AllowUserToManagePublicKeys',
        'enableSaveMFATicket'         => 'EnableSaveMFATicket',
        'loginNetworkMasks'           => 'LoginNetworkMasks',
        'loginSessionDuration'        => 'LoginSessionDuration',
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
        if (null !== $this->allowUserToManagePublicKeys) {
            $res['AllowUserToManagePublicKeys'] = $this->allowUserToManagePublicKeys;
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
     * @return SetSecurityPreferenceRequest
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
        if (isset($map['AllowUserToManagePublicKeys'])) {
            $model->allowUserToManagePublicKeys = $map['AllowUserToManagePublicKeys'];
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
