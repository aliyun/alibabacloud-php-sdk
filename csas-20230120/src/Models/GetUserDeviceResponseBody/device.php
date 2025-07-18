<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponseBody\device\historyUsers;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponseBody\device\netInterfaceInfo;
use AlibabaCloud\Tea\Model;

class device extends Model
{
    /**
     * @example Online
     *
     * @var string
     */
    public $appStatus;

    /**
     * @example 2.2.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example Apple M1
     *
     * @var string
     */
    public $CPU;

    /**
     * @example 2023-05-16 17:18:46
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $department;

    /**
     * @example Company
     *
     * @var string
     */
    public $deviceBelong;

    /**
     * @example MacBookPro17,1
     *
     * @var string
     */
    public $deviceModel;

    /**
     * @example Online
     *
     * @var string
     */
    public $deviceStatus;

    /**
     * @example 36efa42d-2c32-c4dc-e3fc-8541e33a****
     *
     * @var string
     */
    public $deviceTag;

    /**
     * @example Windows
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example 3.5.1
     *
     * @var string
     */
    public $deviceVersion;

    /**
     * @example APPLE SSD AP0512Q Media
     *
     * @var string
     */
    public $disk;

    /**
     * @example Unauthorized
     *
     * @var string
     */
    public $dlpStatus;

    /**
     * @var string
     */
    public $edrStatus;

    /**
     * @var historyUsers[]
     */
    public $historyUsers;

    /**
     * @example win10-64bit
     *
     * @var string
     */
    public $hostname;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $iaStatus;

    /**
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $innerIP;

    /**
     * @example 48:9e:XX:XX:02:80
     *
     * @var string
     */
    public $mac;

    /**
     * @var string[]
     */
    public $matchDeviceGroupIds;

    /**
     * @example 16
     *
     * @var string
     */
    public $memory;

    /**
     * @example Unprovisioned
     *
     * @var string
     */
    public $nacStatus;

    /**
     * @var netInterfaceInfo[]
     */
    public $netInterfaceInfo;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $paStatus;

    /**
     * @example su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****
     *
     * @var string
     */
    public $saseUserId;

    /**
     * @example true
     *
     * @var bool
     */
    public $sharingStatus;

    /**
     * @var string
     */
    public $snBaseBoard;

    /**
     * @var string
     */
    public $snBios;

    /**
     * @var string
     */
    public $snDiskDrive;

    /**
     * @var string
     */
    public $snProcessor;

    /**
     * @var string
     */
    public $snSystem;

    /**
     * @example 106.14.XX.XX
     *
     * @var string
     */
    public $srcIP;

