<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListUserDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class devices extends Model
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
     * @example 2023-07-17 18:46:55
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
     * @example Enabled
     *
     * @var string
     */
    public $dlpStatus;

    /**
     * @example win10-64bit
     *
     * @var string
     */
    public $hostname;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $iaStatus;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $innerIP;

    /**
     * @example 00:16:XX:XX:7c:46
     *
     * @var string
     */
    public $mac;

    /**
     * @example 16
     *
     * @var string
     */
    public $memory;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $nacStatus;

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
     * @example 11.49.XX.XX
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
    protected $_name = [
        'appStatus'     => 'AppStatus',
        'appVersion'    => 'AppVersion',
        'CPU'           => 'CPU',
        'createTime'    => 'CreateTime',
        'department'    => 'Department',
        'deviceBelong'  => 'DeviceBelong',
        'deviceModel'   => 'DeviceModel',
        'deviceStatus'  => 'DeviceStatus',
        'deviceTag'     => 'DeviceTag',
        'deviceType'    => 'DeviceType',
        'deviceVersion' => 'DeviceVersion',
        'disk'          => 'Disk',
        'dlpStatus'     => 'DlpStatus',
        'hostname'      => 'Hostname',
        'iaStatus'      => 'IaStatus',
        'innerIP'       => 'InnerIP',
        'mac'           => 'Mac',
        'memory'        => 'Memory',
        'nacStatus'     => 'NacStatus',
        'paStatus'      => 'PaStatus',
        'saseUserId'    => 'SaseUserId',
        'sharingStatus' => 'SharingStatus',
        'srcIP'         => 'SrcIP',
        'updateTime'    => 'UpdateTime',
        'username'      => 'Username',
    ];

    public function validate()
    {
    }

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

    /**
     * @param array $map
     *
     * @return devices
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
