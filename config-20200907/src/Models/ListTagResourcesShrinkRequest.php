<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesShrinkRequest extends Model
{
    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJ****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the tag.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource ID.
     *
     * You can add tags to up to 50 resources.
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type. Valid values:
     *
     *   `ACS::Config::Rule`
     *   `ACS::Config::AggregateConfigRule`
     *   `ACS::Config::Aggregator`
     *   `ACS::Config::CompliancePack`
     *   `ACS::Config::AggregateCompliancePack`
     *
     * This parameter is required.
     * @example ACS::Config:rule
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags of the resource.
     *
     * You can add up to 20 tags to a resource.
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagShrink'    => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        return $model;
    }
}
