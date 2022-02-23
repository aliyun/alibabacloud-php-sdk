<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListDiscoveredResourcesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regions;

    /**
     * @var int
     */
    public $resourceDeleted;

    /**
     * @var string
     */
    public $resourceId;

    /**
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
