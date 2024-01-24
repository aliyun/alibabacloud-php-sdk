<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListEcsSpecsRequest extends Model
{
    /**
     * @example GPU
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @example ecs.g6.large,ecs.g6.xlarge
     *
     * @var string
     */
    public $instanceTypes;

    /**
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ECS
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example Gpu
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'instanceTypes'   => 'InstanceTypes',
        'order'           => 'Order',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceType'    => 'ResourceType',
        'sortBy'          => 'SortBy',
    ];

    public function validate()
    {
    }

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
