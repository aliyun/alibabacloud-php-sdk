<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListLoadBalancersRequest extends Model
{
    /**
     * @description The name matching strategy when querying by name:
     *
     * - fuzzy: Fuzzy match;
     * - exact: Exact match, equivalent to an equality query.
     *
     * @example fuzzy
     *
     * @var string
     */
    public $matchType;

    /**
     * @description The name of the load balancer, which can be used to query by name.
     *
     * @example lb.example.com
     *
     * @var string
     */
    public $name;

    /**
     * @description The sorting field. Currently, only sorting by id is supported. \\"id\\" indicates ascending order by id, and \\"-id\\" indicates descending order by id. The id size is positively correlated with the creation time. If not provided, it defaults to descending order by id.
     *
     * @example id
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number for paginated queries.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page size for paginated queries, with a value range of 1-500.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The site ID, which can be obtained by calling the [ListSites](~~ListSites~~) API.
     *
     * This parameter is required.
     *
     * @example 21655860979****
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
     * @return ListLoadBalancersRequest
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
