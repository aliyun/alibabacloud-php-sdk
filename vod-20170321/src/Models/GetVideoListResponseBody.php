<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList;
use AlibabaCloud\Tea\Model;

class GetVideoListResponseBody extends Model
{
    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var videoList
     */
    public $videoList;
    protected $_name = [
        'total'     => 'Total',
        'requestId' => 'RequestId',
        'videoList' => 'VideoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->videoList) {
            $res['VideoList'] = null !== $this->videoList ? $this->videoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VideoList'])) {
            $model->videoList = videoList::fromMap($map['VideoList']);
        }

        return $model;
    }
}
