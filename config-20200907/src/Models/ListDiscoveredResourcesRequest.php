<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListDiscoveredResourcesRequest extends Model
{
    /**
     * @description The maximum number of entries to return in a request. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to initiate the subsequent request. If the response to the current request is truncated, this token is used to initiate another request and obtain the remaining entries.``
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
     *   0: The resource is deleted.
     *   1 (default): The resource is retained.
     *
     * @example 1
     *
     * @var int
     */
    public $resourceDeleted;

    /**
     * @description The ID of the resource.
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
    protected $_name = [
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'regions'         => 'Regions',
        'resourceDeleted' => 'ResourceDeleted',
        'resourceId'      => 'ResourceId',
        'resourceTypes'   => 'ResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $model;
    }
}
