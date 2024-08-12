<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceConfigsResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceConfigsResponseBody\data\customResourcePackage;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $autoLockScreenTime;

    /**
     * @var int
     */
    public $autoLogin;

    /**
     * @var int
     */
    public $autoUpdate;

    /**
     * @var int
     */
    public $customIdleAction;

    /**
     * @var int
     */
    public $customPowerOn;

    /**
     * @var customResourcePackage
     */
    public $customResourcePackage;

    /**
     * @var int
     */
    public $definePowerButton;

    /**
     * @var int
     */
    public $deviceLock;

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
    public $enableAdb;

    /**
     * @var int
     */
    public $enableAutoLockScreen;

    /**
     * @var int
     */
    public $enableBluetooth;

    /**
     * @var int
     */
    public $enableLockScreenPassword;

    /**
     * @var int
     */
    public $enableModifyPassword;

    /**
     * @var int
     */
    public $enableScheduledPowerOff;

    /**
     * @var int
     */
    public $enableUnlockPassword;

    /**
     * @var int
     */
    public $enableWlan;

    /**
     * @var int
     */
    public $idleTime;

    /**
     * @var int
     */
    public $localUsbPrint;

    /**
     * @var string
     */
    public $lockPassword;

    /**
     * @var string
     */
    public $scheduledPowerOff;

    /**
     * @var string
     */
    public $secureNetworkType;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var int
     */
    public $sleepTime;

    /**
     * @var string
     */
    public $urcl;

    /**
     * @var int
     */
    public $usbStorage;

    /**
     * @var string
     */
    public $userCustomId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'autoLockScreenTime'       => 'AutoLockScreenTime',
        'autoLogin'                => 'AutoLogin',
        'autoUpdate'               => 'AutoUpdate',
        'customIdleAction'         => 'CustomIdleAction',
        'customPowerOn'            => 'CustomPowerOn',
        'customResourcePackage'    => 'CustomResourcePackage',
        'definePowerButton'        => 'DefinePowerButton',
        'deviceLock'               => 'DeviceLock',
        'displayLayout'            => 'DisplayLayout',
        'displayResolution'        => 'DisplayResolution',
        'displayScaleRatio'        => 'DisplayScaleRatio',
        'enableAdb'                => 'EnableAdb',
        'enableAutoLockScreen'     => 'EnableAutoLockScreen',
        'enableBluetooth'          => 'EnableBluetooth',
        'enableLockScreenPassword' => 'EnableLockScreenPassword',
        'enableModifyPassword'     => 'EnableModifyPassword',
        'enableScheduledPowerOff'  => 'EnableScheduledPowerOff',
        'enableUnlockPassword'     => 'EnableUnlockPassword',
        'enableWlan'               => 'EnableWlan',
        'idleTime'                 => 'IdleTime',
        'localUsbPrint'            => 'LocalUsbPrint',
        'lockPassword'             => 'LockPassword',
        'scheduledPowerOff'        => 'ScheduledPowerOff',
        'secureNetworkType'        => 'SecureNetworkType',
        'serialNo'                 => 'SerialNo',
        'sleepTime'                => 'SleepTime',
        'urcl'                     => 'Urcl',
        'usbStorage'               => 'UsbStorage',
        'userCustomId'             => 'UserCustomId',
        'uuid'                     => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoLockScreenTime) {
            $res['AutoLockScreenTime'] = $this->autoLockScreenTime;
        }
        if (null !== $this->autoLogin) {
            $res['AutoLogin'] = $this->autoLogin;
        }
        if (null !== $this->autoUpdate) {
            $res['AutoUpdate'] = $this->autoUpdate;
        }
        if (null !== $this->customIdleAction) {
            $res['CustomIdleAction'] = $this->customIdleAction;
        }
        if (null !== $this->customPowerOn) {
            $res['CustomPowerOn'] = $this->customPowerOn;
        }
        if (null !== $this->customResourcePackage) {
            $res['CustomResourcePackage'] = null !== $this->customResourcePackage ? $this->customResourcePackage->toMap() : null;
        }
        if (null !== $this->definePowerButton) {
            $res['DefinePowerButton'] = $this->definePowerButton;
        }
        if (null !== $this->deviceLock) {
            $res['DeviceLock'] = $this->deviceLock;
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
        if (null !== $this->enableAdb) {
            $res['EnableAdb'] = $this->enableAdb;
        }
        if (null !== $this->enableAutoLockScreen) {
            $res['EnableAutoLockScreen'] = $this->enableAutoLockScreen;
        }
        if (null !== $this->enableBluetooth) {
            $res['EnableBluetooth'] = $this->enableBluetooth;
        }
        if (null !== $this->enableLockScreenPassword) {
            $res['EnableLockScreenPassword'] = $this->enableLockScreenPassword;
        }
        if (null !== $this->enableModifyPassword) {
            $res['EnableModifyPassword'] = $this->enableModifyPassword;
        }
        if (null !== $this->enableScheduledPowerOff) {
            $res['EnableScheduledPowerOff'] = $this->enableScheduledPowerOff;
        }
        if (null !== $this->enableUnlockPassword) {
            $res['EnableUnlockPassword'] = $this->enableUnlockPassword;
        }
        if (null !== $this->enableWlan) {
            $res['EnableWlan'] = $this->enableWlan;
        }
        if (null !== $this->idleTime) {
            $res['IdleTime'] = $this->idleTime;
        }
        if (null !== $this->localUsbPrint) {
            $res['LocalUsbPrint'] = $this->localUsbPrint;
        }
        if (null !== $this->lockPassword) {
            $res['LockPassword'] = $this->lockPassword;
        }
        if (null !== $this->scheduledPowerOff) {
            $res['ScheduledPowerOff'] = $this->scheduledPowerOff;
        }
        if (null !== $this->secureNetworkType) {
            $res['SecureNetworkType'] = $this->secureNetworkType;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->sleepTime) {
            $res['SleepTime'] = $this->sleepTime;
        }
        if (null !== $this->urcl) {
            $res['Urcl'] = $this->urcl;
        }
        if (null !== $this->usbStorage) {
            $res['UsbStorage'] = $this->usbStorage;
        }
        if (null !== $this->userCustomId) {
            $res['UserCustomId'] = $this->userCustomId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoLockScreenTime'])) {
            $model->autoLockScreenTime = $map['AutoLockScreenTime'];
        }
        if (isset($map['AutoLogin'])) {
            $model->autoLogin = $map['AutoLogin'];
        }
        if (isset($map['AutoUpdate'])) {
            $model->autoUpdate = $map['AutoUpdate'];
        }
        if (isset($map['CustomIdleAction'])) {
            $model->customIdleAction = $map['CustomIdleAction'];
        }
        if (isset($map['CustomPowerOn'])) {
            $model->customPowerOn = $map['CustomPowerOn'];
        }
        if (isset($map['CustomResourcePackage'])) {
            $model->customResourcePackage = customResourcePackage::fromMap($map['CustomResourcePackage']);
        }
        if (isset($map['DefinePowerButton'])) {
            $model->definePowerButton = $map['DefinePowerButton'];
        }
        if (isset($map['DeviceLock'])) {
            $model->deviceLock = $map['DeviceLock'];
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
        if (isset($map['EnableAdb'])) {
            $model->enableAdb = $map['EnableAdb'];
        }
        if (isset($map['EnableAutoLockScreen'])) {
            $model->enableAutoLockScreen = $map['EnableAutoLockScreen'];
        }
        if (isset($map['EnableBluetooth'])) {
            $model->enableBluetooth = $map['EnableBluetooth'];
        }
        if (isset($map['EnableLockScreenPassword'])) {
            $model->enableLockScreenPassword = $map['EnableLockScreenPassword'];
        }
        if (isset($map['EnableModifyPassword'])) {
            $model->enableModifyPassword = $map['EnableModifyPassword'];
        }
        if (isset($map['EnableScheduledPowerOff'])) {
            $model->enableScheduledPowerOff = $map['EnableScheduledPowerOff'];
        }
        if (isset($map['EnableUnlockPassword'])) {
            $model->enableUnlockPassword = $map['EnableUnlockPassword'];
        }
        if (isset($map['EnableWlan'])) {
            $model->enableWlan = $map['EnableWlan'];
        }
        if (isset($map['IdleTime'])) {
            $model->idleTime = $map['IdleTime'];
        }
        if (isset($map['LocalUsbPrint'])) {
            $model->localUsbPrint = $map['LocalUsbPrint'];
        }
        if (isset($map['LockPassword'])) {
            $model->lockPassword = $map['LockPassword'];
        }
        if (isset($map['ScheduledPowerOff'])) {
            $model->scheduledPowerOff = $map['ScheduledPowerOff'];
        }
        if (isset($map['SecureNetworkType'])) {
            $model->secureNetworkType = $map['SecureNetworkType'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['SleepTime'])) {
            $model->sleepTime = $map['SleepTime'];
        }
        if (isset($map['Urcl'])) {
            $model->urcl = $map['Urcl'];
        }
        if (isset($map['UsbStorage'])) {
            $model->usbStorage = $map['UsbStorage'];
        }
        if (isset($map['UserCustomId'])) {
            $model->userCustomId = $map['UserCustomId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
