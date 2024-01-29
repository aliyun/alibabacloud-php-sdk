<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateDiscoveredResourceRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * For more information about how to obtain the ID of the account group, see [ListAggregators](~~255797~~).
     * @example ca-5885626622af0008****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the region in which the resource resides.
     *
     * For more information about how to query the ID of a region in which the resource resides, see [ListAggregateDiscoveredResources](~~411691~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the Alibaba Cloud account to which the resources in the account group belong.
     * > You can use either the `ResourceAccountId` or `ResourceOwnerId` parameter. We recommend that you use the ResourceAccountId parameter.
     * @example 100931896542****
     *
     * @var int
     */
    public $resourceAccountId;

    /**
     * @description The resource ID.
     *
     * For more information about how to query the ID of a resource, see [ListAggregateDiscoveredResources](~~411691~~).
     * @example new-bucket
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
     * @description The type of the resource.
     *
     * For more information about how to obtain the type of a resource, see [ListAggregateDiscoveredResources](~~411691~~).
     * @example ACS::OSS::Bucket
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'region'            => 'Region',
        'resourceAccountId' => 'ResourceAccountId',
        'resourceId'        => 'ResourceId',
        'resourceOwnerId'   => 'ResourceOwnerId',
        'resourceType'      => 'ResourceType',
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateDiscoveredResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
