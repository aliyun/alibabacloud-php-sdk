<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListSourcesRequest extends Model
{
    /**
     * @description Specifies whether to ignore sources marked as deleted.
     *
     * @example true
     *
     * @var bool
     */
    public $filterState;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The sorting order. By default, the query results are sorted by creation time in descending order. Valid values: asc and desc.
     *
     * @example asc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The sorting order by modification time. Valid values: asc and desc.
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

    /**
     * @description The name of the source.
     *
     * @example MyVodSource
     *
     * @var string
     */
    public $sourceName;

    /**
     * @description The source type. Valid values: vodSource and liveSource.
     *
     * @example vodSource
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'filterState'        => 'FilterState',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'sortBy'             => 'SortBy',
        'sortByModifiedTime' => 'SortByModifiedTime',
        'sourceLocationName' => 'SourceLocationName',
        'sourceName'         => 'SourceName',
        'sourceType'         => 'SourceType',
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
        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSourcesRequest
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
        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
