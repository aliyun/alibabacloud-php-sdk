<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginGroupsResponseBody\groupSummarys;
use AlibabaCloud\Tea\Model;

class DescribePluginGroupsResponseBody extends Model
{
    /**
     * @description Collection of group information
     *
     * @var groupSummarys
     */
    public $groupSummarys;

    /**
     * @description Pagination parameter: current page number
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Pagination parameter: number of items per page, default value 10
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Request ID
     *
     * @example 765BC99E-F583-5A80-9A42-42AC125C2CDC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total number of returned results
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'groupSummarys' => 'GroupSummarys',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupSummarys) {
            $res['GroupSummarys'] = null !== $this->groupSummarys ? $this->groupSummarys->toMap() : null;
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
     * @return DescribePluginGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupSummarys'])) {
            $model->groupSummarys = groupSummarys::fromMap($map['GroupSummarys']);
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
