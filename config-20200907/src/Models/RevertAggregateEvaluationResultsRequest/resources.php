<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\RevertAggregateEvaluationResultsRequest;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The ID of the region where the resource resides.
     *
     * For more information about how to obtain the ID of a region, see [ListAggregateDiscoveredResources](~~265983~~).
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * > You must specify the ID of the current management account or a member account in the account group of the management account.
     * @example 120886317861****
     *
     * @var int
     */
    public $resourceAccountId;

    /**
     * @description The resource ID.
     *
     * For more information about how to query the ID of a resource, see [ListAggregateDiscoveredResources](~~265983~~).
     * @example lb-hp3a3b4ztyfm2plgm****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of resource.
     *
     * For more information about how to obtain the type of a resource, see [ListAggregateDiscoveredResources](~~265983~~).
     * @example ACS::SLB::LoadBalancer
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'region'            => 'Region',
        'resourceAccountId' => 'ResourceAccountId',
        'resourceId'        => 'ResourceId',
        'resourceType'      => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
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

        return $model;
    }
}
