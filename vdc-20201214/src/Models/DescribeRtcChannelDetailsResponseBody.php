<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelDetailsResponseBody\channelInfo;
use AlibabaCloud\Tea\Model;

class DescribeRtcChannelDetailsResponseBody extends Model
{
    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

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

    /**
     * @description 总数量
     *
     * @var int
     */
    public $totalSize;

    /**
     * @description 频道ID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 频道信息
     *
     * @var channelInfo[]
     */
    public $channelInfo;
    protected $_name = [
        'requestId'   => 'RequestId',
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'totalSize'   => 'TotalSize',
        'channelId'   => 'ChannelId',
        'channelInfo' => 'ChannelInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcChannelDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
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

        return $model;
    }
}
