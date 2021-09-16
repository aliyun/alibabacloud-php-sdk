<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponseBody\topPlayVideos;
use AlibabaCloud\Tea\Model;

class DescribePlayTopVideosResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNo;

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
    public $totalNum;

    /**
     * @var topPlayVideos
     */
    public $topPlayVideos;
    protected $_name = [
        'pageNo'        => 'PageNo',
        'requestId'     => 'RequestId',
        'pageSize'      => 'PageSize',
        'totalNum'      => 'TotalNum',
        'topPlayVideos' => 'TopPlayVideos',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->topPlayVideos) {
            $res['TopPlayVideos'] = null !== $this->topPlayVideos ? $this->topPlayVideos->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TopPlayVideos'])) {
            $model->topPlayVideos = topPlayVideos::fromMap($map['TopPlayVideos']);
        }

        return $model;
    }
}
