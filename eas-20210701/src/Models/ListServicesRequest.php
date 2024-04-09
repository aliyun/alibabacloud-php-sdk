<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ListServicesRequest extends Model
{
    /**
     * @description {
     * }
     * @example foo
     *
     * @var string
     */
    public $filter;

    /**
     * @example foo
     *
     * @var string
     */
    public $groupName;

    /**
     * @var string[]
     */
    public $label;

    /**
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description 376577
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example eas-m-ijafy3c8cxxxx
     *
     * @var string
     */
    public $parentServiceUid;

    /**
     * @example quota12345
     *
     * @var string
     */
    public $quotaId;

    /**
     * @example eas-r-hd0qwy8cxxxx
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example echo_test
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @example Standard
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example eas-m-c9iw3yitxxxx
     *
     * @var string
     */
    public $serviceUid;

    /**
     * @example CreateTime
     *
     * @var string
     */
    public $sort;

    /**
     * @example 123456
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'filter'           => 'Filter',
        'groupName'        => 'GroupName',
        'label'            => 'Label',
        'order'            => 'Order',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'parentServiceUid' => 'ParentServiceUid',
        'quotaId'          => 'QuotaId',
        'resourceName'     => 'ResourceName',
        'serviceName'      => 'ServiceName',
        'serviceStatus'    => 'ServiceStatus',
        'serviceType'      => 'ServiceType',
        'serviceUid'       => 'ServiceUid',
        'sort'             => 'Sort',
        'workspaceId'      => 'WorkspaceId',
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
        if (null !== $this->parentServiceUid) {
            $res['ParentServiceUid'] = $this->parentServiceUid;
        }
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->serviceUid) {
            $res['ServiceUid'] = $this->serviceUid;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
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
        if (isset($map['ParentServiceUid'])) {
            $model->parentServiceUid = $map['ParentServiceUid'];
        }
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['ServiceUid'])) {
            $model->serviceUid = $map['ServiceUid'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
