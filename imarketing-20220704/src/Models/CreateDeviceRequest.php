<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceRequest extends Model
{
    /**
     * @example 747469885047067648
     *
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $city;

    /**
     * @example 3306196
     *
     * @var string
     */
    public $deviceModelNumber;

    /**
     * @example ETCPPARK
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example android
     *
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $district;

    /**
     * @var mixed[]
     */
    public $extraMap;

    /**
     * @var string
     */
    public $firstScene;

    /**
     * @var string
     */
    public $floor;

    /**
     * @var string
     */
    public $locationName;

    /**
     * @example 707566617274263557
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example 9305102437
     *
     * @var string
     */
    public $outerCode;

    /**
     * @var string
     */
    public $province;

    /**
     * @example CBD
     *
     * @var string
     */
    public $secondScene;
    protected $_name = [
        'channelId'         => 'ChannelId',
        'city'              => 'City',
        'deviceModelNumber' => 'DeviceModelNumber',
        'deviceName'        => 'DeviceName',
        'deviceType'        => 'DeviceType',
        'district'          => 'District',
        'extraMap'          => 'ExtraMap',
        'firstScene'        => 'FirstScene',
        'floor'             => 'Floor',
        'locationName'      => 'LocationName',
        'mediaId'           => 'MediaId',
        'outerCode'         => 'OuterCode',
        'province'          => 'Province',
        'secondScene'       => 'SecondScene',
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
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->deviceModelNumber) {
            $res['DeviceModelNumber'] = $this->deviceModelNumber;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->district) {
            $res['District'] = $this->district;
        }
        if (null !== $this->extraMap) {
            $res['ExtraMap'] = $this->extraMap;
        }
        if (null !== $this->firstScene) {
            $res['FirstScene'] = $this->firstScene;
        }
        if (null !== $this->floor) {
            $res['Floor'] = $this->floor;
        }
        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->outerCode) {
            $res['OuterCode'] = $this->outerCode;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->secondScene) {
            $res['SecondScene'] = $this->secondScene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['DeviceModelNumber'])) {
            $model->deviceModelNumber = $map['DeviceModelNumber'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['District'])) {
            $model->district = $map['District'];
        }
        if (isset($map['ExtraMap'])) {
            $model->extraMap = $map['ExtraMap'];
        }
        if (isset($map['FirstScene'])) {
            $model->firstScene = $map['FirstScene'];
        }
        if (isset($map['Floor'])) {
            $model->floor = $map['Floor'];
        }
        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['OuterCode'])) {
            $model->outerCode = $map['OuterCode'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['SecondScene'])) {
            $model->secondScene = $map['SecondScene'];
        }

        return $model;
    }
}
