<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductsRequest\filters;
use AlibabaCloud\Tea\Model;

class ListProvisionedProductsRequest extends Model
{
    /**
     * @description The access filter. Valid values:
     *
     *   User: queries the product instances that are created by the current requester. This is the default value.
     *   Account: queries the product instances that belong to the current Alibaba Cloud account.
     *
     * @example User
     *
     * @var string
     */
    public $accessLevelFilter;

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
     * Set the value to CreateTime, which specifies the time when the product instance was created.
     * @example CreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The sorting method. Valid values:
     *
     *   Asc: the ascending order.
     *   Desc (default): the descending order.
     *
     * @example Desc
     *
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'accessLevelFilter' => 'AccessLevelFilter',
        'filters'           => 'Filters',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'sortBy'            => 'SortBy',
        'sortOrder'         => 'SortOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevelFilter) {
            $res['AccessLevelFilter'] = $this->accessLevelFilter;
        }
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
     * @return ListProvisionedProductsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLevelFilter'])) {
            $model->accessLevelFilter = $map['AccessLevelFilter'];
        }
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
