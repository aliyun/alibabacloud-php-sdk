<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class AddDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $deviceAddress;

    /**
     * @var string
     */
    public $deviceSite;

    /**
     * @var string
     */
    public $deviceDirection;

    /**
     * @var string
     */
    public $deviceResolution;

    /**
     * @var string
     */
    public $bitRate;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'gbId'             => 'GbId',
        'deviceName'       => 'DeviceName',
        'deviceType'       => 'DeviceType',
        'deviceAddress'    => 'DeviceAddress',
        'deviceSite'       => 'DeviceSite',
        'deviceDirection'  => 'DeviceDirection',
        'deviceResolution' => 'DeviceResolution',
        'bitRate'          => 'BitRate',
        'corpId'           => 'CorpId',
        'vendor'           => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->deviceAddress) {
            $res['DeviceAddress'] = $this->deviceAddress;
        }
        if (null !== $this->deviceSite) {
            $res['DeviceSite'] = $this->deviceSite;
        }
        if (null !== $this->deviceDirection) {
            $res['DeviceDirection'] = $this->deviceDirection;
        }
        if (null !== $this->deviceResolution) {
            $res['DeviceResolution'] = $this->deviceResolution;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['DeviceAddress'])) {
            $model->deviceAddress = $map['DeviceAddress'];
        }
        if (isset($map['DeviceSite'])) {
            $model->deviceSite = $map['DeviceSite'];
        }
        if (isset($map['DeviceDirection'])) {
            $model->deviceDirection = $map['DeviceDirection'];
        }
        if (isset($map['DeviceResolution'])) {
            $model->deviceResolution = $map['DeviceResolution'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
