<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductsAsEndUserRequest\filters;
use AlibabaCloud\Tea\Model;

class ListProductsAsEndUserRequest extends Model
{
    /**
     * @description The filter conditions.
     *
     * @var filters[]
     */
    public $filters;

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
     * Valid values: 1 to 100. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The field that is used to sort the queried data.
     *
     * Set the value to CreateTime, which specifies the time when the product was created.
     * @example CreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The order in which you want to sort the queried data. Valid values:
     *
     *   Asc: the ascending order
     *   Desc: the descending order
     *
     * @example Desc
     *
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'filters'    => 'Filters',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'sortBy'     => 'SortBy',
        'sortOrder'  => 'SortOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListProductsAsEndUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
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
