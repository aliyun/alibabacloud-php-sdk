<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceSecret;

    /**
     * @var string
     */
    public $firmwareVersion;

    /**
     * @var string
     */
    public $gmtActive;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtOnline;

    /**
     * @var string
     */
    public $gmtTimestamp;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var bool
     */
    public $owner;

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
    public $region;

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
    public $utcCreate;

    /**
     * @var string
     */
    public $utcOnline;

    /**
     * @var string
     */
    public $utcTimestamp;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'deviceSecret' => 'DeviceSecret',
        'firmwareVersion' => 'FirmwareVersion',
        'gmtActive' => 'GmtActive',
        'gmtCreate' => 'GmtCreate',
        'gmtOnline' => 'GmtOnline',
        'gmtTimestamp' => 'GmtTimestamp',
        'iotId' => 'IotId',
        'ipAddress' => 'IpAddress',
        'nickname' => 'Nickname',
        'nodeType' => 'NodeType',
        'owner' => 'Owner',
        'productKey' => 'ProductKey',
        'productName' => 'ProductName',
        'region' => 'Region',
        'status' => 'Status',
        'utcActive' => 'UtcActive',
        'utcCreate' => 'UtcCreate',
        'utcOnline' => 'UtcOnline',
        'utcTimestamp' => 'UtcTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }

        if (null !== $this->firmwareVersion) {
            $res['FirmwareVersion'] = $this->firmwareVersion;
        }

        if (null !== $this->gmtActive) {
            $res['GmtActive'] = $this->gmtActive;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtOnline) {
            $res['GmtOnline'] = $this->gmtOnline;
        }

        if (null !== $this->gmtTimestamp) {
            $res['GmtTimestamp'] = $this->gmtTimestamp;
        }

        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->utcActive) {
            $res['UtcActive'] = $this->utcActive;
        }

        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }

        if (null !== $this->utcOnline) {
            $res['UtcOnline'] = $this->utcOnline;
        }

        if (null !== $this->utcTimestamp) {
            $res['UtcTimestamp'] = $this->utcTimestamp;
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
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }

        if (isset($map['FirmwareVersion'])) {
            $model->firmwareVersion = $map['FirmwareVersion'];
        }

        if (isset($map['GmtActive'])) {
            $model->gmtActive = $map['GmtActive'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtOnline'])) {
            $model->gmtOnline = $map['GmtOnline'];
        }

        if (isset($map['GmtTimestamp'])) {
            $model->gmtTimestamp = $map['GmtTimestamp'];
        }

        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UtcActive'])) {
            $model->utcActive = $map['UtcActive'];
        }

        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }

        if (isset($map['UtcOnline'])) {
            $model->utcOnline = $map['UtcOnline'];
        }

        if (isset($map['UtcTimestamp'])) {
            $model->utcTimestamp = $map['UtcTimestamp'];
        }

        return $model;
    }
}
