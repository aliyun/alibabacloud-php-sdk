<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfosResponseBody\videoList;
use AlibabaCloud\Tea\Model;

class GetVideoInfosResponseBody extends Model
{
    /**
     * @description The IDs of the videos that do not exist.
     *
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the video.
     *
     * @var videoList[]
     */
    public $videoList;
    protected $_name = [
        'nonExistVideoIds' => 'NonExistVideoIds',
        'requestId'        => 'RequestId',
        'videoList'        => 'VideoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistVideoIds) {
            $res['NonExistVideoIds'] = $this->nonExistVideoIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->videoList) {
            $res['VideoList'] = [];
            if (null !== $this->videoList && \is_array($this->videoList)) {
                $n = 0;
                foreach ($this->videoList as $item) {
                    $res['VideoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistVideoIds'])) {
            if (!empty($map['NonExistVideoIds'])) {
                $model->nonExistVideoIds = $map['NonExistVideoIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VideoList'])) {
            if (!empty($map['VideoList'])) {
                $model->videoList = [];
                $n                = 0;
                foreach ($map['VideoList'] as $item) {
                    $model->videoList[$n++] = null !== $item ? videoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
