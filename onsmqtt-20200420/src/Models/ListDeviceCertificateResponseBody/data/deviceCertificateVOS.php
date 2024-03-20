<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateResponseBody\data;

use AlibabaCloud\Tea\Model;

class deviceCertificateVOS extends Model
{
    /**
     * @example 00f26900ba87******
     *
     * @var string
     */
    public $caSn;

    /**
     * @example -----BEGIN DEVICECERTIFICATE-----\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\n-----END DEVICECERTIFICATE-----
     *
     * @var string
     */
    public $deviceContent;

    /**
     * @example mqtt_device
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 356217374433******
     *
     * @var string
     */
    public $deviceSn;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @example 1654137303000
     *
     * @var string
     */
    public $validBegin;

    /**
     * @example 1969497303000
     *
     * @var string
     */
    public $validEnd;
    protected $_name = [
        'caSn'          => 'CaSn',
        'deviceContent' => 'DeviceContent',
        'deviceName'    => 'DeviceName',
        'deviceSn'      => 'DeviceSn',
        'status'        => 'Status',
        'validBegin'    => 'ValidBegin',
        'validEnd'      => 'ValidEnd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caSn) {
            $res['CaSn'] = $this->caSn;
        }
        if (null !== $this->deviceContent) {
            $res['DeviceContent'] = $this->deviceContent;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->validBegin) {
            $res['ValidBegin'] = $this->validBegin;
        }
        if (null !== $this->validEnd) {
            $res['ValidEnd'] = $this->validEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceCertificateVOS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaSn'])) {
            $model->caSn = $map['CaSn'];
        }
        if (isset($map['DeviceContent'])) {
            $model->deviceContent = $map['DeviceContent'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ValidBegin'])) {
            $model->validBegin = $map['ValidBegin'];
        }
        if (isset($map['ValidEnd'])) {
            $model->validEnd = $map['ValidEnd'];
        }

        return $model;
    }
}
