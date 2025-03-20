<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListOriginPoolsRequest extends Model
{
    /**
     * @description Type of name match query, supporting the following two types, with exact match as the default.
     *
     * - fuzzy: Fuzzy query.
     * - exact: Exact query.
     *
     * @example exact
     *
     * @var string
     */
    public $matchType;

    /**
     * @description Name of the origin pool.
     *
     * @example pool1
     *
     * @var string
     */
    public $name;

    /**
     * @description Sorting, supports ascending and descending order by ID, default is descending by ID, which is positively correlated with creation time.
     *
     * - -id: Sort by ID in descending order.
     * - id: Sort by ID in ascending order.
     *
     * @example id
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description Page number, default value is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size, an integer greater than 0, with a maximum of 500. If the value exceeds 500, it will be set to 500.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) API.
     *
     * This parameter is required.
     *
     * @example 151538882642832
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'matchType' => 'MatchType',
        'name' => 'Name',
        'orderBy' => 'OrderBy',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOriginPoolsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
