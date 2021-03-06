<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsPublishListResponseBody\publishInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsPublishListResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var publishInfo
     */
    public $publishInfo;
    protected $_name = [
        'totalNum'    => 'TotalNum',
        'totalPage'   => 'TotalPage',
        'pageNum'     => 'PageNum',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'publishInfo' => 'PublishInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->publishInfo) {
            $res['PublishInfo'] = null !== $this->publishInfo ? $this->publishInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsPublishListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PublishInfo'])) {
            $model->publishInfo = publishInfo::fromMap($map['PublishInfo']);
        }

        return $model;
    }
}
