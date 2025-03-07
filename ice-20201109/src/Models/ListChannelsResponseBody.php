<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListChannelsResponseBody extends Model
{
    /**
     * @description The channels.
     *
     * @var ChannelAssemblyChannel[]
     */
    public $channelList;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description **Request ID**
     *
     * @example xxx-xxxx-xxxxx-xxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of channels returned.
     *
     * @example 180
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'channelList' => 'ChannelList',
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelList) {
            $res['ChannelList'] = [];
            if (null !== $this->channelList && \is_array($this->channelList)) {
                $n = 0;
                foreach ($this->channelList as $item) {
                    $res['ChannelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChannelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelList'])) {
            if (!empty($map['ChannelList'])) {
                $model->channelList = [];
                $n                  = 0;
                foreach ($map['ChannelList'] as $item) {
                    $model->channelList[$n++] = null !== $item ? ChannelAssemblyChannel::fromMap($item) : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
