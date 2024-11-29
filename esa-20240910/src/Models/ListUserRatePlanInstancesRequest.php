<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListUserRatePlanInstancesRequest extends Model
{
    /**
     * @description Specifies whether to query only the plans that have remaining quota for associating websites. Valid values:
     *
     *   true: queries only the plans that have remaining quota for associating websites.
     *   false: queries all plans in your account.
     *
     * @example true
     *
     * @var string
     */
    public $checkRemainingSiteQuota;

    /**
     * @description The plan ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * @example sp-xcdn-96wblslz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number. Valid values: **1** to **100000**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 500
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $remainingExpireDays;

    /**
     * @description The sorting field. By default, the queried plans are sorted by purchase time. Valid values:
     *
     *   CreateTime: the time when the plans were purchased.
     *   ExpireTime: the time when the plans expire.
     *
     * @example CreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The order in which you want to sort the query results. Default value: desc. Valid values:
     *
     *   asc: in ascending order.
     *   desc: in descending order.
     *
     * @example asc
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description The plan status. Valid values:
     *
     *   online: The plan is in service.
     *   offline: The plan has expired within an allowable period. In this state, the plan is unavailable.
     *   disable: The plan is released.
     *   overdue: The plan is stopped due to overdue payments.
     *
     * @example online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'checkRemainingSiteQuota' => 'CheckRemainingSiteQuota',
        'instanceId'              => 'InstanceId',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'remainingExpireDays'     => 'RemainingExpireDays',
        'sortBy'                  => 'SortBy',
        'sortOrder'               => 'SortOrder',
        'status'                  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkRemainingSiteQuota) {
            $res['CheckRemainingSiteQuota'] = $this->checkRemainingSiteQuota;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remainingExpireDays) {
            $res['RemainingExpireDays'] = $this->remainingExpireDays;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserRatePlanInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckRemainingSiteQuota'])) {
            $model->checkRemainingSiteQuota = $map['CheckRemainingSiteQuota'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RemainingExpireDays'])) {
            $model->remainingExpireDays = $map['RemainingExpireDays'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
