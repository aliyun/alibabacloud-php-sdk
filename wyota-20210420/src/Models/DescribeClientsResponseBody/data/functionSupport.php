<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeClientsResponseBody\data;

use AlibabaCloud\Dara\Model;

class functionSupport extends Model
{
    /**
     * @var bool
     */
    public $enablePolicy;

    /**
     * @var string
     */
    public $passwordFreeLoginForbiddenReason;

    /**
     * @var bool
     */
    public $supportAssistLogin;

    /**
     * @var bool
     */
    public $supportDiagnose;

    /**
     * @var bool
     */
    public $supportLimitLoginUser;

    /**
     * @var bool
     */
    public $supportLocalDeviceSn;

    /**
     * @var bool
     */
    public $supportManage;

    /**
     * @var bool
     */
    public $supportModifyPolicy;

    /**
     * @var bool
     */
    public $supportPasswordFreeLogin;

    /**
     * @var bool
     */
    public $supportReboot;

    /**
     * @var bool
     */
    public $supportReset;

    /**
     * @var bool
     */
    public $supportResetPin;

    /**
     * @var bool
     */
    public $supportStop;

    /**
     * @var bool
     */
    public $supportUpgrade;

    /**
     * @var string
     */
    public $unsupportAssistLoginReason;

    /**
     * @var string
     */
    public $unsupportManageReason;

    /**
     * @var string
     */
    public $unsupportedLocalDeviceSnReason;

    /**
     * @var bool
     */
    public $versionSupported;

    /**
     * @var bool
     */
    public $versionTooLow;
    protected $_name = [
        'enablePolicy' => 'EnablePolicy',
        'passwordFreeLoginForbiddenReason' => 'PasswordFreeLoginForbiddenReason',
        'supportAssistLogin' => 'SupportAssistLogin',
        'supportDiagnose' => 'SupportDiagnose',
        'supportLimitLoginUser' => 'SupportLimitLoginUser',
        'supportLocalDeviceSn' => 'SupportLocalDeviceSn',
        'supportManage' => 'SupportManage',
        'supportModifyPolicy' => 'SupportModifyPolicy',
        'supportPasswordFreeLogin' => 'SupportPasswordFreeLogin',
        'supportReboot' => 'SupportReboot',
        'supportReset' => 'SupportReset',
        'supportResetPin' => 'SupportResetPin',
        'supportStop' => 'SupportStop',
        'supportUpgrade' => 'SupportUpgrade',
        'unsupportAssistLoginReason' => 'UnsupportAssistLoginReason',
        'unsupportManageReason' => 'UnsupportManageReason',
        'unsupportedLocalDeviceSnReason' => 'UnsupportedLocalDeviceSnReason',
        'versionSupported' => 'VersionSupported',
        'versionTooLow' => 'VersionTooLow',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enablePolicy) {
            $res['EnablePolicy'] = $this->enablePolicy;
        }

        if (null !== $this->passwordFreeLoginForbiddenReason) {
            $res['PasswordFreeLoginForbiddenReason'] = $this->passwordFreeLoginForbiddenReason;
        }

        if (null !== $this->supportAssistLogin) {
            $res['SupportAssistLogin'] = $this->supportAssistLogin;
        }

        if (null !== $this->supportDiagnose) {
            $res['SupportDiagnose'] = $this->supportDiagnose;
        }

        if (null !== $this->supportLimitLoginUser) {
            $res['SupportLimitLoginUser'] = $this->supportLimitLoginUser;
        }

        if (null !== $this->supportLocalDeviceSn) {
            $res['SupportLocalDeviceSn'] = $this->supportLocalDeviceSn;
        }

        if (null !== $this->supportManage) {
            $res['SupportManage'] = $this->supportManage;
        }

        if (null !== $this->supportModifyPolicy) {
            $res['SupportModifyPolicy'] = $this->supportModifyPolicy;
        }

