<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListUserRatePlanInstancesRequest extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $checkRemainingSiteQuota;

    /**
     * @example sp-xcdn-96wblslz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 500
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example CreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example asc
     *
     * @var string
     */
    public $sortOrder;

    /**
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
