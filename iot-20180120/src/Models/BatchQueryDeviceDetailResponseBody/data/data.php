<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchQueryDeviceDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $deviceSecret;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $utcActive;

    /**
     * @var string
     */
    public $gmtActive;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $firmwareVersion;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'productKey'      => 'ProductKey',
        'productName'     => 'ProductName',
        'deviceName'      => 'DeviceName',
        'nickname'        => 'Nickname',
        'deviceSecret'    => 'DeviceSecret',
        'iotId'           => 'IotId',
        'utcCreate'       => 'UtcCreate',
        'gmtCreate'       => 'GmtCreate',
        'utcActive'       => 'UtcActive',
        'gmtActive'       => 'GmtActive',
        'status'          => 'Status',
        'firmwareVersion' => 'FirmwareVersion',
        'nodeType'        => 'NodeType',
        'region'          => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->utcActive) {
            $res['UtcActive'] = $this->utcActive;
        }
        if (null !== $this->gmtActive) {
            $res['GmtActive'] = $this->gmtActive;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->firmwareVersion) {
            $res['FirmwareVersion'] = $this->firmwareVersion;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['UtcActive'])) {
            $model->utcActive = $map['UtcActive'];
        }
        if (isset($map['GmtActive'])) {
            $model->gmtActive = $map['GmtActive'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FirmwareVersion'])) {
            $model->firmwareVersion = $map['FirmwareVersion'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
