<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListNVRDeviceResponseBody;

use AlibabaCloud\SDK\Vcs\V20200515\Models\ListNVRDeviceResponseBody\data\channelList;
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
    public $regionName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $registrationTime;

    /**
     * @var string
     */
    public $accessQuota;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var channelList[]
     */
    public $channelList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'deviceCode'       => 'DeviceCode',
        'deviceName'       => 'DeviceName',
        'deviceType'       => 'DeviceType',
        'datasourceType'   => 'DatasourceType',
        'deviceStatus'     => 'DeviceStatus',
        'streamStatus'     => 'StreamStatus',
        'comptureStatus'   => 'ComptureStatus',
        'regionName'       => 'RegionName',
        'projectName'      => 'ProjectName',
        'registrationTime' => 'RegistrationTime',
        'accessQuota'      => 'AccessQuota',
        'channel'          => 'Channel',
        'deviceSn'         => 'DeviceSn',
        'channelList'      => 'ChannelList',
        'type'             => 'Type',
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
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->registrationTime) {
            $res['RegistrationTime'] = $this->registrationTime;
        }
        if (null !== $this->accessQuota) {
            $res['AccessQuota'] = $this->accessQuota;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->channelList) {
            $res['ChannelList'] = [];
            if (null !== $this->channelList && \is_array($this->channelList)) {
                $n = 0;
                foreach ($this->channelList as $item) {
                    $res['ChannelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RegistrationTime'])) {
            $model->registrationTime = $map['RegistrationTime'];
        }
        if (isset($map['AccessQuota'])) {
            $model->accessQuota = $map['AccessQuota'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['ChannelList'])) {
            if (!empty($map['ChannelList'])) {
                $model->channelList = [];
                $n                  = 0;
                foreach ($map['ChannelList'] as $item) {
                    $model->channelList[$n++] = null !== $item ? channelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
