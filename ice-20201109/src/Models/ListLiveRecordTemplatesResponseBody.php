<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponseBody\recordTemplateList;
use AlibabaCloud\Tea\Model;

class ListLiveRecordTemplatesResponseBody extends Model
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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The list of recording templates.
     *
     * @var recordTemplateList[]
     */
    public $recordTemplateList;

    /**
     * @description The request ID.
     *
     * @example BEA98A0C-7870-15FE-B96F-8880BB600A2C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The sorting order. By default, the query results are sorted by creation time in descending order.
     *
     * Valid values:
     *
     *   asc: sorts the query results in ascending order.
     *   desc: sorts the query results in descending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The total number of entries returned.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'recordTemplateList' => 'RecordTemplateList',
        'requestId' => 'RequestId',
        'sortBy' => 'SortBy',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recordTemplateList) {
            $res['RecordTemplateList'] = [];
            if (null !== $this->recordTemplateList && \is_array($this->recordTemplateList)) {
                $n = 0;
                foreach ($this->recordTemplateList as $item) {
                    $res['RecordTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveRecordTemplatesResponseBody
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
        if (isset($map['RecordTemplateList'])) {
            if (!empty($map['RecordTemplateList'])) {
                $model->recordTemplateList = [];
                $n = 0;
                foreach ($map['RecordTemplateList'] as $item) {
                    $model->recordTemplateList[$n++] = null !== $item ? recordTemplateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
