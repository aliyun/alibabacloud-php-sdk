<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListTagOptionsShrinkRequest extends Model
{
    /**
     * @description The filter condition.
     *
     * @var string
     */
    public $filtersShrink;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Valid values: 1 to 100. Minimum value: 1. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The information based on which you want to sort the query results.
     *
     * Set the value to CreateTime, which specifies the creation time of tag options.
     * @example CreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The order in which you want to sort the query results. Valid values:
     *
     *   Asc: the ascending order
     *   Desc (default): the descending order
     *
     * @example Desc
     *
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'filtersShrink' => 'Filters',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'sortBy'        => 'SortBy',
        'sortOrder'     => 'SortOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filtersShrink) {
            $res['Filters'] = $this->filtersShrink;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagOptionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filters'])) {
            $model->filtersShrink = $map['Filters'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}
