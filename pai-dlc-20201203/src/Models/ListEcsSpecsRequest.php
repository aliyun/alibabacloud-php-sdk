<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListEcsSpecsRequest extends Model
{
    /**
     * @description Filter by accelerator type. Valid values:
     *
     *   CPU
     *   GPU
     *
     * @example GPU
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @description The instance types to query. Separate the types with commas (,).
     *
     * @example ecs.g6.large,ecs.g6.xlarge
     *
     * @var string
     */
    public $instanceTypes;

    /**
     * @description The sorting order. Valid values:
     *
     *   desc: descending order.
     *   asc: ascending order.
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The number of the page to query. The start value is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the resource. Valid values:
     *
     *   ECS
     *   Lingjun
     *
     * @example ECS
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The field based on which the results are sorted. Valid values:
     *
     *   CPU
     *   GPU
     *   Memory
     *   GmtCreateTime
     *
     * @example Gpu
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'instanceTypes' => 'InstanceTypes',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceType' => 'ResourceType',
        'sortBy' => 'SortBy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEcsSpecsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = $map['InstanceTypes'];
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
