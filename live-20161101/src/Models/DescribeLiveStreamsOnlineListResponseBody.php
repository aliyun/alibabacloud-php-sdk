<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListResponseBody\onlineInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsOnlineListResponseBody extends Model
{
    /**
     * @description The information about the live streams that are being ingested.
     *
     * @var onlineInfo
     */
    public $onlineInfo;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 5c6a2a0df228-4a64- af62-20e91b9676b3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of streams that meet the specified conditions.
     *
     * @example 11
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description The total number of pages returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'onlineInfo' => 'OnlineInfo',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineInfo) {
            $res['OnlineInfo'] = null !== $this->onlineInfo ? $this->onlineInfo->toMap() : null;
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
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsOnlineListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnlineInfo'])) {
            $model->onlineInfo = onlineInfo::fromMap($map['OnlineInfo']);
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
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
