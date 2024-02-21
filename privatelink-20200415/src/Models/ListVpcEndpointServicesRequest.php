<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListVpcEndpointServicesRequest extends Model
{
    /**
     * @description Specifies whether to automatically accept endpoint connection requests. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $autoAcceptEnabled;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **50**. Default value: **50**.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   If this is your first request and no next requests are to be performed, you do not need to specify this parameter.
     *   If a next request is to be performed, set the parameter to the value of NextToken that is returned from the last call.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the endpoint service.
     *
     * You can call the [DescribeRegions](~~120468~~) operation to query the most recent region list.
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The service resource ID.
     *
     * @example lb-hp32z1wp5peaoox2q****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The service state of the endpoint service. Valid values:
     *
     *   **Normal**: The endpoint service runs as expected.
     *   **FinancialLocked**: The endpoint service is locked due to overdue payments.
     *
     * @example Normal
     *
     * @var string
     */
    public $serviceBusinessStatus;

    /**
     * @description The endpoint service ID.
     *
     * @example epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The name of the endpoint service.
     *
     * @example com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The type of the service resource. Valid values:
     *
     *   **slb**: a Classic Load Balancer (CLB) instance
     *   **alb**: an Application Load Balancer (ALB) instance
     *
     * @example slb
     *
     * @var string
     */
    public $serviceResourceType;

    /**
     * @description The state of the endpoint service. Valid values:
     *
     *   **Creating**: The endpoint service is being created.
     *   **Pending**: The endpoint service is being modified.
     *   **Active**: The endpoint service is available.
     *   **Deleting**: The endpoint service is being deleted
     *
     * @example Active
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @description The list of tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether to first resolve the domain name of the nearest endpoint that is associated with the endpoint service. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $zoneAffinityEnabled;
    protected $_name = [
        'autoAcceptEnabled'     => 'AutoAcceptEnabled',
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceId'            => 'ResourceId',
        'serviceBusinessStatus' => 'ServiceBusinessStatus',
        'serviceId'             => 'ServiceId',
        'serviceName'           => 'ServiceName',
        'serviceResourceType'   => 'ServiceResourceType',
        'serviceStatus'         => 'ServiceStatus',
        'tag'                   => 'Tag',
        'zoneAffinityEnabled'   => 'ZoneAffinityEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoAcceptEnabled) {
            $res['AutoAcceptEnabled'] = $this->autoAcceptEnabled;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->serviceBusinessStatus) {
            $res['ServiceBusinessStatus'] = $this->serviceBusinessStatus;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceResourceType) {
            $res['ServiceResourceType'] = $this->serviceResourceType;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneAffinityEnabled) {
            $res['ZoneAffinityEnabled'] = $this->zoneAffinityEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcEndpointServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoAcceptEnabled'])) {
            $model->autoAcceptEnabled = $map['AutoAcceptEnabled'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ServiceBusinessStatus'])) {
            $model->serviceBusinessStatus = $map['ServiceBusinessStatus'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceResourceType'])) {
            $model->serviceResourceType = $map['ServiceResourceType'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneAffinityEnabled'])) {
            $model->zoneAffinityEnabled = $map['ZoneAffinityEnabled'];
        }

        return $model;
    }
}
