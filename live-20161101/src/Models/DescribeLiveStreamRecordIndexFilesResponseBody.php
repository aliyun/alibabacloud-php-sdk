<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFilesResponseBody\recordIndexInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamRecordIndexFilesResponseBody extends Model
{
    /**
     * @description The sort order.
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number.
     *
     * @example 10
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
     * @description The index files.
     *
     * @var recordIndexInfoList
     */
    public $recordIndexInfoList;

    /**
     * @description The request ID.
     *
     * @example DE24625C-7C0F-4020-8448-9C31A50C1556
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries that meet the specified conditions.
     *
     * @example 12
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description The total number of pages.
     *
     * @example 20
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'order' => 'Order',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'recordIndexInfoList' => 'RecordIndexInfoList',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recordIndexInfoList) {
            $res['RecordIndexInfoList'] = null !== $this->recordIndexInfoList ? $this->recordIndexInfoList->toMap() : null;
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
     * @return DescribeLiveStreamRecordIndexFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RecordIndexInfoList'])) {
            $model->recordIndexInfoList = recordIndexInfoList::fromMap($map['RecordIndexInfoList']);
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