        if (null !== $this->supportPasswordFreeLogin) {
            $res['SupportPasswordFreeLogin'] = $this->supportPasswordFreeLogin;
        }

        if (null !== $this->supportReboot) {
            $res['SupportReboot'] = $this->supportReboot;
        }

        if (null !== $this->supportReset) {
            $res['SupportReset'] = $this->supportReset;
        }

        if (null !== $this->supportResetPin) {
            $res['SupportResetPin'] = $this->supportResetPin;
        }

        if (null !== $this->supportStop) {
            $res['SupportStop'] = $this->supportStop;
        }

        if (null !== $this->supportUpgrade) {
            $res['SupportUpgrade'] = $this->supportUpgrade;
        }

        if (null !== $this->unsupportAssistLoginReason) {
            $res['UnsupportAssistLoginReason'] = $this->unsupportAssistLoginReason;
        }

        if (null !== $this->unsupportManageReason) {
            $res['UnsupportManageReason'] = $this->unsupportManageReason;
        }

        if (null !== $this->unsupportedLocalDeviceSnReason) {
            $res['UnsupportedLocalDeviceSnReason'] = $this->unsupportedLocalDeviceSnReason;
        }

        if (null !== $this->versionSupported) {
            $res['VersionSupported'] = $this->versionSupported;
        }

        if (null !== $this->versionTooLow) {
            $res['VersionTooLow'] = $this->versionTooLow;
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
        if (isset($map['EnablePolicy'])) {
            $model->enablePolicy = $map['EnablePolicy'];
        }

        if (isset($map['PasswordFreeLoginForbiddenReason'])) {
            $model->passwordFreeLoginForbiddenReason = $map['PasswordFreeLoginForbiddenReason'];
        }

        if (isset($map['SupportAssistLogin'])) {
            $model->supportAssistLogin = $map['SupportAssistLogin'];
        }

        if (isset($map['SupportDiagnose'])) {
            $model->supportDiagnose = $map['SupportDiagnose'];
        }

        if (isset($map['SupportLimitLoginUser'])) {
            $model->supportLimitLoginUser = $map['SupportLimitLoginUser'];
        }

        if (isset($map['SupportLocalDeviceSn'])) {
            $model->supportLocalDeviceSn = $map['SupportLocalDeviceSn'];
        }

        if (isset($map['SupportManage'])) {
            $model->supportManage = $map['SupportManage'];
        }

        if (isset($map['SupportModifyPolicy'])) {
            $model->supportModifyPolicy = $map['SupportModifyPolicy'];
        }

        if (isset($map['SupportPasswordFreeLogin'])) {
            $model->supportPasswordFreeLogin = $map['SupportPasswordFreeLogin'];
        }

        if (isset($map['SupportReboot'])) {
            $model->supportReboot = $map['SupportReboot'];
        }

        if (isset($map['SupportReset'])) {
            $model->supportReset = $map['SupportReset'];
        }

        if (isset($map['SupportResetPin'])) {
            $model->supportResetPin = $map['SupportResetPin'];
        }

        if (isset($map['SupportStop'])) {
            $model->supportStop = $map['SupportStop'];
        }

        if (isset($map['SupportUpgrade'])) {
            $model->supportUpgrade = $map['SupportUpgrade'];
        }

        if (isset($map['UnsupportAssistLoginReason'])) {
            $model->unsupportAssistLoginReason = $map['UnsupportAssistLoginReason'];
        }

        if (isset($map['UnsupportManageReason'])) {
            $model->unsupportManageReason = $map['UnsupportManageReason'];
        }

        if (isset($map['UnsupportedLocalDeviceSnReason'])) {
            $model->unsupportedLocalDeviceSnReason = $map['UnsupportedLocalDeviceSnReason'];
        }

        if (isset($map['VersionSupported'])) {
            $model->versionSupported = $map['VersionSupported'];
        }

        if (isset($map['VersionTooLow'])) {
            $model->versionTooLow = $map['VersionTooLow'];
        }

        return $model;
    }
}
