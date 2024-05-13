<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\Nodepool;

use AlibabaCloud\Tea\Model;

class nodepoolInfo extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example np-test
     *
     * @var string
     */
    public $name;

    /**
     * @example rg-acfmyvw3wjm****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example ess
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'            => 'name',
        'resourceGroupId' => 'resource_group_id',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodepoolInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
