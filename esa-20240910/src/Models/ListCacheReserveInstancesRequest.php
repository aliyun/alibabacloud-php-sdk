<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListCacheReserveInstancesRequest extends Model
{
    /**
     * @description The ID of the cache reserve instance.
     *
     * @example sp-xcdn-96wblslz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: **1 to 500**. Default value: **500**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The criterion by which you want to sort the queried instances. Valid values:
     *
     *   ExpireTime: sorts the instances by the time when the instances expire.
     *   CreateTime: sorts the instances by the time when the instances were purchased.
     *
     * @example ExpireTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The order by which you want to sort the queried instances. Valid values:
     *
     *   asc: in ascending order.
     *   desc: in descending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description The status of the cache reserve instance. Valid values:
     *
     *   online: The instance is in service.
     *   offline: The instance has expired within an allowable period. In this state, the plan is unavailable.
     *   disable: The instance is released.
     *   overdue: The instance is stopped due to overdue payments.
     *
     * @example ListCacheReserveInstances
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'sortBy'     => 'SortBy',
        'sortOrder'  => 'SortOrder',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCacheReserveInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
