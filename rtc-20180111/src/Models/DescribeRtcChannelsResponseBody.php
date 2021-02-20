<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelsResponseBody\channels;
use AlibabaCloud\Tea\Model;

class DescribeRtcChannelsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCnt;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var channels[]
     */
    public $channels;
    protected $_name = [
        'totalCnt'  => 'TotalCnt',
        'requestId' => 'RequestId',
        'pageSize'  => 'PageSize',
        'pageNo'    => 'PageNo',
        'channels'  => 'Channels',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
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
     * @return DescribeRtcChannelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
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
