<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest;

use AlibabaCloud\Tea\Model;

class nodepoolInfo extends Model
{
    /**
     * @description The name of the node pool.
     *
     * The name must be 1 to 63 characters in length, and can contain digits, letters, and hyphens (-). It cannot start with a hyphen (-).
     * @example default-nodepool
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group to which the node pool belongs.
     *
     * @example rg-acfmyvw3wjm****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'name'            => 'name',
        'resourceGroupId' => 'resource_group_id',
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

        return $model;
    }
}
