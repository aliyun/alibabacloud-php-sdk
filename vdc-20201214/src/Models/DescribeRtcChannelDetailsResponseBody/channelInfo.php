<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class channelInfo extends Model
{
    /**
     * @description 设备类型
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description 用户入会时间，UTC格式
     *
     * @var string
     */
    public $joinTime;

    /**
     * @description 用户离会时间，UTC格式
     *
     * @var string
     */
    public $leaveTime;

    /**
     * @description 操作系统
     *
     * @var string
     */
    public $OS;

    /**
     * @description 平台信息
     *
     * @var string
     */
    public $platform;

    /**
     * @description SDK版本
     *
     * @var string
     */
    public $sdkVersion;

    /**
     * @description SessionID
     *
     * @var string
     */
    public $sid;

    /**
     * @description 参会者ID
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'deviceType' => 'DeviceType',
        'joinTime'   => 'JoinTime',
        'leaveTime'  => 'LeaveTime',
        'OS'         => 'OS',
        'platform'   => 'Platform',
        'sdkVersion' => 'SdkVersion',
        'sid'        => 'Sid',
        'uid'        => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->leaveTime) {
            $res['LeaveTime'] = $this->leaveTime;
        }
        if (null !== $this->OS) {
            $res['OS'] = $this->OS;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
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
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['LeaveTime'])) {
            $model->leaveTime = $map['LeaveTime'];
        }
        if (isset($map['OS'])) {
            $model->OS = $map['OS'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
