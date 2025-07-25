<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ListServicesRequest extends Model
{
    /**
     * @var bool
     */
    public $autoscalerEnabled;

    /**
     * @var bool
     */
    public $cronscalerEnabled;

    /**
     * @description The field that is used for fuzzy matches. The system performs fuzzy matches only by service name.
     *
     * @example foo
     *
     * @var string
     */
    public $filter;

    /**
     * @description The private gateway ID.
     *
     * @example gw-1uhcqmsc7x22******
     *
     * @var string
     */
    public $gateway;

    /**
     * @description The name of the service group. For more information about how to query the name of a service group, see [ListServices](https://help.aliyun.com/document_detail/412109.html).
     *
     * @example foo
     *
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $includeNoWorkspace;

    /**
     * @description The tag that is used to filter services.
     *
     * @var string[]
     */
    public $label;

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
     * @var string
     */
    public $resourceAliasName;

    /**
     * @var bool
     */
    public $resourceBurstable;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @description The name or ID of the resource group to which the service belongs.
     *
     * @example eas-r-hd0qwy8cxxxx
     *
     * @deprecated
     *
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @description The server role.
     *
     * Valid values:
     *
     *   DataLoader
     *   FrontEnd
     *   DataSet
     *   SDProxy
     *   LLMSscheduler
     *   ScalableJob
     *   LLMGateway
     *   Job
     *   Queue
     *
     * @example LLMGateway
     *
     * @var string
     */
    public $role;

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
     * <!-- -->
     *
     * <!-- -->
     *
     *   Stopped
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Failed
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Complete
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Cloning
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Stopping
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Updating
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Waiting
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   HotUpdate
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Committing
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Starting
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   DeleteFailed
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Running
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Developing
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Scaling
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Deleted
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Pending
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Deleting
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
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
     * <!-- -->
     *
     * <!-- -->
     *
     *   Standard
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   OfflineTask
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Proxima
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
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
        'autoscalerEnabled' => 'AutoscalerEnabled',
        'cronscalerEnabled' => 'CronscalerEnabled',
        'filter' => 'Filter',
        'gateway' => 'Gateway',
        'groupName' => 'GroupName',
        'includeNoWorkspace' => 'IncludeNoWorkspace',
        'label' => 'Label',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'parentServiceUid' => 'ParentServiceUid',
        'quotaId' => 'QuotaId',
        'resourceAliasName' => 'ResourceAliasName',
        'resourceBurstable' => 'ResourceBurstable',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceType' => 'ResourceType',
        'role' => 'Role',
        'serviceName' => 'ServiceName',
        'serviceStatus' => 'ServiceStatus',
        'serviceType' => 'ServiceType',
        'serviceUid' => 'ServiceUid',
        'sort' => 'Sort',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoscalerEnabled) {
            $res['AutoscalerEnabled'] = $this->autoscalerEnabled;
        }
        if (null !== $this->cronscalerEnabled) {
            $res['CronscalerEnabled'] = $this->cronscalerEnabled;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->includeNoWorkspace) {
            $res['IncludeNoWorkspace'] = $this->includeNoWorkspace;
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
        if (null !== $this->resourceAliasName) {
            $res['ResourceAliasName'] = $this->resourceAliasName;
        }
        if (null !== $this->resourceBurstable) {
            $res['ResourceBurstable'] = $this->resourceBurstable;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['AutoscalerEnabled'])) {
            $model->autoscalerEnabled = $map['AutoscalerEnabled'];
        }
        if (isset($map['CronscalerEnabled'])) {
            $model->cronscalerEnabled = $map['CronscalerEnabled'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IncludeNoWorkspace'])) {
            $model->includeNoWorkspace = $map['IncludeNoWorkspace'];
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
        if (isset($map['ResourceAliasName'])) {
            $model->resourceAliasName = $map['ResourceAliasName'];
        }
        if (isset($map['ResourceBurstable'])) {
            $model->resourceBurstable = $map['ResourceBurstable'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
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
