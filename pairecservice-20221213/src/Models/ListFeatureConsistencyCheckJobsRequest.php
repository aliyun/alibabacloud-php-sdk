<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class ListFeatureConsistencyCheckJobsRequest extends Model
{
    /**
     * @example pairec-cn-********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'order'      => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'sortBy'     => 'SortBy',
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
        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureConsistencyCheckJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
