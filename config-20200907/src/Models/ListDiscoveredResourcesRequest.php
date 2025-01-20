<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
