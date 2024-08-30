<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class UpdateTerminalPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $backgroundModeTitle;

    /**
     * @var string
     */
    public $displayLayout;

    /**
     * @var string
     */
    public $displayResolution;

    /**
     * @var string
     */
    public $displayScaleRatio;

    /**
     * @var int
     */
    public $enableAutoLockScreen;

    /**
     * @var int
     */
    public $enableAutoLogin;

    /**
     * @var int
     */
    public $enableBackgroundMode;

    /**
     * @var int
     */
    public $enableBluetooth;

    /**
     * @var int
     */
    public $enableModifyPassword;

    /**
     * @var int
     */
    public $enableScheduledReboot;

    /**
     * @var int
     */
    public $enableScheduledShutdown;

    /**
     * @var int
     */
    public $enableSwitchPersonal;

    /**
     * @var int
     */
    public $enableWlan;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var int
     */
    public $idleTimeoutAction;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $powerButtonDefine;

    /**
     * @var int
     */
    public $powerButtonDefineForAs;

    /**
     * @var int
     */
    public $powerButtonDefineForNs;

    /**
     * @var int
     */
    public $powerOnBehavior;

    /**
     * @var string
     */
    public $scheduledReboot;

    /**
     * @var string
     */
    public $scheduledShutdown;

    /**
     * @var int
     */
    public $settingLock;

    /**
     * @var string
     */
    public $terminalPolicyId;
    protected $_name = [
        'backgroundModeTitle'     => 'BackgroundModeTitle',
        'displayLayout'           => 'DisplayLayout',
        'displayResolution'       => 'DisplayResolution',
        'displayScaleRatio'       => 'DisplayScaleRatio',
        'enableAutoLockScreen'    => 'EnableAutoLockScreen',
        'enableAutoLogin'         => 'EnableAutoLogin',
        'enableBackgroundMode'    => 'EnableBackgroundMode',
        'enableBluetooth'         => 'EnableBluetooth',
        'enableModifyPassword'    => 'EnableModifyPassword',
        'enableScheduledReboot'   => 'EnableScheduledReboot',
        'enableScheduledShutdown' => 'EnableScheduledShutdown',
        'enableSwitchPersonal'    => 'EnableSwitchPersonal',
        'enableWlan'              => 'EnableWlan',
        'idleTimeout'             => 'IdleTimeout',
        'idleTimeoutAction'       => 'IdleTimeoutAction',
        'name'                    => 'Name',
        'powerButtonDefine'       => 'PowerButtonDefine',
        'powerButtonDefineForAs'  => 'PowerButtonDefineForAs',
        'powerButtonDefineForNs'  => 'PowerButtonDefineForNs',
        'powerOnBehavior'         => 'PowerOnBehavior',
        'scheduledReboot'         => 'ScheduledReboot',
        'scheduledShutdown'       => 'ScheduledShutdown',
        'settingLock'             => 'SettingLock',
        'terminalPolicyId'        => 'TerminalPolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundModeTitle) {
            $res['BackgroundModeTitle'] = $this->backgroundModeTitle;
        }
        if (null !== $this->displayLayout) {
            $res['DisplayLayout'] = $this->displayLayout;
        }
        if (null !== $this->displayResolution) {
            $res['DisplayResolution'] = $this->displayResolution;
        }
        if (null !== $this->displayScaleRatio) {
            $res['DisplayScaleRatio'] = $this->displayScaleRatio;
        }
        if (null !== $this->enableAutoLockScreen) {
            $res['EnableAutoLockScreen'] = $this->enableAutoLockScreen;
        }
        if (null !== $this->enableAutoLogin) {
            $res['EnableAutoLogin'] = $this->enableAutoLogin;
        }
        if (null !== $this->enableBackgroundMode) {
            $res['EnableBackgroundMode'] = $this->enableBackgroundMode;
        }
        if (null !== $this->enableBluetooth) {
            $res['EnableBluetooth'] = $this->enableBluetooth;
        }
        if (null !== $this->enableModifyPassword) {
            $res['EnableModifyPassword'] = $this->enableModifyPassword;
        }
        if (null !== $this->enableScheduledReboot) {
            $res['EnableScheduledReboot'] = $this->enableScheduledReboot;
        }
        if (null !== $this->enableScheduledShutdown) {
            $res['EnableScheduledShutdown'] = $this->enableScheduledShutdown;
        }
        if (null !== $this->enableSwitchPersonal) {
            $res['EnableSwitchPersonal'] = $this->enableSwitchPersonal;
        }
        if (null !== $this->enableWlan) {
            $res['EnableWlan'] = $this->enableWlan;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->idleTimeoutAction) {
            $res['IdleTimeoutAction'] = $this->idleTimeoutAction;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->powerButtonDefine) {
            $res['PowerButtonDefine'] = $this->powerButtonDefine;
        }
        if (null !== $this->powerButtonDefineForAs) {
            $res['PowerButtonDefineForAs'] = $this->powerButtonDefineForAs;
        }
        if (null !== $this->powerButtonDefineForNs) {
            $res['PowerButtonDefineForNs'] = $this->powerButtonDefineForNs;
        }
        if (null !== $this->powerOnBehavior) {
            $res['PowerOnBehavior'] = $this->powerOnBehavior;
        }
        if (null !== $this->scheduledReboot) {
            $res['ScheduledReboot'] = $this->scheduledReboot;
        }
        if (null !== $this->scheduledShutdown) {
            $res['ScheduledShutdown'] = $this->scheduledShutdown;
        }
        if (null !== $this->settingLock) {
            $res['SettingLock'] = $this->settingLock;
        }
        if (null !== $this->terminalPolicyId) {
            $res['TerminalPolicyId'] = $this->terminalPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTerminalPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundModeTitle'])) {
            $model->backgroundModeTitle = $map['BackgroundModeTitle'];
        }
        if (isset($map['DisplayLayout'])) {
            $model->displayLayout = $map['DisplayLayout'];
        }
        if (isset($map['DisplayResolution'])) {
            $model->displayResolution = $map['DisplayResolution'];
        }
        if (isset($map['DisplayScaleRatio'])) {
            $model->displayScaleRatio = $map['DisplayScaleRatio'];
        }
        if (isset($map['EnableAutoLockScreen'])) {
            $model->enableAutoLockScreen = $map['EnableAutoLockScreen'];
        }
        if (isset($map['EnableAutoLogin'])) {
            $model->enableAutoLogin = $map['EnableAutoLogin'];
        }
        if (isset($map['EnableBackgroundMode'])) {
            $model->enableBackgroundMode = $map['EnableBackgroundMode'];
        }
        if (isset($map['EnableBluetooth'])) {
            $model->enableBluetooth = $map['EnableBluetooth'];
        }
        if (isset($map['EnableModifyPassword'])) {
            $model->enableModifyPassword = $map['EnableModifyPassword'];
        }
        if (isset($map['EnableScheduledReboot'])) {
            $model->enableScheduledReboot = $map['EnableScheduledReboot'];
        }
        if (isset($map['EnableScheduledShutdown'])) {
            $model->enableScheduledShutdown = $map['EnableScheduledShutdown'];
        }
        if (isset($map['EnableSwitchPersonal'])) {
            $model->enableSwitchPersonal = $map['EnableSwitchPersonal'];
        }
        if (isset($map['EnableWlan'])) {
            $model->enableWlan = $map['EnableWlan'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['IdleTimeoutAction'])) {
            $model->idleTimeoutAction = $map['IdleTimeoutAction'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PowerButtonDefine'])) {
            $model->powerButtonDefine = $map['PowerButtonDefine'];
        }
        if (isset($map['PowerButtonDefineForAs'])) {
            $model->powerButtonDefineForAs = $map['PowerButtonDefineForAs'];
        }
        if (isset($map['PowerButtonDefineForNs'])) {
            $model->powerButtonDefineForNs = $map['PowerButtonDefineForNs'];
        }
        if (isset($map['PowerOnBehavior'])) {
            $model->powerOnBehavior = $map['PowerOnBehavior'];
        }
        if (isset($map['ScheduledReboot'])) {
            $model->scheduledReboot = $map['ScheduledReboot'];
        }
        if (isset($map['ScheduledShutdown'])) {
            $model->scheduledShutdown = $map['ScheduledShutdown'];
        }
        if (isset($map['SettingLock'])) {
            $model->settingLock = $map['SettingLock'];
        }
        if (isset($map['TerminalPolicyId'])) {
            $model->terminalPolicyId = $map['TerminalPolicyId'];
        }

        return $model;
    }
}
