<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListDevicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $sipGBId;

    /**
     * @var string
     */
    public $deviceDirection;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceAddress;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $sipPassword;

    /**
     * @var string
     */
    public $sipServerPort;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $coverImageUrl;

    /**
     * @var string
     */
    public $accessProtocolType;

    /**
     * @var string
     */
    public $deviceSite;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $sipServerIp;

    /**
     * @var string
     */
    public $bitRate;
    protected $_name = [
        'status'             => 'Status',
        'sipGBId'            => 'SipGBId',
        'deviceDirection'    => 'DeviceDirection',
        'deviceName'         => 'DeviceName',
        'deviceAddress'      => 'DeviceAddress',
        'deviceType'         => 'DeviceType',
        'createTime'         => 'CreateTime',
        'sipPassword'        => 'SipPassword',
        'sipServerPort'      => 'SipServerPort',
        'vendor'             => 'Vendor',
        'gbId'               => 'GbId',
        'coverImageUrl'      => 'CoverImageUrl',
        'accessProtocolType' => 'AccessProtocolType',
        'deviceSite'         => 'DeviceSite',
        'longitude'          => 'Longitude',
        'latitude'           => 'Latitude',
        'resolution'         => 'Resolution',
        'sipServerIp'        => 'SipServerIp',
        'bitRate'            => 'BitRate',
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
        if (null !== $this->sipGBId) {
            $res['SipGBId'] = $this->sipGBId;
        }
        if (null !== $this->deviceDirection) {
            $res['DeviceDirection'] = $this->deviceDirection;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceAddress) {
            $res['DeviceAddress'] = $this->deviceAddress;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sipPassword) {
            $res['SipPassword'] = $this->sipPassword;
        }
        if (null !== $this->sipServerPort) {
            $res['SipServerPort'] = $this->sipServerPort;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->coverImageUrl) {
            $res['CoverImageUrl'] = $this->coverImageUrl;
        }
        if (null !== $this->accessProtocolType) {
            $res['AccessProtocolType'] = $this->accessProtocolType;
        }
        if (null !== $this->deviceSite) {
            $res['DeviceSite'] = $this->deviceSite;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->sipServerIp) {
            $res['SipServerIp'] = $this->sipServerIp;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SipGBId'])) {
            $model->sipGBId = $map['SipGBId'];
        }
        if (isset($map['DeviceDirection'])) {
            $model->deviceDirection = $map['DeviceDirection'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceAddress'])) {
            $model->deviceAddress = $map['DeviceAddress'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SipPassword'])) {
            $model->sipPassword = $map['SipPassword'];
        }
        if (isset($map['SipServerPort'])) {
            $model->sipServerPort = $map['SipServerPort'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['CoverImageUrl'])) {
            $model->coverImageUrl = $map['CoverImageUrl'];
        }
        if (isset($map['AccessProtocolType'])) {
            $model->accessProtocolType = $map['AccessProtocolType'];
        }
        if (isset($map['DeviceSite'])) {
            $model->deviceSite = $map['DeviceSite'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['SipServerIp'])) {
            $model->sipServerIp = $map['SipServerIp'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }

        return $model;
    }
}
