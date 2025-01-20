<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class GenerateAggregateResourceInventoryRequest extends Model
{
    /**
     * @var string
     */
    public $accountIds;
    /**
     * @var string
     */
    public $aggregatorId;
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
