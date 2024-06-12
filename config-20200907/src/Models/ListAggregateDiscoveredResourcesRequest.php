<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListAggregateDiscoveredResourcesRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-c560626622af0005****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The maximum number of entries to return for a single request. Valid values: 1 to 100.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The `token` that you want to use to initiate the current request. If the response of the previous request is truncated, you can use this token to initiate another request and obtain the remaining entries.
     *
     * @example IWBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region in which the resource resides. Separate multiple region IDs with commas (,).
     *
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regions;

    /**
     * @description The ID of the Alibaba Cloud account to which the specified resource belongs in the account group.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $resourceAccountId;

    /**
     * @description The status of the resource. Valid values:
     *
     *   0: The resource is deleted. If a resource is deleted from the desired cloud service, **Deleted** is displayed in the resource list in the Cloud Config console.
     *   1 (default): The resource is retained. If a resource is managed as expected, **Active** is displayed in the resource list in the Cloud Config console.
     *
     * @example 1
     *
     * @var int
     */
    public $resourceDeleted;

    /**
     * @description The resource ID.
     *
     * @example eni-hp31cqoba96jagtz****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @deprecated
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the resource. Separate multiple resource types with commas (,).
     *
     * @example ACS::ECS::NetworkInterface
     *
     * @var string
     */
    public $resourceTypes;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'regions'           => 'Regions',
        'resourceAccountId' => 'ResourceAccountId',
        'resourceDeleted'   => 'ResourceDeleted',
        'resourceId'        => 'ResourceId',
        'resourceOwnerId'   => 'ResourceOwnerId',
        'resourceTypes'     => 'ResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regions) {
            $res['Regions'] = $this->regions;
        }
        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
        }
        if (null !== $this->resourceDeleted) {
            $res['ResourceDeleted'] = $this->resourceDeleted;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateDiscoveredResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Regions'])) {
            $model->regions = $map['Regions'];
        }
        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
        }
        if (isset($map['ResourceDeleted'])) {
            $model->resourceDeleted = $map['ResourceDeleted'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }

        return $model;
    }
}
