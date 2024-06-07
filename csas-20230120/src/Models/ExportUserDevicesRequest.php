<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ExportUserDevicesRequest extends Model
{
    /**
     * @var string[]
     */
    public $appStatuses;

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
     * @var string[]
     */
    public $deviceStatuses;

    /**
     * @var string[]
     */
    public $deviceTags;

    /**
     * @var string[]
     */
    public $deviceTypes;

    /**
     * @var string[]
     */
    public $dlpStatuses;

    /**
     * @example win10-64bit
     *
     * @var string
     */
    public $hostname;

    /**
     * @var string[]
     */
    public $iaStatuses;

    /**
     * @example 00:16:XX:XX:7c:46
     *
     * @var string
     */
    public $mac;

    /**
     * @var string[]
     */
    public $nacStatuses;

    /**
     * @var string[]
     */
    public $paStatuses;

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
    public $username;
    protected $_name = [
        'appStatuses'    => 'AppStatuses',
        'department'     => 'Department',
        'deviceBelong'   => 'DeviceBelong',
        'deviceStatuses' => 'DeviceStatuses',
        'deviceTags'     => 'DeviceTags',
        'deviceTypes'    => 'DeviceTypes',
        'dlpStatuses'    => 'DlpStatuses',
        'hostname'       => 'Hostname',
        'iaStatuses'     => 'IaStatuses',
        'mac'            => 'Mac',
        'nacStatuses'    => 'NacStatuses',
        'paStatuses'     => 'PaStatuses',
        'saseUserId'     => 'SaseUserId',
        'sharingStatus'  => 'SharingStatus',
        'username'       => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appStatuses) {
            $res['AppStatuses'] = $this->appStatuses;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->deviceBelong) {
            $res['DeviceBelong'] = $this->deviceBelong;
        }
        if (null !== $this->deviceStatuses) {
            $res['DeviceStatuses'] = $this->deviceStatuses;
        }
        if (null !== $this->deviceTags) {
            $res['DeviceTags'] = $this->deviceTags;
        }
        if (null !== $this->deviceTypes) {
            $res['DeviceTypes'] = $this->deviceTypes;
        }
        if (null !== $this->dlpStatuses) {
            $res['DlpStatuses'] = $this->dlpStatuses;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->iaStatuses) {
            $res['IaStatuses'] = $this->iaStatuses;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->nacStatuses) {
            $res['NacStatuses'] = $this->nacStatuses;
        }
        if (null !== $this->paStatuses) {
            $res['PaStatuses'] = $this->paStatuses;
        }
        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }
        if (null !== $this->sharingStatus) {
            $res['SharingStatus'] = $this->sharingStatus;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportUserDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppStatuses'])) {
            if (!empty($map['AppStatuses'])) {
                $model->appStatuses = $map['AppStatuses'];
            }
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['DeviceBelong'])) {
            $model->deviceBelong = $map['DeviceBelong'];
        }
        if (isset($map['DeviceStatuses'])) {
            if (!empty($map['DeviceStatuses'])) {
                $model->deviceStatuses = $map['DeviceStatuses'];
            }
        }
        if (isset($map['DeviceTags'])) {
            if (!empty($map['DeviceTags'])) {
                $model->deviceTags = $map['DeviceTags'];
            }
        }
        if (isset($map['DeviceTypes'])) {
            if (!empty($map['DeviceTypes'])) {
                $model->deviceTypes = $map['DeviceTypes'];
            }
        }
        if (isset($map['DlpStatuses'])) {
            if (!empty($map['DlpStatuses'])) {
                $model->dlpStatuses = $map['DlpStatuses'];
            }
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['IaStatuses'])) {
            if (!empty($map['IaStatuses'])) {
                $model->iaStatuses = $map['IaStatuses'];
            }
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['NacStatuses'])) {
            if (!empty($map['NacStatuses'])) {
                $model->nacStatuses = $map['NacStatuses'];
            }
        }
        if (isset($map['PaStatuses'])) {
            if (!empty($map['PaStatuses'])) {
                $model->paStatuses = $map['PaStatuses'];
            }
        }
        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }
        if (isset($map['SharingStatus'])) {
            $model->sharingStatus = $map['SharingStatus'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
