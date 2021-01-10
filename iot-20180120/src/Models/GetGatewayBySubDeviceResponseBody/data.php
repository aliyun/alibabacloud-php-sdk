<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetGatewayBySubDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $utcActive;

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
    public $utcCreate;

    /**
     * @var string
     */
    public $firmwareVersion;

    /**
     * @var string
     */
    public $gmtOnline;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $utcOnline;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $deviceSecret;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtActive;
    protected $_name = [
        'status'          => 'Status',
        'utcActive'       => 'UtcActive',
        'productName'     => 'ProductName',
        'deviceName'      => 'DeviceName',
        'utcCreate'       => 'UtcCreate',
        'firmwareVersion' => 'FirmwareVersion',
        'gmtOnline'       => 'GmtOnline',
        'region'          => 'region',
        'iotId'           => 'iotId',
        'utcOnline'       => 'UtcOnline',
        'productKey'      => 'ProductKey',
        'ipAddress'       => 'IpAddress',
        'nodeType'        => 'NodeType',
        'deviceSecret'    => 'DeviceSecret',
        'gmtCreate'       => 'GmtCreate',
        'gmtActive'       => 'GmtActive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->utcActive) {
            $res['UtcActive'] = $this->utcActive;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->firmwareVersion) {
            $res['FirmwareVersion'] = $this->firmwareVersion;
        }
        if (null !== $this->gmtOnline) {
            $res['GmtOnline'] = $this->gmtOnline;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->iotId) {
            $res['iotId'] = $this->iotId;
        }
        if (null !== $this->utcOnline) {
            $res['UtcOnline'] = $this->utcOnline;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtActive) {
            $res['GmtActive'] = $this->gmtActive;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UtcActive'])) {
            $model->utcActive = $map['UtcActive'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['FirmwareVersion'])) {
            $model->firmwareVersion = $map['FirmwareVersion'];
        }
        if (isset($map['GmtOnline'])) {
            $model->gmtOnline = $map['GmtOnline'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['iotId'])) {
            $model->iotId = $map['iotId'];
        }
        if (isset($map['UtcOnline'])) {
            $model->utcOnline = $map['UtcOnline'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtActive'])) {
            $model->gmtActive = $map['GmtActive'];
        }

        return $model;
    }
}
