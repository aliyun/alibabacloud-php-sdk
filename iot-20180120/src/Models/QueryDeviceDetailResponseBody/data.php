<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example mz2Canp4GB7qRVf1OYPNtRqB2anu****
     *
     * @var string
     */
    public $deviceSecret;

    /**
     * @example V1.0.0.0
     *
     * @var string
     */
    public $firmwareVersion;

    /**
     * @example 2018-08-06 10:48:41
     *
     * @var string
     */
    public $gmtActive;

    /**
     * @example 2018-08-06 10:47:50
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2018-08-06 13:43:12
     *
     * @var string
     */
    public $gmtOnline;

    /**
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @example 10.0.0.1
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example detectors_in_beijing
     *
     * @var string
     */
    public $nickname;

    /**
     * @example 0
     *
     * @var int
     */
    public $nodeType;

    /**
     * @example true
     *
     * @var bool
     */
    public $owner;

    /**
     * @example a1rYuVF****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example test
     *
     * @var string
     */
    public $productName;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @example 2018-08-06T02:48:41.000Z
     *
     * @var string
     */
    public $utcActive;

    /**
     * @example 2018-08-06T02:47:50.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @example 2018-08-06T05:43:12.000Z
     *
     * @var string
     */
    public $utcOnline;
    protected $_name = [
        'deviceName'      => 'DeviceName',
        'deviceSecret'    => 'DeviceSecret',
        'firmwareVersion' => 'FirmwareVersion',
        'gmtActive'       => 'GmtActive',
        'gmtCreate'       => 'GmtCreate',
        'gmtOnline'       => 'GmtOnline',
        'iotId'           => 'IotId',
        'ipAddress'       => 'IpAddress',
        'nickname'        => 'Nickname',
        'nodeType'        => 'NodeType',
        'owner'           => 'Owner',
        'productKey'      => 'ProductKey',
        'productName'     => 'ProductName',
        'region'          => 'Region',
        'status'          => 'Status',
        'utcActive'       => 'UtcActive',
        'utcCreate'       => 'UtcCreate',
        'utcOnline'       => 'UtcOnline',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $model;
    }
}
