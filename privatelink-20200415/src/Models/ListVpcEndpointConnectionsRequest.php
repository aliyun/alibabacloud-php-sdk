<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class ListVpcEndpointConnectionsRequest extends Model
{
    /**
     * @description The ID of the endpoint connection.
     *
     * > This parameter is required only when a gateway is used for load balancing.
     * @example 123
     *
     * @var int
     */
    public $connectionId;

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
     * @description The endpoint ID.
     *
     * @example ep-hp33b2e43fays7s8****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID of the Alibaba Cloud account to which the endpoint belongs.
     *
     * @example 25346073170691****
     *
     * @var int
     */
    public $endpointOwnerId;

    /**
     * @description The ID of the endpoint elastic network interface (ENI).
     *
     * @example eni-hp32lk0pyv6o94hs****
     *
     * @var string
     */
    public $eniId;

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
     *   If a next request is to be performed, set the value to the value of **NextToken** that is returned from the last call.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the endpoint connection.
     *
     * You can call the [DescribeRegions](~~120468~~) operation to query the most recent region list.
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the replaced service resource in smooth migration scenarios.
     *
     * @example lb-hp32z1wp5peaoox2q****
     *
     * @var string
     */
    public $replacedResourceId;

    /**
     * @description The ID of the resource group to which the endpoint belongs.
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
     * @description The endpoint service ID.
     *
     * @example epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'connectionId'       => 'ConnectionId',
        'connectionStatus'   => 'ConnectionStatus',
        'endpointId'         => 'EndpointId',
        'endpointOwnerId'    => 'EndpointOwnerId',
        'eniId'              => 'EniId',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'regionId'           => 'RegionId',
        'replacedResourceId' => 'ReplacedResourceId',
        'resourceGroupId'    => 'ResourceGroupId',
        'resourceId'         => 'ResourceId',
        'serviceId'          => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointOwnerId) {
            $res['EndpointOwnerId'] = $this->endpointOwnerId;
        }
        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
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
        if (null !== $this->replacedResourceId) {
            $res['ReplacedResourceId'] = $this->replacedResourceId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcEndpointConnectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointOwnerId'])) {
            $model->endpointOwnerId = $map['EndpointOwnerId'];
        }
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
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
        if (isset($map['ReplacedResourceId'])) {
            $model->replacedResourceId = $map['ReplacedResourceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
