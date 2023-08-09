<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListAggregateResourceRelationsRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * @example ca-856a626622af0033****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The maximum number of entries to return for a single request. Valid values: 1 to 1000.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AcBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region in which the resource resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The type of the relationship between the resource and the object.
     *
     * Valid values:
     *
     *   IsContained: The object is included as part of the resource.
     *
     * <!-- -->
     *
     *   IsAttachedTo: The object is added to the resource.
     *
     * <!-- -->
     *
     *   IsAssociatedIn: The object is associated with the resource.
     *
     * <!-- -->
     *
     *   Contains: The actual value contains the expected value.
     *
     * <!-- -->
     * @example IsAttachedTo
     *
     * @var string
     */
    public $relationType;

    /**
     * @description The ID of the Alibaba Cloud account to which the resources in the account group belong.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $resourceAccountId;

    /**
     * @description The resource ID.
     *
     * @example i-j6cajg9yrfoh4sas****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the resource that is associated with the object.
     *
     * @example d-j6c8k731qbrc7fxi****
     *
     * @var string
     */
    public $targetResourceId;

    /**
     * @description The type of the resource that is associated with the object.
     *
     * @example ACS::ECS::Disk
     *
     * @var string
     */
    public $targetResourceType;
    protected $_name = [
        'aggregatorId'       => 'AggregatorId',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'region'             => 'Region',
        'relationType'       => 'RelationType',
        'resourceAccountId'  => 'ResourceAccountId',
        'resourceId'         => 'ResourceId',
        'resourceType'       => 'ResourceType',
        'targetResourceId'   => 'TargetResourceId',
        'targetResourceType' => 'TargetResourceType',
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->targetResourceId) {
            $res['TargetResourceId'] = $this->targetResourceId;
        }
        if (null !== $this->targetResourceType) {
            $res['TargetResourceType'] = $this->targetResourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateResourceRelationsRequest
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TargetResourceId'])) {
            $model->targetResourceId = $map['TargetResourceId'];
        }
        if (isset($map['TargetResourceType'])) {
            $model->targetResourceType = $map['TargetResourceType'];
        }

        return $model;
    }
}
