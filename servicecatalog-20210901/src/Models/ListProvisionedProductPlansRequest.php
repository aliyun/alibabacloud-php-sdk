<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansRequest\filters;
use AlibabaCloud\Tea\Model;

class ListProvisionedProductPlansRequest extends Model
{
    /**
     * @description The access filter. Valid values:
     *
     *   User (default): queries the plans that are created by the current requester.
     *   Account: queries the plans that belong to the current Alibaba Cloud account.
     *   ResourceDirectory: queries the plans that belong to the current resource directory.
     *
     * @example User
     *
     * @var string
     */
    public $accessLevelFilter;

    /**
     * @description The access filter of the review dimension. Valid values:
     *
     *   ReceivedRequests: queries plans that are pending for review.
     *   ApprovalHistory: queries review history.
     *   AccountRequests: queries all plans that belong to the current Alibaba Cloud account.
     *   AccountRequests: queries all plans that belong to the current Alibaba Cloud account.
     *
     * @example ReceivedRequests
     *
     * @var string
     */
    public $approvalFilter;

    /**
     * @description An array that consists of filter conditions.
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
     * Valid values: 1 to 100. Minimum value: 1. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the product instance.
     *
     * @example pp-bp1ddg1n2a****
     *
     * @var string
     */
    public $provisionedProductId;

    /**
     * @description The information based on which you want to sort the query results.
     *
     * Set the value to CreateTime, which specifies the creation time of plans.
     * @example CreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The order in which you want to sort the query results. Valid values:
     *
     *   Asc: the ascending order
     *   Desc (default): the descending order.
     *
     * @example Desc
     *
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'accessLevelFilter'    => 'AccessLevelFilter',
        'approvalFilter'       => 'ApprovalFilter',
        'filters'              => 'Filters',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'provisionedProductId' => 'ProvisionedProductId',
        'sortBy'               => 'SortBy',
        'sortOrder'            => 'SortOrder',
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
        if (null !== $this->approvalFilter) {
            $res['ApprovalFilter'] = $this->approvalFilter;
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
        if (null !== $this->provisionedProductId) {
            $res['ProvisionedProductId'] = $this->provisionedProductId;
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
     * @return ListProvisionedProductPlansRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLevelFilter'])) {
            $model->accessLevelFilter = $map['AccessLevelFilter'];
        }
        if (isset($map['ApprovalFilter'])) {
            $model->approvalFilter = $map['ApprovalFilter'];
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
        if (isset($map['ProvisionedProductId'])) {
            $model->provisionedProductId = $map['ProvisionedProductId'];
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
