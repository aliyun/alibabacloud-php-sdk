<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponseBody\device\historyUsers;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponseBody\device\netInterfaceInfo;

class device extends Model
{
    /**
     * @var string
     */
    public $appStatus;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $CPU;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $deviceBelong;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $deviceStatus;

    /**
     * @var string
     */
    public $deviceTag;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $deviceVersion;

    /**
     * @var string
     */
    public $disk;

    /**
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
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $iaStatus;

    /**
     * @var string
     */
    public $innerIP;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $nacStatus;

    /**
     * @var netInterfaceInfo[]
     */
    public $netInterfaceInfo;

    /**
     * @var string
     */
    public $paStatus;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var bool
     */
    public $sharingStatus;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $username;
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
        'memory' => 'Memory',
        'nacStatus' => 'NacStatus',
        'netInterfaceInfo' => 'NetInterfaceInfo',
        'paStatus' => 'PaStatus',
        'saseUserId' => 'SaseUserId',
        'sharingStatus' => 'SharingStatus',
        'srcIP' => 'SrcIP',
        'updateTime' => 'UpdateTime',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->historyUsers)) {
            Model::validateArray($this->historyUsers);
        }
        if (\is_array($this->netInterfaceInfo)) {
            Model::validateArray($this->netInterfaceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->historyUsers)) {
                $res['HistoryUsers'] = [];
                $n1 = 0;
                foreach ($this->historyUsers as $item1) {
                    $res['HistoryUsers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->nacStatus) {
            $res['NacStatus'] = $this->nacStatus;
        }

        if (null !== $this->netInterfaceInfo) {
            if (\is_array($this->netInterfaceInfo)) {
                $res['NetInterfaceInfo'] = [];
                $n1 = 0;
                foreach ($this->netInterfaceInfo as $item1) {
                    $res['NetInterfaceInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
                $n1 = 0;
                foreach ($map['HistoryUsers'] as $item1) {
                    $model->historyUsers[$n1++] = historyUsers::fromMap($item1);
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

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NacStatus'])) {
            $model->nacStatus = $map['NacStatus'];
        }

        if (isset($map['NetInterfaceInfo'])) {
            if (!empty($map['NetInterfaceInfo'])) {
                $model->netInterfaceInfo = [];
                $n1 = 0;
                foreach ($map['NetInterfaceInfo'] as $item1) {
                    $model->netInterfaceInfo[$n1++] = netInterfaceInfo::fromMap($item1);
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

        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
