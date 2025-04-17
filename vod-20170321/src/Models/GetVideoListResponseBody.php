<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList;

class GetVideoListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var videoList
     */
    public $videoList;
    protected $_name = [
        'requestId' => 'RequestId',
        'total' => 'Total',
        'videoList' => 'VideoList',
    ];

    public function validate()
    {
        if (null !== $this->videoList) {
            $this->videoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->videoList) {
            $res['VideoList'] = null !== $this->videoList ? $this->videoList->toArray($noStream) : $this->videoList;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['VideoList'])) {
            $model->videoList = videoList::fromMap($map['VideoList']);
        }

        return $model;
    }
}
