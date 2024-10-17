<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaRequest extends Model
{
    /**
     * @description The ID of the entity.
     *
     * @example 2d3bf1e35a1e42b5ab338d701efa7603
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The filter conditions. For more information about the parameter syntax
     * <props="china">, see [Media asset search protocols](https://help.aliyun.com/document_detail/2584256.html).
     * @var string
     */
    public $match;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 50.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The pagination identifier. The value can be up to 32 characters in length. The first time you call this operation for each new search, you do not need to specify this parameter. The value of this parameter is returned each time data records that meet the specified filter condition are found. The value is used to record the current position of queried data. Record the returned parameter value and set this parameter according to the following requirements during the next search: If you need to traverse all data that meets the filter criteria, you must set the ScrollToken parameter. If the value of the PageNo parameter exceeds 200, we recommend that you set this parameter to optimize search performance. You can only page backward. You can page a maximum of 1,000 entries in an operation.
     *
     * @example F8C4F642184DBDA5D93907A70AAE****
     *
     * @var string
     */
    public $scrollToken;

    /**
     * @description The search library.
     *
     * @example test-1
     *
     * @var string
     */
    public $searchLibName;

    /**
     * @description The sort field and order. Separate multiple parameters with commas (,).
     *
     * @example utcCreate:Desc, utcModified:Desc
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'entityId'      => 'EntityId',
        'match'         => 'Match',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'scrollToken'   => 'ScrollToken',
        'searchLibName' => 'SearchLibName',
        'sortBy'        => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->match) {
            $res['Match'] = $this->match;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scrollToken) {
            $res['ScrollToken'] = $this->scrollToken;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Match'])) {
            $model->match = $map['Match'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScrollToken'])) {
            $model->scrollToken = $map['ScrollToken'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
