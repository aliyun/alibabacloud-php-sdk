<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListSourceLocationsRequest extends Model
{
    /**
     * @description Specifies whether to ignore source locations marked as deleted. A value of true means ignoring source locations marked as deleted.
     *
     * @example true
     *
     * @var bool
     */
    public $filterState;

    /**
     * @description *   The page number.
     *   Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 20. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sorting order. By default, the query results are sorted by creation time in descending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The sorting order of the source locations based on the time when they were last modified.
     *
     * @example desc
     *
     * @var string
     */
    public $sortByModifiedTime;

    /**
     * @description The name of the source location.
     *
     * @example MySourceLocation
     *
     * @var string
     */
    public $sourceLocationName;
    protected $_name = [
        'filterState'        => 'FilterState',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'sortBy'             => 'SortBy',
        'sortByModifiedTime' => 'SortByModifiedTime',
        'sourceLocationName' => 'SourceLocationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterState) {
            $res['FilterState'] = $this->filterState;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortByModifiedTime) {
            $res['SortByModifiedTime'] = $this->sortByModifiedTime;
        }
        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSourceLocationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterState'])) {
            $model->filterState = $map['FilterState'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortByModifiedTime'])) {
            $model->sortByModifiedTime = $map['SortByModifiedTime'];
        }
        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }

        return $model;
    }
}
