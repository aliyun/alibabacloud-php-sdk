<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListNVRChannelDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceCode;

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
    public $datasourceType;

    /**
     * @var string
     */
    public $deviceStatus;

    /**
     * @var string
     */
    public $streamStatus;

    /**
     * @var string
     */
    public $comptureStatus;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var string
     */
    public $sampleName;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $corpId;
    protected $_name = [
        'deviceCode'     => 'DeviceCode',
        'deviceName'     => 'DeviceName',
        'deviceType'     => 'DeviceType',
        'datasourceType' => 'DatasourceType',
        'deviceStatus'   => 'DeviceStatus',
        'streamStatus'   => 'StreamStatus',
        'comptureStatus' => 'ComptureStatus',
        'deviceSn'       => 'DeviceSn',
        'sampleName'     => 'SampleName',
        'regionName'     => 'RegionName',
        'corpId'         => 'CorpId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCode) {
            $res['DeviceCode'] = $this->deviceCode;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->datasourceType) {
            $res['DatasourceType'] = $this->datasourceType;
        }
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }
        if (null !== $this->streamStatus) {
            $res['StreamStatus'] = $this->streamStatus;
        }
        if (null !== $this->comptureStatus) {
            $res['ComptureStatus'] = $this->comptureStatus;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->sampleName) {
            $res['SampleName'] = $this->sampleName;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
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
        if (isset($map['DeviceCode'])) {
            $model->deviceCode = $map['DeviceCode'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['DatasourceType'])) {
            $model->datasourceType = $map['DatasourceType'];
        }
        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }
        if (isset($map['StreamStatus'])) {
            $model->streamStatus = $map['StreamStatus'];
        }
        if (isset($map['ComptureStatus'])) {
            $model->comptureStatus = $map['ComptureStatus'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['SampleName'])) {
            $model->sampleName = $map['SampleName'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        return $model;
    }
}
