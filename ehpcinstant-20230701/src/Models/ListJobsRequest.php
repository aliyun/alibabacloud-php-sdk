<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsRequest\filter;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsRequest\sortBy;
use AlibabaCloud\Tea\Model;

class ListJobsRequest extends Model
{
    /**
     * @var filter
     */
    public $filter;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 50
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var sortBy
     */
    public $sortBy;
    protected $_name = [
        'filter'     => 'Filter',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'sortBy'     => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = null !== $this->sortBy ? $this->sortBy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = sortBy::fromMap($map['SortBy']);
        }

        return $model;
    }
}
