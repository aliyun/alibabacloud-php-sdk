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
     * @description 结束时间，UTC格式
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 发布端用户ID
     *
     * @var string
     */
    public $pubUid;

    /**
     * @description 起始时间，UTC格式
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 接收端用户ID
     *
     * @var string
     */
    public $subUid;
    protected $_name = [
        'appId'     => 'AppId',
        'channelId' => 'ChannelId',
        'endTime'   => 'EndTime',
        'pubUid'    => 'PubUid',
        'startTime' => 'StartTime',
        'subUid'    => 'SubUid',
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
        if (null !== $this->pubUid) {
            $res['PubUid'] = $this->pubUid;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subUid) {
            $res['SubUid'] = $this->subUid;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PubUid'])) {
            $model->pubUid = $map['PubUid'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SubUid'])) {
            $model->subUid = $map['SubUid'];
        }

        return $model;
    }
}
