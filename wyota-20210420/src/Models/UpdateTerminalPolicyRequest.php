<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class UpdateTerminalPolicyRequest extends Model
{
    /**
     * @var int
     */
    public $allowManualLockScreen;

    /**
     * @var string
     */
    public $backgroundModeTitle;

    /**
     * @var bool
     */
    public $customScreenCastRes;

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
    public $enableControlPanel;

    /**
     * @var int
     */
    public $enableImmersiveMode;

    /**
     * @var int
     */
    public $enableLockScreenHotKey;

    /**
     * @var int
     */
    public $enableModifyPassword;

    /**
     * @var int
     */
    public $enableScanLogin;

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
    public $enableSmsLogin;

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
    public $followCloudReboot;

    /**
     * @var int
     */
    public $followCloudShutdown;

    /**
     * @var int
     */
    public $followTerminalReboot;

    /**
     * @var int
     */
    public $followTerminalShutdown;

    /**
     * @var int
     */
    public $forceSetPinCode;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var int
     */
    public $idleTimeoutAction;

    /**
     * @var int
     */
    public $lockScreenPasswordRequired;

    /**
     * @var int
     */
    public $lockScreenTimeout;

    /**
     * @var string
     */
    public $mainBizType;

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
    public $runningMode;

    /**
     * @var string
     */
    public $scheduledReboot;

    /**
     * @var string
     */
    public $scheduledShutdown;

    /**
     * @var string[]
     */
    public $screenCastResPaths;

    /**
     * @var int
     */
    public $settingLock;

    /**
     * @var string
     */
    public $terminalPolicyId;

    /**
     * @var int
     */
    public $unlockMethod;
    protected $_name = [
        'allowManualLockScreen' => 'AllowManualLockScreen',
        'backgroundModeTitle' => 'BackgroundModeTitle',
        'customScreenCastRes' => 'CustomScreenCastRes',
        'displayLayout' => 'DisplayLayout',
        'displayResolution' => 'DisplayResolution',
        'displayScaleRatio' => 'DisplayScaleRatio',
        'enableAutoLockScreen' => 'EnableAutoLockScreen',
        'enableAutoLogin' => 'EnableAutoLogin',
        'enableBackgroundMode' => 'EnableBackgroundMode',
        'enableBluetooth' => 'EnableBluetooth',
        'enableControlPanel' => 'EnableControlPanel',
        'enableImmersiveMode' => 'EnableImmersiveMode',
        'enableLockScreenHotKey' => 'EnableLockScreenHotKey',
        'enableModifyPassword' => 'EnableModifyPassword',
        'enableScanLogin' => 'EnableScanLogin',
        'enableScheduledReboot' => 'EnableScheduledReboot',
        'enableScheduledShutdown' => 'EnableScheduledShutdown',
        'enableSmsLogin' => 'EnableSmsLogin',
        'enableSwitchPersonal' => 'EnableSwitchPersonal',
        'enableWlan' => 'EnableWlan',
        'followCloudReboot' => 'FollowCloudReboot',
        'followCloudShutdown' => 'FollowCloudShutdown',
        'followTerminalReboot' => 'FollowTerminalReboot',
        'followTerminalShutdown' => 'FollowTerminalShutdown',
        'forceSetPinCode' => 'ForceSetPinCode',
        'idleTimeout' => 'IdleTimeout',
        'idleTimeoutAction' => 'IdleTimeoutAction',
        'lockScreenPasswordRequired' => 'LockScreenPasswordRequired',
        'lockScreenTimeout' => 'LockScreenTimeout',
        'mainBizType' => 'MainBizType',
        'name' => 'Name',
        'powerButtonDefine' => 'PowerButtonDefine',
        'powerButtonDefineForAs' => 'PowerButtonDefineForAs',
        'powerButtonDefineForNs' => 'PowerButtonDefineForNs',
        'powerOnBehavior' => 'PowerOnBehavior',
        'runningMode' => 'RunningMode',
        'scheduledReboot' => 'ScheduledReboot',
        'scheduledShutdown' => 'ScheduledShutdown',
        'screenCastResPaths' => 'ScreenCastResPaths',
        'settingLock' => 'SettingLock',
        'terminalPolicyId' => 'TerminalPolicyId',
        'unlockMethod' => 'UnlockMethod',
    ];

    public function validate()
    {
        if (\is_array($this->screenCastResPaths)) {
            Model::validateArray($this->screenCastResPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowManualLockScreen) {
            $res['AllowManualLockScreen'] = $this->allowManualLockScreen;
        }

        if (null !== $this->backgroundModeTitle) {
            $res['BackgroundModeTitle'] = $this->backgroundModeTitle;
        }

        if (null !== $this->customScreenCastRes) {
            $res['CustomScreenCastRes'] = $this->customScreenCastRes;
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

        if (null !== $this->enableControlPanel) {
            $res['EnableControlPanel'] = $this->enableControlPanel;
        }

        if (null !== $this->enableImmersiveMode) {
            $res['EnableImmersiveMode'] = $this->enableImmersiveMode;
        }

        if (null !== $this->enableLockScreenHotKey) {
            $res['EnableLockScreenHotKey'] = $this->enableLockScreenHotKey;
        }

        if (null !== $this->enableModifyPassword) {
            $res['EnableModifyPassword'] = $this->enableModifyPassword;
        }

        if (null !== $this->enableScanLogin) {
            $res['EnableScanLogin'] = $this->enableScanLogin;
        }

        if (null !== $this->enableScheduledReboot) {
            $res['EnableScheduledReboot'] = $this->enableScheduledReboot;
        }

        if (null !== $this->enableScheduledShutdown) {
            $res['EnableScheduledShutdown'] = $this->enableScheduledShutdown;
        }

        if (null !== $this->enableSmsLogin) {
            $res['EnableSmsLogin'] = $this->enableSmsLogin;
        }

        if (null !== $this->enableSwitchPersonal) {
            $res['EnableSwitchPersonal'] = $this->enableSwitchPersonal;
        }

        if (null !== $this->enableWlan) {
            $res['EnableWlan'] = $this->enableWlan;
        }

        if (null !== $this->followCloudReboot) {
            $res['FollowCloudReboot'] = $this->followCloudReboot;
        }

        if (null !== $this->followCloudShutdown) {
            $res['FollowCloudShutdown'] = $this->followCloudShutdown;
        }

        if (null !== $this->followTerminalReboot) {
            $res['FollowTerminalReboot'] = $this->followTerminalReboot;
        }

        if (null !== $this->followTerminalShutdown) {
            $res['FollowTerminalShutdown'] = $this->followTerminalShutdown;
        }

        if (null !== $this->forceSetPinCode) {
            $res['ForceSetPinCode'] = $this->forceSetPinCode;
        }

        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }

        if (null !== $this->idleTimeoutAction) {
            $res['IdleTimeoutAction'] = $this->idleTimeoutAction;
        }

        if (null !== $this->lockScreenPasswordRequired) {
            $res['LockScreenPasswordRequired'] = $this->lockScreenPasswordRequired;
        }

        if (null !== $this->lockScreenTimeout) {
            $res['LockScreenTimeout'] = $this->lockScreenTimeout;
        }

        if (null !== $this->mainBizType) {
            $res['MainBizType'] = $this->mainBizType;
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

        if (null !== $this->runningMode) {
            $res['RunningMode'] = $this->runningMode;
        }

        if (null !== $this->scheduledReboot) {
            $res['ScheduledReboot'] = $this->scheduledReboot;
        }

        if (null !== $this->scheduledShutdown) {
            $res['ScheduledShutdown'] = $this->scheduledShutdown;
        }

        if (null !== $this->screenCastResPaths) {
            if (\is_array($this->screenCastResPaths)) {
                $res['ScreenCastResPaths'] = [];
                $n1 = 0;
                foreach ($this->screenCastResPaths as $item1) {
                    $res['ScreenCastResPaths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->settingLock) {
            $res['SettingLock'] = $this->settingLock;
        }

        if (null !== $this->terminalPolicyId) {
            $res['TerminalPolicyId'] = $this->terminalPolicyId;
        }

        if (null !== $this->unlockMethod) {
            $res['UnlockMethod'] = $this->unlockMethod;
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
        if (isset($map['AllowManualLockScreen'])) {
            $model->allowManualLockScreen = $map['AllowManualLockScreen'];
        }

        if (isset($map['BackgroundModeTitle'])) {
            $model->backgroundModeTitle = $map['BackgroundModeTitle'];
        }

        if (isset($map['CustomScreenCastRes'])) {
            $model->customScreenCastRes = $map['CustomScreenCastRes'];
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

        if (isset($map['EnableControlPanel'])) {
            $model->enableControlPanel = $map['EnableControlPanel'];
        }

        if (isset($map['EnableImmersiveMode'])) {
            $model->enableImmersiveMode = $map['EnableImmersiveMode'];
        }

        if (isset($map['EnableLockScreenHotKey'])) {
            $model->enableLockScreenHotKey = $map['EnableLockScreenHotKey'];
        }

        if (isset($map['EnableModifyPassword'])) {
            $model->enableModifyPassword = $map['EnableModifyPassword'];
        }

        if (isset($map['EnableScanLogin'])) {
            $model->enableScanLogin = $map['EnableScanLogin'];
        }

        if (isset($map['EnableScheduledReboot'])) {
            $model->enableScheduledReboot = $map['EnableScheduledReboot'];
        }

        if (isset($map['EnableScheduledShutdown'])) {
            $model->enableScheduledShutdown = $map['EnableScheduledShutdown'];
        }

        if (isset($map['EnableSmsLogin'])) {
            $model->enableSmsLogin = $map['EnableSmsLogin'];
        }

        if (isset($map['EnableSwitchPersonal'])) {
            $model->enableSwitchPersonal = $map['EnableSwitchPersonal'];
        }

        if (isset($map['EnableWlan'])) {
            $model->enableWlan = $map['EnableWlan'];
        }

        if (isset($map['FollowCloudReboot'])) {
            $model->followCloudReboot = $map['FollowCloudReboot'];
        }

        if (isset($map['FollowCloudShutdown'])) {
            $model->followCloudShutdown = $map['FollowCloudShutdown'];
        }

        if (isset($map['FollowTerminalReboot'])) {
            $model->followTerminalReboot = $map['FollowTerminalReboot'];
        }

        if (isset($map['FollowTerminalShutdown'])) {
            $model->followTerminalShutdown = $map['FollowTerminalShutdown'];
        }

        if (isset($map['ForceSetPinCode'])) {
            $model->forceSetPinCode = $map['ForceSetPinCode'];
        }

        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }

        if (isset($map['IdleTimeoutAction'])) {
            $model->idleTimeoutAction = $map['IdleTimeoutAction'];
        }

        if (isset($map['LockScreenPasswordRequired'])) {
            $model->lockScreenPasswordRequired = $map['LockScreenPasswordRequired'];
        }

        if (isset($map['LockScreenTimeout'])) {
            $model->lockScreenTimeout = $map['LockScreenTimeout'];
        }

        if (isset($map['MainBizType'])) {
            $model->mainBizType = $map['MainBizType'];
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

        if (isset($map['RunningMode'])) {
            $model->runningMode = $map['RunningMode'];
        }

        if (isset($map['ScheduledReboot'])) {
            $model->scheduledReboot = $map['ScheduledReboot'];
        }

        if (isset($map['ScheduledShutdown'])) {
            $model->scheduledShutdown = $map['ScheduledShutdown'];
        }

        if (isset($map['ScreenCastResPaths'])) {
            if (!empty($map['ScreenCastResPaths'])) {
                $model->screenCastResPaths = [];
                $n1 = 0;
                foreach ($map['ScreenCastResPaths'] as $item1) {
                    $model->screenCastResPaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SettingLock'])) {
            $model->settingLock = $map['SettingLock'];
        }

        if (isset($map['TerminalPolicyId'])) {
            $model->terminalPolicyId = $map['TerminalPolicyId'];
        }

        if (isset($map['UnlockMethod'])) {
            $model->unlockMethod = $map['UnlockMethod'];
        }

        return $model;
    }
}
