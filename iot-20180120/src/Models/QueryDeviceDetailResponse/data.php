<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDetailResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $iotId;

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
    public $deviceSecret;

    /**
     * @var string
     */
    public $firmwareVersion;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var string
     */
    public $gmtActive;

    /**
     * @var string
     */
    public $utcActive;

    /**
     * @var string
     */
    public $gmtOnline;

    /**
     * @var string
     */
    public $utcOnline;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var bool
     */
    public $owner;

    /**
     * @var string
     */
    public $nickname;
    protected $_name = [
        'iotId'           => 'IotId',
        'productKey'      => 'ProductKey',
        'productName'     => 'ProductName',
        'deviceName'      => 'DeviceName',
        'deviceSecret'    => 'DeviceSecret',
        'firmwareVersion' => 'FirmwareVersion',
        'gmtCreate'       => 'GmtCreate',
        'utcCreate'       => 'UtcCreate',
        'gmtActive'       => 'GmtActive',
        'utcActive'       => 'UtcActive',
        'gmtOnline'       => 'GmtOnline',
        'utcOnline'       => 'UtcOnline',
        'status'          => 'Status',
        'ipAddress'       => 'IpAddress',
        'nodeType'        => 'NodeType',
        'region'          => 'Region',
        'owner'           => 'Owner',
        'nickname'        => 'Nickname',
    ];

    public function validate()
    {
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('deviceSecret', $this->deviceSecret, true);
        Model::validateRequired('firmwareVersion', $this->firmwareVersion, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('utcCreate', $this->utcCreate, true);
        Model::validateRequired('gmtActive', $this->gmtActive, true);
        Model::validateRequired('utcActive', $this->utcActive, true);
        Model::validateRequired('gmtOnline', $this->gmtOnline, true);
        Model::validateRequired('utcOnline', $this->utcOnline, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('ipAddress', $this->ipAddress, true);
        Model::validateRequired('nodeType', $this->nodeType, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('nickname', $this->nickname, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }
        if (null !== $this->firmwareVersion) {
            $res['FirmwareVersion'] = $this->firmwareVersion;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->gmtActive) {
            $res['GmtActive'] = $this->gmtActive;
        }
        if (null !== $this->utcActive) {
            $res['UtcActive'] = $this->utcActive;
        }
        if (null !== $this->gmtOnline) {
            $res['GmtOnline'] = $this->gmtOnline;
        }
        if (null !== $this->utcOnline) {
            $res['UtcOnline'] = $this->utcOnline;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
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
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }
        if (isset($map['FirmwareVersion'])) {
            $model->firmwareVersion = $map['FirmwareVersion'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['GmtActive'])) {
            $model->gmtActive = $map['GmtActive'];
        }
        if (isset($map['UtcActive'])) {
            $model->utcActive = $map['UtcActive'];
        }
        if (isset($map['GmtOnline'])) {
            $model->gmtOnline = $map['GmtOnline'];
        }
        if (isset($map['UtcOnline'])) {
            $model->utcOnline = $map['UtcOnline'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }

        return $model;
    }
}
