<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList;
use AlibabaCloud\Tea\Model;

class DescribeRtcChannelListResponseBody extends Model
{
    /**
     * @var channelList
     */
    public $channelList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $totalCnt;
    protected $_name = [
        'channelList' => 'ChannelList',
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCnt'    => 'TotalCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelList) {
            $res['ChannelList'] = null !== $this->channelList ? $this->channelList->toMap() : null;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcChannelListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelList'])) {
            $model->channelList = channelList::fromMap($map['ChannelList']);
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }

        return $model;
    }
}
