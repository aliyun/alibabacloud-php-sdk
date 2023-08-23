<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class SyncDeviceStatusWithAkRequest extends Model
{
    /**
     * @var string
     */
    public $categoryCnName;

    /**
     * @example light
     *
     * @var string
     */
    public $categoryEnName;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example room
     *
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $locationCnName;

    /**
     * @example bedLight
     *
     * @var string
     */
    public $number;

    /**
     * @example 1211
     *
     * @var string
     */
    public $roomNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $switch;

    /**
     * @var string
     */
    public $fanSpeed;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $roomTemperature;

    /**
     * @var string
     */
    public $temperature;

    /**
     * @var int
     */
    public $value;
    protected $_name = [
        'categoryCnName'  => 'CategoryCnName',
        'categoryEnName'  => 'CategoryEnName',
        'deviceName'      => 'DeviceName',
        'hotelId'         => 'HotelId',
        'location'        => 'Location',
        'locationCnName'  => 'LocationCnName',
        'number'          => 'Number',
        'roomNo'          => 'RoomNo',
        'switch'          => 'Switch',
        'fanSpeed'        => 'fanSpeed',
        'mode'            => 'mode',
        'roomTemperature' => 'roomTemperature',
        'temperature'     => 'temperature',
        'value'           => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryCnName) {
            $res['CategoryCnName'] = $this->categoryCnName;
        }
        if (null !== $this->categoryEnName) {
            $res['CategoryEnName'] = $this->categoryEnName;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->locationCnName) {
            $res['LocationCnName'] = $this->locationCnName;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->switch) {
            $res['Switch'] = $this->switch;
        }
        if (null !== $this->fanSpeed) {
            $res['fanSpeed'] = $this->fanSpeed;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->roomTemperature) {
            $res['roomTemperature'] = $this->roomTemperature;
        }
        if (null !== $this->temperature) {
            $res['temperature'] = $this->temperature;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncDeviceStatusWithAkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryCnName'])) {
            $model->categoryCnName = $map['CategoryCnName'];
        }
        if (isset($map['CategoryEnName'])) {
            $model->categoryEnName = $map['CategoryEnName'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['LocationCnName'])) {
            $model->locationCnName = $map['LocationCnName'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }
        if (isset($map['Switch'])) {
            $model->switch = $map['Switch'];
        }
        if (isset($map['fanSpeed'])) {
            $model->fanSpeed = $map['fanSpeed'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['roomTemperature'])) {
            $model->roomTemperature = $map['roomTemperature'];
        }
        if (isset($map['temperature'])) {
            $model->temperature = $map['temperature'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
