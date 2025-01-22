<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListSourceLocationsRequest extends Model
{
    /**
     * @var bool
     */
    public $filterState;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var string
     */
    public $sortByModifiedTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
