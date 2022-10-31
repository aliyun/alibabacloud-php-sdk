<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamMonitorListResponseBody extends Model
{
    /**
     * @var liveStreamMonitorList[]
     */
    public $liveStreamMonitorList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'liveStreamMonitorList' => 'LiveStreamMonitorList',
        'requestId'             => 'RequestId',
        'total'                 => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamMonitorList) {
            $res['LiveStreamMonitorList'] = [];
            if (null !== $this->liveStreamMonitorList && \is_array($this->liveStreamMonitorList)) {
                $n = 0;
                foreach ($this->liveStreamMonitorList as $item) {
                    $res['LiveStreamMonitorList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamMonitorListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamMonitorList'])) {
            if (!empty($map['LiveStreamMonitorList'])) {
                $model->liveStreamMonitorList = [];
                $n                            = 0;
                foreach ($map['LiveStreamMonitorList'] as $item) {
                    $model->liveStreamMonitorList[$n++] = null !== $item ? liveStreamMonitorList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
