<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListDiscoveredResourcesRequest extends Model
{
    /**
     * @var int
     */
    public $endUpdateTimestamp;

    /**
     * @var string
     */
    public $excludeResourceTypes;

    /**
     * @description The maximum number of entries returned for a single request. Valid values: 1 to 100.
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
     * @description The ID of the region where the resource resides. Separate multiple region IDs with commas (,).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regions;

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
     * @description The type of the resource. Separate multiple resource types with commas (,).
     *
     * @example ACS::ECS::NetworkInterface
     *
     * @var string
     */
    public $resourceTypes;

    /**
     * @var int
     */
    public $startUpdateTimestamp;
    protected $_name = [
        'endUpdateTimestamp'   => 'EndUpdateTimestamp',
        'excludeResourceTypes' => 'ExcludeResourceTypes',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'regions'              => 'Regions',
        'resourceDeleted'      => 'ResourceDeleted',
        'resourceId'           => 'ResourceId',
        'resourceTypes'        => 'ResourceTypes',
        'startUpdateTimestamp' => 'StartUpdateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUpdateTimestamp) {
            $res['EndUpdateTimestamp'] = $this->endUpdateTimestamp;
        }
        if (null !== $this->excludeResourceTypes) {
            $res['ExcludeResourceTypes'] = $this->excludeResourceTypes;
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
        if (null !== $this->resourceDeleted) {
            $res['ResourceDeleted'] = $this->resourceDeleted;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }
        if (null !== $this->startUpdateTimestamp) {
            $res['StartUpdateTimestamp'] = $this->startUpdateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDiscoveredResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUpdateTimestamp'])) {
            $model->endUpdateTimestamp = $map['EndUpdateTimestamp'];
        }
        if (isset($map['ExcludeResourceTypes'])) {
            $model->excludeResourceTypes = $map['ExcludeResourceTypes'];
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
        if (isset($map['ResourceDeleted'])) {
            $model->resourceDeleted = $map['ResourceDeleted'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }
        if (isset($map['StartUpdateTimestamp'])) {
            $model->startUpdateTimestamp = $map['StartUpdateTimestamp'];
        }

        return $model;
    }
}
