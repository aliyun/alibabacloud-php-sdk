<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GenerateResourceInventoryRequest extends Model
{
    /**
     * @description The region IDs of the resources. Separate multiple region IDs with commas (,).
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
     * @return GenerateResourceInventoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
