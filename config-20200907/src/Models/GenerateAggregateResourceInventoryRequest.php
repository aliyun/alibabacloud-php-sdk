<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GenerateAggregateResourceInventoryRequest extends Model
{
    /**
     * @example 126672004088****
     *
     * @var string
     */
    public $accountIds;

    /**
     * @example ca-a91d626622af0035****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regions;

    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceTypes;
    protected $_name = [
        'accountIds'    => 'AccountIds',
        'aggregatorId'  => 'AggregatorId',
        'regions'       => 'Regions',
        'resourceTypes' => 'ResourceTypes',
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
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }

        return $model;
    }
}
