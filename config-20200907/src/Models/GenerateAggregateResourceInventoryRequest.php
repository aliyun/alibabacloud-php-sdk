<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GenerateAggregateResourceInventoryRequest extends Model
{
    /**
     * @description The IDs of member accounts in the account group. Separate multiple member account IDs with commas (,).
     *
     * @example 126672004088****
     *
     * @var string
     */
    public $accountIds;

    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-a91d626622af0035****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The IDs of the regions to which the resources belong. Separate multiple region IDs with commas (,).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regions;

    /**
     * @var int
     */
    public $resourceDeleted;

    /**
     * @description The resource types. Separate multiple resource types with commas (,).
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceTypes;
    protected $_name = [
        'accountIds'      => 'AccountIds',
        'aggregatorId'    => 'AggregatorId',
        'regions'         => 'Regions',
        'resourceDeleted' => 'ResourceDeleted',
        'resourceTypes'   => 'ResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->regions) {
            $res['Regions'] = $this->regions;
        }
        if (null !== $this->resourceDeleted) {
            $res['ResourceDeleted'] = $this->resourceDeleted;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateAggregateResourceInventoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            $model->accountIds = $map['AccountIds'];
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['Regions'])) {
            $model->regions = $map['Regions'];
        }
        if (isset($map['ResourceDeleted'])) {
            $model->resourceDeleted = $map['ResourceDeleted'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }

        return $model;
    }
}
