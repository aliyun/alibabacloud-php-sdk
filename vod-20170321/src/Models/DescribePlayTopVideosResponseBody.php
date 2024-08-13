<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponseBody\topPlayVideos;
use AlibabaCloud\Tea\Model;

class DescribePlayTopVideosResponseBody extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 4B0BCF9F-2FD5-4817-****-7BEBBE3AF90B"
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The daily playback statistics on each top video.
     *
     * @var topPlayVideos
     */
    public $topPlayVideos;

    /**
     * @description The total number of entries that were collected in playback statistics on top videos.
     *
     * @example 2
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'topPlayVideos' => 'TopPlayVideos',
        'totalNum'      => 'TotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->topPlayVideos) {
            $res['TopPlayVideos'] = null !== $this->topPlayVideos ? $this->topPlayVideos->toMap() : null;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayTopVideosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TopPlayVideos'])) {
            $model->topPlayVideos = topPlayVideos::fromMap($map['TopPlayVideos']);
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
