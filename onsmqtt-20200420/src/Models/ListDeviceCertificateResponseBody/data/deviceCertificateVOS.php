<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateResponseBody\data;

use AlibabaCloud\Dara\Model;

class deviceCertificateVOS extends Model
{
    /**
     * @var string
     */
    public $caSn;
    /**
     * @var string
     */
    public $deviceContent;
    /**
     * @var string
     */
    public $deviceName;
    /**
     * @var string
     */
    public $deviceSn;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $validBegin;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
