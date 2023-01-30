<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetListResponseBody\datasetInfoList;
use AlibabaCloud\Tea\Model;

class DescribeDatasetListResponseBody extends Model
{
    /**
     * @var datasetInfoList[]
     */
    public $datasetInfoList;

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
     * @example D403C6E6-21B3-5B78-82DA-E3B6********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned entries.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'datasetInfoList' => 'DatasetInfoList',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetInfoList) {
            $res['DatasetInfoList'] = [];
            if (null !== $this->datasetInfoList && \is_array($this->datasetInfoList)) {
                $n = 0;
                foreach ($this->datasetInfoList as $item) {
                    $res['DatasetInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDatasetListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetInfoList'])) {
            if (!empty($map['DatasetInfoList'])) {
                $model->datasetInfoList = [];
                $n                      = 0;
                foreach ($map['DatasetInfoList'] as $item) {
                    $model->datasetInfoList[$n++] = null !== $item ? datasetInfoList::fromMap($item) : $item;
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
