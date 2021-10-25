<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class RegistDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $outerCode;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $deviceModelNumber;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $firstScene;

    /**
     * @var string
     */
    public $secondScene;

    /**
     * @var string
     */
    public $floor;

    /**
     * @var string
     */
    public $locationName;

    /**
     * @var string
     */
    public $detailAddr;
    protected $_name = [
        'channelId'         => 'ChannelId',
        'outerCode'         => 'OuterCode',
        'deviceType'        => 'DeviceType',
        'deviceModelNumber' => 'DeviceModelNumber',
        'deviceName'        => 'DeviceName',
        'province'          => 'Province',
        'city'              => 'City',
        'district'          => 'District',
        'firstScene'        => 'FirstScene',
        'secondScene'       => 'SecondScene',
        'floor'             => 'Floor',
        'locationName'      => 'LocationName',
        'detailAddr'        => 'DetailAddr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->outerCode) {
            $res['OuterCode'] = $this->outerCode;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->deviceModelNumber) {
            $res['DeviceModelNumber'] = $this->deviceModelNumber;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->district) {
            $res['District'] = $this->district;
        }
        if (null !== $this->firstScene) {
            $res['FirstScene'] = $this->firstScene;
        }
        if (null !== $this->secondScene) {
            $res['SecondScene'] = $this->secondScene;
        }
        if (null !== $this->floor) {
            $res['Floor'] = $this->floor;
        }
        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }
        if (null !== $this->detailAddr) {
            $res['DetailAddr'] = $this->detailAddr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegistDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['OuterCode'])) {
            $model->outerCode = $map['OuterCode'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['DeviceModelNumber'])) {
            $model->deviceModelNumber = $map['DeviceModelNumber'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['District'])) {
            $model->district = $map['District'];
        }
        if (isset($map['FirstScene'])) {
            $model->firstScene = $map['FirstScene'];
        }
        if (isset($map['SecondScene'])) {
            $model->secondScene = $map['SecondScene'];
        }
        if (isset($map['Floor'])) {
            $model->floor = $map['Floor'];
        }
        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }
        if (isset($map['DetailAddr'])) {
            $model->detailAddr = $map['DetailAddr'];
        }

        return $model;
    }
}
