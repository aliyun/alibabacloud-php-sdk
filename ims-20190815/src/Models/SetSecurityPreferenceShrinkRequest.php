<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class SetSecurityPreferenceShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $allowUserToChangePassword;
    /**
     * @var bool
     */
    public $allowUserToLoginWithPasskey;
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
    public $allowUserToManagePersonalDingTalk;
    /**
     * @var bool
     */
    public $enableSaveMFATicket;
    /**
     * @var string
     */
    public $loginNetworkMasks;
    /**
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
    /**
     * @var string
     */
    public $verificationTypesShrink;
    protected $_name = [
        'allowUserToChangePassword'         => 'AllowUserToChangePassword',
        'allowUserToLoginWithPasskey'       => 'AllowUserToLoginWithPasskey',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUserToChangePassword) {
            $res['AllowUserToChangePassword'] = $this->allowUserToChangePassword;
        }

        if (null !== $this->allowUserToLoginWithPasskey) {
            $res['AllowUserToLoginWithPasskey'] = $this->allowUserToLoginWithPasskey;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowUserToChangePassword'])) {
            $model->allowUserToChangePassword = $map['AllowUserToChangePassword'];
        }

        if (isset($map['AllowUserToLoginWithPasskey'])) {
            $model->allowUserToLoginWithPasskey = $map['AllowUserToLoginWithPasskey'];
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
