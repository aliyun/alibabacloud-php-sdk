<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateByCaSnResponseBody\data;

use AlibabaCloud\Tea\Model;

class deviceCertificateVOS extends Model
{
    /**
     * @description The SN serial number of the CA certificate to which the device certificate belongs, used to uniquely identify a CA certificate.
     *
     * @example 00f26900ba87******
     *
     * @var string
     */
    public $caSn;

    /**
     * @description Content of the device certificate.
     *
     * represents a new line.
     * @example -----BEGIN DEVICECERTIFICATE-----\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\n-----END DEVICECERTIFICATE-----
     *
     * @var string
     */
    public $deviceContent;

    /**
     * @description Name of the device certificate.
     *
     * @example mqtt_device
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The SN serial number of the device certificate, used to uniquely identify a device certificate.
     *
     * @example 356217374433******
     *
     * @var string
     */
    public $deviceSn;

    /**
     * @description The status of the device certificate. The values are as follows:
     * After the device certificate is registered, it is in an active state by default.
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The start time when the device certificate becomes effective. The format is a Unix timestamp in milliseconds.
     *
     * @example 1654137303000
     *
     * @var string
     */
    public $validBegin;

    /**
     * @description The end time when the device certificate becomes effective. The format is a Unix timestamp in milliseconds.
     *
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
