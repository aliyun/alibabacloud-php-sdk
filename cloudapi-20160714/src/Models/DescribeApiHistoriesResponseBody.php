<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoriesResponseBody\apiHisItems;
use AlibabaCloud\Tea\Model;

class DescribeApiHistoriesResponseBody extends Model
{
    /**
     * @description The ID of the API.
     *
     * @var apiHisItems
     */
    public $apiHisItems;

    /**
     * @description The number of entries returned per page.
     *
     * @example 3
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The returned API information. It is an array consisting of ApiHisItem data.
     *
     * @example 15
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ003
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether an API version is effective. Valid values: ONLINE and OFFLINE.
     *
     * @example 32
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiHisItems' => 'ApiHisItems',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiHisItems) {
            $res['ApiHisItems'] = null !== $this->apiHisItems ? $this->apiHisItems->toMap() : null;
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
     * @return DescribeApiHistoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiHisItems'])) {
            $model->apiHisItems = apiHisItems::fromMap($map['ApiHisItems']);
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
