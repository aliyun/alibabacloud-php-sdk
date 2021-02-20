<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelDetailResponseBody\channelInfo;
use AlibabaCloud\Tea\Model;

class DescribeRtcChannelDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCnt;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var channelInfo[]
     */
    public $channelInfo;

    /**
     * @var string
     */
    public $channelId;
    protected $_name = [
        'totalCnt'    => 'TotalCnt',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'pageNo'      => 'PageNo',
        'channelInfo' => 'ChannelInfo',
        'channelId'   => 'ChannelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->channelInfo) {
            $res['ChannelInfo'] = [];
            if (null !== $this->channelInfo && \is_array($this->channelInfo)) {
                $n = 0;
                foreach ($this->channelInfo as $item) {
                    $res['ChannelInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcChannelDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['ChannelInfo'])) {
            if (!empty($map['ChannelInfo'])) {
                $model->channelInfo = [];
                $n                  = 0;
                foreach ($map['ChannelInfo'] as $item) {
                    $model->channelInfo[$n++] = null !== $item ? channelInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        return $model;
    }
}
