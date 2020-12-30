<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponseBody\topPlayVideos;
use AlibabaCloud\Tea\Model;

class DescribePlayTopVideosResponseBody extends Model
{
    /**
     * @var topPlayVideos
     */
    public $topPlayVideos;

    /**
     * @var int
     */
    public $totalNum;

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
    protected $_name = [
        'topPlayVideos' => 'TopPlayVideos',
        'totalNum'      => 'TotalNum',
        'requestId'     => 'RequestId',
        'pageSize'      => 'PageSize',
        'pageNo'        => 'PageNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topPlayVideos) {
            $res['TopPlayVideos'] = null !== $this->topPlayVideos ? $this->topPlayVideos->toMap() : null;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['TopPlayVideos'])) {
            $model->topPlayVideos = topPlayVideos::fromMap($map['TopPlayVideos']);
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
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

        return $model;
    }
}
