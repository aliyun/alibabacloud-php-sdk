<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ListServicesShrinkRequest extends Model
{
    /**
     * @description The field that is used for fuzzy matches. The system performs fuzzy matches only by service name.
     *
     * @example foo
     *
     * @var string
     */
    public $filter;

    /**
     * @description The name of the service group. For more information about how to query the name of a service group, see [ListServices](https://help.aliyun.com/document_detail/412109.html).
     *
     * @example foo
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The tag that is used to filter services.
     *
     * @var string
     */
    public $labelShrink;

    /**
     * @description The sorting order. Valid values:
     *
     *   desc (default): The query results are sorted in descending order.
     *   asc: The query results are sorted in ascending order.
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the primary service that corresponds to the Band member service.
     *
     * @example eas-m-ijafy3c8cxxxx
     *
     * @var string
     */
    public $parentServiceUid;

    /**
     * @description The quota ID.
     *
     * @example quota12345
     *
     * @var string
     */
    public $quotaId;

    /**
     * @description The name or ID of the resource group to which the service belongs.
     *
     * @example eas-r-hd0qwy8cxxxx
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The service name.
     *
     * @example echo_test
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The service state.
     *
     * Valid values:
     *
     *   Creating
     *
     * <!-- -->
     *
     *   Stopped
     *
     * <!-- -->
     *
     *   Failed
     *
     * <!-- -->
     *
     *   Complete
     *
     * <!-- -->
     *
     *   Cloning
     *
     * <!-- -->
     *
     *   Stopping
     *
     * <!-- -->
     *
     *   Updating
     *
     * <!-- -->
     *
     *   Waiting
     *
     * <!-- -->
     *
     *   HotUpdate
     *
     * <!-- -->
     *
     *   Committing
     *
     * <!-- -->
     *
     *   Starting
     *
     * <!-- -->
     *
     *   DeleteFailed
     *
     * <!-- -->
     *
     *   Running
     *
     * <!-- -->
     *
     *   Developing
     *
     * <!-- -->
     *
     *   Scaling
     *
     * <!-- -->
     *
     *   Deleted
     *
     * <!-- -->
     *
     *   Pending
     *
     * <!-- -->
     *
     *   Deleting
     *
     * <!-- -->
     * @example Running
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @description The service type. Valid values:
     *
     *   Async
     *   Standard
     *   Offline Task
     *   Proxima
     *
     * Valid values:
     *
     *   Async
     *
     * <!-- -->
     *
     *   Standard
     *
     * <!-- -->
     *
     *   OfflineTask
     *
     * <!-- -->
     *
     *   Proxima
     *
     * <!-- -->
     * @example Standard
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The user ID (UID) of the service.
     *
     * @example eas-m-c9iw3yitxxxx
     *
     * @var string
     */
    public $serviceUid;

    /**
     * @description The sort field. By default, the query results are sorted by the timestamp type in descending order.
     *
     * @example CreateTime
     *
     * @var string
     */
    public $sort;

    /**
     * @description The workspace ID.
     *
     * @example 123456
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'filter'           => 'Filter',
        'groupName'        => 'GroupName',
        'labelShrink'      => 'Label',
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
        if (null !== $this->labelShrink) {
            $res['Label'] = $this->labelShrink;
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
     * @return ListServicesShrinkRequest
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
            $model->labelShrink = $map['Label'];
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
