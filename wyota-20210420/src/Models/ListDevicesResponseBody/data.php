<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponseBody\data\connectConfigs;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponseBody\data\customResourcePackage;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponseBody\data\endUserList;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponseBody\data\labelList;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponseBody\data\peripheralConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $activeTime;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var int
     */
    public $autoLockScreenTime;

    /**
     * @var int
     */
    public $autoLogin;

    /**
     * @var string
     */
    public $autoType;

    /**
     * @var string
     */
    public $bluetooth;

    /**
     * @var string
     */
    public $buildId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var connectConfigs[]
     */
    public $connectConfigs;

    /**
     * @var int
     */
    public $customIdleAction;

    /**
     * @var int
     */
    public $customPowerOn;

    /**
     * @var string
     */
    public $customProperty;

    /**
     * @var customResourcePackage
     */
    public $customResourcePackage;

    /**
     * @var int
     */
    public $definePowerButton;

    /**
     * @var string
     */
    public $deviceIpV4;

    /**
     * @var int
     */
    public $deviceLock;

    /**
     * @var int
     */
    public $deviceMqttConnectionStatus;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceOS;

    /**
     * @var string
     */
    public $devicePlatform;

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
     * @var endUserList[]
     */
    public $endUserList;

    /**
     * @var string
     */
    public $etherMac;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gmtSync;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $idleTime;

    /**
     * @var string
     */
    public $isActive;

    /**
     * @var labelList[]
     */
    public $labelList;

    /**
     * @var string
     */
    public $lastLoginUser;

    /**
     * @var int
     */
    public $localUsbPrint;

    /**
     * @var string
     */
    public $locationInfo;

    /**
     * @var string
     */
    public $lockPassword;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var peripheralConfig
     */
    public $peripheralConfig;

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
    public $source;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $usbStorage;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $wlan;
    protected $_name = [
        'activeTime'                 => 'ActiveTime',
        'alias'                      => 'Alias',
        'autoLockScreenTime'         => 'AutoLockScreenTime',
        'autoLogin'                  => 'AutoLogin',
        'autoType'                   => 'AutoType',
        'bluetooth'                  => 'Bluetooth',
        'buildId'                    => 'BuildId',
        'clientId'                   => 'ClientId',
        'clientType'                 => 'ClientType',
        'connectConfigs'             => 'ConnectConfigs',
        'customIdleAction'           => 'CustomIdleAction',
        'customPowerOn'              => 'CustomPowerOn',
        'customProperty'             => 'CustomProperty',
        'customResourcePackage'      => 'CustomResourcePackage',
        'definePowerButton'          => 'DefinePowerButton',
        'deviceIpV4'                 => 'DeviceIpV4',
        'deviceLock'                 => 'DeviceLock',
        'deviceMqttConnectionStatus' => 'DeviceMqttConnectionStatus',
        'deviceName'                 => 'DeviceName',
        'deviceOS'                   => 'DeviceOS',
        'devicePlatform'             => 'DevicePlatform',
        'displayLayout'              => 'DisplayLayout',
        'displayResolution'          => 'DisplayResolution',
        'displayScaleRatio'          => 'DisplayScaleRatio',
        'enableAdb'                  => 'EnableAdb',
        'enableAutoLockScreen'       => 'EnableAutoLockScreen',
        'enableBluetooth'            => 'EnableBluetooth',
        'enableLockScreenPassword'   => 'EnableLockScreenPassword',
        'enableModifyPassword'       => 'EnableModifyPassword',
        'enableScheduledPowerOff'    => 'EnableScheduledPowerOff',
        'enableUnlockPassword'       => 'EnableUnlockPassword',
        'enableWlan'                 => 'EnableWlan',
        'endUserList'                => 'EndUserList',
        'etherMac'                   => 'EtherMac',
        'gmtModified'                => 'GmtModified',
        'gmtSync'                    => 'GmtSync',
        'id'                         => 'Id',
        'idleTime'                   => 'IdleTime',
        'isActive'                   => 'IsActive',
        'labelList'                  => 'LabelList',
        'lastLoginUser'              => 'LastLoginUser',
        'localUsbPrint'              => 'LocalUsbPrint',
        'locationInfo'               => 'LocationInfo',
        'lockPassword'               => 'LockPassword',
        'model'                      => 'Model',
        'orderId'                    => 'OrderId',
        'peripheralConfig'           => 'PeripheralConfig',
        'scheduledPowerOff'          => 'ScheduledPowerOff',
        'secureNetworkType'          => 'SecureNetworkType',
        'serialNo'                   => 'SerialNo',
        'sleepTime'                  => 'SleepTime',
        'source'                     => 'Source',
        'tenantId'                   => 'TenantId',
        'usbStorage'                 => 'UsbStorage',
        'uuid'                       => 'Uuid',
        'wlan'                       => 'Wlan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeTime) {
            $res['ActiveTime'] = $this->activeTime;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->autoLockScreenTime) {
            $res['AutoLockScreenTime'] = $this->autoLockScreenTime;
        }
        if (null !== $this->autoLogin) {
            $res['AutoLogin'] = $this->autoLogin;
        }
        if (null !== $this->autoType) {
            $res['AutoType'] = $this->autoType;
        }
        if (null !== $this->bluetooth) {
            $res['Bluetooth'] = $this->bluetooth;
        }
        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->connectConfigs) {
            $res['ConnectConfigs'] = [];
            if (null !== $this->connectConfigs && \is_array($this->connectConfigs)) {
                $n = 0;
                foreach ($this->connectConfigs as $item) {
                    $res['ConnectConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customIdleAction) {
            $res['CustomIdleAction'] = $this->customIdleAction;
        }
        if (null !== $this->customPowerOn) {
            $res['CustomPowerOn'] = $this->customPowerOn;
        }
        if (null !== $this->customProperty) {
            $res['CustomProperty'] = $this->customProperty;
        }
        if (null !== $this->customResourcePackage) {
            $res['CustomResourcePackage'] = null !== $this->customResourcePackage ? $this->customResourcePackage->toMap() : null;
        }
        if (null !== $this->definePowerButton) {
            $res['DefinePowerButton'] = $this->definePowerButton;
        }
        if (null !== $this->deviceIpV4) {
            $res['DeviceIpV4'] = $this->deviceIpV4;
        }
        if (null !== $this->deviceLock) {
            $res['DeviceLock'] = $this->deviceLock;
        }
        if (null !== $this->deviceMqttConnectionStatus) {
            $res['DeviceMqttConnectionStatus'] = $this->deviceMqttConnectionStatus;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceOS) {
            $res['DeviceOS'] = $this->deviceOS;
        }
        if (null !== $this->devicePlatform) {
            $res['DevicePlatform'] = $this->devicePlatform;
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
        if (null !== $this->endUserList) {
            $res['EndUserList'] = [];
            if (null !== $this->endUserList && \is_array($this->endUserList)) {
                $n = 0;
                foreach ($this->endUserList as $item) {
                    $res['EndUserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->etherMac) {
            $res['EtherMac'] = $this->etherMac;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtSync) {
            $res['GmtSync'] = $this->gmtSync;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->idleTime) {
            $res['IdleTime'] = $this->idleTime;
        }
        if (null !== $this->isActive) {
            $res['IsActive'] = $this->isActive;
        }
        if (null !== $this->labelList) {
            $res['LabelList'] = [];
            if (null !== $this->labelList && \is_array($this->labelList)) {
                $n = 0;
                foreach ($this->labelList as $item) {
                    $res['LabelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lastLoginUser) {
            $res['LastLoginUser'] = $this->lastLoginUser;
        }
        if (null !== $this->localUsbPrint) {
            $res['LocalUsbPrint'] = $this->localUsbPrint;
        }
        if (null !== $this->locationInfo) {
            $res['LocationInfo'] = $this->locationInfo;
        }
        if (null !== $this->lockPassword) {
            $res['LockPassword'] = $this->lockPassword;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->peripheralConfig) {
            $res['PeripheralConfig'] = null !== $this->peripheralConfig ? $this->peripheralConfig->toMap() : null;
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
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->usbStorage) {
            $res['UsbStorage'] = $this->usbStorage;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->wlan) {
            $res['Wlan'] = $this->wlan;
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
        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['AutoLockScreenTime'])) {
            $model->autoLockScreenTime = $map['AutoLockScreenTime'];
        }
        if (isset($map['AutoLogin'])) {
            $model->autoLogin = $map['AutoLogin'];
        }
        if (isset($map['AutoType'])) {
            $model->autoType = $map['AutoType'];
        }
        if (isset($map['Bluetooth'])) {
            $model->bluetooth = $map['Bluetooth'];
        }
        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['ConnectConfigs'])) {
            if (!empty($map['ConnectConfigs'])) {
                $model->connectConfigs = [];
                $n                     = 0;
                foreach ($map['ConnectConfigs'] as $item) {
                    $model->connectConfigs[$n++] = null !== $item ? connectConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomIdleAction'])) {
            $model->customIdleAction = $map['CustomIdleAction'];
        }
        if (isset($map['CustomPowerOn'])) {
            $model->customPowerOn = $map['CustomPowerOn'];
        }
        if (isset($map['CustomProperty'])) {
            $model->customProperty = $map['CustomProperty'];
        }
        if (isset($map['CustomResourcePackage'])) {
            $model->customResourcePackage = customResourcePackage::fromMap($map['CustomResourcePackage']);
        }
        if (isset($map['DefinePowerButton'])) {
            $model->definePowerButton = $map['DefinePowerButton'];
        }
        if (isset($map['DeviceIpV4'])) {
            $model->deviceIpV4 = $map['DeviceIpV4'];
        }
        if (isset($map['DeviceLock'])) {
            $model->deviceLock = $map['DeviceLock'];
        }
        if (isset($map['DeviceMqttConnectionStatus'])) {
            $model->deviceMqttConnectionStatus = $map['DeviceMqttConnectionStatus'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceOS'])) {
            $model->deviceOS = $map['DeviceOS'];
        }
        if (isset($map['DevicePlatform'])) {
            $model->devicePlatform = $map['DevicePlatform'];
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
        if (isset($map['EndUserList'])) {
            if (!empty($map['EndUserList'])) {
                $model->endUserList = [];
                $n                  = 0;
                foreach ($map['EndUserList'] as $item) {
                    $model->endUserList[$n++] = null !== $item ? endUserList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EtherMac'])) {
            $model->etherMac = $map['EtherMac'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtSync'])) {
            $model->gmtSync = $map['GmtSync'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IdleTime'])) {
            $model->idleTime = $map['IdleTime'];
        }
        if (isset($map['IsActive'])) {
            $model->isActive = $map['IsActive'];
        }
        if (isset($map['LabelList'])) {
            if (!empty($map['LabelList'])) {
                $model->labelList = [];
                $n                = 0;
                foreach ($map['LabelList'] as $item) {
                    $model->labelList[$n++] = null !== $item ? labelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LastLoginUser'])) {
            $model->lastLoginUser = $map['LastLoginUser'];
        }
        if (isset($map['LocalUsbPrint'])) {
            $model->localUsbPrint = $map['LocalUsbPrint'];
        }
        if (isset($map['LocationInfo'])) {
            $model->locationInfo = $map['LocationInfo'];
        }
        if (isset($map['LockPassword'])) {
            $model->lockPassword = $map['LockPassword'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PeripheralConfig'])) {
            $model->peripheralConfig = peripheralConfig::fromMap($map['PeripheralConfig']);
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UsbStorage'])) {
            $model->usbStorage = $map['UsbStorage'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Wlan'])) {
            $model->wlan = $map['Wlan'];
        }

        return $model;
    }
}
