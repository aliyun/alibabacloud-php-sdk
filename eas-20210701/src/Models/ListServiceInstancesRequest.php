<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ListServiceInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $hostIP;

    /**
     * @var string
     */
    public $instanceIP;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isSpot;

    /**
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
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $role;

    /**
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
