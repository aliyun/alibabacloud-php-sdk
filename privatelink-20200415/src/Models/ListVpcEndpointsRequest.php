<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListVpcEndpointsRequest extends Model
{
    /**
     * @description The state of the endpoint connection. Valid values:
     *
     *   **Pending**: The endpoint connection is being modified.
     *   **Connecting**: The endpoint connection is being established.
     *   **Connected**: The endpoint connection is established.
     *   **Disconnecting**: The endpoint is being disconnected from the endpoint service.
     *   **Disconnected**: The endpoint is disconnected from the endpoint service.
     *   **Deleting**: The connection is being deleted.
     *   **ServiceDeleted**: The corresponding endpoint service has been deleted.
     *
     * @example Disconnected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description The ID of the endpoint.
     *
     * @example ep-hp33b2e43fays7s8****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The name of the endpoint.
     *
     * @example test
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The state of the endpoint. Valid values:
     *
     *   **Creating**: The endpoint is being created.
     *   **Active**: The endpoint is available.
     *   **Pending**: The endpoint is being modified.
     *   **Deleting**: The endpoint is being deleted.
     *
     * @example Active
     *
     * @var string
     */
    public $endpointStatus;

    /**
     * @description The type of the endpoint.
     *
     * Set the value to **Interface**. Then, you can specify Application Load Balancer (ALB) and Classic Load Balancer (CLB) instances as service resources for the endpoint service.
     * @example Interface
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The number of entries returned on each page.
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
     *   If a next request is to be performed, set the parameter to the value of **NextToken** that is returned from the last call.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the endpoint.
     *
     * This parameter is required.
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example 1
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the endpoint service with which the endpoint is associated.
     *
     * @example com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The list of tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the VPC to which the endpoint belongs.
     *
     * @example vpc-fdjkf789dfdfdfde****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'endpointId'       => 'EndpointId',
        'endpointName'     => 'EndpointName',
        'endpointStatus'   => 'EndpointStatus',
        'endpointType'     => 'EndpointType',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'regionId'         => 'RegionId',
        'resourceGroupId'  => 'ResourceGroupId',
        'serviceName'      => 'ServiceName',
        'tag'              => 'Tag',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->endpointStatus) {
            $res['EndpointStatus'] = $this->endpointStatus;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
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
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcEndpointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['EndpointStatus'])) {
            $model->endpointStatus = $map['EndpointStatus'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
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
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
