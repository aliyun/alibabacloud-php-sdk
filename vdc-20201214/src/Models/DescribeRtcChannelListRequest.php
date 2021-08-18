<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeRtcChannelListRequest extends Model
{
    /**
     * @description 应用Id
     *
     * @var string
     */
    public $appId;

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

    /**
     * @description ChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 页号
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description 显示数量
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appId'     => 'AppId',
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
        'channelId' => 'ChannelId',
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcChannelListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
