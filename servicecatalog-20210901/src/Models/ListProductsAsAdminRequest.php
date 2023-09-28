<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductsAsAdminRequest\filters;
use AlibabaCloud\Tea\Model;

class ListProductsAsAdminRequest extends Model
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
     * @description The ID of the product portfolio.
     *
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @description The query scope. Valid values:
     *
     *   Local: the products that are created by using the current account. This is the default value.
     *   Import: the products that are imported from other accounts.
     *   All: all available products.
     *
     * @example Local
     *
     * @var string
     */
    public $scope;

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
        'filters'     => 'Filters',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'portfolioId' => 'PortfolioId',
        'scope'       => 'Scope',
        'sortBy'      => 'SortBy',
        'sortOrder'   => 'SortOrder',
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
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
     * @return ListProductsAsAdminRequest
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
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
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
