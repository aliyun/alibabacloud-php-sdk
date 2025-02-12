<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsRequest\filter;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsRequest\sortBy;

class ListJobsRequest extends Model
{
    /**
     * @var filter
     */
    public $filter;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
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
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        if (null !== $this->sortBy) {
            $this->sortBy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = null !== $this->sortBy ? $this->sortBy->toArray($noStream) : $this->sortBy;
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
