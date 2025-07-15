<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStreamLocationBlockResponseBody\streamBlockList;
use AlibabaCloud\Tea\Model;

class DescribeStreamLocationBlockResponseBody extends Model
{
    /**
     * @description The total number of entries that meet the specified conditions.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example C7C69682-7F88-40DD-A198-10D0309E439B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The configurations.
     *
     * @var streamBlockList
     */
    public $streamBlockList;

    /**
     * @description The total number of pages.
     *
     * @example 1
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'count' => 'Count',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'streamBlockList' => 'StreamBlockList',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (null !== $this->streamBlockList) {
            $res['StreamBlockList'] = null !== $this->streamBlockList ? $this->streamBlockList->toMap() : null;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStreamLocationBlockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
        if (isset($map['StreamBlockList'])) {
            $model->streamBlockList = streamBlockList::fromMap($map['StreamBlockList']);
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
