<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class inspectionScripts extends Model
{
    /**
     * @example online
     *
     * @var string
     */
    public $appState;

    /**
     * @example wew
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example online
     *
     * @var string
     */
    public $deviceState;

    /**
     * @example weq
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 192.168.xxx.xxx
     *
     * @var string
     */
    public $manageIp;

    /**
     * @example 5710
     *
     * @var string
     */
    public $model;

    /**
     * @example ASW
     *
     * @var string
     */
    public $role;

    /**
     * @example EFC
     *
     * @var string
     */
    public $space;

    /**
     * @example Huawei
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'appState'    => 'AppState',
        'deviceId'    => 'DeviceId',
        'deviceState' => 'DeviceState',
        'hostName'    => 'HostName',
        'manageIp'    => 'ManageIp',
        'model'       => 'Model',
        'role'        => 'Role',
        'space'       => 'Space',
        'vendor'      => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appState) {
            $res['AppState'] = $this->appState;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceState) {
            $res['DeviceState'] = $this->deviceState;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->manageIp) {
            $res['ManageIp'] = $this->manageIp;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->space) {
            $res['Space'] = $this->space;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inspectionScripts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppState'])) {
            $model->appState = $map['AppState'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceState'])) {
            $model->deviceState = $map['DeviceState'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ManageIp'])) {
            $model->manageIp = $map['ManageIp'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Space'])) {
            $model->space = $map['Space'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
