<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ListServiceInstancesRequest extends Model
{
    /**
     * @example 10.118.xx.xx
     *
     * @var string
     */
    public $filter;

    /**
     * @example 10.224.xx.xx
     *
     * @var string
     */
    public $hostIP;

    /**
     * @example 10.224.xx.xx
     *
     * @var string
     */
    public $instanceIP;

    /**
     * @example foo-bdc5xxxx-8l7rk
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example ecs.c7.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example false
     *
     * @var bool
     */
    public $isSpot;

    /**
     * @description The sorting order.
     *
     * Valid values:
     *
     *   asc: The instances are sorted in ascending order.
     *
     * <!-- -->
     *
     *   desc
     *
     * <!-- -->
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
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example PublicResource
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example Queue
     *
     * @var string
     */
    public $role;

    /**
     * @example StartTime
     *
     * @var string
     */
    public $sort;
    protected $_name = [
        'filter'         => 'Filter',
        'hostIP'         => 'HostIP',
        'instanceIP'     => 'InstanceIP',
        'instanceName'   => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'instanceType'   => 'InstanceType',
        'isSpot'         => 'IsSpot',
        'order'          => 'Order',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'resourceType'   => 'ResourceType',
        'role'           => 'Role',
        'sort'           => 'Sort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->hostIP) {
            $res['HostIP'] = $this->hostIP;
        }
        if (null !== $this->instanceIP) {
            $res['InstanceIP'] = $this->instanceIP;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isSpot) {
            $res['IsSpot'] = $this->isSpot;
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
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['HostIP'])) {
            $model->hostIP = $map['HostIP'];
        }
        if (isset($map['InstanceIP'])) {
            $model->instanceIP = $map['InstanceIP'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsSpot'])) {
            $model->isSpot = $map['IsSpot'];
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
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
