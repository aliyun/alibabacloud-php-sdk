<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeRtcUserEventListRequest extends Model
{
    /**
     * @description 应用id
     *
     * @var string
     */
    public $appId;

    /**
     * @description ChannelID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 结束时间，UTC格式
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 起始时间，UTC格式
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 用户ID
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'appId'     => 'AppId',
        'channelId' => 'ChannelId',
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
        'uid'       => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcUserEventListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
