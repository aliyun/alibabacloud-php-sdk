<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList;
use AlibabaCloud\Tea\Model;

class GetVideoListResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of media files returned.
     *
     * @example 100
     *
     * @var int
     */
    public $total;

    /**
     * @description The information about the audio or video files. Information about a maximum of 5,000 audio or video files can be returned.
     *
     * @var videoList
     */
    public $videoList;
    protected $_name = [
        'requestId' => 'RequestId',
        'total'     => 'Total',
        'videoList' => 'VideoList',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
