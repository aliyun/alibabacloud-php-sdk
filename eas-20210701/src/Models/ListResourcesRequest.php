<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ListResourcesRequest extends Model
{
    /**
     * @description The sorting order. Valid values:
     *
     *   Desc
     *   Asc
     *
     * @example Desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 100.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group. You can call the [CreateResource](https://help.aliyun.com/document_detail/412111.html) operation to query the ID of the resource group.
     *
     * @example eas-r-h7lcw24dyqztwxxxxxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the resource group. You can call the [CreateResource](https://help.aliyun.com/document_detail/412111.html) operation to query the name of the resource group.
     *
     * @example MyResource
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The resource group status.
     *
     * @example ResourceReady
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @description The type of the resource group. Valid values:
     *
     *   Dedicated: the dedicated resource group.
     *   SelfManaged: the self-managed resource group.
     *
     * @example Dedicated
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The condition by which the results are sorted. By default, the query results are sorted by the timestamp type in descending order.
     *
     * Valid values:
     *
     *   PrePaidInstanceCount
     *   CpuCount
     *   Memory
     *   CreateTime
     *   PostPaidInstanceCount
     *   MemoryUsed
     *   GpuCount
     *   GpuUsed
     *   CpuUsed
     *   ServiceCount
     *
     * @example CreateTime
     *
     * @var string
     */
    public $sort;
    protected $_name = [
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceStatus' => 'ResourceStatus',
        'resourceType' => 'ResourceType',
        'sort' => 'Sort',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
