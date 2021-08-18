<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeRtcChannelMetricListRequest extends Model
{
    /**
     * @description 应用id
     *
     * @var string
     */
    public $appId;

    /**
     * @description ChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 发布端用户ID
     *
     * @var string
     */
    public $pubUid;

    /**
     * @description 接收端用户ID
     *
     * @var string
     */
    public $subUid;

    /**
     * @description 起始时间，UTC格式
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 结束时间，UTC格式
     *
     * @var string
     */
    public $endTime;
    protected $_name = [
        'appId'     => 'AppId',
        'channelId' => 'ChannelId',
        'pubUid'    => 'PubUid',
        'subUid'    => 'SubUid',
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
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
        if (null !== $this->pubUid) {
            $res['PubUid'] = $this->pubUid;
        }
        if (null !== $this->subUid) {
            $res['SubUid'] = $this->subUid;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcChannelMetricListRequest
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
        if (isset($map['PubUid'])) {
            $model->pubUid = $map['PubUid'];
        }
        if (isset($map['SubUid'])) {
            $model->subUid = $map['SubUid'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
