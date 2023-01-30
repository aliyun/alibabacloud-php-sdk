<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetItemListResponseBody\datasetItemInfoList;
use AlibabaCloud\Tea\Model;

class DescribeDatasetItemListResponseBody extends Model
{
    /**
     * @var datasetItemInfoList[]
     */
    public $datasetItemInfoList;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

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
     * @example C6E9C6E4-608B-5C0F-9783-E288********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'datasetItemInfoList' => 'DatasetItemInfoList',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetItemInfoList) {
            $res['DatasetItemInfoList'] = [];
            if (null !== $this->datasetItemInfoList && \is_array($this->datasetItemInfoList)) {
                $n = 0;
                foreach ($this->datasetItemInfoList as $item) {
                    $res['DatasetItemInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatasetItemListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetItemInfoList'])) {
            if (!empty($map['DatasetItemInfoList'])) {
                $model->datasetItemInfoList = [];
                $n                          = 0;
                foreach ($map['DatasetItemInfoList'] as $item) {
                    $model->datasetItemInfoList[$n++] = null !== $item ? datasetItemInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
