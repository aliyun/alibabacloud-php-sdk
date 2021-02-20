<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelDetailResponseBody;

use AlibabaCloud\Tea\Model;

class channelInfo extends Model
{
    /**
     * @var string
     */
    public $sid;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $OS;

    /**
     * @var string
     */
    public $leaveTime;

    /**
     * @var string
     */
    public $joinTime;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $sdkVersion;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'sid'        => 'Sid',
        'deviceType' => 'DeviceType',
        'OS'         => 'OS',
        'leaveTime'  => 'LeaveTime',
        'joinTime'   => 'JoinTime',
        'platform'   => 'Platform',
        'sdkVersion' => 'SdkVersion',
        'uid'        => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->OS) {
            $res['OS'] = $this->OS;
        }
        if (null !== $this->leaveTime) {
            $res['LeaveTime'] = $this->leaveTime;
        }
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['OS'])) {
            $model->OS = $map['OS'];
        }
        if (isset($map['LeaveTime'])) {
            $model->leaveTime = $map['LeaveTime'];
        }
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
