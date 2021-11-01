<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetSecurityPreferenceRequest extends Model
{
    /**
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @var bool
     */
    public $allowUserToManageAccessKeys;

    /**
     * @var bool
     */
    public $allowUserToManageMFADevices;

    /**
     * @var bool
     */
    public $enableSaveMFATicket;

    /**
     * @var bool
     */
    public $enforceMFAForLogin;

    /**
     * @var string
     */
    public $loginNetworkMasks;

    /**
     * @var int
     */
    public $loginSessionDuration;

    /**
     * @var string[]
     */
    public $verificationTypes;
    protected $_name = [
        'allowUserToChangePassword'   => 'AllowUserToChangePassword',
        'allowUserToManageAccessKeys' => 'AllowUserToManageAccessKeys',
        'allowUserToManageMFADevices' => 'AllowUserToManageMFADevices',
        'enableSaveMFATicket'         => 'EnableSaveMFATicket',
        'enforceMFAForLogin'          => 'EnforceMFAForLogin',
        'loginNetworkMasks'           => 'LoginNetworkMasks',
        'loginSessionDuration'        => 'LoginSessionDuration',
        'verificationTypes'           => 'VerificationTypes',
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
        if (null !== $this->enableSaveMFATicket) {
            $res['EnableSaveMFATicket'] = $this->enableSaveMFATicket;
        }
        if (null !== $this->enforceMFAForLogin) {
            $res['EnforceMFAForLogin'] = $this->enforceMFAForLogin;
        }
        if (null !== $this->loginNetworkMasks) {
            $res['LoginNetworkMasks'] = $this->loginNetworkMasks;
        }
        if (null !== $this->loginSessionDuration) {
            $res['LoginSessionDuration'] = $this->loginSessionDuration;
        }
        if (null !== $this->verificationTypes) {
            $res['VerificationTypes'] = $this->verificationTypes;
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
        if (isset($map['EnableSaveMFATicket'])) {
            $model->enableSaveMFATicket = $map['EnableSaveMFATicket'];
        }
        if (isset($map['EnforceMFAForLogin'])) {
            $model->enforceMFAForLogin = $map['EnforceMFAForLogin'];
        }
        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }
        if (isset($map['LoginSessionDuration'])) {
            $model->loginSessionDuration = $map['LoginSessionDuration'];
        }
        if (isset($map['VerificationTypes'])) {
            if (!empty($map['VerificationTypes'])) {
                $model->verificationTypes = $map['VerificationTypes'];
            }
        }

        return $model;
    }
}
