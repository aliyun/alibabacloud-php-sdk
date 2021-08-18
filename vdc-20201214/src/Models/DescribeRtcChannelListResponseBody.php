<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelListResponseBody\channels;
use AlibabaCloud\Tea\Model;

class DescribeRtcChannelListResponseBody extends Model
{
    /**
     * @description 请求id
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
     * @description 总条数
     *
     * @var int
     */
    public $totalCnt;

    /**
     * @description 频道列表
     *
     * @var channels[]
     */
    public $channels;
    protected $_name = [
        'requestId' => 'RequestId',
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'totalCnt'  => 'TotalCnt',
        'channels'  => 'Channels',
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
        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
        }
        if (null !== $this->channels) {
            $res['Channels'] = [];
            if (null !== $this->channels && \is_array($this->channels)) {
                $n = 0;
                foreach ($this->channels as $item) {
                    $res['Channels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }
        if (isset($map['Channels'])) {
            if (!empty($map['Channels'])) {
                $model->channels = [];
                $n               = 0;
                foreach ($map['Channels'] as $item) {
                    $model->channels[$n++] = null !== $item ? channels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