    /**
     * @example 2023-08-24 19:04:42
     *
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $workshop;
    protected $_name = [
        'appStatus' => 'AppStatus',
        'appVersion' => 'AppVersion',
        'CPU' => 'CPU',
        'createTime' => 'CreateTime',
        'department' => 'Department',
        'deviceBelong' => 'DeviceBelong',
        'deviceModel' => 'DeviceModel',
        'deviceStatus' => 'DeviceStatus',
        'deviceTag' => 'DeviceTag',
        'deviceType' => 'DeviceType',
        'deviceVersion' => 'DeviceVersion',
        'disk' => 'Disk',
        'dlpStatus' => 'DlpStatus',
        'edrStatus' => 'EdrStatus',
        'historyUsers' => 'HistoryUsers',
        'hostname' => 'Hostname',
        'iaStatus' => 'IaStatus',
        'innerIP' => 'InnerIP',
        'mac' => 'Mac',
        'matchDeviceGroupIds' => 'MatchDeviceGroupIds',
        'memory' => 'Memory',
        'nacStatus' => 'NacStatus',
        'netInterfaceInfo' => 'NetInterfaceInfo',
        'paStatus' => 'PaStatus',
        'saseUserId' => 'SaseUserId',
        'sharingStatus' => 'SharingStatus',
        'snBaseBoard' => 'SnBaseBoard',
        'snBios' => 'SnBios',
        'snDiskDrive' => 'SnDiskDrive',
        'snProcessor' => 'SnProcessor',
        'snSystem' => 'SnSystem',
        'srcIP' => 'SrcIP',
        'updateTime' => 'UpdateTime',
        'username' => 'Username',
        'workshop' => 'Workshop',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appStatus) {
            $res['AppStatus'] = $this->appStatus;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->deviceBelong) {
            $res['DeviceBelong'] = $this->deviceBelong;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }
        if (null !== $this->deviceTag) {
            $res['DeviceTag'] = $this->deviceTag;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->deviceVersion) {
            $res['DeviceVersion'] = $this->deviceVersion;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->dlpStatus) {
            $res['DlpStatus'] = $this->dlpStatus;
        }
        if (null !== $this->edrStatus) {
            $res['EdrStatus'] = $this->edrStatus;
        }
        if (null !== $this->historyUsers) {
            $res['HistoryUsers'] = [];
            if (null !== $this->historyUsers && \is_array($this->historyUsers)) {
                $n = 0;
                foreach ($this->historyUsers as $item) {
                    $res['HistoryUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->iaStatus) {
            $res['IaStatus'] = $this->iaStatus;
        }
        if (null !== $this->innerIP) {
            $res['InnerIP'] = $this->innerIP;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->matchDeviceGroupIds) {
            $res['MatchDeviceGroupIds'] = $this->matchDeviceGroupIds;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->nacStatus) {
            $res['NacStatus'] = $this->nacStatus;
        }
        if (null !== $this->netInterfaceInfo) {
            $res['NetInterfaceInfo'] = [];
            if (null !== $this->netInterfaceInfo && \is_array($this->netInterfaceInfo)) {
                $n = 0;
                foreach ($this->netInterfaceInfo as $item) {
                    $res['NetInterfaceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->paStatus) {
            $res['PaStatus'] = $this->paStatus;
        }
        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }
        if (null !== $this->sharingStatus) {
            $res['SharingStatus'] = $this->sharingStatus;
        }
        if (null !== $this->snBaseBoard) {
            $res['SnBaseBoard'] = $this->snBaseBoard;
        }
        if (null !== $this->snBios) {
            $res['SnBios'] = $this->snBios;
        }
        if (null !== $this->snDiskDrive) {
            $res['SnDiskDrive'] = $this->snDiskDrive;
        }
        if (null !== $this->snProcessor) {
            $res['SnProcessor'] = $this->snProcessor;
        }
        if (null !== $this->snSystem) {
            $res['SnSystem'] = $this->snSystem;
        }
        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workshop) {
            $res['Workshop'] = $this->workshop;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return device
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppStatus'])) {
            $model->appStatus = $map['AppStatus'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['DeviceBelong'])) {
            $model->deviceBelong = $map['DeviceBelong'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }
        if (isset($map['DeviceTag'])) {
            $model->deviceTag = $map['DeviceTag'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['DeviceVersion'])) {
            $model->deviceVersion = $map['DeviceVersion'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['DlpStatus'])) {
            $model->dlpStatus = $map['DlpStatus'];
        }
        if (isset($map['EdrStatus'])) {
            $model->edrStatus = $map['EdrStatus'];
        }
        if (isset($map['HistoryUsers'])) {
            if (!empty($map['HistoryUsers'])) {
                $model->historyUsers = [];
                $n = 0;
                foreach ($map['HistoryUsers'] as $item) {
                    $model->historyUsers[$n++] = null !== $item ? historyUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['IaStatus'])) {
            $model->iaStatus = $map['IaStatus'];
        }
        if (isset($map['InnerIP'])) {
            $model->innerIP = $map['InnerIP'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['MatchDeviceGroupIds'])) {
            if (!empty($map['MatchDeviceGroupIds'])) {
                $model->matchDeviceGroupIds = $map['MatchDeviceGroupIds'];
            }
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NacStatus'])) {
            $model->nacStatus = $map['NacStatus'];
        }
        if (isset($map['NetInterfaceInfo'])) {
            if (!empty($map['NetInterfaceInfo'])) {
                $model->netInterfaceInfo = [];
                $n = 0;
                foreach ($map['NetInterfaceInfo'] as $item) {
                    $model->netInterfaceInfo[$n++] = null !== $item ? netInterfaceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PaStatus'])) {
            $model->paStatus = $map['PaStatus'];
        }
        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }
        if (isset($map['SharingStatus'])) {
            $model->sharingStatus = $map['SharingStatus'];
        }
        if (isset($map['SnBaseBoard'])) {
            $model->snBaseBoard = $map['SnBaseBoard'];
        }
        if (isset($map['SnBios'])) {
            $model->snBios = $map['SnBios'];
        }
        if (isset($map['SnDiskDrive'])) {
            $model->snDiskDrive = $map['SnDiskDrive'];
        }
        if (isset($map['SnProcessor'])) {
            $model->snProcessor = $map['SnProcessor'];
        }
        if (isset($map['SnSystem'])) {
            $model->snSystem = $map['SnSystem'];
        }
        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['Workshop'])) {
            $model->workshop = $map['Workshop'];
        }

        return $model;
    }
}
