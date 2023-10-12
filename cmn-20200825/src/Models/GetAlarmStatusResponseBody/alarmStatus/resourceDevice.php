<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class resourceDevice extends Model
{
    /**
     * @example 网络设备
     *
     * @var string
     */
    public $deviceForm;

    /**
     * @example device-jrjb476ub06
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example CSW-HZ3.YT
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example H3C-7500
     *
     * @var string
     */
    public $model;

    /**
     * @example YT
     *
     * @var string
     */
    public $securityDomain;

    /**
     * @example 123456
     *
     * @var string
     */
    public $sn;

    /**
     * @example 银泰武林店
     *
     * @var string
     */
    public $space;

    /**
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @example H3C
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'deviceForm'     => 'DeviceForm',
        'deviceId'       => 'DeviceId',
        'hostName'       => 'HostName',
        'ip'             => 'Ip',
        'model'          => 'Model',
        'securityDomain' => 'SecurityDomain',
        'sn'             => 'Sn',
        'space'          => 'Space',
        'status'         => 'Status',
        'vendor'         => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceForm) {
            $res['DeviceForm'] = $this->deviceForm;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->space) {
            $res['Space'] = $this->space;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceForm'])) {
            $model->deviceForm = $map['DeviceForm'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }
        if (isset($map['Space'])) {
            $model->space = $map['Space'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
